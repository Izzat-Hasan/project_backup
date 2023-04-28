
<?php require APPROOT . '/views/inc/header.php'; ?>


<!DOCTYPE html>

<html lang=""> 

<head>
<title>Homeless application</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<?php
$url = 'C:\xampp\htdocs\distributor_orders\app\views\pages\homeless2.jpeg';
$type = pathinfo($url, PATHINFO_EXTENSION);
$data = file_get_contents($url);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>

<div class="wrapper bgded overlay" style="background-image:url(<?php echo $base64; ?>);">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
    <p>Homeless Community Help Center</p>
      <h3 class="heading">We're here to help the homeless community better reach individuals willing to help</h3>


    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<section id = "packages" >
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">

      <ul class="nospace group">
        <li class="one_third first">
          <article><a >
            <h6 class="heading">Request Help</h6>
            <p>This option of the website provides a way for homeless shelters and homeless individuals to post on the urgent help board for individuals to help and donate. The user can
              simply provide their name, phone number, and their situation for individuals to help.
            </p>
            <footer><a class="btn" href="">Click me</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a >
          </a>
            <h6 class="heading">Find homeless shetlers near you</h6>
            <p>Our Application provides the user with the option of finding shelter near them. This option cna be used for homeless individuals as well as people willing to help. You can simply enter your zipcode and shelter will apear in that area</p>
            <footer><a class="btn" href="">Click me</a></footer>
          </article>
          
        </li>
        <li class="one_third">
          <article><a >
          </a>
            <h6 class="heading">FAQ</h6>
            <p>We understand that individuals might have some questions involving our application. Our FAQ page will provide the user with any questions and answers that the user might have. Anything from the application use to how to help will be answered on this page. </p>
            <footer><a class="btn" href="">Click me</a></footer>
          </article>
        </li>
      </ul>
    </section>
  </section>
    <!-- ################################################################################################ -->



<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="center">Copyright &copy; 2023 - All Rights Reserved  </p>
    <!-- ################################################################################################ -->
  </div>
</div>

<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<style>
  @charset "utf-8";
/*
Template Name: Bistup
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
File: Layout CSS
*/

@import url("fontawesome-free/css/fontawesome-all.min.css");
@import url("framework.css");

/* Rows
--------------------------------------------------------------------------------------------------------------- */
.row0, .row0 a{}
.row1, .row1 a{}
.row2, .row2 a{}
.row3, .row3 a{}
.row4, .row4 a{}
.row5, .row5 a{}




/* Page Intro
--------------------------------------------------------------------------------------------------------------- */
#pageintro{padding:100px; margin:-15px}

#pageintro article{display:block; max-width:100%;}
#pageintro .heading{margin-bottom:20px; font-size:4rem;}
#pageintro p:first-of-type{margin:0 0 20px 0; text-transform:uppercase; font-size:1.6rem; letter-spacing:5px;}
#pageintro footer{margin-top:50px;}


/* Content Area
--------------------------------------------------------------------------------------------------------------- */
.container{padding:80px 0;}

/* Content */
.container .content{}

.sectiontitle{display:block; max-width:100%; margin:0 auto 80px; text-align:center;}
.sectiontitle *{margin:0;}

#introblocks{margin-bottom:80px;}
#introblocks > li:last-child{margin-bottom:0;}/* Used when elements stack in small viewports */
#introblocks article{display:block; text-align:center; padding:30px 20px;}
#introblocks article *{margin:0 0 25px 0;}
#introblocks article .btn{margin:10px 0 0 0;}
#introblocks article > :last-child{margin-bottom:0;}
#introblocks article i{display:inline-block; width:80px; height:80px; line-height:78px;  text-align:center; font-size:32px;}

.overview{}
.overview > li{margin-bottom:30px;}
.overview > li:nth-last-child(-n+3){margin-bottom:0;}/* Removes bottom margin from the last three items - margin is restored in the media queries when items stack */
.overview > li:nth-child(3n+1){margin-left:0; clear:left;}/* Removes the need to add class="first" */
.overview > li figure{position:relative; max-width:348px;}/* Uses the one_third width in pixels */
.overview > li figure a::after{position:absolute; top:0; right:0; bottom:0; left:0; content:"";}
.overview > li figure figcaption{display:block; position:absolute; bottom:0; width:100%; padding:15px;}
.overview > li figure a::after, .overview > li figure figcaption{opacity:0;}
.overview > li figure:hover a::after, .overview > li figure:hover figcaption{opacity:1;}
.overview > li figure figcaption *{margin:0;}
.overview > li figure .heading{margin-bottom:10px; font-size:1.2rem;}

.latest{}
.latest > li:last-child{margin-bottom:0;}/* Used when elements stack in small viewports */
.latest article{}
.latest article time{display:block; margin:0 0 30px 0; padding:0; font-style:normal; line-height:1;}
.latest article .excerpt .heading{}
.latest article .excerpt p{}
.latest article .excerpt .meta{margin:0 0 30px 0; padding:0; list-style:none; text-align:left;}
.latest article .excerpt .meta li{display:inline-block; font-size:.8rem;}
.latest article .excerpt .meta li::after{margin-left:5px; content:"|";}
.latest article .excerpt .meta li:last-child::after{margin:0; content:"";}

.clients{text-align:center;}
.clients li:last-child{margin-bottom:0;}/* Used when elements stack in small viewports */
.clients li a{display:inline-block; max-width:100%;}

/* Comments */
#comments ul{margin:0 0 40px 0; padding:0; list-style:none;}
#comments li{margin:0 0 10px 0; padding:15px;}
#comments .avatar{float:right; margin:0 0 10px 10px; padding:3px; }
#comments address{font-weight:bold;}
#comments time{font-size:smaller;}
#comments .comcont{display:block; margin:0; padding:0;}
#comments .comcont p{margin:10px 5px 10px 0; padding:0;}

#comments form{display:block; width:100%;}
#comments input, #comments textarea{width:100%; padding:10px; }
#comments textarea{overflow:auto;}
#comments div{margin-bottom:15px;}
#comments input[type="submit"], #comments input[type="reset"]{display:inline-block; width:auto; min-width:150px; margin:0; padding:8px 5px; cursor:pointer;}

/* Sidebar */
.container .sidebar{}

.sidebar .sdb_holder{margin-bottom:50px;}
.sidebar .sdb_holder:last-child{margin-bottom:0;}


/* Click to Action
--------------------------------------------------------------------------------------------------------------- */
.cta{padding:50px 0;}
.cta > :first-child{margin-top:10px;}
.cta > :last-child{margin-bottom:0;}/* Used when elements stack in smaller viewports */

.cta footer{text-align:center;}
.cta footer a{display:block;}


/* Footer
--------------------------------------------------------------------------------------------------------------- */
#footer{padding:80px 0;}

#footer .heading{margin-bottom:50px; font-size:1.2rem;}

#footer .linklist li{display:block; margin-bottom:15px; padding:0 0 15px 0; }
#footer .linklist li:last-child{margin:0; padding:0; border:none;}
#footer .linklist li::before, #footer .linklist li::after{display:table; content:"";}
#footer .linklist li, #footer .linklist li::after{clear:both;}

#footer .contact{}
#footer .contact.linklist li, #footer .contact.linklist li:last-child{position:relative; padding-left:40px;}
#footer .contact li *{margin:0; padding:0; line-height:1.6;}
#footer .contact li i{display:block; position:absolute; top:0; left:0; width:30px; font-size:16px; text-align:center;}

#footer input, #footer button{border:1px solid;}
#footer input{display:block; width:100%; padding:8px;}
#footer button{padding:8px 18px 10px; text-transform:uppercase; font-weight:700; cursor:pointer;}


/* Copyright
--------------------------------------------------------------------------------------------------------------- */
#copyright{padding:20px 0;}
#copyright *{margin:0; padding:0;}



/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Navigation
--------------------------------------------------------------------------------------------------------------- */
nav ul, nav ol{margin:0; padding:0; list-style:none;}

#mainav, #breadcrumb, .sidebar nav{line-height:normal;}
#mainav .drop::after, #mainav li li .drop::after, #breadcrumb li a::after, .sidebar nav a::after{position:absolute; font-family:"Font Awesome\ 5 Free"; font-weight:900; font-size:10px; line-height:10px;}


/* Top Navigation */
#mainav{}
#mainav ul{text-transform:uppercase;}
#mainav ul ul{z-index:9999; position:absolute; width:180px; text-transform:none; text-align:left;}
#mainav ul ul ul{left:180px; top:0;}
#mainav li{display:block; float:left; position:relative; margin:0; padding:0;}
#mainav li:last-child{margin-right:0;}
#mainav li li{width:100%; margin:0;}
#mainav li a{display:block; padding:20px;}
#mainav li li a{border:solid; border-width:0 0 1px 0;}
#mainav .drop{padding-left:15px;}
#mainav li li a, #mainav li li .drop{display:block; margin:0; padding:10px 15px;}
#mainav .drop::after, #mainav li li .drop::after{content:"\f0d7";}
#mainav .drop::after{top:25px; left:5px;}
#mainav li li .drop::after{top:15px; left:5px;}
#mainav ul ul{visibility:hidden; opacity:0;}
#mainav ul li:hover > ul{visibility:visible; opacity:1;}

#mainav form{display:none; margin:0; padding:0;}
#mainav form select, #mainav form select option{display:block; cursor:pointer; outline:none;}
#mainav form select{width:100%; padding:5px; border:none;}
#mainav form select option{margin:5px; padding:0; border:none;}

/* Breadcrumb */
#breadcrumb{padding:150px 0 30px;}
#breadcrumb ul{margin:0; padding:0; list-style:none; text-transform:uppercase;}
#breadcrumb li{display:inline-block; margin:0 6px 0 0; padding:0;}
#breadcrumb li a{display:block; position:relative; margin:0; padding:0 12px 0 0; font-size:12px;}
#breadcrumb li a::after{top:4px; right:0; content:"\f0da";}
#breadcrumb li:last-child a{margin:0; padding:0;}
#breadcrumb li:last-child a::after{display:none;}
#breadcrumb .heading{margin:0; font-size:2rem;}

/* Sidebar Navigation */
.sidebar nav{display:block; width:100%;}
.sidebar nav li{margin:0 0 3px 0; padding:0;}
.sidebar nav a{display:block; position:relative; margin:0; padding:5px 10px 5px 15px; text-decoration:none; border:solid; border-width:0 0 1px 0;}
.sidebar nav a::after{top:10px; left:5px; content:"\f0da";}
.sidebar nav ul ul a{padding-left:35px;}
.sidebar nav ul ul a::after{left:25px;}
.sidebar nav ul ul ul a{padding-left:55px;}
.sidebar nav ul ul ul a::after{left:45px;}

/* Pagination */
.pagination{display:block; width:100%; text-align:center; clear:both;}
.pagination li{display:inline-block; margin:0 2px 0 0;}
.pagination li:last-child{margin-right:0;}
.pagination a, .pagination strong{display:block; padding:8px 11px; border:1px solid; background-clip:padding-box; font-weight:normal;}

/* Back to Top */
#backtotop{z-index:999; display:inline-block; position:fixed; visibility:hidden; bottom:20px; right:20px; width:36px; height:36px; line-height:36px; font-size:16px; text-align:center; opacity:.2;}
#backtotop i{display:block; width:100%; height:100%; line-height:inherit;}
#backtotop.visible{visibility:visible; opacity:.5;}
#backtotop:hover{opacity:1;}


/* Tables
--------------------------------------------------------------------------------------------------------------- */
table, th, td{border:1px solid; border-collapse:collapse; vertical-align:top;}
table, th{table-layout:auto;}
table{width:100%; margin-bottom:15px;}
th, td{padding:5px 8px;}
td{border-width:0 1px;}


/* Gallery
--------------------------------------------------------------------------------------------------------------- */
#gallery{display:block; width:100%; margin-bottom:50px;}
#gallery figure figcaption{display:block; width:100%; clear:both;}
#gallery li{margin-bottom:30px;}


/* Font Awesome Social Icons
--------------------------------------------------------------------------------------------------------------- */
.faico{margin:0; padding:0; list-style:none;}
.faico li{display:inline-block; margin:8px 5px 0 0; padding:0; line-height:normal;}
.faico li:last-child{margin-right:0;}
.faico a{display:inline-block; width:36px; height:36px; line-height:36px; font-size:18px; text-align:center;}

.faico a{color:#FFFFFF; background-color:#012B50;}
.faico a:hover{}

.faicon-dribble:hover{background-color:#EA4C89;}
.faicon-facebook:hover{background-color:#3B5998;}
.faicon-google-plus:hover{background-color:#DB4A39;}
.faicon-linkedin:hover{background-color:#0E76A8;}
.faicon-twitter:hover{background-color:#00ACEE;}
.faicon-vk:hover{background-color:#4E658E;}


/* Add rounded corners to specific elements
--------------------------------------------------------------------------------------------------------------- */
.btn, 
#header form label::before, 
#header form label select, 
.pagination a, 
.pagination strong, 
#footer input, 
#footer button{border-radius:10px;}

#introblocks article i, 
.faico a, 
#backtotop{border-radius:50%;}


/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Colours
--------------------------------------------------------------------------------------------------------------- */
body{color:#474747; background-color:#FFFFFF;}
a{color:#8BAAD6;}
a:active, a:focus{background:transparent;}/* IE10 + 11 Bugfix - prevents grey background */
hr, .borderedbox{border-color:#D7D7D7;}
label span{color:#FF0000; background-color:inherit;}
input:focus, textarea:focus, *:required:focus{border-color:#56AED4;}

.overlay{color:#FFFFFF; background-color:inherit;}
.overlay::after{color:inherit; background-color:rgba(0,0,0,.55);}
.overlay.light{color:#474747;}
.overlay.light::after{background-color:rgba(255,255,255,.7);}

.btn, .btn.inverse:hover{color:#FFFFFF; background-color:#8BAAD6; border-color:#8BAAD6;}
.btn:hover, .btn.inverse{color:inherit; background-color:transparent; border-color:inherit;}


/* Rows */
.row0, .row0 a{color:#FFFFFF; background-color:#01325D;}
.row1{color:#212529; background-color:#FFFFFF;}
.row2{color:#FFFFFF; background-color:#8BAAD6;}
.row3{color:#212529; background-color:#FFFFFF;}
.row4{color:#AAAAAA; background-color:#212529;}
.row5, .row5 a{color:#fff; background-color:#212529;}
.coloured{color:#FFFFFF; background-color:#000000;}


/* Top Bar */
#topbar ul li{border-color:rgba(255,255,255,.4);}
#topbar div:first-of-type li:first-child a{color:#8BAAD6;}


/* Header */
#header a{color:inherit;}
#header form label::before{background-color:rgba(0,0,0,.1);}
#header form label::after{color:#AAAAAA;}
#header form label:hover::after{color:#8BAAD6;}
#header form label select{color:inherit; background-color:inherit; border-color:rgba(0,0,0,.2);}
#header form label select option:not(:checked){color:#8BAAD6;}/* Options that are not selected - https://www.w3.org/TR/selectors/#checked-pseudo */
#header form label select option:disabled{color:inherit;}


/* Page Intro */
#pageintro{color:#FFFFFF;}


/* Content Area */
#introblocks article{box-shadow:0px 0px 8px rgba(0,0,0,.1);}
#introblocks article:hover{background-color:rgba(0,0,0,.02);}
#introblocks article i{color:#8BAAD6; border-color:#D7D7D7;}
#introblocks article a > i:hover, #introblocks article:hover i{color:#FFFFFF; background-color:#8BAAD6; border-color:#8BAAD6;}

.overview > li figure a::after{background-color:rgba(0,0,0,.5);}
.overview > li figure figcaption{color:#FFFFFF;}


/* Footer */
#footer .heading{color:#FFFFFF;}
#footer hr, #footer .borderedbox, #footer .linklist li{border-color:rgba(255,255,255,.1);}

#footer input, #footer button{border-color:transparent;}
#footer input{color:#FFFFFF; background-color:#012B50;}
#footer input:focus{border-color:#8BAAD6;}
#footer button{color:#FFFFFF; background-color:#8BAAD6;}


/* Navigation */
#mainav{color:#FFFFFF; background-color:#8BAAD6;}
#mainav li a{color:inherit;}
#mainav .active a, #mainav a:hover, #mainav li:hover > a{color:#01325D; background-color:inherit;}
#mainav li li a, #mainav .active li a{color:#FFFFFF; background-color:rgba(139,170,214,.5);/* #8BAAD6 */ border-color:rgba(0,0,0,.6);}
#mainav li li:hover > a, #mainav .active .active > a{color:#01325D; background-color:#8BAAD6;}
#mainav form select{color:#474747; background-color:#FFFFFF;}

#breadcrumb a{color:inherit; background-color:inherit;}
#breadcrumb li:last-child a{color:#8BAAD6;}

.container .sidebar nav a{color:inherit; border-color:#D7D7D7;}
.container .sidebar nav a:hover{color:#8BAAD6;}

.pagination a, .pagination strong{border-color:#D7D7D7;}
.pagination .current *{color:#FFFFFF; background-color:#8BAAD6;}

#backtotop{color:#FFFFFF; background-color:#8BAAD6;}


/* Tables + Comments */
table, th, td, #comments .avatar, #comments input, #comments textarea{border-color:#D7D7D7;}
#comments input:focus, #comments textarea:focus, #comments *:required:focus{border-color:#8BAAD6;}
th{color:#FFFFFF; background-color:#373737;}
tr, #comments li, #comments input[type="submit"], #comments input[type="reset"]{color:inherit; background-color:#FBFBFB;}
tr:nth-child(even), #comments li:nth-child(even){color:inherit; background-color:#F7F7F7;}
table a, #comments a{background-color:inherit;}


/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Media Queries
--------------------------------------------------------------------------------------------------------------- */
@-ms-viewport{width:device-width;}


/* Max Wrapper Width - Laptop, Desktop etc.
--------------------------------------------------------------------------------------------------------------- */
@media screen and (min-width:1140px){
	.hoc{max-width:1140px;}
}


/* Mobile Devices
--------------------------------------------------------------------------------------------------------------- */
@media screen and (max-width:978px){
	.hoc{max-width:90%;}

	#topbar{}

	#header{}

	#mainav{padding:15px;}
	#mainav ul{display:none;}
	#mainav form{display:block;}

	#breadcrumb{}

	.container{}
	#comments input[type="reset"]{margin-top:10px;}
	.pagination li{display:inline-block; margin:0 5px 5px 0;}

	#footer{}

	#copyright{}
	#copyright p:first-of-type{margin-bottom:10px;}
}

@media screen and (max-width:750px){
	.imgl, .imgr{display:inline-block; float:none; margin:0 0 10px 0;}
	.fl_left, .fl_right{display:block; float:none;}
	.group .group > *:last-child, .clear .clear > *:last-child, .clear .group > *:last-child, .group .clear > *:last-child{margin-bottom:0;}/* Experimental - Needs more testing in different situations, stops double margin when stacking */
	.one_half, .one_third, .two_third, .one_quarter, .two_quarter, .three_quarter{display:block; float:none; width:auto; margin:0 0 30px 0; padding:0;}

	#topbar{padding-top:15px; text-align:center;}
	#topbar ul{margin:0 0 15px 0; line-height:normal;}

	#header{}

	#pageintro article{max-width:none; text-align:left;}
	#pageintro .heading{font-size:2rem;}
	#pageintro p:first-of-type{font-size:1rem;}

	.sectiontitle{max-width:none;}

	.overview > li:nth-last-child(-n+3){margin-bottom:30px;}

	.cta > :first-child{margin-top:0;}
	.cta footer a{display:inline-block;}

	#footer{padding-bottom:50px;}/* Not required, just looks a little better */
}

@media screen and (max-width:450px){
	#topbar ul li{margin-bottom:2px; padding-right:0; border-right:none;}
}


/* Other
--------------------------------------------------------------------------------------------------------------- */
@media screen and (max-width:650px){
	.scrollable{display:block; width:100%; margin:0 0 30px 0; padding:0 0 15px 0; overflow:auto; overflow-x:scroll;}
	.scrollable table{margin:0; padding:0; white-space:nowrap;}

	.inline li{display:block; margin-bottom:10px;}
	.pushright li{margin-right:0;}

	.font-x2{font-size:1.4rem;}
	.font-x3{font-size:1.6rem;}
}
@charset "utf-8";
/*
Template Name: Bistup
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
File: Framework CSS
*/

html{overflow-y:scroll; overflow-x:hidden;}
html, body{margin:0; padding:0; font-size:14px; line-height:1.6em;}

*, *::before, *::after{box-sizing:border-box;}

.bold{font-weight:bold;}
.center{text-align:center;}
.right{text-align:right;}
.uppercase{text-transform:uppercase;}
.capitalise{text-transform:capitalize;}
.hidden{display:none;}
.nospace{margin:0; padding:0; list-style:none;}
.block{display:block;}
.justified{text-align:justify;}
.inline *{display:inline-block;}
.inline *:last-child{margin-right:0;}
.pushright li{margin-right:20px;}
.pushright li:last-child{margin-right:0;}
.borderedbox{border:1px solid;}
.overlay{position:relative; z-index:1;}
.overlay::after{display:block; position:absolute; top:0; left:0; width:100%; height:100%; content:""; z-index:-1;}
.bgded{background-position:top center; background-repeat:no-repeat; background-size:cover;}
.circle{border-radius:50%; background-clip:padding-box;}

.btn{display:inline-block; padding:8px 18px 10px; text-transform:uppercase; border:1px solid;}

.clear, .group{display:block;}
.clear::before, .clear::after, .group::before, .group::after{display:table; content:"";}
.clear, .clear::after, .group, .group::after{clear:both;}

a{outline:none; text-decoration:none;}

.fl_left, .imgl{float:left;}
.fl_right, .imgr{float:right;}

img{width:auto; max-width:100%; height:auto; margin:0; padding:0; border:none; line-height:normal; vertical-align:middle;}
.imgl{margin:0 15px 10px 0; clear:left;}
.imgr{margin:0 -100px 50px 15px; clear:right;}


/* Fonts
--------------------------------------------------------------------------------------------------------------- */
body, input, textarea, select{font-family:Verdana, Geneva, sans-serif;}
h1, h2, h3, h4, h5, h6, .heading{font-family:Georgia, "Times New Roman", Times, serif;}


/* Forms
--------------------------------------------------------------------------------------------------------------- */
form, fieldset, legend{margin:0; padding:0; border:none;}
legend{display:none;}
label, input, textarea, select, button{display:block; resize:none; outline:none; color:inherit; font-size:inherit; font-family:inherit; vertical-align:middle;}
label{margin-bottom:5px;}
:required, :invalid{outline:none; box-shadow:none;}


/* Generalise
--------------------------------------------------------------------------------------------------------------- */
h1, h2, h3, h4, h5, h6, .heading{margin:0 0 20px 0; font-size:22px; line-height:normal; font-weight:normal; text-transform:capitalize; font-variant:small-caps;}
.heading.nospace{margin-bottom:0;}

address{font-style:normal; font-weight:normal;}
hr{display:block; width:100%; height:1px; border:solid; border-width:1px 0 0 0;}

.font-xs{font-size:.8rem;}
.font-x1{font-size:1.2rem;}
.font-x2{font-size:1.8rem;}
.font-x3{font-size:2.8rem;}

.wrapper{display:block; position:relative; width:100%; margin:0; padding:0; text-align:left; word-wrap:break-word;}
/*
The "hoc" class is a generic class used to centre a containing element horizontally
It should be used in conjunction with a second class or ID
*/
.hoc{display:block; margin:0 auto;}


/* HTML 5 Overrides
--------------------------------------------------------------------------------------------------------------- */
address, article, aside, figcaption, figure, footer, header, main, nav, section{display:block; margin:0; padding:0;}


/* Grid - RS-MQF 1140 V.2 - https://www.os-templates.com/free-basic-html5-templates/rs-mqf-1140
--------------------------------------------------------------------------------------------------------------- */
.one_half, .one_third, .two_third, .one_quarter, .two_quarter, .three_quarter{display:inline-block; float:left; margin:0 0 0 4.21052%; list-style:none;}

.first{margin-left:0; clear:left;}

.one_quarter{width:21.8421%;}
.one_third{width:30.52631%;}
.one_half, .two_quarter{width:47.89473%;}
.two_third{width:65.26315%;}
.three_quarter{width:73.94736%;}


/* Spacing
--------------------------------------------------------------------------------------------------------------- */
.btmspace-10{margin-bottom:10px;}
.btmspace-15{margin-bottom:15px;}
.btmspace-30{margin-bottom:30px;}
.btmspace-50{margin-bottom:50px;}
.btmspace-80{margin-bottom:80px;}

.rgtspace-5{margin-right:5px;}
.rgtspace-10{margin-right:10px;}
.rgtspace-15{margin-right:15px;}
.rgtspace-30{margin-right:30px;}
.rgtspace-50{margin-right:50px;}
.rgtspace-80{margin-right:80px;}

.inspace-5{padding:5px;}
.inspace-10{padding:10px;}
.inspace-15{padding:15px;}
.inspace-30{padding:30px;}
.inspace-50{padding:50px;}
.inspace-80{padding:80px;}
</style>

<?php require APPROOT . '/views/inc/footer.php'; ?>
