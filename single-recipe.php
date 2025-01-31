<?php get_header(); ?>

<div class="page single-recipe">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); 

            $post_data = get_post();
            
        ?>
        <p><button onclick="window.history.back()" class="back-button">← Back to Previous Page</button></p>

            <div class="single-project__image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                <?php endif; ?>
            </div>

            <div class="single-project__content">
                
                <h1 class="title"><?= the_title()?></h1>
                

                <div class="content"><?php the_content(); ?></div>
        
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
