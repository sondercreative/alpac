<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Domine:400,700|Montserrat:400,600,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/core.css">
	</head>

	<body class="">
	<!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- PHP include - will have to use Vue equiv -->
	<?php include "template/sprite.svg.php"; ?>
	<!-- PHP include - will have to use Vue equiv -->

	<div class="wrapper">


	<header class="header clear" role="banner">

		<div class="bookmark">
			<a href="http://sondervps.com/alpac">
				<div class="logo">
					<img src="img/alpac-logo-top-01.svg" id="logo-top">
					<img src="img/alpac-logo-bottom-01.svg" id="logo-bottom">
				</div>
			</a>
			<div class="menuActivator">
				<button class="hamburger hamburger--spin" type="button">
				  <span class="hamburger-box">
					<span class="hamburger-inner"></span>
				  </span>
				</button>
			</div>

			<div class="siteTitle">
				<div class="titleCenter">
					<p>
						<span class="reportTitle">Status of Biodiversity in the  </span> <span class="subTitle">Al-PAC Forest Management Agreement Area</span>
					</p>
				</div>
			</div>
		</div>
		  

		<div class="slideNav">
			<nav class="navigation">
				<div class="homeLink">
					<a href="#">
						<svg id="e6be7e63-2b2a-4c82-b357-3891b28c0757" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 347.971 347.971"><polygon points="340.114 140.296 173.994 0 7.857 140.296 7.857 171.313 33.531 171.27 33.531 347.971 135.409 347.971 135.409 248.525 212.548 248.525 212.548 347.971 314.428 347.971 314.428 171.27 340.114 171.313 340.114 140.296"/></svg>
						Report at a Glance
					</a>
				</div>
				<ul id="supportNav">
					<li>
						<a href="#">Executive Summary</a>
					</li>
				</ul>
				<h2>Chapters:</h2>
				<ul id="mainNav">
					<li class="hasChildren <?php if( $page == 'reporting'){ echo 'active'; } ?>" >
						<a href="http://sondervps.com/alpac/human-footprint.php"><span>1:</span>Introduction</a>
						<div class="subToggle">
							<svg class="icon">
							  <use xlink:href="#icon-keyboard_arrow_down" />
							</svg>
						</div>
						<div class="subNav">
							<ul>
								<li><a href="reporting-area.php">1.1  Introduction/purpose of this report</a></li>
								<li class="<?php if( $page == 'reporting'){ echo 'active'; } ?>"><a href="reporting-area.php">1.2  Reporting Area and Landscape Context</a></li>
								<li><a href="reporting-area.php">1.3  Methods</a></li>
							</ul>
						</div>
					</li>

					<li  class="hasChildren <?php if( $page == 'section'){ echo 'active'; } ?> <?php if( $page == 'chapter'){ echo 'active'; } ?>" >
						<a href="http://sondervps.com/alpac/human-footprint.php"><span>2:</span>Status of Human Footprint  and Land Cover</a>
						<div class="subToggle">
							<svg class="icon">
							  <use xlink:href="#icon-keyboard_arrow_down" />
							</svg>
						</div>
						<div class="subNav">
							<ul>
								<li class="<?php if( $page == 'section'){ echo 'active'; } ?>"><a href="section-3-1.php">2.1  Human Footprint</a></li>
								<li><a href="section-3-1.php">2.2  Human Footprint by Vegetation Type</a></li>
								<li><a href="section-3-1.php">2.3  Linear Footprint</a></li>
								<li><a href="section-3-1.php">2.4  Interior Native Habitat</a></li>
								<li><a href="section-3-1.php">2.5  Area of Old-forest</a></li>
							</ul>
						</div>
					</li>

					<li class="hasChildren">
						<a href="#"><span>3:</span>Status of Birds</a>
						<div class="subToggle">
							<svg class="icon">
							  <use xlink:href="#icon-keyboard_arrow_down" />
							</svg>
						</div>
						<div class="subNav">
							<ul>
								<li><a href="section-3-1.php">3.1  Status of Old-forest Birds</a></li>
								<li><a href="section-3-1.php">3.2  Knowledge Extension Understory protection benefits for birds</a></li>
								<li><a href="section-3-1.php">3.3  Knowledge Extension Bird response to forest harvest scenarios</a></li>
							</ul>
						</div>
					</li>

					<li class="hasChildren">
						<a href="#"><span>4:</span>Status of Mammals</a>
						<div class="subToggle">
							<svg class="icon">
							  <use xlink:href="#icon-keyboard_arrow_down" />
							</svg>
						</div>
						<div class="subNav">
							<ul>
								<li><a href="section-3-1.php">4.1  Status of Winter-active Mammals (includes intactness and sector effects)</a></li>
								<li><a href="section-3-1.php">4.2  Species Spotlight Woodland Caribou</a></li>
								<li><a href="section-3-1.php">4.3  Species Spotlight Moose</a></li>
							</ul>
						</div>
					</li>

					<li class="hasChildren">
						<a href="#"><span>5:</span>Status of Vascular Plants</a>
						<div class="subToggle">
							<svg class="icon">
							  <use xlink:href="#icon-keyboard_arrow_down" />
							</svg>
						</div>
						<div class="subNav">
							<ul>
								<li><a href="section-3-1.php">5.1  Status of Vascular Plants Associated with Old Deciduous andMixedwood Forests</a></li>
								<li><a href="section-3-1.php">5.2  Status of Non-native Vascular Plants</a></li>
								<li><a href="section-3-1.php">5.3  Culturally important Vascular Plants</a></li>
							</ul>
						</div>
					</li>

					<li>
						<a href="#"><span>6:</span>Species at Risk</a>
					</li>

					<li>
						<a href="#"><span>7:</span>Habitat Elements</a>
					</li>

					<li class="hasChildren">
						<a href="#"><span>8:</span>Status of Taxonomic Groups</a>
						<div class="subToggle">
							<svg class="icon">
							  <use xlink:href="#icon-keyboard_arrow_down" />
							</svg>
						</div>
						<div class="subNav">
							<ul>
								<li><a href="section-3-1.php">8.1  Status of Soil Mites</a></li>
								<li><a href="section-3-1.php">8.2  Status of Mosses</a></li>
								<li><a href="section-3-1.php">8.3  Status of Lichen</a></li>
							</ul>
						</div>
					</li>

				</ul>
			</nav>

			<div class="menuFooter">
				<form role="search" action="" id="searchform">
					<input type="text" class="searchInput input" name="s" placeholder="Search"/>
					<button type="submit" class="form-control searchSubmit" alt="Search">
						<svg class="icon">
						  <use xlink:href="#icon-search" />
						</svg>
					</button>

				</form>
				<div class="termsCond">
					<p>General Terms and Conditions  /  All Rights Reserved</p>
				</div>
			</div>


		</div>
	</header>



	<div class="arrowNavigation">
		<div class="leftArrow">
			<a href="#">
				<svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.86947e-07 15.6771L7.8125 8.33333L1.18007e-08 0.989583L1.09375 1.06206e-07L10 8.33333L1.09375 16.6667L1.86947e-07 15.6771Z" fill="#EAEBE9"/>
				</svg>
			</a>
		</div>
		<div class="rightArrow">
			<a href="#">
				<svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.86947e-07 15.6771L7.8125 8.33333L1.18007e-08 0.989583L1.09375 1.06206e-07L10 8.33333L1.09375 16.6667L1.86947e-07 15.6771Z" fill="#EAEBE9"/>
				</svg>
			</a>
		</div>
	</div>

	<main class="content">


