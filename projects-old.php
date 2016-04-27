<?php

/*
	Template Name: projects
*/

get_header();  ?>

<div class="projectsIntro">
  <p>WE TAKE OUR NAME FROM THE SIMPLE AND EFFECTIVE ELECTRONIC COMMUNICATION FORMAT, MORSE CODE. 
</p>
</div>
<div class="projectsContainer">

<div class="projectsHeader">
  <form class="categories" action="submit">
    <button id="categoriesButton">Categories</button>
  </form>
  <form class="grid-itemFilter" action="submit">
    <button>Show-All</button>
  </form>
  <form class="projectsFilter" action="submit">
    <button class="filterButton">Content</button>
  </form>
  <form class="strategyFilter" action="submit">
    <button>Strategy</button>
  </form>
  <form class="designFilter" action="submit">
    <button>Design</button>
  </form>
  <form class="engagementFilter" action="submit">
    <button>Engagement/Activation</button>
  </form>
</div>

<div class="grid">
<div class="grid-sizer"></div>
<div class="gutter-sizer"></div>

  <!-- loop for strategy -->
<?php

$projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 

$featuredQuery = new WP_Query( 
array( 
    'post_type' => 'project', 
    'project_type' => $projectTerms, 
    'post__not_in' => array( $post->ID ),
    ) 
    );  ?>
    <?php if ( $featuredQuery->have_posts() ) : ?>
        <?php while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>
          <div class="grid-item<?php $tech= get_the_terms($post->ID, 'project_type', '', ''); ?>
            <?php foreach ($tech as $tec ) {
                echo $tec->slug;
                echo " ";
            } ?>">
            <a href="<?php the_permalink(); ?>">
            <div class="teamInfo">
            <div class="inner">
            <div class="innerContent">
             <h2><?php the_title(); ?></h2>
            </div>
            </div>
            </div>
            <div class="teamPhoto">
            <?php the_post_thumbnail('full'); ?>
            </div>
            </a>
          </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else:  ?>
<?php endif; ?>

  </div> <!-- /.grid -->
</div> <!-- .projectsContainer ends here -->
<?php get_footer(); ?>