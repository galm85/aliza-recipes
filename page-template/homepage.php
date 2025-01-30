<?php

/**
 * Template Name: Homepage
 *
 *
 * @package Aliza Recipes
 */



 $id = get_the_ID();
$main_title = get_field('main_title',$id);

$categories = get_terms([
    'taxonomy' => 'recipe_category',
    'hide_empty' => false,
]);
?>

<?php get_header()?>

    <div class="page">

        <h1><?=$main_title?></h1>
        <section class="categories-container">
        <!-- <?= '<pre>'
        ?>
        <?php print_r($categories)?> -->
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
                    <a class="category-card" href="<?php echo home_url().'/'. $slug ?>" >
                        <div class="category-card__image">
                        <!-- <?php print_r($image)?> -->
                        <img src="<?=$image['url']?>" alt=""/>
 
                        </div>
                        <h4 class="category-card__title"><?php echo $title ?></h4>
                    </a>
                <!-- /Category card -->
            <?php endforeach; ?>

        <?php endif; ?> 
        </section>
    </div>
<?php get_footer()?>