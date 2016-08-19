<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
/**
 * @developer Rayvn Manuel
 * TECHNICAL PORTFOLIO - Bureau of Labor Statistics | Concept Site
 * @copyright 2016
 * @fileName services.inc
 * @purpose File contains various functions that fetches web-based data e.g. APIs, WebPages, Web Services from 3rd Party Sources
 *
 */

/**
 * BLS API DATA
 * v2.0 Registration Keys
 * $blsDataAPIKey_r2coder = "f9ff433d35e3422c8bb2cee65f73aa12"; //r2coder
 * $blsDataAPIKey_rayvnkm7 = "19801a9815ab4cdcac840482d9c52b95"; //rayvnkm7@gmail
 * $blsDataAPIKey_the31girl =a1e16e13d3c744dcaa3d28af1270a931. | the31girl@gmail
 * Replicates homepage LATEST NUMBERS content
 */

/**
 * @FUNCTION [HARDCODED] h_createBLSAPIQuery()
 * @purpose Hard-coded with BLS API Signature
 * @param none
 * @return array|mixed
 */
function h_createBLSAPIQuery(){

    /**
     *  //SERIES:
     * Consumer Price Index - All Urban Consumers |  CUSR0000SA0
     * Unemployment Rate  | LNS14000000
     * Payroll Employment |  CES0000000001
     * Average Hourly | CES0500000002
     * Producer Price Index - Final Demand | WPSFD4
     * Employment Cost Index | CIS1010000000000Q || Quarterly
     * Productivity | PRS85006092 || Quarterly
     * US Imports |  EIUIR
     * US Exports |  EIUIQ
     */

    $blsDataAPIKey_rayvnkm7 = "19801a9815ab4cdcac840482d9c52b95"; //rayvnkm7@gmail
    $startYear = 2016;
    $endYear = 2016;
    $bool_calculations = TRUE;
    $bool_annualAverage = TRUE;
    $seriesArray = array('CUSR0000SA0', 'LNS14000000', 'CES0500000002', 'CES0000000001', 'WPSFD4', 'CIS1010000000000Q','PRS85006092','EIUIR', 'EIUIQ');


    //CREATES THE URL QUERY STRING
    $apiQuery = array(
        'seriesid' => $seriesArray,
        'startyear' => $startYear,
        'endyear' => $endYear,
        'registrationKey' => $blsDataAPIKey_rayvnkm7,
        'calculations' => $bool_calculations,
        'annualaverage' => $bool_annualAverage
    );

return $apiQuery;
}

/**
 * @FUNCTION OVERLOAD [almost but not really - need to make a class //TODO
 * [DYNAMIC] d_createBLSAPIQuery()
 * @purpose Generic call to the API that captures data via some input mechanism/form
 * - just case there's a need for this functionality
 * @param:
 *  BLS registration key - if trying to use v2 API Signatures
 * Series Start Year
 * Series End Year
 * Series ID(s) - takes one or more
 * OPTIONAL: Do you want to have access to the net_changes or pct_changes - then say yes [TRUE]
 * OPTIONAL: Do you want to have access to the averages for the series - then say yes [TRUE]
 * @return array|mixed
 */
function d_createBLSAPIQuery(
        $registrationKey,
        $startYear,
        $endYear,
        $seriesIDArray,
        $calculations=FALSE,
        $averages = FALSE
        )
{

    $inputData = array(
        $registrationKey,
        $startYear,
        $endYear,
        $seriesIDArray
    );

    $errors = array();

    //Validates input
    foreach($inputData as $key => $value){
        $errors = validateData($value);
    }

    //Error message to display on screen and then exits
   if(!empty($errors)){
       print "<pre>";
       print_r($errors);
       print "</pre>";
       exit();
   }

    /**
     *  //SERIES:
     * Consumer Price Index - All Urban Consumers |  CUSR0000SA0
     * Unemployment Rate  | LNS14000000
     * Payroll Employment |  CES0000000001
     * Average Hourly | CES0500000002
     * Producer Price Index | WPSFD4
     * Employment Cost Index | CIU1010000000000A || Need to parse separately
     * US Imports |  EIUIR
     * US Exports |  EIUIQ
     */

    //CREATES THE URL QUERY STRING
    $apiQuery = array(
        'seriesid' => $seriesIDArray,
        'startyear' => $startYear,
        'endyear' => $endYear,
        'registrationKey' => $registrationKey,
        'calculations' => $calculations,
        'annualaverage' => $averages
    );

    return $apiQuery;
}

/**
 * @FUNCTION getBLSAPIObj()
 * @purpose
 * Internally calls createBLSAPIQuery for BLS API Signature
 * Parses through queryString and returns JsonObj
 * @param none
 * @return array|mixed
 */
function getBLSAPIObj(){

    $query = h_createBLSAPIQuery();

    //Initializing variables so IDE stops complaining
    $error_messages = array();
    $jsonObj = array();


    $method = 'POST';
    $apiURL = 'http://api.bls.gov/publicAPI/v2/timeseries/data/';


    //TRY - Checks for errors creating array or some other anomaly
   //If it fails logs to error message for display later

    try {
        $json_file = json_encode($query);
    }catch(Exception $exFile){
        $error_messages -> $exFile-> getMessage();
    }

    $contentType = 'Content-Type: application/json';
    $contentLength = 'Content-Length: ' . strlen($json_file);

    //CREATES THE HTTPHeader Info
    $queryResults = file_get_contents(
        $apiURL, null, stream_context_create(
            array(
                'http'=>array(
                'method'=> $method,
                'header'=> $contentType ."\r\n".$contentLength. "\r\n",
                'content'=> $json_file
                ),
            )
        )
    );//end of queryResults


    /**
    * TRY - Checks for errors retrieving data
    * If it fails CATCHES error ane logs to an array for display later
    * If all goes well - creates a JSONObj
    */
    try{

        /****
        !IMPORTANTE!
        The preg_replace catches random characters that may be present in the file.
        Without it - json_decode breaks and returns a null object.
         **/

        $jsonObj = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $queryResults), TRUE);
    }catch(Exception $exFile){
        $error_messages -> $exDecode->getMessage();
    }

    //So - lets go ahead and print that there is at least one message
    // If the array is empty - all is well; if its not - all is not well
    if(isset($error_messages)== FALSE){
        echo "Sorry - Encountered issue(s). Resolve to continue <br />";
        print "<pre>";
        //print_r($error_messages);
        print "/pre>";
        exit();
    }else{

        return $jsonObj;
    }

}//END getBlsAPIObj

/**
 * @FUNCTION printBLSResponse()
 * @purpose
 * Internally calls getBLSAPIObj() for BLS API Signature
 * Parses through queryString and returns JsonObj
 * @param none
 * @return array|mixed
 */
function printBLSResponse(){

    $file = $_SERVER['DOCUMENT_ROOT']."data/series_list.ini";

    $blsJsonObj = getBLSAPIObj();
    //$seriesConfig = parseDataFile($file);

    print "<pre>";
    //print_r($seriesConfig);
    print "</pre>";


    foreach($blsJsonObj['Results']['series'] as $keys => $values){
       //echo 'Key: '.$keys." | Value: ".$values.'<br /> ';
        $dataArray = array($keys => $values);
        print "<pre>";
       print_r($dataArray[$keys]['seriesID']);
       //print_r($dataArray[$keys]['data'][0]);
        print "</pre>";

        foreach($dataArray[$keys]['data'][0] as $key => $value){

            //echo 'Key: '.$key." | Value: ".$value.'<br /> ';



        }//end INNER FOREACH

       echo "Year: ".$dataArray[$keys]['data'][0]['year']. "<br />";
        echo "Month: ".$dataArray[$keys]['data'][0]['periodName']. "<br />";
        echo "Value: ".$dataArray[$keys]['data'][0]['value']. "<br />";
        echo "Calculation by Month: ".$dataArray[$keys]['data'][0]['calculations']['pct_changes'][1]. "<br />";
        echo "Calculation by Month: ".$dataArray[$keys]['data'][0]['calculations']['pct_changes'][3]. "<br />";
        echo "Calculation by Month: ".$dataArray[$keys]['data'][0]['calculations']['pct_changes'][12]. "<br />";
        echo "<br /><br />";


        }//end OUTER FOREACH




}



/**
 * @FUNCTION parseDataFile($data)
 * @purpose
 * UTILITY  | Takes a JSON string and converts to JSONObj
 * This is could be done simply - but
 * @param none
 * @return array|mixed
 */
function parseDataFile($data){
    $error_message = array();
    //echo "Message is of type: ". gettype($error_message)."<br />";


//TRY - Fetch file and convert to string
//If it fails log error to error message.
    try{
        $json_file = html_entity_decode(file_get_contents($data));

    }   //catch exception
    catch(Exception $exFile) {
        $error_message -> $exFile->getMessage();
    }

    /****
    !IMPORTANTE!
    The preg_replace catches random characters that may be present in the file.
    Without it - json_decode breaks and returns a null object.
     **/

    try{
        $jsonObj = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json_file), TRUE );
        print "<pre>";
        //print_r($jsonObj);
        print "</pre>";
    }
    catch(Exception $exDecode){
        $error_message -> $exDecode->getMessage();
    }

    if(empty($error_message)){
        //echo "WHEW! There are no errors!";
    }
    else {
        echo "Oooops! We gots errors!";
        print_r($error_message);
    }
  //
    return $jsonObj;


}//end of function parseWebServiceFle