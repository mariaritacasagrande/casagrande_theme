<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ritacasagrande
 */

if (!is_active_sidebar('sidebar-1')) {
   return;
}
?>

<aside class="blog-sidebar col-md-3 col-md-pull-8">
   <ul class="list-unstyled">
      <li id="text" class="widget widget_text">
         <div class="textwidget">
            <p>Exploring the crowd &amp; processes creating understandable products for digital and analogic folks.</p>
            <p>Büro conceptualizes, designs &amp; delivers the happiness.</p>
         </div>
      </li>
      <li id="search" class="widget widget_search">
         <form method="get" id="searchform" action="/">
            <input type="search" placeholder="Search" value="" name="s" id="search"
               value="<?php the_search_query(); ?>">
            <button type="submit" form="searchform" name="submit"><i class="icon-zoom"></i></button>
         </form>
      </li>

      <li id="recent-posts" class="widget widget_recent_entries">
         <h3 class="widget_title">Recent Posts</h3>
         <ul>
            <?php
            $recent_posts = wp_get_recent_posts(array(
               'numberposts' => 5, // Number of recent posts thumbnails to display
               'post_status' => 'publish' // Show only the published posts
            ));
            foreach ($recent_posts as $post_item): ?>
               <li>
                  <a class="inner-link" href=" <?php echo get_permalink($post_item['ID']) ?>">
                     <?php echo get_the_title($post_item['ID'], 'full'); ?>
                  </a>
               </li>
            <?php endforeach; ?>

         </ul>
      </li>

      <li id="categories" class="widget widget_categories">
         <h3 class="widget_title">Categories</h3>
         <ul>
            <li class="cat-item cat-item-1">
               <a href="#" class="inner-link">Agency<i class="arrow right-arrow"></i></a>
            </li>
            <li class="cat-item cat-item-2">
               <a href="#" class="inner-link">Art Direction<i class="arrow right-arrow"></i></a>
            </li>
            <li class="cat-item cat-item-3">
               <a href="#" class="inner-link">Commisioned<i class="arrow right-arrow"></i></a>
            </li>
            <li class="cat-item cat-item-4">
               <a href="#" class="inner-link">Coming Soon<i class="arrow right-arrow"></i></a>
            </li>
            <li class="cat-item cat-item-5">
               <a href="#" class="inner-link">Moodboard<i class="arrow right-arrow"></i></a>
            </li>
            <li class="cat-item cat-item-6">
               <a href="#" class="inner-link">Magazine<i class="arrow right-arrow"></i></a>
            </li>
            <li class="cat-item cat-item-7">
               <a href="#" class="inner-link">News<i class="arrow right-arrow"></i></a>
            </li>
         </ul>
      </li>

      <li id="recent-comments" class="widget widget_recent_comments">
         <h3 class="widget_title">Recent Comments</h3>
         <ul id="recentcomments">
            <li class="recentcomments">
               <span class="comment-author-link">
                  <a href="#" rel="external nofollow" class="url">Kilian Yorsen</a>
               </span><a href="#" class="inner-link">Büro wins Webby Award</a>
            </li>
            <li class="recentcomments">
               <span class="comment-author-link">
                  <a href="#" rel="external nofollow" class="url">Rob Manchado</a>
               </span><a href="#" class="inner-link">We were surfing yesterday</a>
            </li>
            <li class="recentcomments">
               <span class="comment-author-link">
                  <a href="#" rel="external nofollow" class="url">Larsen</a>
               </span><a href="#" class="inner-link">Great new year starting</a>
            </li>
         </ul>
      </li>

      <li id="tag_cloud" class="widget widget_tag_cloud">
         <h3 class="widget_title">Tags</h3>
         <div class="tagcloud">
            <a href="#" class="tag-link-1 inner-link" title="1 topic">cenceptual</a>
            <a href="#" class="tag-link-2 inner-link" title="1 topic">cover</a>
            <a href="#" class="tag-link-3 inner-link" title="3 topics">design</a>
            <a href="#" class="tag-link-4 inner-link" title="1 topic">fashion</a>
            <a href="#" class="tag-link-5 inner-link" title="1 topic">illustration</a>
            <a href="#" class="tag-link-16 inner-link" title="1 topic">magazine</a>
            <a href="#" class="tag-link-17 inner-link" title="1 topic">music</a>
         </div>
      </li>

      <li id="archives" class="widget widget_archive">
         <h3 class="widget_title">Archives</h3>
         <ul>
            <li>
               <a href="#" class="inner-link">December 2015</a>
            </li>
            <li>
               <a href="#" class="inner-link">November 2015</a>
            </li>
            <li>
               <a href="#" class="inner-link">October 2015</a>
            </li>
            <li>
               <a href="#" class="inner-link">September 2015</a>
            </li>
            <li>
               <a href="#" class="inner-link">August 2015</a>
            </li>
         </ul>
      </li>

      <?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- /.blog-sidebar -->