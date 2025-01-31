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


echo "<pre>";
echo $slug;
print_r($category);
print_r($recipes);


 ?>
<div class="page">
    <h1><?=$category->name?></h1>
    <h3>recipes</h3>
    <?php if($recipes): ?>
        <?php foreach($recipes as $recipe):?>
            <a href="<?=get_permalink($recipe->ID)?>" class="recipe-card">
                <h3><?=$recipe->post_title?></h3>
                <?php if (has_post_thumbnail($recipe->ID)): ?>
                <div class="recipe-image">
                    <?php echo get_the_post_thumbnail($recipe->ID, 'medium'); ?>
                </div>
            <?php endif; ?>
            </a>
        <?php endforeach;?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>