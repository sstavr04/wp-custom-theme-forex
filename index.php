<?php get_header(); ?>

<main role="main" aria-label="Content">
    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
        <!-- /article -->

    <?php endwhile; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
