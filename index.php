<!DOCTYPE html>

<?php
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
        $(document).ready(function(){
            printBLSName();

        });
    </script>

</head>

<body>

<!--  BLS | HEADER -->
<header>
    <!-- DOL | NAVBAR ROW -->
    <div class="row rkm_bls_header-topbar">
        <div class="col-lg-12 col-md-6=12 ">
            <nav class="navbar navbar-inverse navbar-fixed-top rkm_bls_header-topbar--nav cbp-af-header" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#rkm_bls_header-topbar--collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="" href="#">
                         <span class="rkm_bls_header-topbar--title">
                        <img src="assets/logos/USDOL_Seal_circa_2015.svg" width="35" />
                           UNITED STATES DEPARTMENT OF LABOR </span>
                        </a><!-- ./HEADER TOPBAR DOL-->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="rkm_bls_header-topbar--collapse">
                        <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Subjects</a></li>
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
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
            </nav>


        </div>  <!-- ./HEADER TOPBAR NAVIGATION -->
    </div> <!-- ./HEADER TOPBAR DOL/NAV ROW -->

    <!-- BLS | SEARCH ROW -->
    <div class="row rkm_bls_header-identity">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 rkm_bls_header-identity--logo">
                <span class="rkm_bls_header-identity--title">
                  <img src="assets/logos/Bureau_of_labor_statistics_logo.svg" width="75" />
                <span id='bls'> Bureau of Labor Statistics</span>
                </span>
        </div> <!-- ./HEADER IDENTITY LOGO & TITLE COL -->

        <div class="col-lg-2 col-md-5 col-sm-12 col-xs-12 offset-sm-6 offset-xs-6 rkm_bls_header-search">
   <!--         <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>-->
        </div>   <!-- ./HEADER IDENTITY SEARCHBOX COL -->
    </div>  <!-- ./HEADER BLS/SEARCH ROW -->

</header> <!-- ./BLS | HEADER -->
<!-- ./BLS | HEADER -->
<!--  BLS | FEATURED | CONTAINER -->
<div class="container-fluid">
<!-- BLS | FEATURED -->
<div class="row rkm_bls_featured">
<!-- SECTION | FEATURED PRESS RELEASES -->
<section class="col-lg-5 col-md-5 rkm_bls_featured-releases">
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
<section class="col-lg-3 col-md-3 rkm_bls_featured-review">
<div class="panel panel-default rkm_bls_review-monthlylabor">
<div class="panel-heading rkm_bls_review-monthlylabor--heading">MONTHLY LABOR REVIEW</div>
<div class="panel-body rkm_bls_releases-daily--body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum lectus ante, quis congue lacus suscipit sit amet.Donec quis tellus quam. Phasellus fermentum massa sed lorem bibendum aliquam. Vivamus dictum odio ante, vel facilisis massa scelerisque sit amet. Pellentesque interdum rutrum libero. Aliquam sit amet mi elit. Mauris ut purus tincidunt, viverra massa tempus, lobortis ligula. In massa tortor, iaculis sed porttitor sed, rhoncus ac tortor. Mauris pulvinar lacus efficitur, molestie urna vitae, vehicula lectus. Mauris dignissim justo a lorem blandit, mollis lacinia sapien fermentum. Vivamus et libero sed nisl sodales varius et sed tortor. Nullam ullamcorper orci lacus, at sollicitudin enim porta sit amet. Nulla facilisi.</p>
</div> <!-- ./PANEL BODY | MONTHLY LABOR -->
</div> <!-- ./PANEL - MONTHLY LABOR | BODY -->
</section>
<!-- ./SECTION | FEATURED MONTHLY REVIEW-->

<!-- SECTION | FEATURED ASIDE ITEMS -->
<div class="row">
<section class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 rkm_bls_section-featured--items">
<!-- ARTICLE | WCAG -->
<article class="rkm_bls_article-wcag">
        <span class="rkm_bls_wcag-icons">
<i class="fa fa-text-height fa-2x rkm_bls_wcag-icon--1 sr-only" title="Enlarge Font"></i>
<i class="fa fa-text-height fa-lg rkm_bls_wcag-icon--2" aria-hidden="true"></i>
<i class="fa fa-text-height   rkm_bls_wcag-icon--3" aria-hidden="true"  ></i>
<i class="fa fa-print fa-lg rkm_bls_wcag-icon--4" aria-hidden="true"></i>


        </span>
</article>
<!-- ARTICLE | OCCUPATIONAL HANDBOOK -->
<article class="rkm_bls_article-handbook" >
<div class="panel panel-default rkm_bls_review-monthlylabor">
    <div class="panel-body rkm_bls_releases-daily--body">
        <a href="http://www.bls.gov/ooh/" target="_blank" title="Occupational Outlook Handbook" ><img src="assets/graphics/BLS_OccupationalHandbook_v2.png" class="img-responsive rkm_bls_article-handbook--img"/></a></div>
</div> </article>


<!-- ARTICLE | SOCIAL MEDIA -->
<article class="rkm_bls_article-socialmedia">
    <span class="rkm_bls_socialmedia-icons">
      <a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter fa-2x rkm_bls_socialmedia-icon" aria-hidden="true"></i></a>
       <a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook fa-2x rkm_bls_socialmedia-icon" aria-hidden="true"></i></a>
          <a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin fa-2x rkm_bls_socialmedia-icon" aria-hidden="true"></i></a>
    </span>
</article>

</section>    <!-- ./SECTION | FEATURED ASIDE ITEMS -->
</div> <!-- ./BLS | FEATURED | ROW -->
</div>  <!--  ./BLS | FEATURED | CONTAINER -->


<!--./ BLS | FEATURED -->
</div> <!--  ./BLS | FEATURED | CONTAINER -->
<!--  BLS | MAIN CONTENT | CONTAINER-FLUID -->
<div class="container-fluid">
<!-- MAIN CONTENT | GEOGRAPHIC INFORMATION ROW -->
<div class="row rkm_bls_section-info--data">
<div class="col-lg-7 col-md-7  rkm_bls_section-info--blsapi">
<div class="panel panel-default rkm_bls_section-blsapi">
    <div class="panel-heading  rkm_bls_section-blsapi--heading">BLS API DATA</div>
    <div class="panel-body  rkm_bls_section-blsapi--body"><p>
            Aliquam convallis sapien ac ex rhoncus mollis. Mauris maximus nunc diam, nec vulputate mauris vulputate et. Phasellus vitae nunc et tortor blandit auctor. Etiam non enim feugiat, aliquam turpis sit amet, congue dolor. Etiam ultrices ultrices viverra. Curabitur non arcu quis justo cursus condimentum non sit amet orci. Praesent porttitor interdum nibh at convallis. Curabitur elementum risus id venenatis luctus. Quisque tempor lorem ut sapien posuere sodales. Phasellus id lectus vitae dui convallis hendrerit a quis arcu. Ut sem nisl, posuere eget rutrum mattis, mattis quis nulla. Maecenas orci tellus, malesuada at nulla nec, interdum porta augue.
        </p>
    </div> <!-- ./PANEL BODY | BLS API -->
</div> <!-- ./PANEL - BLS API | BODY -->
</div>  <!-- ./MAIN CONTENT | BLS API COL -->

<div class="col-lg-5 col-md-5 rkm_bls_section-info--geo">
<div class="panel panel-default rkm_bls_section-geo">
    <div class="panel-heading  rkm_bls_section-geo--heading">GEOGRAPHIC INFORMATION</div>
    <div class="panel-body  rkm_bls_section-geo--body">
        <img src="assets/images/geographic_info/bls_region_newyork_newjersey_ny.jpg" class="img-responsive"/>
    </div> <!-- ./PANEL BODY | BLS API -->
</div> <!-- ./PANEL - BLS API | BODY -->
</div>  <!-- ./MAIN CONTENT | GEO INFO COL -->
</div>   <!-- ./MAIN CONTENT | GEOGRAPHIC INFORMATION ROW -->

<!-- MAIN CONTENT | API DATA & INFORMATION ROW-->
<div class="row rkm_bls_section-info--api">
<!-- MAIN CONTENT | API FEED COL-->
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rkm_bls_section-api">
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
</div> <!-- ./PANEL - BLS API | BODY -->


</div>  <!-- ./MAIN CONTENT | API  COL -->

<!-- MAIN CONTENT | INFORMATION COL -->
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
<!-- MAIN CONTENT | INFORMATION SECTION ROW-1 -->
<div class="row  rkm_bls_section-info  rkm_bls_section-info--row-1">

    <!-- MAIN | ECONOMIC COL -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rkm_bls_section-info--economics">
<div class="panel panel-default rkm_bls_section-economic">
<div class="panel-heading  rkm_bls_section-economic--heading">THE ECONOMICS DAILY</div>
<div class="panel-body  rkm_bls_section-economic--body">
<ul>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
<li>Fusce non nulla ut odio sagittis tincidunt.</li>
<li>Vestibulum laoreet odio at dictum sodales.</li>
<li>Pellentesque fringilla ligula id dolor ornare, eu dignissim quam convallis.</li>
</ul>
</div>
</div>

    </div> <!-- ./MAIN | ECONOMIC COL -->

    <!-- MAIN | PUBLICATIONS COL -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rkm_bls_section-info--publications">
<div class="panel panel-default rkm_bls_section-publications">
<div class="panel-heading  rkm_bls_section-publications--heading">PUBLICATIONS</div>
<div class="panel-body  rkm_bls_section-publications--body">
<ul>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
<li>Fusce non nulla ut odio sagittis tincidunt.</li>
<li>Vestibulum laoreet odio at dictum sodales.</li>
<li>Pellentesque fringilla ligula id dolor ornare, eu dignissim quam convallis.</li>
</ul>
</div>
</div>
    </div><!-- ./MAIN | PUBLICATIONS COL -->
    <!-- MAIN | TOPICS COL -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rkm_bls_section-info--topics">
        <div class="panel panel-default rkm_bls_section-topics">
        <div class="panel-heading  rkm_bls_section-topics--heading">TOPICS</div>
            <div class="panel-body  rkm_bls_section-topics--body">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                    <li>Fusce non nulla ut odio sagittis tincidunt.</li>
                    <li>Vestibulum laoreet odio at dictum sodales.</li>
                    <li>Pellentesque fringilla ligula id dolor ornare, eu dignissim quam convallis.</li>
                </ul>
            </div>
        </div>
    </div><!-- ./MAIN | TOPICS COL -->
</div>  <!-- MAIN CONTENT | INFORMATION SECTION TOP ROW-1 -->

<!-- MAIN CONTENT | INFORMATION SECTION ROW-2 -->
<div class="row  rkm_bls_section-info  rkm_bls_section-info--row-2">
    <!-- MAIN | RESOURCES COL -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rkm_bls_section-info--resources">
        <div class="panel panel-default rkm_bls_section-resources">
            <div class="panel-heading  rkm_bls_section-topics--heading">RESOURCES</div>
            <div class="panel-body  rkm_bls_section-resources--body">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                    <li>Fusce non nulla ut odio sagittis tincidunt.</li>
                    <li>Vestibulum laoreet odio at dictum sodales.</li>
                    <li>Pellentesque fringilla ligula id dolor ornare, eu dignissim quam convallis.</li>
                </ul>
            </div>
        </div>
    </div> <!-- ./MAIN |RESOURCES COL -->

    <!-- MAIN | CAREERS COL -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rkm_bls_section-info--careers">
        <div class="panel panel-default rkm_bls_section-careers">
            <div class="panel-heading  rkm_bls_section-topics--heading">TOPICS</div>
            <div class="panel-body  rkm_bls_section-careers--body">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                    <li>Fusce non nulla ut odio sagittis tincidunt.</li>
                    <li>Vestibulum laoreet odio at dictum sodales.</li>
                    <li>Pellentesque fringilla ligula id dolor ornare, eu dignissim quam convallis.</li>
                </ul>
            </div>
        </div>
    </div> <!-- ./MAIN | CAREERS COL -->
    <!-- MAIN | MORE INFO COL -->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rkm_bls_section-info--more">
        <div class="panel panel-default rkm_bls_section-moreinfo">
            <div class="panel-heading  rkm_bls_section-topics--heading">TOPICS</div>
            <div class="panel-body  rkm_bls_section-moreinfo--body">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                    <li>Fusce non nulla ut odio sagittis tincidunt.</li>
                    <li>Vestibulum laoreet odio at dictum sodales.</li>
                    <li>Pellentesque fringilla ligula id dolor ornare, eu dignissim quam convallis.</li>
                </ul>
            </div>
        </div>

    </div> <!-- ./MAIN | MORE INFO COL -->
</div>   <!-- MAIN CONTENT | INFORMATION SECTION ROW-2 -->
</div>    <!-- ./MAIN CONTENT | INFORMATION COL -->
</div>   <!-- ./ MAIN CONTENT | RSS FEED & INFORMATION ROW-->
</div>   <!--  ./BLS | MAIN CONTENT | CONTAINER-FLUID -->
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