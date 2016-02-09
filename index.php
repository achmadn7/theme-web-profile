<?php get_header();
global $themeurl;
?>
<div class="container">
	<div class="row">
	<div class="col-sm-8 col-md-8">
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
	</div>
	<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>
