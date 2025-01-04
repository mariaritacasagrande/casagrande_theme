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
         <form method="get" id="searchform" action="#">
            <input type="search" placeholder="Search" value="" name="s" id="s">
            <button type="submit" form="searchform" name="submit"><i class="icon-zoom"></i></button>
         </form>
      </li>

      <li id="recent-posts" class="widget widget_recent_entries">
         <h3 class="widget_title">Recent Posts</h3>
         <ul>
            <li><a href="#" class="inner-link">Büro wins Webby Award</a></li>
            <li><a href="#" class="inner-link">New project for Assembled Agency</a></li>
            <li><a href="#" class="inner-link">We have a new kid on the block</a></li>
            <li><a href="#" class="inner-link">Hard work weekend at Büro</a></li>
            <li><a href="#" class="inner-link">We are moving to a new building</a></li>
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

      <li id="calendar" class="widget widget_calendar">
         <h3 class="widget_title">Posts by date</h3>
         <div id="calendar_wrap" class="calendar_wrap">
            <table id="wp-calendar">
               <thead>
                  <tr id="pager">
                     <td colspan="2" id="prev"><a href="#" class="inner-link"><i class="icon-arrow-left"></i></a></td>
                     <td colspan="3" class="cal-month"><span>December 2015</span></td>
                     <td colspan="3" id="next"><a href="#" class="inner-link"><i class="icon-arrow-right"></i></a></td>
                  </tr>
                  <tr>
                     <th scope="col" title="Monday">M</th>
                     <th scope="col" title="Tuesday">T</th>
                     <th scope="col" title="Wednesday">W</th>
                     <th scope="col" title="Thursday">T</th>
                     <th scope="col" title="Friday">F</th>
                     <th scope="col" title="Saturday">S</th>
                     <th scope="col" title="Sunday">S</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td colspan="1" class="pad">&nbsp;</td>
                     <td>1</td>
                     <td>2</td>
                     <td>3</td>
                     <td>4</td>
                     <td>5</td>
                     <td>6</td>
                  </tr>
                  <tr>
                     <td>7</td>
                     <td>8</td>
                     <td><a href="#" aria-label="Posts published on November 9, 2015" class="inner-link">9</a></td>
                     <td>10</td>
                     <td>11</td>
                     <td>12</td>
                     <td>13</td>
                  </tr>
                  <tr>
                     <td>14</td>
                     <td>15</td>
                     <td>16</td>
                     <td>17</td>
                     <td>18</td>
                     <td>19</td>
                     <td>20</td>
                  </tr>
                  <tr>
                     <td>21</td>
                     <td>22</td>
                     <td>23</td>
                     <td>24</td>
                     <td>25</td>
                     <td>26</td>
                     <td>27</td>
                  </tr>
                  <tr>
                     <td>28</td>
                     <td>29</td>
                     <td id="today">30</td>
                     <td>31</td>
                     <td class="pad" colspan="3">&nbsp;</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </li>

      <li id="meta" class="widget widget_meta">
         <h3 class="widget_title">Meta</h3>
         <ul>
            <li>
               <a href="#" class="inner-link">Log in</a>
            </li>
            <li>
               <a href="#" class="inner-link">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
            </li>
            <li>
               <a href="#" class="inner-link">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
            </li>
            <li>
               <a href="#"
                  title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
            </li>
         </ul>
      </li>
   </ul>
</aside><!-- /.blog-sidebar -->
<!-- 
 <?php dynamic_sidebar('sidebar-1'); ?>  -->