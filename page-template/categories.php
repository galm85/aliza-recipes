<?php

/**
 * Template Name: categories
 *
 *
 * @package Aliza Recipes
 */



 $id = get_the_ID();

$categories = get_terms([
    'taxonomy' => 'recipe_category',
    'hide_empty' => false,
]);
?>

<?php get_header()?>

    <div class="aliza-page categories-page">

        <h1 class="categories-page__title">המתכונים של עליזה</h1>
        <section class="categories-page__wrapper">
      
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
                        <div class="card-image">
                        <img src="<?=$image['url']?>" alt=""/>
 
                        </div>
                        <h4 class="card-title"><?php echo $title ?></h4>
                    </a>
                <!-- /Category card -->
            <?php endforeach; ?>

        <?php endif; ?> 
        </section>
    </div>
<?php get_footer()?>