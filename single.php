<?php get_header(); ?>

<div class="main">

    <div id="singleProject" class="projectContent projectsContainer">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="aboutProject">
          <h1><?php the_title(); ?></h1>
          <h2><?php the_field('by_line') ?></h2>
          <p><?php the_content(); ?></p>
        </div>

        <div class="vimeoBox1">
        <?php the_field('vimeo1') ?>
        </div>

        <?php if( get_field('blurb_1') ): ?>
         <div class="blurbOne blurb">
           <p id="blurb1P">
           <?php the_field('blurb_1') ?>
           </p>
         </div>
        <?php endif; ?>

        <?php if( get_field('new_blurb_1') ): ?>
         <div class="blurbOne blurb">
           <p id="blurb1P">
           <?php the_field('new_blurb_1') ?>
           </p>
         </div>
        <?php endif; ?>

        <div class="projectGallery">
        <?php 

        $images = get_field('image_gallery');

        if( $images ): ?>
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="carousel" class="flexslider">
                <ul class="slides">
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>   
        </div>
        




      <?php if( get_field('blurb_2') ): ?>
         <div class="blurbTwo blurb">
           <p id="blurb2P">
           <?php the_field('blurb_2') ?>
           </p>
         </div>
        <?php endif; ?>

      <?php if( get_field('new_blurb_2') ): ?>
         <div class="blurbTwo blurb">
           <p id="blurb2P">
           <?php the_field('new_blurb_2') ?>
           </p>
         </div>
        <?php endif; ?>

        <div class="vimeoBox2">
        <?php the_field('vimeo2') ?>
        </div>
        <div class="secondaryGallery">
            <div class="galleryGrid">
            <div class="gallery-grid-sizer"></div>
            <div class="gallery-gutter-sizer"></div>
          <?php $imgs = get_field('secondary_gallery') ?>
          <?php foreach ($imgs as $img): ?>
            <div class="gallery-grid-item">
            <img src="<?php echo $img['sizes']['full']; ?>"/>
            </div>
          <?php endforeach; ?>      
            </div> <!-- grid ends here -->
        </div>

        <div class="deviceMockups">
            <div class="galleryGrid">
            <div class="gallery-grid-sizer"></div>
            <div class="gallery-gutter-sizer"></div>
          <?php $imgs = get_field('devicemockup') ?>
          <?php foreach ($imgs as $img): ?>
            <div class="gallery-grid-item">
             <a target="_blank" href="<?php the_field('devicemockupurl') ?>">
             <div class="teamInfo">
             <div class="inner">
             <div class="innerContent">
               <h2>Visit Site</h2>
             </div>
             </div>
             </div>
            <img src="<?php echo $img['sizes']['full']; ?>"/>
            </a>
            </div>
          <?php endforeach; ?>      
            </div> <!-- grid ends here -->
        </div>

        <?php if( get_field('blurb_3') ): ?>
         <div class="blurbThree blurb">
           <p id="blurb3P">
           <?php the_field('blurb_3') ?>
           </p>
         </div>
        <?php endif; ?>

        <?php if( get_field('new_blurb_3') ): ?>
         <div class="blurbThree blurb">
           <p id="blurb3P">
           <?php the_field('new_blurb_3') ?>
           </p>
         </div>
        <?php endif; ?>



        <div id="nav-below" class="navigation">
      
          <p class="nav-next"><?php next_post('%','Next Project &raquo;', 'no'); ?></p>

          <p class="nextPostTitle"><?php
$next_post = get_next_post();
if ( is_a( $next_post , 'WP_Post' ) ) { ?>
<?php echo get_the_title( $next_post->ID ); ?>
<?php } ?></p>

          <p class="seeAll"><a href="<?php echo get_site_url(); ?>/projects">SEE ALL WORK</a></p>
        </div><!-- #nav-below -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.projectContent -->
</div> <!-- /.main -->

<?php get_footer(); ?>