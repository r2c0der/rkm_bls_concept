<?php
/**
 * @developer Rayvn Manuel
 * @purpose TECHNICAL PORTFOLIO - Bureau of Labor Statistics | Concept Site
 * @copyright 2016
 * @fileName utilies.inc
 */

/**
 * @FUNCTION getStateConfigList()
 * @purpose Just captures the .ini file with the states listed as
 * stateAbbreviations => stateName
 * @returns stringObj
 */
function getStateConfigList(){
    return ("./data/state_list.ini");
}

/**
 * @FUNCTION validateData()
 * @purpose
 * Sanitizes and Validates input from outside source via PHP Filters (when possible)
 * @param mixed objects/datatypes
 * @return mixed objects/datatypes
 */
function validateData($variable){
    $error_messages = array();
    $type = '';


    if(is_string($variable)){
        $type = 's';
    }
    if(is_url($variable)){
        $type = 'u';
    }
    if(is_array($variable)){
        $type = 'a';
    }

    switch ($type){
        case 's':
            $string = filter_var($variable, FILTER_SANITIZE_STRING);
            if(!(preg_match('/^[A-Za-z0-9]+$/', $string))){
                array_push($error_messages, "ERROR: STRING INPUT: ".$string." Unable to process request");
                return $error_messages;
            }else{
                return $string;
            }
            break;
        case 'u':
            $url = filter_var($variable, FILTER_SANITIZE_URL);
            if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                array_push($error_messages, "URL: ".$url." not a valid URL");
                return $error_messages;
            } else {
                return $url;
            }
            break;
        case 'a':
            if(!(is_array($variable))||(empty($variable))){
                array_push($error_messages, "Array: ".$variable." not a valid Array");
                return $error_messages;
            }else{
                return $variable;
            }
            break;
        default:
            return $error_messages;
            break;

    }


}


/**
 * @FUNCTION createSelectOptions()
 * @purpose
 * - Parses a configuration file
 * - Extracts data into an listArray
 * - Creates a select menu
 * @param .ini file key->value pair
 * @return mixed objects/datatypes
 */
function createSelectOptions($list){

    $listArray = parse_ini_file($list, true);

    print('<select class="form-control single_select" name="state">');
    print ('<option class="state_list" id="state_code">Select a State</option>');
    foreach($listArray as $states){
        foreach($states as $key => $value){

            if(!isset($_POST['state_code'])){

                $_POST['state_code'] = 'DC';
                print("<option value='DC' selected='selected' class ='list_items'>District of Columbia</option>");

            }elseif(($_POST['state_code']!== null) && ($_POST['state_code']==$key)){
                print("<option value='$key' selected='selected' class ='list_items'>".ucwords(strtolower($value))."</option>");
            } else{
                print("<option value='$key' class ='list_items'>".ucwords((strtolower($value)))."</option>");
            }

        }
    }


    print("</select>");

}