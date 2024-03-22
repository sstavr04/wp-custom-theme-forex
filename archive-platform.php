<?php get_header(); ?>

<main role="main" aria-label="Content">
    <div class="bg-gray">
        <div class="site-box platform-slider ">
            <h1>Platforms</h1>
            <p class="platform-sub-heading">
            Elevate your trading experience to cosmic heights with our range of powerful and versatile platforms. MetaTrader 4, MetaTrader 5, and Webtrader provide you with the advanced tools and resources needed to navigate the universe of trading opportunities with confidence and ease.
            </p>
        </div>
    </div>
    <div class="site-box platforms-archive-container" >

    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

            <div class="platform-box">
                <!-- <div class="row"> -->
                    <div class="column platform-box-col-1">
                        <h2><?php the_title(); ?></h2>
                        <p><?php  echo get_post_meta( get_the_ID(), 'platform_description', true );  ?></p>
                        <a class="btn" href="<?php the_permalink() ?>" style="width:94px">Learn more</a>
                    </div>
                    <div class="column platform-box-col-2">
                        <?php                          
                        the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
                        ?>

                    </div>
                <!-- </div> -->
            </div>


    <?php endwhile; ?>

    <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>
