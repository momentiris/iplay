<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
    <div class="role__nav nav_nav">
        <div class="role__nav-intro">
            <h1>Whats your role?</h1>
            <span class="line"></span>
        </div>

        <div class="role__info role__info-hide">

        </div>
        <h2 class="hidden role__athlete">I'm an athlete.</h2>
        <h2 class="hidden role__influencer">I'm an influencer.</h2>
        <h2 class="hidden role__coach">I'm a coach.</h2>
        <h2 class="hidden role__scout">I'm a scout.</h2>
        <h2 class="hidden role__fan">I'm a fan.</h2>
        <span class="role_back">
            Go back ←
        </span>
        <span class="toggle_role_nav">Close x </span>
    </div>
    <section class="hero__wrap">
        <h1><?php the_field('hero_header') ?></h1>
        <h3><?php the_field('under_hero_header') ?></h4>
        <div class="button">
            <span>GET THE APP</span>
        </div>

        <div class="display_mobile_image_first hide"></div>
        <div class="display_mobile_image_second hide "></div>
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
            <div class="button role_button">
                <span>Read more about how Iplay benefits you.</span>
            </div>
        </section>
    </section><!-- home__superusers -->

<div class="sections_home">
    <section class="branding sections">
        <h1><?php the_field('branding_header'); ?></h1>
        <p><?php the_field('branding_content');?></p>

        <p class="role role_button">What's your role?</p>

        <div class="mobile_image b">
        </div>
    </section><!-- branding -->

    <section class="communications sections">
        <h1><?php the_field('communications_header')?></h1>
        <p><?php the_field('communications_content')?></p>

        <p class="role role_button">What's your role?</p>

        <div class="mobile_image c">
        </div>
    </section><!-- communications -->

    <section class="insurance sections">
        <h1><?php the_field('insurance_header')?></h1>
        <p><?php the_field('insurance_content')?></p>

        <p class="role role_button">What's your role?</p>

        <div class="mobile_image i">
        </div>
    </section><!-- insurance -->
</div><!-- sections_home -->
<div class="newsletter">
    <h1>Newsletter</h1>
    <p> Subscribe to our newsletter and get latest news and offers.</p>
    <input class="email" type="email" name="email" placeholder="email@adress.com"> </input>
</div>
<section class="home__download">
    <h1>Download the app for free</h1>
    <p>Iplay offers athletes support before, during & after their sporting career through a variety of services depending on where you are in your career.</p>
    <div class="badge__wrap">
        <a href='https://play.google.com/store/apps/details?id=com.iplay&hl=en&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/></a>

        <a href="https://itunes.apple.com/se/app/iplay-sport/id1068927526?l=en&mt=8"> <img class="apple"alt="Get it on Apple Store" src="https://www.designpieces.com/wp-content/uploads/2016/02/download-on-the-app-store.png"/></a>
    </div>


</section>
<?php get_footer(); ?>
