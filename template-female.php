<?php 
/*  
 * Template Name:Females
 * Template: twentysixteen
 * @smugbug.com
 * @subpackage vomcarnivous
 * @since vom 1.0.0
 */

get_header(); 
 
?>
<section class="male_heading">
		   
			       <div class="col-md-12 heading">
				    <h1>FEMALES</h1>
				   </div>
				   
			 
		</section>



	<section class="male_dog dogs_detail_describe">
		 
		    
		       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 dog_details ">
			   
			   <div class="dogs_about_left contacts">
			   <h2>CONTACT US</h2>
			   <p>We're not around right now. But you<br>can send us an email and we'll get<br>back to you, asap.</p>
			   <form>
			   <input type="text" class="name" placeholder="YOUR NAME">
			    <input type="email" class="email" placeholder="EMAIL">
				<textarea class="form-control" rows="5" id="message" placeholder="TYPE YOUR MESSAGE..."></textarea>
				
				 </form>
				 <a class="snd_detail" href="#">SEND</a>
			   </div>
			   </div>
			   <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 dog_description  ">
			    	  
			   
			    <h2><img src="<?php echo get_bloginfo('template_url');?>/img/dog1.gif"> No.1 Rottweiler Kennel from india <img src="<?php echo get_bloginfo('template_url');?>/img/dog1.gif"> </h2>
 
		     <ul>
			 <?php 
			$query = new WP_Query(array(
				'post_type' => 'female_dogs',
				'posts_per_page' =>10,
				'order' => 'DSC',
				'post_status' => 'publish'
				
			));
			?>
			
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

				<?php endif; ?>
				 <li>
				<div class="col-md-6 male_right">
				 <div class="itemselect">
               <a href="<?php the_permalink(); ?>">
				<img class="thumb" src="<?php echo $image[0]; ?>">
				</a> 
            </div>
				 </div>
				 <div class="col-md-6  male_left">
				
			   <p><?php the_title(); ?>	</p>
			    <?php    $custom_fields = get_post_custom( get_the_ID() );
            $my_custom_field = $custom_fields['birth_date'];
            foreach ( $my_custom_field as $key => $value )
            $title_text= $value;
            ?>
				 <span><?php echo $title_text ; ?></span>
				 <div class="dog_btn male_dog_btn">
			   <a class="dog_detail" href="<?php echo get_the_permalink(); ?>">READ MORE</a></div>
				</div>
				
				
			  
				</li>
				<?php endwhile;
							wp_reset_postdata(); ?>
				</ul>
				 
				
			   
			  
			   </div>
<?php get_footer(); ?>