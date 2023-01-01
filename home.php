<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
 <section class="services">
  <div class="container">
   <h2 class="services__title title">
    НАШИ УСЛУГИ
   </h2>
   <div class="services__inner">
    <div class="services__info">
      <?php the_field('services-text'); ?>
      <a class="services__info-link link" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
    </div>
    <ol class="services__list">
      <?php the_field('services-item'); ?>
    </ol>
   </div>
  </div>
 </section> 
 <section class="benefits">
  <div class="container">
   <div class="benefits__inner">
    <img class="benefits__image" src="<?php the_field('benefits-image'); ?>" alt="interior"> 
    <div class="benefits__box">
     <h2 class="benefits__title title">
      ПОЧЕМУ МЫ?
     </h2>
     <div class="benefits__items">
      <?php the_field('benefits-text'); ?>
     </div>
    </div>
   </div>
  </div>
 </section> 
 <section class="slider">
  <div class="container">
   <h2 class="slider__title title">
    ПРИГНАННЫЕ НАМИ АВТО
   </h2>
   <div class="slider__inner">
   <?php
   global $post;
   $myposts = get_posts([ 
    'numberposts' => -1,
   ]);
   if( $myposts ){
    foreach( $myposts as $post ){
     setup_postdata( $post );
   ?>
       <div class="slider__item slide">
        <div class="slide__box">
         <a class="slide__link" href="#">       
          <?php the_post_thumbnail(
           array(380, 250),
           array (
            'class' => 'slide__image'
           )
          ); ?> 
          <h4 class="slide__name"><?php the_title(); ?></h4>
          <span class="slide__price">
           <?php the_content(); ?>
          </span>
         </a>
        </div>
       </div>
   <?php 
    }
   } 
   wp_reset_postdata();
   ?>
   </div>
  </div>
 </section> 
 <section class="contacts">
  <div class="container">
   <div class="contacts__inner">
    <div class="contacts__info">
     <h2 class="contacts__title title">
      КОНТАКТЫ
     </h2>
     <address class="contacts__item">
      <ul class="contacts__list">
       <li class="contacts__list-item">Адрес</li>
       <?php the_field('address'); ?>
      </ul>
     </address>
     <div class="contacts__item">
      <ul class="contacts__list">
       <li class="contacts__list-item">Время работы</li>
       <?php the_field('working-hours'); ?>
      </ul>
     </div>
     <div class="contacts__item">
      <ul class="contacts__list">
       <li class="contacts__list-item">Телефон</li>
       <li class="contacts__list-item">
        <a class="contacts__list-link" href="<?php the_field('phone-number'); ?>"><?php the_field('phone'); ?></a>
       </li>
      </ul>
     </div>
    </div>
    <form class="contacts__form" action="#">
     <h2 class="contacts__title contacts__title--form title">
      Оставить заявку
     </h2>
     <?php echo do_shortcode('[contact-form-7 id="28" title="Контактная форма"]') ?>
    </form>
   </div>
  </div>
 </section>

<?php get_footer(); ?>