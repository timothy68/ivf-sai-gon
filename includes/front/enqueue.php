<?php

/* enqueue styles and scripts */
function ivf_enqueue_assets() {

  wp_register_style(
    'ivf_font_opensans_and_raleway_and_poppins',
    'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap',
    [],
    null
  );

	/* Vendor CSS Files */
  wp_enqueue_style('ivf_font_opensans_and_raleway_and_poppins');
  wp_enqueue_style( 'fontawesome-free-css' , get_template_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css' );
  wp_enqueue_style( 'animate-css' , get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css' );
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'bootstrap-icons-css' , get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' );
  wp_enqueue_style( 'boxicons-css' , get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css' );
  wp_enqueue_style( 'glightbox-css' , get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css' );
  wp_enqueue_style( 'remixicon-css' , get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css' );
  wp_enqueue_style( 'swiper-bundle-css' , get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css' );
  /* Template Main CSS File */
  wp_enqueue_style( 'main-css' , get_template_directory_uri() . '/assets/css/style.css' );  

  /* Vendor JS Files */
  wp_enqueue_script( 'purecounter_vanilla-js', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js' , array() );
  wp_enqueue_script( 'bundle-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' , array() );
  wp_enqueue_script( 'glightbox-js', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js' , array() );
  wp_enqueue_script( 'swiper-bundle-js', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js' , array() );
  wp_enqueue_script( 'validate-js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js' , array() );

  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js' , array() );
}