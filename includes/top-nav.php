<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx"> <!--<![endif]-->

<?php
$isAdmin = strpos($_SERVER['REQUEST_URI'], 'ecot_admin') !== false;
$basePath = $isAdmin ? '../' : '';
?>

<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eswatini College Of Technology</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= $basePath ?>images/scot.png" type="image/x-icon">
	<link rel="stylesheet" href="<?= $basePath ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/normalize.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/icomoon.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/animate.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/prettyPhoto.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/owl.theme.default.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/transitions.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/main.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/color.css">
	<link rel="stylesheet" href="<?= $basePath ?>css/responsive.css">

	<script src="<?= $basePath ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body class="tg-home tg-homefour">
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
		Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
	</p>
	<![endif]-->

	<!--************************************
		Wrapper Start
	*************************************-->