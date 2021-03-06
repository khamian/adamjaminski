<?php
    $testimonials = get_field('testimonial', 'option');

    if( $testimonials ):

        $rand_key = array_rand($testimonials, 1);
        $random_testimonial = $testimonials[$rand_key];

?>

    <div class="section section--testimonials">

        <div class="mask"></div>

        <video muted loop autoplay playsinline poster="<?= THEME_URL; ?>/assets/img/runnew.jpg">
			<source type="video/mp4" src="<?= THEME_URL; ?>/assets/img/runnew.mp4">
			<source type="video/mp4" src="<?= THEME_URL; ?>/assets/img/runnew.webm">
		</video>

        <h1 class="offscreen">Cytaty</h1>

        <div class="container">

            <div class="row">

                <blockquote class="blockquote">

                    <p class="blockquote__text">
                        <?php echo $random_testimonial["testimonial_content"]; ?>
                    </p>

                    <?php if( ( !empty($random_testimonial["testimonial_author"]) ) ): ?>

                        <span class="blockquote__author">
                            <?php echo $random_testimonial["testimonial_author"]; ?>
                        </span>

                    <?php endif; ?>

                </blockquote>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section section-testimonials -->

<?php endif; ?>