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
                <form role="search" method="get" id="searchform" action="http://localhost/amed/search" class="navbar-form">
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

  <!-- Begin Body -->
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="row-fluid">
          <div class="span12" id="masthead">
            <div id="homeslider" class="carousel slide">
              <ol class="carousel-indicators">
                <li data-target="#homeslider" data-slide-to="0" class=""></li>
                <li data-target="#homeslider" data-slide-to="1" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item">
                  <img src="http://localhost/mtp/wp-content/uploads/2016/01/slide1.png" class="attachment-slider-post-thumbnail wp-post-image" alt="index" height="160" width="604">          
                </div>
                <div class="item active left">
                  <img src="http://localhost/mtp/wp-content/uploads/2016/01/slide2.jpg" class="attachment-slider-post-thumbnail wp-post-image" alt="uad12345" height="167" width="600">         
                </div>
                <div class="item  next left">
                  <img src="http://localhost/mtp/wp-content/uploads/2016/01/slide3.jpg" class="attachment-slider-post-thumbnail wp-post-image" alt="foto fti" height="200" width="704">         
                </div>
              </div>
              <a class="left carousel-control" href="#homeslider" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#homeslider" data-slide="next">›</a>
            </div>
          </div>
        </div><!--end:home-slider-->
      </div>
      <div class="col-lg-3">
        <nav class="nav-sidebar">
          <ul class="nav">
            <li><a href="http://localhost/amed/category/artikel/"><span style="font-size:16px;" class="pull-right  glyphicon glyphicon-pencil"></span> Artikel</a></li>
            <li><a href="http://localhost/amed/category/berita/"><span style="font-size:16px;" class="pull-right  glyphicon glyphicon-bold"></span> Berita</a></li>
            <li><a href="http://localhost/amed/galeri/"><span style="font-size:16px;" class="pull-right  glyphicon glyphicon-picture"></span> Galeri</a></li>
            <li><a href="http://localhost/amed/category/agenda/"><span style="font-size:16px;" class="pull-right  glyphicon glyphicon-font"></span> Agenda</a></li>    
            <li><a href=" /"><span style="font-size:16px;" class="pull-right  glyphicon glyphicon-tree-deciduous"></span> Lain</a></li>
          </ul>
        </nav>  
      </div>  
      <div class="col-sm-3 col-md-3">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span >
              </span>Kepala Sekolah</a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <table class="table">
                  <tr>
                    <td>
                      <center>
                        <img src="http://localhost/amed/wp-content/uploads/2016/02/IMG_9218.jpg" height='170' width='165'>             
                      </center><br>
                      <center><p>Achmad N, S.Wek</p></center>
                    </td>
                  </tr>                          
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span >
              </span>Kalender</a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <table class="table">
                  <tr>
                    <td>
                      <script type="text/javascript" src="http://mycalendar.org/calendar.php?cp3_Hex=000080&cp2_Hex=FFFFFF&cp1_Hex=000080&ham=0&img=&hbg=0&hfg=1&sid=0&fwdt=140&text1=Sports&text2=Formula_1&group=Sports&calendar=Formula 1&widget_number=1"></script>
                    </td>
                  </tr>                          
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-9 col-lg-9">
        <div class="panel panel-default">
            <div class="panel-body">
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="media">
                  <a class="pull-left" href="<?php the_permalink();?>">
                      <img class="media-object" src="<?php echo $themeurl;?>/img/gambar.svg" alt="<?php the_title();?>">
                  </a>
                    <div class="media-body">
                      <h4 class="media-heading"><?php the_title();?></h4>
                      <p>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>">Selanjutnya</a>
                      </p>
                      <p class="info_meta">
                        <?php the_author(); 
                          echo ' || '; the_time('F j, Y'); ?> at <?php the_time('g:i a');
                        ?>
                      </p>
                    </div>
                </div>
                <?php 
                  endwhile;
                  else:
                  echo ' <p>Tidak ada post!</p>';
                  endif;
                ?>
            </div>
        </div>
        <nav>
          <ul class="pager">
            <li><a href="#">Sebelumnya</a></li>
            <li><a href="#">Selanjutnya</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

    <footer id="footer">
        <div class="row">
          <div class="col-sm-4">
            <h4 class="btn-primary" align="center">Informasi Sekolah</h4>
            <ul>
              <li>Sekolah Kita</li>     
              <li>Contact : 081904584775</li>
              <li>Email   : admin@admin.com</li>
               <li>Alamat  : Yogyakarta</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h4 class="btn-primary" align="center">Link Website Lain</h4>
            <ul>
              <li><a class="button" href="#">Link 1</a></li>
              <li><a class="button" href="#">Link 2</a></li>
              <li><a class="button" href="#">Link 3</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h4 class="btn-primary" align="center">Lokasi Sekolah</h4>
            <p align="center"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.672801435497!2d110.37098861448581!3d-7.824413694361898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57a67b0e8399%3A0x73964a99c7b7afdf!2sPasar+Telo+Karangkajen!5e0!3m2!1sid!2sid!4v1454937975582" width="320" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </p>
          </div>
        </div>
        <div class="page-header-button">
          <p align="center">Copyright @2016 Sekolah Kita Desain</p>
        </div>
    </footer> 
    <?php wp_footer();?>
    <script src="<?php echo get_template_directory_uri(); ?>/jbootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/nav.js"></script>
  </body>
</html>