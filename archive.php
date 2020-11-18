<?php get_header();?>

<main >
	<h1><?php single_cat_title();  ?></h1>
	<div class="portfolio">
<?php if(have_posts()):while(have_posts()): the_post();  ?>
	<div class="portfolioCard">
		<h3><a href=
			<?php
			echo "'";

			the_permalink(); 
			echo "'>";
			the_title();
			echo "</a></h3>";

			?>

<?php 
the_excerpt();
echo "<a href='";
the_permalink(); 
echo "'>";
if(has_post_thumbnail()) 
	{ 
		the_post_thumbnail(); 
	} 
echo "</a></h3>";


	?>
</div>
<?php endwhile; endif;

 ?>
</div>
</main>
<?php get_footer(); ?>