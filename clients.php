<?php

/*
	Template Name: Clients
*/

get_header();  ?>
<div id="styleBox" class="projectsContainer clearfix">
<h2 id="clientHeader">Brands WE Believe in</h2>


<div class="filterContainer">

<form class="adventureFilter" action="submit">
<button>Adventure</button>
</form>

<form class="environmentFilter" action="submit">
<button>Environment</button>
</form>

<form class="equityFilter" action="submit">
<button>Equity</button>
</form>

<form class="financialFilter" action="submit">
<button>Financial</button>
</form>

<form class="foodFilter" action="submit">
<button>Food</button>
</form>

<form class="healthSportFilter" action="submit">
<button>Health + Sport</button>
</form>
<form class="client-grid-itemFilter" action="submit">
<button>Show All</button>
</form>
</div>


<div class="clientGrid">
<div class="client-grid-sizer"></div>
<div class="client-gutter-sizer"></div>

<?php

$projectTerms = wp_get_post_terms( $post->ID, 'client_category' ); 

$featuredQuery = new WP_Query( 
array( 
    'post_type' => 'clients', 
    'project_type' => $projectTerms, 
    'post__not_in' => array( $post->ID ),
    ) 
    );  ?>
    <?php if ( $featuredQuery->have_posts() ) : ?>
        <?php while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>
          <div class="client-grid-item <?php $tech= get_the_terms($post->ID, 'client_category', '', ''); ?>
            <?php foreach ($tech as $tec ) {
                echo $tec->slug;
                echo " ";
            } ?>">
          <a href="<?php the_field('url') ?>" target="_blank"><?php the_post_thumbnail('full'); ?></a> 
          </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
<?php endif; ?>



</div> <!-- grid ends here -->
</div> <!-- projectsContainer ends here -->
<?php get_footer(); ?>
<div class="clientLowerImage">
    <video class="videoLoop" autoplay loop="true" poster="<?php echo get_template_directory_uri(); ?>/img/loop4poster.png">
      <source src="<?php echo get_template_directory_uri(); ?>/img/video/Loop4.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/img/video/Loop4.webm" type="video/webm">
    </video>
</div>