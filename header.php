<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nutty Western's Official Website">
    <meta name="author" content="Taichi">
    
    <!-- styles -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- fav and touch icons -->
    <?php wp_enqueue_script('test', get_bloginfo('template_directory') . '/js/bootstrap.min.js', array('jquery')); ?>
    <?php wp_head(); ?>
    
    <script>
    //スムーズスクロール
    jQuery(function(){
    // #で始まるアンカーをクリックした場合に処理
    jQuery('a[href^=#]').click(function() {
    // スクロールの速度
    var speed = 700; // ミリ秒
    // アンカーの値取得
    var href= jQuery(this).attr("href");
    // 移動先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    // 移動先を数値で取得
    var position = target.offset().top;
    // スムーススクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
    });
    });

    </script>
  </head>

  <body data-spy="scroll" data-target="#sidebar">
  
  <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="#top">Nutty Western's</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <li><a href="#about">Contact</a></li>
        <li><a href="#register">Other</a></li>
        </ul> 
        </div>
      </div>
    </div>
  <!-- //Fixed navbar -->
  <!--  <header id="home" class="jumbotron masthead"> -->
  <div class="home" id="home">
    <div class="container">
    <div class="row">
    <div id="hero">
      <article class="logo">
        <h3>Nutty Western's</h3>
         <p><small>
         "Entertainment Rock'n'roll Party from Mid West Rockin' Tokyo."
         Rooted in 50s/60s Rock and Country music,the band “Nutty Western’s” adds spices of 
         Blues,Ska,Rustic,Punk,R&B and Swing to their latest peculiar-but- interesting “entertainment party sound”.
         With dynamic stage presence and various musical backgrounds band mates generate a unique pattern of melodies.
         Now, they are flying through Tokyo air... not to be missed.
         </small>
         </p>
      </article>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top.jpg" width="1170px" height="400px" />
  </div>
      </div>
    </div>
  </div>