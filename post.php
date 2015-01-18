

<article class="single <?php echo($post_status); ?>">
    <a href ="/" ><img src="home.png" class="home_logo"></a>
    <div class="row">
        <div class="one-quarter meta">
            <div class="thumbnail">
                <img src="<?php echo($post_image); ?>" alt="<?php echo($post_title); ?>" />
            </div>

            <ul>
                <li>Written by <?php echo($post_author); ?></li>
                <li><?php echo($published_date); ?></li>
                <li>About <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></li>
                <li></li>
            </ul>
        </div>
        <div class="three-quarters post">
            <h2><?php echo($post_title); ?></h2>
		
	   <!-- Social Sharing Icons-->
	<?php include "social_sharing.php"; ?>
            <?php echo("<div class=\"first-letter\">".$post_content."</div>"); ?>
            <ul class="actions">
		<?php include "social_sharing.php"; ?><br/>
            </ul>
	    
	<?php include "comments.php" ?>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
</article>

<link rel="stylesheet" href="<?php echo($template_dir_url); ?>css/prism.css">
<script type="text/javascript" src="<?php echo($template_dir_url); ?>js/prism.js"></script>
