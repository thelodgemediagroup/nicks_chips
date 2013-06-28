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
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/header.gif" alt="Nicks Chips - Delivering the hottest brand in town to your store!" />
			</header>

			<nav>
				<?php nc_navigation_menu(); ?>
			</nav>
