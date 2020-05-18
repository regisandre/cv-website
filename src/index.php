<?php
require("./lang.php");
require("./assets/functions.php");
if($lang=="en") {
	$flag="gb";
} else {
	$flag=$lang;
}
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>" class=" idcae idcac">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Font Awesome Icon - CSS-->
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css" async>
		<!-- Materialize - Compiled and minified CSS-->
		<link rel="stylesheet" href="./assets/css/materialize.min.css" async>
		<!-- Custom Styles-->
		<link rel="stylesheet" href="./assets/css/style.min.css" async>
		<title><?php echo $title; ?></title>
		<!-- Open Graph-->
		<meta property="og:locale" content="<?php echo $lang; ?>">
		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php echo $title; ?>">
		<meta property="og:description" content="<?php echo $meta_description; ?>">
		<meta property="og:url" content="<?php echo $url; ?>">
		<meta property="og:site_name" content="<?php echo $title; ?>">
		<meta property="article:publisher" content="<?php echo $url; ?>">
		<meta property="og:image" content="./assets/img/favicon/favicon.png">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@<?php echo $twitter_username; ?>">
		<meta name="twitter:creator" content="<?php echo $author; ?>">
		<meta name="twitter:title" content="<?php echo $title; ?>">
		<meta name="twitter:description" content="<?php echo $meta_description; ?>">
		<meta name="twitter:url" content="twitter.com/<?php echo $twitter_username; ?>">
		<meta name="twitter:image" content="./assets/img/favicon/ms-icon-144x144.png">
		<meta name="author" content="<?php echo $author; ?>">
		<meta name="description" content="<?php echo $meta_description; ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="./assets/img/favicon/favicon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./assets/img/favicon/favicon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./assets/img/favicon/favicon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon/favicon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./assets/img/favicon/favicon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon/favicon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./assets/img/favicon/favicon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./assets/img/favicon/favicon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon/favicon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192" href="./assets/img/favicon/favicon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="./assets/manifest.php">
		<meta name="apple-mobile-web-app-capable" content="yes">  
		<meta name="apple-mobile-web-app-status-bar-style" content="#007fab"> 
		<meta name="apple-mobile-web-app-title" content="Régis André resume">
		<meta name="msapplication-TileColor" content="#007fab">
		<meta name="msapplication-TileImage" content="./assets/img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#007fab">
		<meta name="robots" content="index, follow">
		<meta name="google-site-verification" content="-3F1R8ekDXe8XFfCi7eIVfXOSWqlp_pWNQX2dfgKD4Y">
	</head>
	<body id="top">
		<!-- Navigation Menu-->
		<nav class="hide-on-small-only">
			<ul class="side-nav fixed section table-of-contents">
				<li class="logo">
					<a id="logo-container" aria-label="Navigate to the beginning of the page" href="#top" class="brand-logo teal-text">
						<h1>
							<?php echo $full_name; ?><span class="brown-text light"><?php echo $large_nav_role; ?></span>
						</h1>
					</a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the About section" href="#about" class="waves-effect waves-dark teal-text active"><i class="mdi-social-person small"></i><span><?php echo $large_nav_about; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Education section" href="#education" class="waves-effect waves-dark orange-text"><i class="mdi-social-school small"></i><span><?php echo $large_nav_education; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Experience section" href="#experience" class="waves-effect waves-dark cyan-text"><i class="mdi-action-trending-up small"></i><span><?php echo $large_nav_experience; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Skills section" href="#skills" class="waves-effect waves-dark purple-text"><i class="mdi-av-equalizer small"></i><span><?php echo $large_nav_skills; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Projects section" href="#projects" class="waves-effect waves-dark indigo-text"><i class="mdi-av-web small"></i><span><?php echo $large_nav_projects; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Awards section" href="#awards" class="waves-effect waves-dark red-text"><i class="mdi-action-grade small"></i><span><?php echo $large_nav_awards; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Contact section" href="#contact" class="waves-effect waves-dark brown-text"><i class="mdi-content-mail small"></i><span><?php echo $large_nav_contact; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Open Régis&#39;s resume in a new tab" href="<?php echo $large_nav_resume_link ?>" target="_blank" class="waves-effect waves-dark grey-text"><i class="mdi-action-description small"></i><span><?php echo $large_nav_resume; ?></span></a>
				</li>
				<div class="lang">
					<li class="lang-selector waves-effect waves-dark grey-text">
						<img loading='lazy' alt="<?php echo $flag; ?> flag" src="https://www.countryflags.io/<?php echo $flag; ?>/flat/32.png"><span><?php echo $lang; ?></span><i class="mdi-hardware-keyboard-arrow-up small"></i>
					</li>
					<li>
						<ul class="lang-child">
							<?php
							if($lang != "en") {
								echo "<li><a href='en' class='waves-effect waves-dark grey-text text-darken-3'><img loading='lazy' alt='Great Britain flag' src='https://www.countryflags.io/gb/flat/32.png'><span>EN</span></a></li>";
							} if($lang != "fr") {
								echo "<li><a href='fr' class='waves-effect waves-dark grey-text text-darken-3'><img loading='lazy' alt='French flag' src='https://www.countryflags.io/fr/flat/32.png'><span>FR</span></a></li>";
							} if($lang != "nl") {
								echo "<li><a href='nl' class='waves-effect waves-dark'><img loading='lazy' alt='Dutch flag' src='https://www.countryflags.io/nl/flat/32.png'><span>NL</span></a></li>";
							}
							?>
						</ul>
					</li>
				</div>
			</ul>
		</nav>
		<!--Little nav-->
		<nav class="hide-on-large only trigger z-depth-1">
			<a aria-label="Toggle visibility of the mobile navbar" href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			<div class="name-title">
				<a id="name" aria-label="Navigate to the beginning of the page" href="#top" class="teal-text"><?php echo $full_name; ?></a><span class="brown-text light"><?php echo $small_nav_role; ?></span>
			</div>
		</nav>
		<nav class="hide-on-large only">
			<ul id="slide-out" class="side-nav" style="width: 190px; left: -200px;">
				<li class="bold">
					<a aria-label="Navigate to the About section" href="#about" class="waves-effect waves-dark teal-text active"><i class="mdi-social-person small"></i><span><?php echo $small_nav_about; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Education section" href="#education" class="waves-effect waves-dark orange-text"><i class="mdi-social-school small"></i><span><?php echo $small_nav_education; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Experience section" href="#experience" class="waves-effect waves-dark cyan-text"><i class="mdi-action-trending-up small"></i><span><?php echo $small_nav_experience; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Skills section" href="#skills" class="waves-effect waves-dark purple-text"><i class="mdi-av-equalizer small"></i><span><?php echo $small_nav_skills; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Projects section" href="#projects" class="waves-effect waves-dark indigo-text"><i class="mdi-av-web small"></i><span><?php echo $small_nav_projects; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Awards section" href="#awards" class="waves-effect waves-dark red-text"><i class="mdi-action-grade small"></i><span><?php echo $small_nav_awards; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Navigate to the Contact section" href="#contact" class="waves-effect waves-dark brown-text"><i class="mdi-content-mail small"></i><span><?php echo $small_nav_contact; ?></span></a>
				</li>
				<li class="bold">
					<a aria-label="Open Régis&#39;s Resume in a new tab" href="<?php echo $small_nav_resume_link ?>" target="_blank" class="waves-effect waves-dark grey-text text-darken-3"><i class="mdi-action-description small"></i><span><?php echo $small_nav_resume; ?></span></a>
				</li>
				<div class="lang">
					<li class="lang-selector waves-effect waves-dark grey-text text-darken-3">
						<img loading='lazy' alt="<?php echo $flag; ?> flag" src="https://www.countryflags.io/<?php echo $flag; ?>/flat/32.png"><span><?php echo $lang; ?></span><i class="mdi-hardware-keyboard-arrow-up small"></i>
					</li>
					<li>
						<ul class="lang-child">
							<?php
							if($lang != "en") {
								echo "<li><a href='en' class='waves-effect waves-dark grey-text text-darken-3'><img loading='lazy' alt='Great Britain flag' src='https://www.countryflags.io/gb/flat/32.png'><span>EN</span></a></li>";
							} if($lang != "fr") {
								echo "<li><a href='fr' class='waves-effect waves-dark grey-text text-darken-3'><img loading='lazy' alt='French flag' src='https://www.countryflags.io/fr/flat/32.png'><span>FR</span></a></li>";
							} if($lang != "nl") {
								echo "<li><a href='nl' class='waves-effect waves-dark'><img loading='lazy' alt='Dutch flag' src='https://www.countryflags.io/nl/flat/32.png'><span>NL</span></a></li>";
							}
							?>
						</ul>
					</li>
				</div>
			</ul>
		</nav>
		<!-- Main Content-->
		<main>
			<section id="intro" class="section scrollspy full-height">
				<div class="overlay"></div>
				<div class="container">
					<h2>
						<?php echo $intro_description; ?>
					</h2>
				</div>
			</section>
			<section id="about" class="section scrollspy">
				<h3 class="page-title white-text teal"><?php echo $about_title; ?></h3>
				<div class="container flow-text">
					<blockquote>
						<h2>
							<?php echo $about_quote; ?>
						</h2>
					</blockquote>
					<p>
						<?php echo $about_line1; ?>
					</p>
					<p>
						<?php echo $about_line2; ?>
					</p>
					<p>
						<?php echo $about_line3; ?>
					</p>
				</div>
			</section>
			<section id="education" class="section scrollspy">
				<h3 class="page-title white-text teal"><?php echo $education_title; ?></h3>
				<div class="container">
					<!--Two cards per row-->
					<div class="row">
						<!--Education example-->
						<article id="<?php echo $education_codecademy_title; ?>">
						<div class="col s12 m6">
							<div class="card">
								<div class="card-content">
									<a href="<?php echo $education_codecademy_url; ?>" target="_blank"><img loading='lazy' alt="Codecademy logo" src="./assets/img/education/codecademy.webp" class="responsive-img center-block"></a>
									<p>
										<span class="card-title"><a href="<?php echo $education_codecademy_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_codecademy_title; ?></a></span>
									</p>
									<p class="brown-text"><?php echo $education_codecademy_location; ?></p>
									<br>
									<ul>
										<li><?php echo $education_codecademy_desc_line1; ?></li>
										<li><?php echo $education_codecademy_desc_line2; ?></li>
									</ul>
								</div>
							</div>
						</div>
						</article>
						<article id="<?php echo $education_ifapme_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<a href="<?php echo $education_ifapme_url; ?>" target="_blank"><img loading='lazy' alt="IFAPME logo" src="./assets/img/education/ifapme.webp" class="responsive-img center-block"></a>
										<p>
											<span class="card-title"><a href="<?php echo $education_ifapme_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_ifapme_title; ?></a></span>
										</p>
										<p class="brown-text"><?php echo $education_ifapme_location; ?></p>
										<br>
										<ul>
											<li><?php echo $education_ifapme_desc_line1; ?></li>
											<li><?php echo $education_ifapme_desc_line2; ?></li>
											<li><?php echo $education_ifapme_desc_line3; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="row">
						<article id="<?php echo $education_netacad_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<div class="title">
											<a href="<?php echo $education_netacad_url; ?>" target="_blank"><img loading='lazy' alt="Cisco logo" src="./assets/img/education/netacad.webp" class="responsive-img center-block"></a>
											<p>
												<span class="card-title"><a href="<?php echo $education_netacad_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_netacad_title; ?></a></span>
											</p>
											<p class="brown-text"><?php echo $education_netacad_location; ?></p>
										</div>
										<ul>
											<li><?php echo $education_netacad_desc_line1; ?></li>
											<li><?php echo $education_netacad_desc_line2; ?></li>
											<li><?php echo $education_netacad_desc_line3; ?></li>
											<li><?php echo $education_netacad_desc_line4; ?></li>
											<li><?php echo $education_netacad_desc_line5; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<article id="<?php echo $education_googledigitalgarage_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<div class="title">
											<a href="<?php echo $education_googledigitalgarage_url; ?>" target="_blank"><img loading='lazy' alt="Google Digital Garage logo" src="./assets/img/education/google_digital_garage.webp" class="responsive-img center-block"></a>
											<p>
												<span class="card-title"><a href="<?php echo $education_googledigitalgarage_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_googledigitalgarage_title; ?></a></span>
											</p>
											<p class="brown-text"><?php echo $education_googledigitalgarage_location; ?></p>
										</div>
										<ul>
											<li><?php echo $education_googledigitalgarage_desc_line1; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="row">
						<article id="<?php echo $education_cvdc_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<div class="title">
											<a href="<?php echo $education_cvdc_url; ?>" target="_blank"><img loading='lazy' alt="CVDC logo" src="./assets/img/education/CVDC.webp" class="responsive-img center-block"></a>
											<p>
												<span class="card-title"><a href="<?php echo $education_cvdc_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_cvdc_title; ?></a></span>
											</p>
											<p class="brown-text"><?php echo $education_cvdc_location; ?></p>
										</div>
										<ul>
											<li><?php echo $education_cvdc_desc_line1; ?></li>
											<li><?php echo $education_cvdc_desc_line2; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<article id="<?php echo $education_condorcet_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<div class="title">
											<a href="<?php echo $education_condorcet_url; ?>" target="_blank"><img loading='lazy' alt="Condorcet logo" src="./assets/img/education/condorcet.webp" class="responsive-img center-block"></a>
											<p>
												<span class="card-title"><a href="<?php echo $education_condorcet_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_condorcet_title; ?></a></span>
											</p>
											<p class="brown-text"><?php echo $education_condorcet_location; ?></p>
										</div>
										<ul>
											<li><?php echo $education_condorcet_desc_line1; ?></li>
											<li><?php echo $education_condorcet_desc_line2; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="row">
						<article id="<?php echo $education_arthuin_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<div class="title">
											<a href="<?php echo $education_arthuin_url; ?>" target="_blank"><img loading='lazy' alt="ARThuin logo" src="./assets/img/education/arthuin.webp" class="responsive-img center-block"></a>
											<p>
												<span class="card-title"><a href="<?php echo $education_arthuin_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_arthuin_title; ?></a></span>
											</p>
											<p class="brown-text"><?php echo $education_arthuin_location; ?></p>
										</div>
										<ul>
											<li><?php echo $education_arthuin_desc_line1; ?></li>
											<li><?php echo $education_arthuin_desc_line2; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<article id="<?php echo $education_indthuin_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<div class="title">
											<a href="<?php echo $education_indthuin_url; ?>" target="_blank"><img loading='lazy' alt="IND Thuin logo" src="./assets/img/education/indthuin.webp" class="responsive-img center-block"></a>
											<p>
												<span class="card-title"><a href="<?php echo $education_indthuin_url; ?>" class="teal-text hoverline" target="_blank"><?php echo $education_indthuin_title; ?></a></span>
											</p>
											<p class="brown-text"><?php echo $education_indthuin_location; ?></p>
										</div>
										<ul>
											<li><?php echo $education_indthuin_desc_line1; ?></li>
											<li><?php echo $education_indthuin_desc_line2; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<section id="experience" class="section scrollspy">
				<h3 class="page-title white-text teal"><?php echo $experience_title; ?></h3>
				<div class="container">
					<!--Experience example-->
					<article id="<?php echo $experience_ghdc_title; ?>">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m2">
										<a href="<?php echo $experience_ghdc_url; ?>" target="_blank"><img loading='lazy' alt="GHdC logo" src="./assets/img/experience/ghdc.webp" class="responsive-img center-block"></a>
									</div>
									<p>
										<span class="card-title"><a href="<?php echo $experience_ghdc_url; ?>" target="_blank" class="teal-text hoverline"><?php echo $experience_ghdc_title; ?></a></span>
									</p>
								</div>
								<div class="role brown-text">
									<?php echo $experience_ghdc_role; ?>
								</div>
								<p>
									<em class="grey-text"><?php echo $experience_ghdc_description; ?></em>
								</p>
								<ul>
									<li>
										<?php echo $experience_ghdc_desc_line1; ?>
									</li>
									<li>
										<?php echo $experience_ghdc_desc_line2; ?>
									</li>
									<li>
										<?php echo $experience_ghdc_desc_line3; ?>
									</li>
									<li>
										<?php echo $experience_ghdc_desc_line4; ?>
									</li>
									<li>
										<?php echo $experience_ghdc_desc_line5; ?>
									</li>
									<li>
										<?php echo $experience_ghdc_desc_line6; ?>
									</li>
								</ul>
							</div>
							<div class="card-action"><span><?php echo $experience_ghdc_period_location; ?></span></div>
						</div>
					</article>
					<article id="<?php echo $experience_tesiasquad_title; ?>">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m2">
										<a href="<?php echo $experience_tesiasquad_url; ?>" target="_blank"><img loading='lazy' alt="TesiaSquad logo" src="./assets/img/experience/tesiasquad.webp" class="responsive-img center-block"></a>
									</div>
									<p>
										<span class="card-title"><a href="<?php echo $experience_tesiasquad_url; ?>" target="_blank" class="teal-text hoverline"><?php echo $experience_tesiasquad_title; ?></a></span>
									</p>
								</div>
								<div class="role brown-text">
									<?php echo $experience_tesiasquad_role; ?>
								</div>
								<p>
									<em class="grey-text"><?php echo $experience_tesiasquad_description; ?></em>
								</p>
								<ul>
									<li>
										<?php echo $experience_tesiasquad_desc_line1; ?>
									</li>
									<li>
										<?php echo $experience_tesiasquad_desc_line2; ?>
									</li>
									<li>
										<?php echo $experience_tesiasquad_desc_line3; ?>
									</li>
									<li>
										<?php echo $experience_tesiasquad_desc_line4; ?>
									</li>
								</ul>
							</div>
							<div class="card-action"><span><?php echo $experience_tesiasquad_period_location_2; ?></span></div>
						</div>
					</article>
					<article id="<?php echo $experience_tesiasquad_title; ?>">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m2">
										<a href="<?php echo $experience_tesiasquad_url; ?>" target="_blank"><img loading='lazy' alt="TesiaSquad logo" src="./assets/img/experience/tesiasquad.webp" class="responsive-img center-block"></a>
									</div>
									<p>
										<span class="card-title"><a href="<?php echo $experience_tesiasquad_url; ?>" target="_blank" class="teal-text hoverline"><?php echo $experience_tesiasquad_title; ?></a></span>
									</p>
								</div>
								<div class="role brown-text">
									<?php echo $experience_tesiasquad_role; ?>
								</div>
								<p>
									<em class="grey-text"><?php echo $experience_tesiasquad_description; ?></em>
								</p>
								<ul>
									<li>
										<?php echo $experience_tesiasquad_desc_line1; ?>
									</li>
									<li>
										<?php echo $experience_tesiasquad_desc_line2; ?>
									</li>
									<li>
										<?php echo $experience_tesiasquad_desc_line3; ?>
									</li>
									<li>
										<?php echo $experience_tesiasquad_desc_line4; ?>
									</li>
								</ul>
							</div>
							<div class="card-action"><span><?php echo $experience_tesiasquad_period_location_1; ?></span></div>
						</div>
					</article>
					<article id="<?php echo $experience_hshnmunicipality_title; ?>">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col s12 m2">
										<a href="<?php echo $experience_hshnmunicipality_url; ?>" target="_blank"><img loading='lazy' alt="Municipality of Ham-sur-Heure-Nalinnes logo" src="./assets/img/experience/hsh-n_municipality.webp" class="responsive-img center-block"></a>
									</div>
									<p>
										<span class="card-title"><a href="<?php echo $experience_hshnmunicipality_url; ?>" target="_blank" class="teal-text hoverline"><?php echo $experience_hshnmunicipality_title; ?></a></span>
									</p>
								</div>
								<div class="role brown-text">
									<?php echo $experience_hshnmunicipality_role; ?>
								</div>
								<p>
									<em class="grey-text"><?php echo $experience_hshnmunicipality_description; ?></em>
								</p>
								<ul>
									<li>
										<?php echo $experience_hshnmunicipality_desc_line1; ?>
									</li>
									<li>
										<?php echo $experience_hshnmunicipality_desc_line2; ?>
									</li>
								</ul>
							</div>
							<div class="card-action"><span><?php echo $experience_hshnmunicipality_period_location; ?></span></div>
						</div>
					</article>
				</div>
			</section>
			<section id="skills" class="section scrollspy">
				<h3 class="page-title white-text teal"><?php echo $skills_title; ?></h3>
				<div class="container">
					<!--Skills example-->
					<article id="<?php echo $skills_frontend_title; ?>">
						<div class="card">
							<div class="card-content">
								<h4 class="brown-text light"><?php echo $skills_frontend_title; ?></h4>
								<div class="row text-center">
									<!--Icons example-->
									<div class="col s4 m2">
										<img loading='lazy' alt="HTML5 logo" src="./assets/img/skills/html5.webp" class="responsive-img"><?php echo $skills_frontend_html5; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_frontend_html5_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="CSS3 logo" src="./assets/img/skills/css3.webp" class="responsive-img"><?php echo $skills_frontend_css3; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_frontend_css3_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Javascript logo" src="./assets/img/skills/javascript.webp" class="responsive-img"><?php echo $skills_frontend_js; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_frontend_js_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Java logo" src="./assets/img/skills/java.webp" class="responsive-img"><?php echo $skills_frontend_java; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_frontend_java_level, ""); ?>
	 										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<article id="<?php echo $skills_backend_title; ?>">
						<div class="card">
							<div class="card-content">
								<h4 class="brown-text light"><?php echo $skills_backend_title; ?></h4>
								<div class="row text-center">
									<div class="col s4 m2">
										<img loading='lazy' alt="PHP logo" src="./assets/img/skills/php.webp" class="responsive-img"><?php echo $skills_backend_php; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_backend_php_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="MySQL logo" src="./assets/img/skills/mysql.webp" class="responsive-img"><?php echo $skills_backend_mysql; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_backend_mysql_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="C language logo" src="./assets/img/skills/c.webp" class="responsive-img"><?php echo $skills_backend_c; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_backend_c_level, ""); ?>
	 										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<article id="<?php echo $skills_ittools_title; ?>">
						<div class="card">
							<div class="card-content">
								<h4 class="brown-text light"><?php echo $skills_ittools_title; ?></h4>
								<div class="row text-center">
									<div class="col s4 m2">
										<img loading='lazy' alt="SCCM logo" src="./assets/img/skills/sccm.webp" class="responsive-img"><?php echo $skills_ittools_sccm; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_ittools_sccm_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="VMWare logo" src="./assets/img/skills/vmware.webp" class="responsive-img"><?php echo $skills_ittools_vmware; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_ittools_vmware_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Jira logo" src="./assets/img/skills/jira.webp" class="responsive-img"><?php echo $skills_ittools_jira; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_ittools_jira_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Confluence logo" src="./assets/img/skills/confluence.webp" class="responsive-img"><?php echo $skills_ittools_confluence; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_ittools_confluence_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Microsoft logo for Active Directory" src="./assets/img/skills/microsoft.webp" class="responsive-img"><?php echo $skills_ittools_microsoftad; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_ittools_microsoftad_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Infoblox logo" src="./assets/img/skills/infoblox.webp" class="responsive-img"><?php echo $skills_ittools_infoblox; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_ittools_infoblox_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Nexthink logo" src="./assets/img/skills/nexthink.webp" class="responsive-img"><?php echo $skills_ittools_nexthink; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_ittools_nexthink_level, ""); ?>
	 										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<article id="<?php echo $skills_editiontools_title; ?>">
						<div class="card">
							<div class="card-content">
								<h4 class="brown-text light"><?php echo $skills_editiontools_title; ?></h4>
								<div class="row text-center">
									<div class="col s4 m2">
										<img loading='lazy' alt="Adobe Photoshop logo" src="./assets/img/skills/adobe_photoshop.webp" class="responsive-img"><?php echo $skills_editiontools_photoshop; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_editiontools_photoshop_level, ""); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Adobe Premiere Pro logo" src="./assets/img/skills/adobe_premiere-pro.webp" class="responsive-img"><?php echo $skills_editiontools_premierepro; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_editiontools_premierepro_level, ""); ?>
	 										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<article id="<?php echo $skills_language_title; ?>">
						<div class="card">
							<div class="card-content">
								<h4 class="brown-text light"><?php echo $skills_language_title; ?></h4>
								<div class="row text-center">
									<div class="col s4 m2">
										<img loading='lazy' alt="French flag" src='https://www.countryflags.io/fr/flat/64.png' class="responsive-img"><?php echo $skills_language_fr; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_language_fr_level, $skills_language_fr_level_percentage); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Great Britain flag" src='https://www.countryflags.io/gb/flat/64.png' class="responsive-img"><?php echo $skills_language_en; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_language_en_level, $skills_language_en_level_percentage); ?>
	 										</div>
										</div>
									</div>
									<div class="col s4 m2">
										<img loading='lazy' alt="Ducth flag" src='https://www.countryflags.io/nl/flat/64.png' class="responsive-img"><?php echo $skills_language_nl; ?>
										<div class="level-reveal">
											<div class="content">
												<?php progressBar($skills_language_nl_level, $skills_language_nl_level_percentage); ?>
	 										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</section>
			<section id="projects" class="section scrollspy">
				<h3 class="page-title white-text teal"><?php echo $projects_title; ?></h3>
				<div class="container">
					<div class="row">
						<!--Project example-->
						<article id="<?php echo $projects_mywebsite_title; ?>">
							<div class="col s12 m6 l4">
								<div class="card medium">
									<div class="card-image waves-effect waves-block waves-light">
										<img loading='lazy' alt="Screenshot of the project My Website" src="./assets/img/projects/my_website.webp" class="activator">
									</div>
									<div class="card-content">
										<span class="card-title activator teal-text hoverline"><?php echo $projects_mywebsite_title; ?><i class="mdi-navigation-more-vert right"></i></span>
										<p>
											<?php echo $projects_mywebsite_description; ?>
										</p>
									</div>
									<div class="card-reveal">
										<span class="card-title brown-text"><?php echo $projects_mywebsite_nav_title; ?><i class="mdi-navigation-close right"></i></span>
										<ul>
											<li><?php echo $projects_mywebsite_nav_desc_line1; ?></li>
											<li><?php echo $projects_mywebsite_nav_desc_line2; ?></li>
											<li><?php echo $projects_mywebsite_nav_desc_line3; ?></li>
										</ul>
										<div class="card-action">
											<a aria-label="Visit project web site" href="<?php echo $projects_mywebsite_nav_link1_url; ?>" target="_blank" data-position="top" data-tooltip="<?php echo $projects_mywebsite_nav_link1_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa <?php echo $projects_multitips_nav_link1_icon; ?>"></i></a>
										</div>
									</div>
								</div>
							</div>
						</article>
						<article id="<?php echo $projects_multitips_title; ?>">
							<div class="col s12 m6 l4">
								<div class="card medium">
									<div class="card-image waves-effect waves-block waves-light">
										<img loading='lazy' alt="Screenshot of the project Multi Tips" src="./assets/img/projects/multi_tips.webp" class="activator">
									</div>
									<div class="card-content">
										<span class="card-title activator teal-text hoverline"><?php echo $projects_multitips_title; ?><i class="mdi-navigation-more-vert right"></i></span>
										<p>
											<?php echo $projects_multitips_description; ?>
										</p>
									</div>
									<div class="card-reveal">
										<span class="card-title brown-text"><?php echo $projects_multitips_nav_title; ?><i class="mdi-navigation-close right"></i></span>
										<ul>
											<li><?php echo $projects_multitips_nav_desc_line1; ?></li>
											<li><?php echo $projects_multitips_nav_desc_line2; ?></li>
										</ul>
										<div class="card-action">
											<a aria-label="Visit project web site" href="<?php echo $projects_multitips_nav_link1_url; ?>" target="_blank" data-position="top" data-tooltip="<?php echo $projects_multitips_nav_link1_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa <?php echo $projects_multitips_nav_link1_icon; ?>"></i></a>
											<a aria-label="Visit project web site" href="<?php echo $projects_multitips_nav_link2_url; ?>" target="_blank" data-position="top" data-tooltip="<?php echo $projects_multitips_nav_link2_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa <?php echo $projects_multitips_nav_link2_icon; ?>"></i></a>
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<section id="awards" class="section scrollspy">
				<h3 class="page-title white-text teal"><?php echo $awards_title; ?></h3>
				<div class="container">
					<!--Two cards per row-->
					<div class="row">
						<article id="<?php echo $awards_cisco_merit2_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<p>
											<span class="card-title"><a href="<?php echo $awards_cisco_merit2_title_url; ?>" target="_blank" class="teal-text hoverline"><?php echo $awards_cisco_merit2_title; ?></a></span>
										</p>
										<p class="brown-text">
										<a href="<?php echo $awards_cisco_merit2_location_url; ?>" target="_blank" class="award-loc-hoverline"><?php echo $awards_cisco_merit2_location; ?></a> | <?php echo $awards_cisco_merit2_period; ?>
										</p>
										<ul>
											<li><?php echo $awards_cisco_merit2_desc_line1; ?></li>
											<li><?php echo $awards_cisco_merit2_desc_line2; ?></li>
											<li><?php echo $awards_cisco_merit2_desc_line3; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<article id="<?php echo $awards_cisco_merit1_title; ?>">
							<div class="col s12 m6">
								<div class="card">
									<div class="card-content">
										<p>
											<span class="card-title"><a href="<?php echo $awards_cisco_merit1_title_url; ?>" target="_blank" class="teal-text hoverline"><?php echo $awards_cisco_merit1_title; ?></a></span>
										</p>
										<p class="brown-text">
										<a href="<?php echo $awards_cisco_merit1_location_url; ?>" target="_blank" class="award-loc-hoverline"><?php echo $awards_cisco_merit1_location; ?></a> | <?php echo $awards_cisco_merit1_period; ?>
										</p>
										<ul>
											<li><?php echo $awards_cisco_merit1_desc_line1; ?></li>
											<li><?php echo $awards_cisco_merit1_desc_line2; ?></li>
											<li><?php echo $awards_cisco_merit2_desc_line3; ?></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<section id="contact" class="section scrollspy full-height">
				<h3 class="page-title white-text teal"><?php echo $contact_title; ?></h3>
				<div class="container">
					<p>
						<a aria-label="<?php echo $contact_proemail_label; ?>" href="<?php echo $contact_proemail_url; ?>" data-position="top" data-tooltip="<?php echo $contact_proemail_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped" target="_blank"><i class="fa <?php echo $contact_proemail_icon; ?>"></i></a><a aria-label="<?php echo $contact_proemail_label; ?>" href="<?php echo $contact_proemail_url; ?>" class="hoverline" target="_blank"><?php echo $contact_proemail_title; ?></a>
					</p>
					<p>
						<a aria-label="<?php echo $contact_persoemail_label; ?>" href="<?php echo $contact_persoemail_url; ?>" data-position="top" data-tooltip="<?php echo $contact_persoemail_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped" target="_blank"><i class="fa <?php echo $contact_persoemail_icon; ?>"></i></a><a aria-label="<?php echo $contact_persoemail_label; ?>" href="<?php echo $contact_persoemail_url; ?>" class="hoverline" target="_blank"><?php echo $contact_persoemail_title; ?></a>
					</p>
					<p>
						<a aria-label="<?php echo $contact_mobilephone_label; ?>" href="<?php echo $contact_mobilephone_url; ?>" data-position="top" data-tooltip="<?php echo $contact_mobilephone_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa <?php echo $contact_mobilephone_icon; ?>"></i></a><a aria-label="<?php echo $contact_mobilephone_label; ?>" href="<?php echo $contact_mobilephone_url; ?>" class="hoverline"><?php echo $contact_mobilephone_title; ?></a>
					</p>
					<p>
						<a aria-label="<?php echo $contact_prophone_label; ?>" href="<?php echo $contact_prophone_url; ?>" data-position="top" data-tooltip="<?php echo $contact_prophone_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped"><i class="fa <?php echo $contact_prophone_icon; ?>"></i></a><a aria-label="<?php echo $contact_prophone_label; ?>" href="<?php echo $contact_prophone_url; ?>" class="hoverline"><?php echo $contact_prophone_title; ?></a>
					</p>
					<p>
						<a aria-label="<?php echo $contact_linkedin_label; ?>" href="<?php echo $contact_linkedin_url; ?>" data-position="top" data-tooltip="<?php echo $contact_linkedin_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped" target="_blank"><i class="fa <?php echo $contact_linkedin_icon; ?>"></i></a><a aria-label="<?php echo $contact_linkedin_label; ?>" href="<?php echo $contact_linkedin_url; ?>" class="hoverline" target="_blank"><?php echo $contact_linkedin_title; ?></a>
					</p>
					<p>
						<a aria-label="<?php echo $contact_github_label; ?>" href="<?php echo $contact_github_url; ?>" data-position="top" data-tooltip="<?php echo $contact_github_action; ?>" class="btn-floating btn-large waves-effect waves-light brown tooltipped" target="_blank"><i class="fa <?php echo $contact_github_icon; ?>"></i></a><a aria-label="<?php echo $contact_github_label; ?>" href="<?php echo $contact_github_url; ?>" class="hoverline" target="_blank"><?php echo $contact_github_title; ?></a>
					</p>
				</div>
			</section>
		</main>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96141210-3"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
 			function gtag() {
 				dataLayer.push(arguments);
 			}
 			gtag('js', new Date());
  			gtag('config', 'UA-96141210-3');
		</script>
		<!-- jQuery -->
		<script src="./assets/js/jquery.min.js"></script>
		<!-- Materialize - Compiled and minified JavaScript -->
		<script src="./assets/js/materialize.min.js"></script>
		<!-- PWA -->
		<script async src="./assets/js/main.js"></script>
		<script>
			let deferredPrompt;

			window.addEventListener('beforeinstallprompt', (e) => {
			  // Prevent the mini-infobar from appearing on mobile
			  e.preventDefault();
			  // Stash the event so it can be triggered later.
			  deferredPrompt = e;
			  // Update UI notify the user they can install the PWA
			  showInstallPromotion();
			});

			$(document).ready(function() {
				// Materialize - Initializers
				$(".scrollspy").scrollSpy();
			  	// Initialize collapse button
			 	 $(".button-collapse").sideNav({
			    	menuWidth: 190, // Default is 240
			   	 edge: "left", // Choose the horizontal origin
			    	closeOnClick: true
			  	});

				let clickNumber = 0;
				let isTouch = ('ontouchstart' in document.documentElement);

				if(isTouch) {
					var langElement = document.getElementsByClassName('lang');
					
					document.addEventListener('click', function(event) {
						for(let i = 0; i < langElement.length; i++) {
							
						}
						var isClickInside1 = langElement[0].contains(event.target);
						var isClickInside2 = langElement[1].contains(event.target);

  						if (!isClickInside1 && !isClickInside2) {
    						$('.lang-selector i').removeClass('arrowhover');
							$('.lang-selector + li ul').removeClass('langhover');
							clickNumber = 0;
  						} else {
							if(clickNumber === 0) {
								$('.lang-selector i').addClass('arrowhover');
								$('.lang-selector + li ul').addClass('langhover');
								clickNumber++;
							} else {
								$('.lang-selector i').removeClass('arrowhover');
								$('.lang-selector + li ul').removeClass('langhover');
								clickNumber--;
							}
						}
					});
				} else {
					$('.lang').mouseenter(function() {
						$('.lang-selector i').addClass('arrowhover');
						$('.lang-selector + li ul').addClass('langhover');
					});

					$('.lang').mouseleave(function() {
						$('.lang-selector i').removeClass('arrowhover');
						$('.lang-selector + li ul').removeClass('langhover');
					});
				}
			});
		</script>
	</body>
</html>