<!-- ヘッダー読み出し -->
<?php get_header(); ?>


<div class="container">
  <div class="row bg2">
    <!-- サイドバー -->
    <div class="col col-md-3">
          <div class="affix hidden-print fixed-sidebar" id="sidebar" data-spy="affix" data-offset-top="500">
            <ul class="nav nav-pills nav-stacked">
            <li><a href="#home"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="#content"><span class="glyphicon glyphicon-certificate"></span>What's the Nutty Western's</a></li>
            <li><a href="#disco"><span class="glyphicon glyphicon-headphones"></span>Sound</a></li>
            <li><a href="#video"><span class="glyphicon glyphicon-film"></span>Video</a></li>
            <li><a href="#schedule"><span class="glyphicon glyphicon-calendar"></span>Schedule</a></li>
            </ul>
          </div>
    </div>
    
    <!-- メインコンテンツ -->
    <div class="col col-md-9 main-pad">
      <div class="panel panel-default">
        <div id="news" class="panel-body">
        <h4><?php the_title(); ?></h4>
        <!-- ソーシャルボタン設置 -->
        <!-- //ソーシャルボタン設置 -->
        <hr />
        <?php $this_content= wpautop($post->post_content); 
echo $this_content; ?>
        <!-- 前後への記事リンク -->
        <p class="pagelink">
        <span class="oldpage">
          <?php next_posts_link ('&laquo; 前の記事'); ?>
        </span>
        
        <span class="newpage"><?php previous_posts_link ('次の記事; &raquo;'); ?>
        </span>
        </p>
        </div>
      </div>
    </div>
</div>
</div>
<!-- フッター読み出し -->
<?php get_footer(); ?>