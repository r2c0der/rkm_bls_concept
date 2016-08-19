<?php
/**
 * @developer Rayvn Manuel
 * TECHNICAL PORTFOLIO - Bureau of Labor Statistics | Concept Site
 * @copyright 2016
 * @fileName dbAdapter.inc
 * @purpose File contains various functions that fetches data from a DB
 *
 */
function dbConnection(){

    //Credentials
    $srv = 'localhost';
    $user = '';
    $pass = '';
    $port = ;
    $db = '';


    //mysqli_connect
    $dbConn = new mysqli($srv, $user, $pass, $db, $port);

    /* check connection */
    if ($dbConn->connect_errno) {
        printf("<h3> <i class='fa fa-exclamation-triangle' aria-hidden='true'  style='color:#800000;'></i> Failed to connect to MySQL:</h3>%s\n", $dbConn->connect_errno. ' | '. $dbConn->connect_error);
        exit();
    }
    print'<h3><i class="fa fa-check-square-o " aria-hidden="true" style="color:#008000;"></i> Connected successfully</h3>';

    //Create query string
    $queryString = "";
    $queryString .= "";


    //Perform the query

    if (!$result = $dbConn->query($queryString)){

        die('There was an error running the query [' . $dbConn->error . ']');

    }


    if ($result->num_rows === 0) {
        // 
        echo "Sorry - no data matches your query";
        exit;
    } else {
        $output = '';
        while($row = $result->fetch_assoc()){
            foreach($row as $key => $value) {
                $output .= $key . ' => '. $value. '<br />';
            }
            $output .=  '<br />';

        }
        print $output;


    }



}


function dbMYSQLConnection(){

     //Credentials
    $srv = 'localhost';
    $user = '';
    $pass = '';
    $port = ;
    $db = '';


    //mysqli_connect
    $dbMYSQLConn = new mysqli($srv, $user, $pass, $db, $port);

    /* check connection */
    if ($dbMYSQLConn->connect_errno) {
        printf("<h3> <i class='fa fa-exclamation-triangle' aria-hidden='true'  style='color:#800000;'></i> Failed to connect to MySQL:</h3>%s\n", $dbMYSQLConn->connect_errno. ' | '. $dbMYSQLConn->connect_error);
        exit();
    }
    print'<h3><i class="fa fa-check-square-o " aria-hidden="true" style="color:#008000;"></i> Connected successfully</h3>';



}


function dbPDOConnection(){


     //Credentials
    $srv = 'localhost';
    $user = '';
    $pass = '';
    $port = ;
    $db = '';


    try{
        $dbPDOConn = new PDO("mysql:dbname=$db;host=$srv;port=$port;charset=utf8", $user, $pass);

        // set the PDO error mode to exception
        $dbPDOConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print'<h3><i class="fa fa-check-square-o " aria-hidden="true" style="color:#008000;"></i> Connected successfully</h3>';


    }catch(PDOException $ex){

        printf("<h3> <i class='fa fa-exclamation-triangle' aria-hidden='true'  style='color:#800000;'></i> Failed to connect to database:</h3>%s\n", $ex->getMessage());
        exit();
    }


    return $dbPDOConn;



}
