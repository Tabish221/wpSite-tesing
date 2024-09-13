<?php 
// Template Name: home
get_header(); 



$banner = get_field('banner', 39);
$sec1 = get_field('sec1', 39);
$sec2 = get_field('sec2', 39);
$sec3 = get_field('sec3', 39);
$sec4 = get_field('sec4', 39);
$sec5 = get_field('sec5', 39);
$sec6 = get_field('sec6', 39);
?>

 <!-- <?php echo $$sec2 ['heading'] ?> -->

      <div class="mainBanner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/pattern-bg.png);">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-5">
                  <h4><?php echo $banner ['heading'] ?></h4>
                  <p><?php echo $banner ['content'] ?></p>
                  <a href="<?php echo $banner ['button_url'] ?>"><?php echo $banner ['button_text'] ?></a>
               </div>
               <div class="col-md-7">
                  <div class="banner-img">
                     <img src="<?php echo $banner ['image'] ?>" alt="" />
                  </div>
               </div>
            </div>
         </div>
      </div>

      <section class="step-sec">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="stepimg">
                     <img src="<?php echo $sec1 ['image'] ?>" alt="">
                  </div>
               </div>
               <div class="col-md-6">
                  <h4><?php echo $sec1 ['heading'] ?></h4>
                  <h6><?php echo $sec1 ['sub_heading'] ?></h6>
                  <?php echo $sec1 ['content'] ?>
               </div>
            </div>
            <div class="arrow">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" alt="">
            </div>
            <div class="row">

               <?php 
                  $section = $sec1['card'];
                  $x=1; foreach( $section as $sec ) { ?> 
                     <div class="col-md-4">
                        <div class="stepbox">
                           <img src="<?php echo $sec ['icon'] ?>" alt="Icon">
                           <h5><?php echo $sec ['heading'] ?></h5>
                           <h6><?php echo $sec ['sub_heading'] ?></h6>
                           <p><?php echo $sec ['content'] ?></p>
                        </div>
                     </div>
               <?php $x++; } ?>
            </div>
         </div>
      </section>

      <section class="videosec fs-0">
         <div class="container">
            
            <img src="<?php echo $sec2 ['thumbnail'] ?>" alt="Thumbnail">
            <a href="<?php echo $sec2 ['video_link'] ?>" data-fancybox="images"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/play.png" alt=""></a>
         </div>
      </section>

      <section class="wholesaling">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div>
                     <img src="<?php echo $sec3 ['image'] ?>" alt="Books">
                  </div>
               </div>
               <div class="col-md-6">
                  <h4><?php echo $sec3 ['heading'] ?></h4>
                  <h6><?php echo $sec3 ['sub_heading'] ?></h6>
                  <?php echo $sec3 ['content'] ?>
                  <a href="<?php echo $sec3 ['button_url'] ?>"><?php echo $sec3 ['button_text'] ?></a>
               </div>
            </div>
         </div>
      </section>

      <section class="testisec">
         <div class="container">
            <ul class="testi-slider">
               <?php 
                  $section = $sec4['card'];
                  $x=1; foreach( $section as $sec ) { ?> 
                     <li>
                        <div>
                           <img src="<?php echo $sec ['image'] ?>" alt="User">
                           <p><?php echo $sec ['content'] ?></p>
                           <h6><?php echo $sec ['name'] ?></h6>
                        </div>
                     </li>
               <?php $x++; } ?>
            </ul>
            <a href="<?php echo $sec4 ['button_url'] ?>"><?php echo $sec4 ['button_text'] ?></a>
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

      <section class="aboutsec">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <img src="<?php echo $sec6 ['image'] ?>" alt="">
               </div>
               <div class="col-md-8">
                  <h4><?php echo $sec6 ['heading'] ?></h4>
                  <h6><?php echo $sec6 ['sub_heading'] ?></h6>
                  <?php 
                     $section = $sec6['content'];
                     $x=1; foreach( $section as $sec ) { ?> 
                        <p> <?php echo $sec ['text'] ?> </p>
                  <?php $x++; } ?>
               </div>
            </div>
         </div>
      </section>


<?php get_footer(); ?>