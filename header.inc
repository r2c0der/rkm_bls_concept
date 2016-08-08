<?php
/**
* @developer Rayvn Manuel
* @purpose r2wGames.com
* @copyright 2016
* @fileName header.inc
*/

function printHeader(){
$header_output = '';
$header_output .='


    <!-- Custom CSS -->
       
      <link href="styles/freelancer.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/ui-darkness/jquery-ui.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

        <link href="styles/r2wg_core.less" rel="stylesheet/less" />
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->


    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans|Pacifico|Architects+Daughter|Shadows+Into+Light+Two|Just+Another+Hand|Gochi+Hand|Rancho|Ceviche+One|Londrina+Solid|Press+Start+2P|Love+Ya+Like+A+Sister|Englebert|Mouse+Memoirs|Rum+Raisin|Ranchers|Give+You+Glory|Over+the+Rainbow|Tillana:400,500,600" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

';


print $header_output;


}