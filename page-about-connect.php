<?php get_header(); ?>

<?php $view = 'modules/views/about-connect'; ?>
<?php require( locate_template( 'modules/loop_default.php' ) ); ?>

    <div id="glamour" class="container-fluid no-padding">
        <div class="container">
            <div class="col-sm-12 col-md-5 ">

            	<?php if( get_field('intro_image') ): ?>

					<img class="img-responsive center-block" src="<?php the_field('intro_image'); ?>" />

				<?php endif; ?>
                
            </div>

            <div class="col-sm-12 col-md-7 ">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end the loop?>
            </div>
        </div>
    </div>

<!-- 1st Section -->

    <div id="no-sweat-pants-zone" class="container-fluid no-padding">
        <div class="container">
            <div class="col-sm-12 col-md-6">
     			<?php the_field('first_section'); ?>

            </div>

            <div class="col-sm-12 col-md-6">
                <div class="purple-container">
                    <?php the_field('purple_box_1'); ?>
                </div>
            </div>
        </div>
    </div>

<!-- 2nd Section  -->
    <div id="street-cred" class="container-fluid no-padding">
        <div class="container">
            <div class="col-sm-12 col-md-6">
                <?php the_field('second_section'); ?>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="purple-container">
                    <?php the_field('purple_box_2'); ?>
                </div>
            </div>
            </div>
        </div>
    </div>

<!-- media mentors -->
    <div id="media-mentors" class="container-fluid no-padding">
        <div class="container">
            <p><?php the_field('mentor_content'); ?></p>
            <?php if( have_rows('media_mentors') ): ?>

            <ul class="list-unstyled ge-testimonial-list">

                <?php while( have_rows('media_mentors') ): the_row(); 

        // vars
                $image = get_sub_field('mentor_photo');
                $info = get_sub_field('mentor_info');
                $name = get_sub_field('mentor_name');
                ?>

                <li class="media-mentors-info">
                    <div class="center-block img-responsive">
                        <img src="<?php echo $image; ?>">
                    </div>
                    <div class="start-resource text-center">
                        <p><strong><?php echo $name; ?></strong></p>
                        <p><?php echo $info; ?></p>
                    </div>
                </li>
                <?php endwhile; ?>

            </ul>

        <?php endif; ?>
        </div>
    </div>

<!-- Gwens Bio -->

    <div id="gwens-bio" class="container-fluid no-padding">
        <div class="container">
            <div class="col-sm-12 col-md-6">
            	<?php if( get_field('bio_image') ): ?>

					<img src="<?php the_field('bio_image'); ?>" />

				<?php endif; ?>
            </div>

            <div id="gwens-bio-content" class="col-sm-12 col-md-6">
               	<?php the_field('bio_section'); ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>