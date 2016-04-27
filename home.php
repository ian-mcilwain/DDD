<?php

/*
    Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div id="homeUpper" class="main mainUpper">
  <div class="inner">
    <div class="innerContent">
    <h2>Giving agency to good.</h2>
  </div>
  </div>
  <a href="#mainLowerh2"><h3 class="CTA"><i class="fa fa-angle-down"></i></h3></a>
</div> <!-- /.mainUpper -->

<div class="main mainLower">
  <div class="inner">
    <div class="innerContent">
<h2 id="mainLowerh2">Featured Work</h2>
<div class="featuredProjects">
<ul>
<?php

$projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 

$featuredQuery = new WP_Query( 
array( 
    'post_type' => 'project', 
    'project_type' => $projectTerms, 
    'post__not_in' => array( $post->ID ),
    'posts_per_page' => 5,
    'tax_query' => array(
        array(
            'taxonomy' => 'project_type',
            'field'    => 'slug',
            'terms'    => 'featured',
            ),
        ),
    ) 
    );  ?>
    <?php if ( $featuredQuery->have_posts() ) : ?>
        <?php while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>
        <li>
        <a class="featuredLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <div class="projectImageBox">
            <?php the_post_thumbnail("full"); ?>
        </div>
        </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
<?php endif; ?>
</ul>
</div>
<h3><a href="<?php echo get_site_url(); ?>/projects">See all work</a></h3>
    </div>
  </div>
</div> <!-- .mainLower -->

<?php get_footer(); ?>