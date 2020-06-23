<?php

$menu = $_GET["menu"];

if ($menu == ""){ $menu = "home";}

?>

<!doctype html>
<html>
<head>

 <meta charset="utf-8">
 <title>NxtPizzaBoy:</title>
 
 <link rel="stylesheet" type="text/css" href="css/layout.css">
 
 </head>
 
 <body>
 
 <header><!-- HEADER -->
 
  <div id="nxt_logo"><img src="image/logo.png"></div>
  
  <div id="nxt_menu">
  <ul>
    <li><a href="index.php?menu=home" <?php if($menu == "home" ){ echo 'class="nxt_active"';} ?>>Start</a></li>
    <li><a href="index.php?menu=projects" <?php if($menu =="project" ){ echo 'class="nxt_active"';}?>>Projekte</a></li>
    <li><a href="index.php?menu=staff" <?php if($menu =="staff" ){ echo 'class="nxt_active"';}?>>Staff</a></li>
  </ul>
  
  </div>
  
  <div id="nxt_slogan">We make dreams come true</div>
</header><!-- HEADER -->

<article>

Hallo
</article>
