<?php get_header();?>
<main>

<?php if(have_posts()):while(have_posts()): the_post();  ?>
<?php the_content(); ?>
<?php endwhile; endif;
slider(); ?>

<button class="changeImgBtn" id="changeImgBtn" >Random Pic</button>
<div class="lds-dual-ring"></div>
<img class="slider"   src="">
		
</main>
<?php get_footer(); ?>