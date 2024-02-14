<?php
/*

Template Name: home

*/
?>
<?php get_header(); ?>
   <div class="container-full top-container">
	  <div class="logo-wrapper hide-on-med-and-down">
         <div class="main-logo"></div>
      </div>
      <div class="boxes-wrapper">
         <div class="row">
               <div class="col s12 m12 l3">
                  <a href="https://eco-monitor.kz/map/" class="box air-box">
                     <div class="row">
                        <div class="col s4 right-align">
                           <img src="<?php bloginfo('template_url') ?>/assets/img/vector/vector.svg" class="svg-icon" />
                        </div>
                        <div class="col s1"></div>
                        <div class="col s7">
                           <span class="text">состояние</br>воздуха</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col s12 m12 l3">
                  <a href="https://eco-monitor.kz/map/" class="box plant-box">
                     <div class="row">
                        <div class="col s4 right-align">
                           <img src="<?php bloginfo('template_url') ?>/assets/img/vector/vector-2.svg" class="svg-icon" />
                        </div>
                           <div class="col s1"></div>
                           <div class="col s7">
                              <span class="text">зелёные</br>насаждения</span>
                           </div>
                     </div>
                  </a>
               </div>
               <div class="col s12 m12 l3">
                  <a href="https://eco-monitor.kz/map/" class="box water-box">
                     <div class="row">
                        <div class="col s4 right-align">
                              <img src="<?php bloginfo('template_url') ?>/assets/img/vector/vector-3.svg" class="svg-icon" />
                        </div>
                           <div class="col s1"></div>
                           <div class="col s7">
                              <span class="text">водные</br>объекты</span>
                           </div>
                     </div>
                  </a>
               </div>
               <div class="col s12 m12 l3">
                  <a href="https://eco-monitor.kz/map/" class="box trash-box">
                     <div class="row">
                        <div class="col s4 right-align">
                           <img src="<?php bloginfo('template_url') ?>/assets/img/vector/vector-4.svg" class="svg-icon" />
                        </div>
                        <div class="col s1"></div>
                        <div class="col s7">
                           <span class="text">отходы</span>
                        </div>
                     </div>
                  </a>
               </div>
         </div>
      </div>
   </div>


   <div class="container scrollspy" id="news">
      <div class="row equal-height-grid">
         <div class="text-main"><?php the_field('eco-main-text') ?></div>
        <div class="col s12 teal-text darken-4">
            <h1 class="custom-heading news">Новости</h1>
        </div>
         <?php
         global $post;
               $myposts = get_posts([ 
                  'numberposts' => 3,
               ]);
         if( $myposts ){
            foreach( $myposts as $post ){
               setup_postdata( $post );
         ?>
            <div class="col l4 m6 s12">
               <div class="card hoverable">
               <div class="card-image">
                  <?php the_post_thumbnail(); ?>
                  <!-- <p class="card-title2"><?php //the_title(); ?></p> -->
               </div>
               <div class="card-content">
                  <p><?php the_excerpt(); ?></p>
               </div>
               <div class="card-action">
                  <a href="<?php the_permalink(); ?>">Подробнее</a>
               </div>
               </div>
            </div>
         <?php  } } wp_reset_postdata(); ?>
      </div>
    </div>

   <div class="page-container gallery-container">
    <div class="container scrollspy" id="gallery">
      <div class="row">
        <div class="col s12 teal-text darken-4">
            <h1 class="custom-heading gallery">Галерея</h1>
        </div>
      </div>
      <div class="row">
        <div class="col l4 m6 s12 image"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/new-1.jpg" class="materialboxed responsive-img"></div>  
        <div class="col l4 m6 s12 image-holder"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/new-2.jpg" class="materialboxed responsive-img"></div>
        <div class="col l4 m6 s12 image-holder"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/new-3.jpg" class="materialboxed responsive-img"></div>
        <div class="col l4 m6 s12 image-holder"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/new-4.jpg" class="materialboxed responsive-img"></div>
        <div class="col l4 m6 s12 image-holder"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/new-5.jpg" class="materialboxed responsive-img"></div>
        <div class="col l4 m6 s12 image-holder"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/new-6.jpg" class="materialboxed responsive-img"></div>
     
      </div>
    </div>
   </div>
    
    </div>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Количество деревьев и кустарников по породному составу по результатам инвентаризации 2018-2019гг.</h4>
      <div class="row">
        <div class="col s12">
         <p>modal text</p>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Закрыть</a>
    </div>
  </div>

<?php get_footer(); ?>