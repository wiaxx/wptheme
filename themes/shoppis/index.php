<?php get_header(); ?>

<div class="index">
<?php
$the_query = new WP_Query(array(
    'posts_per_page' => 6,
));
?>

<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


    <div class="all-news-wrapper">

    

    <div class="thumbnail"> <?php the_post_thumbnail('medium'); ?> </div>
    <div class="news-background">
      <h3 class="all-news-title"><?php the_title(); ?> </h3>  
      <span class="date"> <?php the_time(get_option('date_format')); ?> </span>
     <?php the_content(); ?> 
        </div>

        </div>



    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    
    </div>
    </div>
    

<?php get_footer(); ?>
