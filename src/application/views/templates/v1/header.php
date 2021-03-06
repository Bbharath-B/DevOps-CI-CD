<!DOCTYPE HTML>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en-US"> <!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8" />
	<!-- Mobile Specific Metas -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=base_url('resources/images/favicon.png')?>">

	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/css/bootstrap-theme.min.css')?>">

	<!-- FontAwesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/solid.min.css">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/css/style.css')?>">

	<!-- countries dropdown -->
	<script src="<?=base_url('resources/js/countries.js')?>"></script>

	<!-- Page Title -->
	<title><?php if(isset($title)) echo $title . " | "; ?> International Courier Service</title>

	<?php 
        if(isset($load_extra_css))
        {
            foreach($load_extra_css as $row)
            {
                echo '<link href="' . $row . '">';
            }
        }

        if(isset($load_extra_js_header))
        {
            foreach($load_extra_js_header as $ejsh)
            {
                echo '<script src="' . $ejsh . '"></script>';
            }
        }
    ?>

	<meta name="description" content="" />

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light shadow">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url() ?>"><img src="<?= base_url('resources/images/logo.png') ?>" alt="ICD logo" class="navbar-brand"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('tracking') ?>">Track My Courier <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('about') ?>">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('quote') ?>">Get A Quote</a>
					</li>
				</ul>
				<?php if(isset($this->session->logged_in)) { ?>
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?= $_SESSION['username'] ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php if($_SESSION['access'] > 0) ?>
 								<a class="dropdown-item bold" href="<?= site_url('admin') ?>">Admin Panel</a>

							<a class="dropdown-item" href="<?= site_url('dashboard') ?>">My Account</a>
							<a class="dropdown-item" href="<?=site_url('contact')?>">Get Support</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?=site_url('auth/logout')?>">Sign Out</a>
						</div>
					</li>
				</ul>
				<?php } else { ?>
				<ul class="navbar-nav">
					<li><a class="nav-link" href="<?=site_url('auth')?>">Login</a></li>
					<li><a class="nav-link" href="<?=site_url('auth/register')?>">Signup</a></li>
				</ul>
				<?php } ?>
			</div>
		</div>
	</nav>