<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

    <section class="hero__wrap">
        <h1><?php the_field('hero_header') ?></h2>
        <h3><?php the_field('under_hero_header') ?></h4>
        <div class="button">
            <span>GET THE APP</span>
        </div>

        <div class="display_mobile_image">

        </div>
    </section><!-- hero__wrap -->

    <?php $args = array(
        "posts_per_page"   => 3,
        "tag"              => "Active",
        "post_type"        => "superuser",
        "post_status"      => "publish"
    );
    $superUsers = get_posts($args); ?>

    <section class="home__superusers">
        <div class="superusers__slider">

            <?php foreach ($superUsers as $superUser): ?>
                <?php var_dump( $superUser); ?>
                <div class="superuser__slide">

                    <h3><?php the_field('superuser_name', $superUser->ID); ?></h3>
                    <span><?php the_field('superuser_quote') ?></span>


                </div>

            <?php endforeach; ?>

        </div>
    </section><!-- home__superusers -->


<?php get_footer(); ?>
