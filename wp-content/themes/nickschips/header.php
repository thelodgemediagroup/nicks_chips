<!DOCTYPE html>
<html>
<head>
	<title>Nick's Chips</title>

	<?php wp_head(); ?>

</head>
<body>

	<div class="wrapper">

		<section class="main-content">

			<header>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/header.gif" alt="Nicks Chips - Delivering the hottest brand in town to your store!" />
				</a>
			</header>

			<nav>
				<?php nc_navigation_menu(); ?>
			</nav>
