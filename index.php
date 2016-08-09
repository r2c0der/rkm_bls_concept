<!DOCTYPE html>
<html lang="en">
<?php
session_start();
define ("PAGE_TITLE", "BLS Responsive Concept Site");
include_once  'inc/utilies.inc';
include_once 'inc/services.inc';
include_once 'inc/rkm_bls_homepage.inc';

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo PAGE_TITLE ?></title>
<link rel="icon" type="image/ico" href="favicon_white_224.png" />

    <?php echo displayHeader(); ?>

    <!--- SCRIPTEES -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/2.1.0/retina.min.js" async></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js" async></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" async></script>
    <script type="text/javascript" src="js/rkm_bls_app.js" async></script>
    <script type="text/javascript">
        printBLSName();
        });
    </script>

</head>

<body>

<!--  BLS | HEADER -->
<header>
        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top rkm_bls_header-topbar--nav cbp-af-header" role="navigation"">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#rkm_bls_header-topbar--collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <span class="rkm_bls_topbar-dol rkm_bls_topbar-logo--dol rkm_bls_topbar-title--dol">
            <a href=https://www.dol.gov/" target="_blank" class="rkm_bls_topbar-anchor--dol" title="US Department of Labor"> <img src="assets/logos/USDOL_Seal_circa_2015.svg" width="45" class="rkm_bls_topbar-logo--dol"/><span id="dol">UNITED STATES DEPARTMENT OF LABOR </span></a></span>

            <span class="rkm_bls_topbar-bls rkm_bls_topbar-logo--bls rkm_bls_topbar-title--bls">
            <a class="rkm_bls_header-topbar--anchor" href="#" title="Bureau of Labor Statistics">
            <img src="assets/logos/Bureau_of_labor_statistics_logo.svg" width="50" class="rkm_bls_topbar-logo--bls"/> <span id="bls_top">BUREAU OF LABOR STATISTICS</span></a> </span>

            </div> <!-- /.NAVBAR - NAVBAR-HEADER -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="rkm_bls_header-topbar--collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Search</a></li>
            <li><a href="#">Data Tools</a></li>
            <li><a href="#">Publications</a></li>
            <li><a href="#">Economic Releases </a></li>
            <li><a href="#">Students </a></li>
            <li><a href="#">Beta </a></li>
            </ul>

            <ul class="dropdown-menu">
            <li><a href="#">Subjects</a></li>
            <li><a href="#">Data Tools</a></li>
            <li><a href="#">Publications</a></li>
            <li><a href="#">Economic Releases </a></li>
            <li><a href="#">Students </a></li>
            <li><a href="#">Beta </a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
            </div> <!-- /.NAVBAR - CONTAINER FLUID -->
        </nav> <!-- /.NAV NAVBAR -->


        <!-- BLS |  BLS SEARCHBAR ROW  -->
    <div class="container-fluid">
        <div class="row rkm_bls_searchbar-identity">
        <span class="rkm_bls_search-bls rkm_bls_search-logo--bls rkm_bls_search-title--bls ">
        <a class="rkm_bls_header-search--anchor" href="http://bls.gov" title="Bureau of Labor Statistics">
        <img src="assets/logos/Bureau_of_labor_statistics_logo.svg" width="75" class="rkm_bls_searchbar-logo--bls"/> <span id="bls_search">BUREAU OF LABOR STATISTICS</span> </a> </span>

        </div> <!-- BLS | BLS SEARCHBAR ROW -->
    </div> <!-- BLS | CONTAINER-FLUID BLS SEARCHBAR  -->

</header> <!-- ./BLS | HEADER -->

<!--  BLS | FEATURED | CONTAINER -->

<div class="container-fluid">
<!-- BLS | FEATURED -->
<div class="row rkm_bls_featured">
<!-- SECTION | FEATURED PRESS RELEASES -->
<section class="col-lg-7 col-md-7 rkm_bls_featured-releases">
<div class="panel panel-default rkm_bls_releases-daily">
<div class="panel-heading rkm_bls_releases-daily--heading">PRESS RELEASES</div>
<div class="panel-body rkm_bls_releases-daily--body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum lectus ante, quis congue lacus suscipit sit amet. In enim felis, blandit a convallis nec, commodo et lectus. Sed hendrerit tortor ut tellus hendrerit, ut semper quam blandit. In ac odio dui. Proin sollicitudin, eros aliquam scelerisque iaculis, arcu quam vehicula purus, quis interdum metus metus vitae mi. Morbi ut purus sit amet quam accumsan volutpat condimentum in ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer a accumsan neque.</p>
<ul class="list-group rkm_bls_releases-daily--archives">
    <li class="list-group-item"><?php  echo date("F j, Y", strtotime( "-3 days" ) ); ?>
        |  <a href="#" title="Archive Link 1"> June jobless rates down over the year in 285 of 387 metro areas; payroll jobs up in 329 </a></li>

    <li class="list-group-item"><?php  echo date("F j, Y", strtotime( "-9 days" ) ); ?>
        | <a href="#" title="Archive Link 2"> Compensation costs up 0.6% Mar 2016-June 2016 and up 2.3% over the year ending June </a></li>
    <li class="list-group-item">


    <li class="list-group-item"><?php  echo date("F j, Y", strtotime( "-11 days" ) ); ?>
        | <a href="#" title="Archive Link 3"> Gross job gains 7.8 million and gross job losses 6.8 million in the 4th quarter of 2015 </a></li>

    <li class="list-group-item"><?php  echo date("F j, Y", strtotime( "-16 days" ) ); ?>
        | <a href="#" title="Archive Link 4"> Gross job gains 7.8 million and gross job losses 6.8 million in the 4th quarter of 2015 </a></li>
</ul>
</div> <!-- ./PANEL - PRESS RELEASE | BODY -->
</div>

</section>
<!-- ./SECTION | FEATURED PRESS RELEASES -->
<!-- SECTION | FEATURED MONTHLY LABOR REVIEW -->
<section class="col-lg-5 col-md-5 rkm_bls_featured-review">
    <!-- ARTICLE | WCAG -->
    <div class="rkm_bls_wcag">
    <span class="rkm_bls_wcag-icons">
<i class="fa fa-text-height fa-2x rkm_bls_wcag-icon--1 sr-only" title="Enlarge Font"></i>
<i class="fa fa-text-height fa-lg rkm_bls_wcag-icon--2" aria-hidden="true"></i>
<i class="fa fa-text-height   rkm_bls_wcag-icon--3" aria-hidden="true"  ></i>
<i class="fa fa-print fa-lg rkm_bls_wcag-icon--4" aria-hidden="true"></i>
    </span>
    </div>
<div class="panel panel-default rkm_bls_review-monthlylabor">
<div class="panel-heading rkm_bls_review-monthlylabor--heading">MONTHLY LABOR REVIEW</div>
<div class="panel-body rkm_bls_releases-daily--body"><p>Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
</div> <!-- ./PANEL BODY | MONTHLY LABOR -->
</div> <!-- ./PANEL - MONTHLY LABOR | BODY -->

    <!-- ARTICLE | SOCIAL MEDIA -->
    <div class="rkm_bls_article-socialmedia">
    <span class="rkm_bls_socialmedia-icons">
      <a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter fa-2x rkm_bls_socialmedia-icon" aria-hidden="true"></i></a>
       <a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook fa-2x rkm_bls_socialmedia-icon" aria-hidden="true"></i></a>
          <a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin fa-2x rkm_bls_socialmedia-icon" aria-hidden="true"></i></a>
    </span>
    </div>
</section>
<!-- ./SECTION | FEATURED MONTHLY REVIEW-->
</div>  <!--  ./BLS | FEATURED | CONTAINER -->


<!--./ BLS | FEATURED -->
</div> <!--  ./BLS | FEATURED | CONTAINER -->

<!--  BLS | MAIN CONTENT | CONTAINER-FLUID -->
<div class="container-fluid">
<!-- MAIN CONTENT | GEOGRAPHIC INFORMATION ROW -->
    <div class="row rkm_bls_section-info--data">

        <!---- BEGIN COLUMN1 -->
        <div class="col-lg-6 col-md-6 rkm_bls_section--col1" >
            <!---- ROW | BLS API DATA -->
            <div class="row">
                <div class="col-lg-12 col-md-12  rkm_bls_section-info--blsapi">
                    <div class="panel panel-default rkm_bls_section-blsapi">
                        <div class="panel-heading  rkm_bls_section-blsapi--heading">BLS API DATA</div>
                        <div class="panel-body  rkm_bls_section-blsapi--body"><p>
                                Webtwo ipsum dolor sit amet, eskobo chumby doostang bebo. Zillow zimbra trulia voki loopt zimbra yuntaa lanyrd stypi cotweet jabber joukuu, kosmix flickr yammer zapier divvyshot jumo ngmoco lala divvyshot wufoo scribd. Lanyrd skype zoosk quora joost edmodo orkut, imeem diigo etsy odeo waze wikia, imvu quora chegg koofers stypi. Geni kazaa nuvvo heekya eskobo mozy convore sococo joost trulia hojoki chartly zynga empressr zynga, tumblr akismet etsy reddit imvu yammer voxy eduvant zanga kaboodle zoho diigo trulia. Chartly bebo chegg heroku kiko grockit plaxo, jibjab kippt xobni bebo lijit knewton, appjet zoho kazaa joukuu woopra                  </p>
                        </div> <!-- ./PANEL BODY | BLS API -->
                    </div> <!-- ./PANEL - BLS API | BODY -->
                </div>  <!-- ./MAIN CONTENT | BLS API COL -->
            </div> <!---- ./ROW | BLS API DATA -->
            <!---- ROW | REGIONAL HOME PAGES -->
            <div class="row">
                <!-- MAIN CONTENT | REGIONAL HOMEPAGES -->
                <div class="col-lg-12 col-md-12  rkm_bls_section-info--regional">
                    <div class="panel panel-default rkm_bls_section-regional">
                        <div class="panel-heading  rkm_bls_section-regional--heading">REGIONAL HOMEPAGES</div>
                        <div class="panel-body  rkm_bls_section-regional--body"><p>
                                BLS offers many types of data for regions, states and local areas. To browse for available information, visit the regional pages to the right or use the economic news release finder below.</p>
                            <p>
                            <div class="row">
                                <div class="col-lg-12 col-md-2 form">
                                    <form class="form-horizontal state_data-select form-inline" role="form"  action="index.php" method="post">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-12 ">
                                                <?php createSelectOptions(getStateConfigList())   ?>
                                            </div> <!--- ./FORM | FORM GROUP - STATES SELECT LIST  COL-->
                                        </div><!--- ./FORM| FORM GROUP - STATE SELECT LIST -->

                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" name="btn_submit" class="btn btn-default">GO!</button>
                                                <input type="hidden" name="action" value="state" />
                                            </div>
                                        </div><!-- ./form-group submit button -->
                                    </form><!--- ./FORM | FORM GROUP - STATES -->

                                    <form class="form-horizontal topic_data-select form-inline rkm_bls_form-topic" role="form"  action="index.php" method="post">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-12">
                                                <select class="form-control rkm_bls_topic-list">
                                                    <optgroup label="Employment and Unemployment">
                                                        <option value="Employment and Unemployment">
                                                            Employment and Unemployment
                                                        </option>
                                                        <option value="/regions/subjects/employment.htm">
                                                            Employment
                                                        </option>
                                                        <option value="/regions/subjects/unemployment.htm">
                                                            Unemployment
                                                        </option>
                                                    </optgroup>
                                                    <optgroup label="Inflation, Prices, and Spending"">
                                                    <option value="Inflation, Prices, and Spending">
                                                        Inflation, Prices, and Spending
                                                    </option>
                                                    <option value="/regions/subjects/average-energy-prices.htm">
                                                        Average energy prices
                                                    </option>
                                                    <option value="/regions/subjects/consumer-price-indexes.htm">
                                                        Consumer price indexes
                                                    </option>
                                                    <option value="/regions/subjects/consumer-spending.htm">
                                                        Consumer spending
                                                    </option>
                                                    <option value="/regions/subjects/industry-price-indexes.htm">
                                                        Industry price indexes
                                                    </option>
                                                    </optgroup>
                                                    <optgroup label="Pay and Benefits">
                                                        <option value="Pay and Benefits">
                                                            Pay and Benefits
                                                        </option>
                                                        <option  value="/regions/subjects/benefits.htm">
                                                            Benefits
                                                        </option>
                                                        <option  value="/regions/subjects/pay.htm">
                                                            Pay
                                                        </option>
                                                        </optgroup>
                                                    <optgroup label="Workplace Injuries and Illnesses">
                                                        <option  value="/regions/subjects/workplace-fatalities.htm">
                                                            Workplace fatalities
                                                        </option>
                                                        <option value="/regions/subjects/workplace-injuries-and-illnesses.htm">
                                                            Workplace injuries and illnesses
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div> <!--- ./FORM | FORM GROUP -LIST ITEMS COL-->
                                        </div> <!--- ./FORM | FORM GROUP - SUBJECT -->
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" name="btn_submit" class="btn btn-default">GO!</button>
                                                <input type="hidden" name="action" value="subject" />
                                            </div>
                                        </div><!-- ./form-group submit button -->
                                    </form>
                                </div><!-- ./DIV form -->
                            </div> <!-- ./DIV row -->
                            </p>
                        </div> <!-- ./PANEL BODY | REGIONAL HOME PAGES-->
                    </div> <!-- ./PANEL - DEFAULT | REGIONAL HOME PAGES -->
                </div>  <!-- ./MAIN CONTENT | REGIONAL HOMEPAGES COL -->
            </div><!---- ROW | REGIONAL HOME PAGES -->
 </div> <!---- ./COLUMN ONE | REGIONAL HOME PAGES -->

        <!---- COLUMN TWO | REGIONAL HOME PAGES -->
        <div class="col-lg-6 col-md-6 rkm_bls_section--col2" >
            <div class="col-lg-12 col-md-12 rkm_bls_section-info--geo">
                <div class="panel panel-default rkm_bls_section-geo">
                    <div class="panel-heading  rkm_bls_section-geo--heading">REGIONAL INFORMATION</div>
                    <div class="panel-body  rkm_bls_section-geo--body">
                        <img src="assets/images/geographic_info/accordion/bls_region_newyork_newjersey.png" class="img-responsive rkm_bls_section-geo--img"/>
                    </div> <!-- ./PANEL BODY | BLS API -->
                </div> <!-- ./PANEL - BLS API | BODY -->
            </div>  <!-- ./MAIN CONTENT | GEO INFO COL -->
        </div> <!----./ COLUMN TWO | REGIONAL HOME PAGES -->
    </div>   <!-- ./MAIN CONTENT | GEOGRAPHIC INFORMATION ROW -->

</div>   <!--  ./BLS | MAIN CONTENT | CONTAINER-FLUID -->

<!--  BLS | TOPICS | CONTAINER-FLUID -->
<div class="container-fluid">
    <!-- MAIN CONTENT | API DATA & INFORMATION ROW-->
    <div class="row rkm_bls_section-info--api">

    <!--  BLS | SUBJECTS | COL1 -->
 <div class="col-lg-3 col-md-3 rkm_bls_subjects-col1">
     <!--  BLS | NUMBERS | ROW1 -->
<div class="row rkm_bls_subjects-numbers--row1">
    <!-- MAIN CONTENT | API FEED COL-->
    <div class="col-lg-12 col-md-12 rkm_bls_section-api">
        <div class="panel panel-default rkm_bls_section-api">
            <div class="panel-heading  rkm_bls_section-api--heading">LATEST NUMBERS</div>
            <div class="panel-body  rkm_bls_section-api--body">
                <ul>
                    <li>
                        <a href="http://www.bls.gov/news.release/cpi.toc.htm"
                           target="_blank" title="Consumer Price Index">
                            Consumer Price Index (CPI):</a><br />
                        <span id="cpi" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/empsit.toc.htm"
                           target="_blank" title="Unemployment Rate">
                            Unemployment Rate:</a><br />
                        <span id="empsit_rate" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/empsit.toc.htm"
                           target="_blank" title="Payroll Employment">
                            Payroll Employment:</a><br />
                        <span id="empsit_pay" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/empsit.toc.htm"
                           target="_blank" title="Average Hourly">
                            Average Hourly:</a><br />
                        <span id="empsit_hourly" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/ppi.toc.htm"
                           target="_blank" title="Producer Price Index">
                            Producer Price Index:</a><br />
                        <span id="ppi" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/eci.toc.htm"
                           target="_blank" title="Economic Index">
                            Economic Index:</a><br />
                        <span id="eci" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/prod2.toc.htm"
                           target="_blank" title="Productivity">
                            Productivity:</a><br />
                        <span id="prod" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/ximpim.toc.htm"
                           target="_blank" title=" US Import Price Index">
                            US Import Price Index:</a><br />
                        <span id="ximpim" class="rkm_bls_section-api--item"></span></li>
                    <li>
                        <a href="http://www.bls.gov/news.release/ximpim.toc.htm"
                           target="_blank" title=" US Export Price Index">
                            US Export Price Index:</a><br />
                        <span id="xempim" class="rkm_bls_section-api--item"></span></li>
                </ul>
            </div> <!-- ./PANEL BODY | BLS API -->
        </div> <!-- ./PANEL - BLS API | DEFAULT PANEL -->
    </div>  <!-- ./MAIN CONTENT | API  COL -->

    <div class=" col-lg-12 col-md-12 rkm_bls_section-featured--items">
        <!-- BLS | OCCUPATIONAL HANDBOOK -->
        <div class="rkm_bls_article-handbook" >
            <div class="panel panel-default rkm_bls_review-monthlylabor">
                <div class="panel-body rkm_bls_releases-daily--body">
                    <a href="http://www.bls.gov/ooh/" target="_blank" title="Occupational Outlook Handbook" ><img src="assets/graphics/BLS_OccupationalHandbook_v2.png" class="img-responsive rkm_bls_article-handbook--img"/></a></div>
            </div>
        </div>
    </div> <!-- ./ BLS | OCCUPATIONAL HANDBOOK -->

</div><!--  BLS | NUMBERS | ROW1 -->
     <!--  BLS | HANDBOOK | ROW2 -->
     <div class="row rkm_bls_subjects-numbers--row2">

     </div><!--  BLS | HANDBOOK | ROW2 -->
 </div>  <!--  ./BLS | SUBJECTS | COL1 -->

        <!--  BLS | SUBJECTS | COL2 -->
<div class="col-lg-9 col-md-9 rkm_bls_subjects-col2">
    <!-- MAIN CONTENT | INFORMATION SECTION ROW-1 -->
    <div class="row  rkm_bls_section-info  rkm_bls_section-info--row-1">

        <!-- MAIN | ECONOMIC COL -->
        <div class="col-lg-4 col-md-4 rkm_bls_section-info--economics">
            <div class="panel panel-default rkm_bls_section-economic">
                <div class="panel-heading  rkm_bls_section-economic--heading">THE ECONOMICS DAILY</div>
                <div class="panel-body  rkm_bls_section-economic--body">
                    <ul>
                        <li> So chicory, caramelization, beans carajillo shop eu aged white.</li>
                        <li>Macchiato, french press, siphon viennese roast extra arabica and coffee milk roast. </li>
                        <li>Mazagran pumpkin spice, single origin cream body fair trade caffeine..</li>
                        <li> Redeye, milk espresso id so, grounds robust milk skinny aroma affogato beans.</li>
                    </ul>
                </div>
            </div>

        </div> <!-- ./MAIN | ECONOMIC COL -->

        <!-- MAIN | PUBLICATIONS COL -->
        <div class="col-lg-4 col-md-4  rkm_bls_section-info--publications">
            <div class="panel panel-default rkm_bls_section-publications">
                <div class="panel-heading  rkm_bls_section-publications--heading">PUBLICATIONS</div>
                <div class="panel-body  rkm_bls_section-publications--body">
                    <ul>
                        <li>Introduce a little anarchy, upset the established order and everything becomes chaos.  </li>
                        <li>You're taller than you look in the tabIoids, Mr. Wayne.</li>
                        <li>Didn't you think there might be casualties? Things always get worse before they get better.</li>
                        <li>I never wanted you to come back to Gotham.</li>
                    </ul>
                </div>
            </div>
        </div><!-- ./MAIN | PUBLICATIONS COL -->
        <!-- MAIN | TOPICS COL -->
        <div class="col-lg-4 col-md-4 rkm_bls_section-info--topics">
            <div class="panel panel-default rkm_bls_section-topics">
                <div class="panel-heading  rkm_bls_section-topics--heading">TOPICS</div>
                <div class="panel-body  rkm_bls_section-topics--body">
                    <ul>
                        <li>Keel run a rig hempen halter splice the main brace pink careen gabion.  </li>
                        <li>Scuttle lee broadside chase guns ballast draught draft.</li>
                        <li>Aye shrouds trysail poop deck salmagundi square-rigged main sheet..</li>
                        <li>Pirate gally ballast jury mast crack Jennys tea cup bilged on her anchor swab.</li>
                    </ul>
                </div>
            </div>
        </div><!-- ./MAIN | TOPICS COL -->
    </div>  <!-- MAIN CONTENT | INFORMATION SECTION TOP ROW-1 -->
    <!-- MAIN CONTENT | INFORMATION SECTION ROW-2 -->
    <!-- MAIN CONTENT | INFORMATION SECTION ROW-2 -->
    <div class="row  rkm_bls_section-info  rkm_bls_section-info--row-2">
        <!-- MAIN | RESOURCES COL -->
        <div class="col-lg-4 col-md-4  rkm_bls_section-info--resources">
            <div class="panel panel-default rkm_bls_section-resources">
                <div class="panel-heading  rkm_bls_section-topics--heading">RESOURCES</div>
                <div class="panel-body  rkm_bls_section-resources--body">
                    <ul>
                        <li>Leverage agile frameworks to provide a robust synopsis for high level overviews. . </li>
                        <li>Bring to the table win-win survival strategies to ensure proactive domination.</li>
                        <li>User generated content in real-time will have multiple touchpoints for offshoring..</li>
                        <li>Capitalise on low hanging fruit to identify a ballpark value added activity to beta test.</li>
                    </ul>
                </div>
            </div>
        </div> <!-- ./MAIN |RESOURCES COL -->

        <!-- MAIN | CAREERS COL -->
        <div class="col-lg-4 col-md-4  rkm_bls_section-info--careers">
            <div class="panel panel-default rkm_bls_section-careers">
                <div class="panel-heading  rkm_bls_section-topics--heading">CAREERS</div>
                <div class="panel-body  rkm_bls_section-careers--body">
                    <ul>
                        <li>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De  </li>
                        <li>Hi mindless mortuis soulless creaturas, imo evil stalking monstra  </li>
                        <li>Nigh tofth eliv ingdead.</li>
                        <li>Qui tardius moveri, brid eof reanimator sed in magna copia sint terribiles </li>
                    </ul>
                </div>
            </div>
        </div> <!-- ./MAIN | CAREERS COL -->
        <!-- MAIN | MORE INFO COL -->
        <div class="col-lg-4 col-md-4 rkm_bls_section-info--more">
            <div class="panel panel-default rkm_bls_section-moreinfo">
                <div class="panel-heading  rkm_bls_section-topics--heading">MORE INFO</div>
                <div class="panel-body  rkm_bls_section-moreinfo--body">
                    <ul>
                        <li>Cupcake ipsum dolor sit amet soufflé bonbon gummi bears.  </li>
                        <li>Chocolate jelly lemon drops soufflé pudding. </li>
                        <li>VI love. Cupcake gingerbread I love cake cotton candy tart candy canes. .</li>
                        <li>Jelly-o apple pie tootsie roll lemon drops marzipan danish sweet.</li>
                    </ul>
                </div>
            </div>

        </div> <!-- ./MAIN | MORE INFO COL -->
    </div>   <!-- MAIN CONTENT | INFORMATION SECTION ROW-2 -->



</div>  <!--  ./BLS | SUBJECTS | COL2 -->

    </div>   <!-- ./ MAIN CONTENT | RSS FEED & INFORMATION ROW-->
</div><!--  ./BLS | TOPICS | CONTAINER-FLUID -->




<!--  BLS | FOOTER -->
<footer class="rkm_bls_footer">
<!--  BLS | FOOTER CONTAINER-->
<div class="container-fluid">


<!-- BLS | FOOTER | SITE MAP CONTAINER -->
<div class="container">
    <div class="rkm_bls_footer-sitemap">
        <table class="table rkm_bls_footer-sitemap--links">
            <thead class="thead-inverse ">
            <tr>
                <th>TOOLS</th>
                <th>CALCULATORS</th>
                <th>INFO</th>
                <th>RESOURCES</th>
                <th>HELP</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#" title="Areas at a Glance">Areas at a Glance</a></td>
                <td><a href="#" title="Inflation">Inflation</a></td>
                <td><a href="#" title="What's New">What's New</a></td>
                <td><a href="#" title="Inspector General (OIC)">Inspector General (OIC)</a></td>
                <td><a href="#" title="Helps and Tutorials">Helps &amp; Tutorials</a></td>
            </tr>
            <tr>
                <td><a href="#" title="Industries at a Glance">Industries at a Glance</a></td>
                <td><a href="#" title="Location Quotient">Location Quotient</a></td>
                <td><a href="#" title="Careers @ BLS">Careers&#64;BLS</a></td>
                <td><a href="#" title="Budget and Performance">Budget and Performance</a></td>
                <td><a href="#" title="FAQs">FAQs</a></td>
            </tr>
            <tr>
                <td><a href="#" title="Economic Releases">Economic Releases</a></td>
                <td><a href="#" title="Injury and Illness">Injury &amp; Illness</a></td>
                <td><a href="#" title="Find it! DOL">Find it! DOL</a></td>
                <td><a href="#" title="No Fear Act">No Fear Act</a></td>
                <td><a href="#" title="Glossary">Glossary</a></td>
            </tr>
            <tr>
                <td><a href="#" title="Databases & Tables">Databases &amp; Tables</a></td>
                <td></td>
                <td><a href="#" title="Joining our Mailing Lists">Injury &amp; Illness</a></td>
                <td><a href="#" title="USA.gov">USA.gov</a></td>
                <td><a href="#" title="About BLS">About BLS</a></td>
            </tr>
            <tr>
                <td><a href="#" title="Maps">Maps</a></td>
                <td></td>
                <td><a href="#" title="Linking and Copyright">Linking &amp; Copyright</a></td>
                <td><a href="#" title="Benefits.gov">Join our Mailing Lists</a></td>
                <td><a href="#" title="Contact Us">Contact Us</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#" title="Disability.gov">Disability.gov</a></td>
                <td></td>
            </tr>
            </tbody>
        </table>   <!-- ./SITE MAP | TABLE -->
    </div> <!-- ./FOOTER | SITE MAP ROW-->

</div> <!-- ./BLS | FOOTER | SITE MAP CONTAINER -->
<!-- BLS | FOOTER | SITE MAP ROW -->


<!-- FOOTER | FOIA ROW-->
<div class="row rkm_bls_footer-foia">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rkm_bls_footer-foia--info">
<a href="#" title="Freedom of Information Act" >Freedom of Information Act </a> &nbsp;|&nbsp; <a href="#" title="Privacy and Security Statement"> Privacy &amp; Security Statement </a>  &nbsp;|&nbsp; <a href="#" title="Disclaimers"> Disclaimers </a>  &nbsp;|&nbsp; <a href="#" title="Customer Survey"> Customer Survey  </a>&nbsp;|&nbsp; <a href="#" title="Important Web Site Notices"> Important Web Site Notices </a>
</div> <!-- ./FOIA INFO COL-->
</div> <!-- ./FOOTER | FOIA ROW -->

<!-- FOOTER | CONTACT INFO ROW -->
<div class="row rkm_bls_footer-contact">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rkm_bls_footer-contact--info">
<div class="vcard">
<p>
<span class="orgName">U.S. Bureau of Labor Statistics </span> &nbsp;|&nbsp;
<span class="street-address">Postal Square Building, 2 Massachusetts Avenue, NE Washington, DC 20212-0001 </span>
</p> <!-- ./vCARD - ADDRESS -->

<p>
<a href="http://www.bls.gov" title="BLS.GOV" class="url">www.bls.gov </a>&nbsp;|&nbsp;
<span class="main-tel"> Telephone:<a href="tel:12026915200" title="Main 12026915200"> 1-202-691-5200 </a></span>&nbsp;|&nbsp;
<span class="tdd-tel"> TDD: <a href="tel:18008778339" title="TDD 8008778339">1-800-877-8339 </a> </span>&nbsp;|&nbsp;
<span class="contact-page"> <a href="http://data.bls.gov/cgi-bin/forms/opb?/home.htm" title="Contact Us">Contact Us </a> </span>
</p> <!-- ./vCARD - CONTACT INFO -->

</div><!-- ./FOOTER | VCARD -->

</div> <!-- ./FOOTER | CONTACT INFO COL -->
</div>   <!-- ./FOOTER | CONTACT INFO ROW -->
</div>  <!--  ./BLS | FOOTER CONTAINER-FLUID -->
</footer>  <!--  ./BLS | FOOTER -->
<script type="text/javascript" src="js/classie.js" ></script>
<script type="text/javascript" src="js/cbpAnimatedHeader.js" ></script>
</body>


</html>