<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Wakiweb.id - Contact Page</title>

    <meta name="google-site-verification" content="RjAgqUgYfT94lQ7oGZqqRI87NeSdR_6fecSUipiGBmg" />
    <meta name="msvalidate.01" content="F39E6D2A441B34A5BCA816D83B967BDF" />
    <meta property="og:image:secure_url" content="https://raw.githubusercontent.com/gigabytedevelopers/website/master/thumbnail.png" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Wakiweb.id">
    <meta property="og:title" content="Wakiweb - Contact Us" />
    <meta property="og:description" content="Contact Page of Gigabyte Developers Incorporated" />
    <meta property="og:image" itemprop="image" content="https://raw.githubusercontent.com/gigabytedevelopers/website/master/thumbnail.png" />
    <meta property="og:image:url" itemprop="image" content="https://raw.githubusercontent.com/gigabytedevelopers/website/master/thumbnail.png" />
    <meta property="og:image:type" content="image/png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Page of Gigabyte Developers Incorporated">
    <meta name="author" content="Gigabyte Developers Incorporated">
    <meta name="theme-color" content="#028fcc">
    <link rel="shortcut icon" href="img/gigaicon.png">

	<link rel="stylesheet" type="text/css" href="css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="css/blocks.css">
	<link rel="stylesheet" type="text/css" href="css/widgets.css">

	<!-- Styles for Plugins -->
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">


	<!--External fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

</head>
<body class="crumina-grid">
<?php include_once("includes/overall/googleanalyticstracking.php") ?>

<!-- Preloader -->
<div id="hellopreloader" style="display: block; position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 100%;background: #66b5ff url(svg/preload.svg) center center no-repeat;background-size: 41px;opacity: 1;"></div>
<!-- ... end Preloader -->


<!-- Header -->
<?php include 'includes/overall/header/white/plain/header.php'; ?>
<!-- ... end Header -->

<div class="header-spacer"></div>

<div class="content-wrapper">

	<!-- Contacts -->

	<section>
		<div class="container-fluid no-padding">

			<div class="col-lg-6 col-lg-12 col-sm-12 col-xs-12 no-padding">
				<!-- Google map -->
				<div id="map" style="height: 820px">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15858.649687825127!2d106.9015256696458!3d-6.437384302978321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea4d69b2a28bab9e!2sPerum%20griya%20bukit%20jaya!5e0!3m2!1sid!2sid!4v1610443649944!5m2!1sid!2sid" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
			</div>

			<div class="col-lg-3 col-lg-offset-1 col-md-12 col-sm-12 pt100 pb100">
				<div class="breadcrumbs-wrap inline-items">
					<a href="#" class="btn btn--transparent btn--round">
						<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
					</a>

					<ul class="breadcrumbs">
						<li class="breadcrumbs-item">
							<a href="index">Pages</a>
							<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
						</li>
						<li class="breadcrumbs-item active">
							<span>Contact Us</span>
							<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
						</li>
					</ul>
				</div>

				<div class="crumina-module crumina-heading">
					<h3 class="heading-title">Temukan Kami</h3>
					<div class="heading-text" style="text-align: justify">di bawah ini
					</div>
				</div>
				<div class="widget w-contacts w-contacts--style2 ">
					<div class="contact-item display-flex">
						<svg class="utouch-icon utouch-icon-placeholder-3"><use xlink:href="#utouch-icon-placeholder-3"></use></svg>
						<span class="info">Griya Bukit Jaya S2 No.4, Gunung Putri, Bogor, 16962.</span>
					</div>
					<div class="contact-item display-flex">
						<svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
						<div class="info-wrap">
                            <span>  WhatsApp</span><span class="info"><a href="tel:+2348123000903">+62 8381 5948 3462</a></span>
							
						</div>
					</div>
					<div class="contact-item display-flex">
						<svg class="utouch-icon utouch-icon-message"><use xlink:href="#utouch-icon-message"></use></svg>
						<a href="#" class="info">support@wakiweb.id</a>
					</div>

					<a href="#" class="btn btn--grey btn--with-shadow js-message-popup cd-nav-trigger">
						Kirim Pesan
					</a>
				</div>

			</div>

		</div>
	</section>

	<!-- ... end Contacts -->

</div>

<!-- Footer -->
<?php include 'includes/overall/footer.php'; ?>
<!-- End Footer -->

<!-- Send Message Popup -->
<?php include 'includes/overall/send_message_popup.php'; ?>
<!-- Send Message Popup -->

<!-- Search Popup -->
<?php include 'includes/overall/search_popup.php'; ?>
<!-- ... end Search Popup -->

<!-- Used SVG-icons -->
<?php include 'includes/overall/svg_icons.php'; ?>
<!-- ... end Used SVG-icons -->


<!-- jQuery first, then Other JS. -->
<!-- jQuery-scripts -->
<?php include 'includes/overall/scripts.php'; ?>
</body>
</html>