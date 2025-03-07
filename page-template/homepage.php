<?php

/**
 * Template Name: Homepage
 *
 *
 * @package Aliza Recipes
 */



 $id = get_the_ID();
$main_title = get_field('main_title',$id);
$main_text = get_field('homepage_text',$id);

$categories = get_terms([
    'taxonomy' => 'recipe_category',
    'hide_empty' => false,
]);

$args = [
    'post_type' => 'recipe',
    'posts_per_page' => -1,
    'meta_query' => [
        [
            'key' => 'popular',
            'value' => '1',
            'compare' => '='
        ]
    ]
];


$recipes = get_posts($args);
?>

<?php get_header()?>

    <div class="aliza-page homepage">

        <section class="homepage__hero">

            <div class="hero-content">
                <h1 class="hero-title"><?=$main_title?></h1>
                <div class="text-content">
                    <?= $main_text?>
                </div>
            </div>
            <div class="hero-image">
                <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                <?php else:?>
                        <img src="<?=get_template_directory_uri()?>/assets/images/banner.png" />
                <?php endif; ?>
            </div>
       

        </section>

        
       
        <section class="homepage__categories">
            <?php if (!empty($categories)): ?>
                <?php foreach ($categories as $category):
                    $taxonomy = 'recipe_category';
                    if ($category) {
                        $category_id = $category->term_id;
                        $title = $category->name;
                        $image = get_field('image', $taxonomy . "_" . $category_id);
                        $slug = $category->slug;
                        $count = $category->count;
                    }
                    
                ?>
                    <!-- Category card -->  
                        <a class="category-card" href="<?php echo home_url().'/categories/'. $slug ?>" >
                            <div class="image">
                                <img src="<?=$image['url']?>" alt=""/>
                            </div>
                            <h4 class="title"><?php echo $title ?></h4>
                        </a>
                    <!-- /Category card -->
                <?php endforeach; ?>

            <?php endif; ?> 
        </section>


        <section class="homepage__recipes">
            <h2 class="title"> מתכונים פופלריים</h2>
            <div class="recipes-wrapper">
            <?php if($recipes):?>
                <?php foreach($recipes as $recipe):?>
                <a href="<?=get_permalink($recipe->ID)?>" class="recipe-card">
                   
                    <?php if (has_post_thumbnail($recipe->ID)): ?>
                        <div class="recipe-image">
                         <?php echo get_the_post_thumbnail($recipe->ID, 'medium'); ?>
                        </div>
                    <?php endif; ?>
                    
                    <h3 class="recipe-title"><?=$recipe->post_title?></h3>
            </a>
                <?php endforeach;?>
            <?php endif;?>
            </div>
        </section>
    </div>
<?php get_footer()?>