<?php
// Category Page - display all Recipes in a category

get_header();

$current_url = home_url(add_query_arg(array(),$wp->request));
$slug = basename(parse_url($current_url, PHP_URL_PATH));


$args = [
    'post_type' => 'recipe',
    'tax_query' => [[
        'taxonomy' => 'recipe_category',
        'field'    => 'slug',
        'terms'    => $slug, 
        
    ]],
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page'=>-1
];

$category = get_term_by('slug', $slug, 'recipe_category');
$recipes = get_posts($args);



 ?>
<div class="aliza-page recipe-category-page">
    <h1 class="recipe-category-page__title"><?=$category->name?></h1>
    <section class="recipe-category-page__wrapper">
    <?php if($recipes): ?>
        <?php foreach($recipes as $recipe):?>
            <a href="<?=get_permalink($recipe->ID)?>" class="recipe-card">
                
                <?php if (has_post_thumbnail($recipe->ID)): ?>
                <div class="recipe-image">
                    <?php echo get_the_post_thumbnail($recipe->ID, 'medium'); ?>
                </div>
            <?php endif; ?>
            <h3 class="card-title"><?=$recipe->post_title?></h3>
            </a>
        <?php endforeach;?>
    <?php endif; ?>
    </section>
</div>



<?php get_footer(); ?>