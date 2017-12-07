<?php
/* Smarty version 3.1.31, created on 2017-12-07 08:21:22
  from "/home/ubuntu/workspace/templates/Layouts/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a28fa02a27320_46659306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b467e21a25cc6ed33953166309252a208b11072b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/header.tpl',
      1 => 1512634858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a28fa02a27320_46659306 (Smarty_Internal_Template $_smarty_tpl) {
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>STORIOT</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <?php echo '<script'; ?>

  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/materialize.min.js"><?php echo '</script'; ?>
>
</head>

<style>
card a{
    color:#26a69a !important;
}
table thead tr th, table tbody tr td a{
     color:#846C63!important;
}
  html {
    position: relative;
    min-height: 100%;
}

body {
    margin: 0 0 200px 0;
}

footer {
    position: absolute; 
    bottom: 0;
    width: 100%;
    height: 200px;
}

.global-form {
    padding: 5em;
    margin-top: 1em;
}

.navbar-brand {
    font-family: roboto;
    font-weight: 500;
    margin-left: 5rem;
    font-size: 2em;
}

.profile-img {
    width: 120px;
    height: 120px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    margin-bottom: 5em;
}

.btn-primary-submit {
    float: right;
}

nav {
    background-color: #3e3f3a;
}

.blue-grey.darken-1 {
    background-color: #f8f5f0 !important;
}

.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #f8f5f0;
}

nav {
    margin-right: 15rem;
}

.tabs .tab a {
    color: #00ACC1;
}

.tabs .tab a:hover,
.tabs .tab .active {
    color: #008B9B;
}

.tabs .tab.disabled a,
.tabs .tab.disabled a:hover {
    color: rgba(102, 147, 153, 0.7);
}

.tabs .indicator {
    background-color: #009BAD;
}

.item-row {
    margin-top: 4em;
    margin-bottom: 4em;
}

.carousel {
    height: 60em !important;
}

.carousel.carousel-slider .carousel-item h2{
    margin:15rem;
    font-size: 8rem;
}

.carousel.carousel-slider .carousel-item p{
        font-size: 2.5rem;
}



.slide1:before,.slide2:before,.slide3:before,.slide4:before {
  content: "";
  position: fixed;
  left: 0;
  right: 0;
  z-index: -1;
  display: block;
  background-size:cover;
  width: 100%;
  height: 100%;

   -webkit-filter: opacity(.8);
  filter: opacity(.8);
}
.slide1 h2,.slide2 h2,.slide3 h2,.slide4 h2 {
      font-family: Brush-Script-MT, Calibri, Trebuchet, sans-serif;
}
.slide1 p,.slide2 p,.slide3 p,.slide4 p {
      font-family: Brush-Script-MT, Calibri, Trebuchet, sans-serif;
}

.banner{
    height:5em;    
    -webkit-filter: opacity(.8);
    filter: opacity(.8);
    font-weight:bold;
    padding-top:2em;
    background: rgba(0,0,0,0.4);
    font-family: Brush-Script-MT, Calibri, Trebuchet, sans-serif;
    text-align:center;
}
.header{
      font-family: Brush-Script-MT, Calibri, Trebuchet, sans-serif;
      text-transform:uppercase;
      color:#846C63!important;
}
.dropdown-content li>a, .dropdown-content li>span{
    color:#846C63!important;
}
.card-title a{
     color:#846C63!important;
}

.button-floating-1{
    position: absolute;
    right: 5em;
    bottom: -20px;
}


.button-floating-2{
    position: absolute;
    right: 1em;
    bottom: -20px;
}

.topbarsearch{
        margin-right: 3em;
}

.price{
    float:right;
    font-weight:bold;
    font-family: Roboto;
}

.slide1:before {
  background-image: url('https://static.pexels.com/photos/327064/pexels-photo-327064.jpeg');
}
.slide2:before {
  background-image: url('https://static.pexels.com/photos/378268/pexels-photo-378268.jpeg');
}
.slide3:before {
  background-image: url('https://static.pexels.com/photos/32237/pexels-photo.jpg');
}
.slide4:before {
  background-image: url('https://static.pexels.com/photos/6069/grass-lawn-green-wooden-6069.jpg');
}
.slide1,.slide2,.slide3,.slide4{
  background-color:white !important;
}

.footer-cr{
        overflow: hidden;
    align-items: center;
    padding: 6px 0px;
     color:#88AAA9!important;
    background-color: rgba(51, 51, 51, 0.08);
}
.dropdown-content {
  background-color: #FFFFFF;
  margin: 0;
  display: none;
  min-width: 300px; /* Changed this to accomodate content width */
  max-height: auto;
	margin-left: -1px; /* Add this to keep dropdown in line with edge of navbar */
  overflow: hidden; /* Changed this from overflow-y:auto; to overflow:hidden; */
  opacity: 0;
  position: absolute;
  white-space: nowrap;
  z-index: 1;
  will-change: width, height;
}
.brown-text{
  color:  #846C63!important
}

.brown-background{
  background-color:  #846C63!important
}
.more-row{
    margin-bottom:3em;
}

.grey-text.text-lighten-3{
    color:#88AAA9!important
}

.page-footer{
    text-align:center;
    background-color:rgba(189,177,173,0.1)!important;
}

.card .card-image img{
    height:19em;
}

.delete-button{
    color:red;
}

.input-quantity{
    width:5em !important;
}
</style>

<?php echo '<script'; ?>
>
    (function($) {
		$(function() {

$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      hover: true, // Activate on hover
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );

		}); // End Document Ready
})(jQuery); // End of jQuery name space
   $(".button-collapse").sideNav();
<?php echo '</script'; ?>
><?php }
}
