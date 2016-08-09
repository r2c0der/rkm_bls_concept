<?php
/**
 * @developer Rayvn Manuel
 * TECHNICAL PORTFOLIO - Bureau of Labor Statistics | Concept Site
 * @copyright 2016
 * @fileName rkm_bls_homepage.inc
 * @purpose File contains the blocks which make up the homepage
 */

/**
 * @FUNCTION displayHeader()
 * @purpose
 * Removes the clutter from head element
 * @param none
 */
function displayHeader(){
    $header_output = '';
    $header_output .='
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" />
   <link rel="stylesheet" type="application/x-navimap" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css.map" />
    <link rel="stylesheet"  type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/ui-darkness/jquery-ui.css" media="screen"/>
 


    <!-- WEBFONT LIBRARIES -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC|Source+Sans+Pro" rel="stylesheet">
    <!-- Optional theme -->
    <link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet/less" href="css/rkm_bls_core.less" type="text/css" />
    
  <!-- FRONT-LOADING JS LIBRARIES -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

   

';

    print $header_output;


}

/**
 * @FUNCTION displayPageTop()
 * @purpose Prints out the TopBar and NavBar
 * @param none
 */
function displayPageTop(){

    $headerBar='';
    $headerBar .='
    <header class="rkm_bls_header">
        <!-- DOL | NAVBAR ROW -->
        <div class="row rkm_bls_header-topbar">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rkm_bls_header-topbar--logo">
                    <span class="rkm_bls_header-topbar--title">
                        <img src="assets/logos/USDOL_Seal_circa_2015.svg" width="35" />
                UNITED STATES DEPARTMENT OF LABOR </span>
                </div>  <!-- ./HEADER TOPBAR DOL-->
                <div class="col-lg-6 col-md-6 rkm_bls_header-topbar--nav">
                <h5>NAVIGATION</h5>
                </div>  <!-- ./HEADER TOPBAR NAVIGATION -->
        </div> <!-- ./HEADER TOPBAR DOL/NAV ROW -->

    <!-- BLS | SEARCH ROW -->
    <div class="row rkm_bls_header-identity">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rkm_bls_header-identity--logo">
                <span class="rkm_bls_header-identity--title">
                  <img src="assets/logos/Bureau_of_labor_statistics_logo.svg" width="75" />
                <span id=\'bls\'> Bureau of Labor Statistics</span>
                </span>
            </div> <!-- ./HEADER IDENTITY LOGO & TITLE COL -->

        <div class="col-lg-2 col-md-5 col-sm-12 col-xs-12 offset-sm-6 offset-xs-6 rkm_bls_header-search">
   <h5>SEARCH</h5>
        </div>   <!-- ./HEADER IDENTITY SEARCHBOX COL -->
    </div>  <!-- ./HEADER BLS/SEARCH ROW -->

</header> <!-- ./BLS | HEADER -->
    ';

    print $headerBar;

}


/**
 * @FUNCTION displayMainContent()
 * @purpose Prints out the Main Content Areas
 * @param none
 */


/**
 * @FUNCTION displayResources()
 * @purpose Prints out the TopBar and NavBar
 * @param none
 */