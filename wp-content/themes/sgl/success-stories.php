<?php
// Template Name: success stories
get_header();
$banner = get_field('banner', 12);
$sec1 = get_field('sec1', 12);
$sec5 = get_field('sec5', 39);
?>
   <div class="mainBanner innerbanner" style="<?php echo get_template_directory_uri(); ?>/background-image: url(assets/images/pattern-bg.png);">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-9">
               <h4><?php echo $banner ['heading'] ?></h4>
               <p><?php echo $banner ['content'] ?></p>
            </div>
         </div>
      </div>
   </div>

   <section class="storysec">
      <div class="container">
         <div class="row">
            <?php 
               $section = $sec1['card'];

               $x=1; foreach( $section as $sec ) { ?>
                  <div class="col-md-4">
                     <div class="storybox">
                        <a href="<?php echo $sec ['link_url'] ?>" data-fancybox="video">
                           <img src="<?php echo $sec ['link_url'] ?>" alt="">
                        </a>
                        <p><?php echo $sec ['content'] ?></p>
                        <h6><?php echo $sec ['name'] ?></h6>
                        <span><?php echo $sec ['position'] ?></span>
                        <span><?php echo $sec ['area'] ?></span>
                     </div>
                  </div>
            <?php $x++; } ?>
         </div>
      </div>
   </section>

   <section class="ctasec">
      <div class="container">
         <h4><?php echo $sec5 ['heading'] ?></h4>
         <div class="row">
            <?php 
               $section = $sec5['card'];
               $x=1; foreach( $section as $sec ) { ?> 
                  <div class="col-md-4 offset-2">
                     <a href="<?php echo $sec ['link_url'] ?>"><?php echo $sec ['link_text'] ?></a>
                     <strong><?php echo $sec ['content'] ?></strong>
                  </div>
            <?php $x++; } ?>
         </div>
      </div>
   </section>
      
<?php get_footer(); ?>