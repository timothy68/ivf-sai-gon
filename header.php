<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IVF_Sai_Gon_Final
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- ======= Top Bar ======= -->
  <!-- <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
  	<div class="container">
	  <div class="row">
	    <div class="col ml-auto">
	      <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Logo.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
	    </div>
	    <div class="col text-center">
	      <img src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Top-NoiDung.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
	    </div>
	    <div class="col">
	    	<div class="col-lg-6 flex ms-auto">
	    		<div class="input-group rounded">
			  	<input type="search" class="form-control rounded" placeholder="T??m ki???m" aria-label="Search" aria-describedby="search-addon" />
			  	<span class="input-group-text border-0" id="search-addon">
			    <i class="fas fa-search" style="color:#008aa7"></i>
			  	</span>
		  		</div>
		  		<p class="m-0 pt-2 ps-0">
		  			<img class="me-1" src="<?php echo get_site_url() ?>/wp-content/themes/ivf-sai-gon-final/assets/img/trang-chu/Icon-HotLine.png" alt="<?php bloginfo('name') ?>" width="auto" height="auto">
		  			<span class="font-weight-normal fs-4" style="color:#008aa7">090.6868.1111</span>
		  		</p>
		  		<p class="fs-5 fw-normal" style="color:#008aa7"><span class="fw-bold">We open</span> 8:00-20:00</p>
	    	</div>

	    </div>
	  </div>
	</div>

	<div class="container-fluid mt-2" style="background-color: #008aa7;">
    <div class="container d-flex align-items-center">
      <nav id="navbar" class="navbar gap-2" style="color:white;font-weight:bold">
      	<ul>
          <li><a class="nav-link" href="#hero"><span>GI???I THI???U</span><i class="bi bi-caret-right-fill"></i></a></li>
          <li><a class="nav-link scrollto" href="#about"><span>CHUY??N KHOA</span><i class="bi bi-caret-right-fill"></i></a></li>
          <li><a class="nav-link scrollto" href="#services"><span>CHUY??N GIA - B??C S??</span><i class="bi bi-caret-right-fill"></i></a></li>
          <li><a class="nav-link scrollto" href="#departments"><span>TIN T???C</span><i class="bi bi-caret-right-fill"></i></a></li>
          <li><a class="nav-link scrollto" href="#doctors">H??NH TR??NH T??M CON</a></li>
          <li><a class="nav-link scrollto" href="#contact">LI??N H???</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      </div>

      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>
  </header><!-- End Header -->
