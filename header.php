<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://bcs.duapp.com/codeshurrik-123/favicon.ico" type="image/x-icon">

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="back-to-top" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="back to top">
      <svg id="rocket" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 64 64">
        <path fill="#CCCCCC" d="M42.057,37.732c0,0,4.139-25.58-9.78-36.207c-0.307-0.233-0.573-0.322-0.802-0.329
        c-0.227,0.002-0.493,0.083-0.796,0.311c-13.676,10.31-8.95,35.992-8.95,35.992c-10.18,8-7.703,9.151-1.894,23.262
        c1.108,2.693,3.048,2.06,3.926,0.115c0.877-1.943,2.815-6.232,2.815-6.232l11.029,0.128c0,0,2.035,4.334,2.959,6.298
        c0.922,1.965,2.877,2.644,3.924-0.024C49.974,47.064,52.423,45.969,42.057,37.732z M31.726,23.155
        c-2.546-0.03-4.633-2.118-4.664-4.665c-0.029-2.547,2.012-4.587,4.559-4.558c2.546,0.029,4.634,2.117,4.663,4.664
        C36.314,21.143,34.272,23.184,31.726,23.155z"></path>
      </svg></a>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php wp_list_pages(array('title_li' => '','exclude'=>10)); ?>
          </ul>
          <form class="navbar-form navbar-right" role="form" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
            <div class="form-group">
              <input id="search" class="form-control" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" /><br />
            </div>
            <input class="btn btn-info" type="submit" id="searchsubmit" value="Search" />
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!--description -->
    <div id="description">
      <div id="site-header">
        <a class="site-title" href="<?php bloginfo('url');?>">Shurrik`s Blog</a>
      </div>
    </div>
    <div class="shadow"></div>
    <div class="container">
        <div id="information" class="info block">
            <img class="avatar img-circle" src="http://shurriklab.duapp.com/img/me.png" />
            <p class="description">
                <span>「开源」</span>
                <span>「自由」</span>
                <span>「各种宅」</span>
                <span>「喜搬砖」</span>
            </p>
        </div>
    </div>
