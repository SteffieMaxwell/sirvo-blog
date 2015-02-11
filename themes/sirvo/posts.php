    <?php theme_include('header'); ?>

<main class="bs-docs-masthead" id="content" role="main" style="background-color:white;background-repeat:no-repeat;background-size:cover;background-position:center;background-image:url('<?php echo base_url("content/img/spillbg.jpg"); ?>'); ">
 <div style="padding: 50px 0;">
  
  <div id="subscribe-container" class="container" style="padding-top:13em;">
    <p style="font-weight:lighter;font-size:3em;color:white;">OUR BLOG TO YOUR INBOX</p>
    <input id="email" placeholder="ENTER YOUR EMAIL" class="header-input" type="email" required="required">
    <button id="subscribe-button" class="btn btn-primary">SUBSCRIBE</button>
  </div>
  
 </div>
 </div>
 <div class="container" style="border-bottom:1px solid #ddd;border-top:1px solid #ddd;text-align:left;padding-bottom:1em;padding:1em;min-height:60px;background-color:white;">
    <div class="col-md-6 col-sm12">
    <b style="text-align:center;font-weight:500;letter-spacing:2px;font-size:3em;color:#3D4551;">
    <?php if( current_url() == '/' ){
        echo "THE LATEST";
    }else{
        $url = substr(current_url(), strrpos(current_url(), '/') + 1);
        $category = Category::slug($url);
        if( $category != null ){
            echo $category->title;
        }else{
            echo "THE LATEST";
        }
    }?>
    </b>
    </div>
 </div>
</main>

        <div class="container">
        <div class="col-md-9" style="padding-bottom:20px;">
            <?php if(has_posts()): ?>       
                <?php while(posts()): ?>
                    <div class="row">
                        <div class="col-md-12">
                             
                            <article>

                                <a href="<?php echo article_url(); ?>"> <?php echo article_title(); ?></a>
                                <div class="date">Written by <?php echo article_author();?> <?php echo relative_time(article_time()); ?></div>
                        
                                <p><?php echo mb_strimwidth(article_markdown(), 0, 300, "...<a href='".article_url()."'>&nbsp;&nbsp;&nbsp;Continue reading</a>") ?></p>
                                    
            
                            </article>
          
                            <div class="divider"></div>

                        </div>

                    </div>
                <?php endwhile; ?>

                    <?php if(has_pagination()): ?>
                        
                        <ul class="pager">
    				        <li class="previous"><?php echo posts_prev('&larr; Older'); ?></li>
                            <li class="next"><?php echo posts_next('Newer &rarr;'); ?></li>
                        </ul>
                    
                    <?php endif; ?>
            <?php endif; ?>       
        </div>
        <div style="text-align:center;"class="col-md-3">
            <h3 style="color:black;font-style:normal;">BROWSE</h3>
                <ul class="nav nav-pills nav-stacked">
                    <?php while(categories()): ?>
                        <li>
                        <a style="font-style:bold;background-color:#ddd;border:2px solid #efefef;" href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
                        <?php echo category_title(); ?>
                        </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
        </div>
        </div>
<?php theme_include('footer'); ?>