<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<?php  wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<h1 class="logo"><a href=<?php echo home_url(); ?>><?php
		$blogtitle= get_bloginfo( 'name', 'display' );
		$titlearray=explode(' ',trim($blogtitle));
		echo "<span>";
		echo $titlearray[0];
		echo "</span>";
		echo "<span>";
		echo $titlearray[1];
		echo "</span>";

		  ?></a></h1>
		<input type="checkbox" class="nav_toggle"  id="nav_toggle">
		<label for="nav_toggle" class="nav_toggle_label" ><span></span></label>
		<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
<?php
wp_nav_menu( array( 
    'theme_location' => 'social-menu', 
    'container_class' => 'socialBig' ) ); 
?>

	

	</header>