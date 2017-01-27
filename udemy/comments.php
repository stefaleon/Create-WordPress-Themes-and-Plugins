
    <?php if (comments_open()) {
    // Show comments
    ?>
    <h3>Comments</h3>

    <div class="comment-form">
        <details>
            <summary>Add a new comment</summary>
            <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentform">
                <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID" />
                <div class="form-group">
                    <label>Name / Alias (required)</label>
                    <input type ="text" name="author" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Email Address (required, not shown)</label>
                    <input type ="text" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Website (optional)</label>
                    <input type ="text" name="url" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea rows="7" cols="60" name="comment" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>

                </div>
            </form>
        </details>
    </div>

    <div class="list-comments">
            <?php
            // loop through comments
            $reversed = array_reverse($comments);
            foreach($reversed as $comment) {  ?>
                <div class="siacomment">
                    <p> By:
                        <a href="<?php comment_author_url(); ?>">
                            <?php comment_author(); ?>
                        </a>
                        <small>Posted on:
                            <?php comment_date(); ?>
                            at <?php comment_time('H:i:s'); ?>
                        </small>
                    </p>
                    <div class="comment-body">
                        <p><?php comment_text();  ?></p>
                    </div>
                </div>
            <?php } ?>
    </div>

    <?php
        } else {
        echo '<h5 class="text-center">Comments are closed for this post.</h5>';
        }
     ?>
