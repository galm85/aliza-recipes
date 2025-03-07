<?php get_header(); ?>

<div class="aliza-page single-recipe">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); 

            $post_data = get_post();
            
        ?>

        <section class="single-recipe__wrapper">

            <div class="single-recipe__content">
                
                <h1 class="title"><?= the_title()?></h1>
                <div class="content"><?php the_content(); ?></div>
        
            </div>

           
            <div class="single-recipe__image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                <?php endif; ?>
            </div>
        </section>

        <button onclick="window.history.back()" class="back-button"> חזרה</button>

        <section class="comments">
        <?php 
            if (comments_open() || get_comments_number()) :
                comments_template();  // This will load the comments template (comments.php)
            endif;
            ?>
        </section>

        


            

           
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
