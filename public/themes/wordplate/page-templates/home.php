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
<<<<<<< HEAD

                    <h3><?php the_field('superuser_name', $superUser->ID); ?></h3>
                    <span><?php the_field('superuser_quote') ?></span>


=======
                    <h3><?php the_field('superuser', $superUser->ID); ?></h3>
>>>>>>> e2e101c8c5f31b3f845086228a6e29b4d83c28f0
                </div>

            <?php endforeach; ?>

        </div>
    </section><!-- home__superusers -->

    <section class"branding">
        <h1 class="branding_header"> Build your brand </h1>
        <p class="branding_content">Iplay Sport have an unique solution that will help you build your brand </p>

        <button class="role">What's your role?</button>

        <div class="display_mobile_image">
        </div>
    </section><!-- branding -->

    <section class"communications">
        <h1 class="header"> Own your communication</h1>
        <p class="content">Turn off comments, posts on all your social medias from Iplay Sport or just share it with your teammates</p>

        <button class="role">What's your role?</button>

        <div class="display_mobile_image">
        </div>
    </section><!-- communications -->

    <section class"insurance">
        <h1 class="header">Insurance,Discover job openings, Financial advisement</h1>
        <p class="content">Discover the best insurance for you, find extra income or get investment advisement</p>

        <button class="role">What's your role?</button>

        <div class="display_mobile_image">
        </div>
    </section><!-- insurance -->

<?php get_footer(); ?>
