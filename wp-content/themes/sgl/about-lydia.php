<?php
// Template Name: about lydia
get_header();

$banner = get_field('banner', 8);
$sec1 = get_field('sec1', 8);
$sec2 = get_field('sec2', 8);
$sec3 = get_field('sec3', 8);
$sec4 = get_field('sec4', 39);
$sec0 = get_field('sec0', 8);
$sec5 = get_field('sec5', 39);
?>

   <div class="mainBanner aboutbanner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/pattern-bg.png);">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-4">
               <div class="banner-img">
                  <img src="<?php echo $banner ['image'] ?>" alt="" />
               </div>
            </div>
            <div class="col-md-8">
               <h4><?php echo $banner ['heading'] ?></h4>
               <p><?php echo $banner ['content'] ?></p>
               <a href="<?php echo $banner ['button_url'] ?>"><?php echo $banner ['button_text'] ?></a>
            </div>
         </div>
      </div>
   </div>

   <section class="aboutsec1">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <h4><?php echo $sec1 ['heading'] ?></h4>
               <p><?php echo $sec1 ['content'] ?></p>
               <a href="<?php echo $sec1 ['button_url'] ?>"><?php echo $sec1 ['button_text'] ?></a>
            </div>
            <div class="col-md-6">
               <div class="aboutsec1img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lydia.png" alt="">
               </div>
            </div>
         </div>
         <div class="guidewrap">
            <h5><?php echo $sec1 ['heading_2'] ?></h5>
            <h6><?php echo $sec1 ['sub_heading'] ?></h6>
            <?php echo $sec1 ['content2'] ?>
         </div>
      </div>
   </section>

   <section class="learnsec" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-learn.jpg');">
      <div class="container">
         <h4><?php echo $sec2 ['heading'] ?></h4>
         <p><?php echo $sec2 ['content'] ?></p>
      </div>
   </section>

   <section class="essentialsec">
      <div class="container">
         <h4><?php echo $sec3 ['heading'] ?></h4>
         <ul>
            <?php 
               $section = $sec3['listing'];
               $x=1; foreach( $section as $sec ) { ?> 
                  <li>
                     <h5><span><?php echo $x ?>.</span> <?php echo $sec ['heading'] ?></h5>
                     <p><?php echo $sec ['content'] ?></p>
                  </li>
            <?php $x++; } ?>
         </ul>
         <a href="<?php echo $sec3 ['button_url'] ?>"><?php echo $sec3 ['button_text'] ?></a>
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

   <section class="dealsec">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <h4><?php echo $sec0 ['heading'] ?></h4>
               <p><?php echo $sec0 ['content'] ?></p>
               <a href="<?php echo $sec0 ['button_url'] ?>"><?php echo $sec0 ['button_text'] ?></a>
            </div>
            <div class="col-md-6">
               <div class="aboutsec1img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deal-book.png" alt="">
               </div>
            </div>
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