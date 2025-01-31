
<section class="comments-section">

<?php
    if ( 'post' === get_post_type() || 'recipe' === get_post_type() ) :
    ?>
    <form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="commentform" class="comment-form">
        <h3> הוסיפו תגובה</h3>
        <p class="comment-form-author">
            <label for="author">שם:</label>
            <input type="text" name="author" id="author" value="" size="30" required="required" />
        </p>
        

        <p class="comment-form-comment">
            <label for="comment">תגובה</label>
            <textarea name="comment" id="comment" cols="45" rows="8" required="required"></textarea>
        </p>

        <p class="form-submit">
            <input name="submit" type="submit" id="submit" class="submit" value="שלחו" />
            <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID" />
            <input type="hidden" name="redirect_to" value="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" />
        </p>
    </form>
<?php endif; ?>

<?php if (have_comments()) : ?>
   
    <ul class="comments-list">
    <h2>תגובות</h2>
        <?php
        function custom_comment_template($comment, $args, $depth) {
            ?>
            <li class="single-comment">
                <div class="comment-meta">
                    <span class="comment-author"><?php comment_author(); ?></span> | 
                    <span class="comment-date"><?php comment_date('d/m/Y'); ?></span>
                </div>
                
                <div class="comment-content">
                    <?php comment_text(); ?>
                </div>
            </li>
            <?php
        }

        wp_list_comments(array(
            'callback' => 'custom_comment_template'
        ));
        ?>
    </ul>
<?php endif; ?>
<!-- Display Comment Form -->



</section>