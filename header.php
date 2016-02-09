<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Testing</title>
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    <div class="line-top"></div>
    <header class="masthead">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1><a href="#" title="scroll down for your viewing pleasure">Bootstrap 3 Layout Template</a><p class="lead">Big Top Header and Fixed Sidebar</p></h1>
          </div>
          <div class="col-sm-6">
            <div class="pull-right hidden-sm">    
              <div class="top-bar">
                <ul>
                  <li style="padding-right:10px;color:#888888;">Email admin@admin.com </li>
                  <li>Telp. 081904584775</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <nav id="navbar-main" class="navbar navbar-default navbar-static">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://localhost/amed/">Home</a>
            </div>
          <div id="navbar" class="collapse navbar-collapse">
            <?php
              $defaults = array(
                'theme_location'  => 'header_nav',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
                'depth'           => 2,
                'walker'          => new wp_bootstrap_navwalker()
              );  
              wp_nav_menu( $defaults );
              ?>
              <ul class="nav pull-right navbar-nav">
              <li>
                <form class="navbar-form">
                  <input class="form-control" placeholder="Masukkan Kata Kunci" type="text">
                  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </form>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      </div>
    </header>  