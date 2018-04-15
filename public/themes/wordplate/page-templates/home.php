<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

    <section class="hero__wrap">
        <h1><?php the_field('hero_header') ?></h2>
        <h3><?php the_field('under_hero_header') ?></h4>
        <div class="button">
            <span>GET THE APP</span>
        </div>

        <div class="display_mobile_image_first hide"></div>
        <div class="display_mobile_image_second hide"></div>
    </section><!-- hero__wrap -->

    <?php $args = array(
        "posts_per_page"   => 3,
        "tag"              => "Active",
        "post_type"        => "superuser",
        "post_status"      => "publish"
    );
    $superUsers = get_posts($args); ?>

    <section class="home__superusers">
        <section class="superusers__info">
            <h2>Our Superusers</h2>
            <p>We’re working close with professional athletes in order to get the best possible experience for everyone. Iplay is made for real athlethes, by real atheletes.</p>
        </section>
        <div class="superusers__slider">

            <?php foreach ($superUsers as $key => $superUser): ?>
                <div data-position="<?php echo $key ?>" data-positionnext="<?php echo ($key + 1) == 3 ? 0 : ($key + 1); ?>"class="superuser__slide" style="background-image: url('<?php the_field('superuser_image', $superUser->ID); ?>')">
                    <h3><?php the_field('superuser_name', $superUser->ID); ?></h3>
                    <span><?php the_field('superuser_quote') ?></span>
                    <div class="superuser__player__info">
                    </div>
                </div>

            <?php endforeach; ?>

        </div> <!-- superusers__slider -->

        <section class="superuser__end">
            <h2>Are you a professional?</h2>
            <div class="button">
                <span>Read more about Iplay benefits you.</span>
            </div>
        </section>
    </section><!-- home__superusers -->
<section class="sections_home">
    <section class"branding">
        <h1 class="branding_header"><?php the_field('branding_header'); ?></h1>
        <p class="branding_content"><?php the_field('branding_content');?></p>

        <button class="role">What's your role?</button>

        <div class="mobile_image">
        </div>
    </section><!-- branding -->

    <section class"communications">
        <h1 class="header"><?php the_field('communications_header')?></h1>
        <p class="content"><?php the_field('communications_content')?></p>

        <button class="role">What's your role?</button>

        <div class="mobile_image">
        </div>
    </section><!-- communications -->

    <section class"insurance">
        <h1 class="header"><?php the_field('insurance_header')?></h1>
        <p class="content"><?php the_field('insurance_content')?></p>

        <button class="role">What's your role?</button>

        <div class="mobile_image">
        </div>
    </section><!-- insurance -->
</section><!-- sections_home -->
<?php get_footer(); ?>
