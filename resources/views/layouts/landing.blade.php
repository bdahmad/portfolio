<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-color="color1">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>
   <!--Usefull Meta-->
   <meta name="description" content="A slick, customizable CV, Resume or Portfolio template, perfect for photographers, freelancers or designers.">
   <meta name="keywords" content="angus, resume, cv, vCard, portfolio, html template, template, responsive">
   <meta name="robots" content="index, follow, noodp">
   <meta name="googlebot" content="index, follow">
   <meta name="google" content="notranslate">
   <meta property="og:title" content="Kayden - Personal Bootstrap 5 HTML Portfolio Template">
   <meta property="og:description" content="A slick, customizable CV, Resume or Portfolio template, perfect for photographers, freelancers or designers.">
   <meta property="og:image" content="https://demo.themesuccess.com/templates/kayden/assets/images/preview.jpg">
   <meta property="og:url" content="https://demo.themesuccess.com/templates/kayden/">
   <!--Favicon-->
   <link rel="icon" type="image/svg+xml" href="{{asset('asset')}}/img/favicon.svg">
   <link rel="icon" type="image/png" sizes="32x32" href="{{asset('asset')}}/img/favicon_32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset')}}/img/favicon_16x16.png">
   <!--Google Fonts-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
   <!--AOS Animation Stylesheet-->
   <link rel="stylesheet" href="{{asset('asset')}}/css/aos.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--Font Awesome-->
   <link rel="stylesheet" href="{{asset('asset')}}/css/all.min.css">
   <!--Magnific Popup-->
   <link rel="stylesheet" href="{{asset('asset')}}/css/magnific-popup.css">
   <!--OWL Carousel-->
   <link rel="stylesheet" href="{{asset('asset')}}/css/owl.carousel.min.css">

   <!--Keyden Styelsheet with Bootstrap 5-->
   <link rel="stylesheet" href="{{asset('asset')}}/css/kayden_4.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.11/tiny-slider.css">

</head>

<body data-offset="102" onload="loadForm()">
   <!--PRELOADER START-->
   <div id="preloader">
      <div class="text-center w-100">
         <div class="loader"></div>
      </div>
   </div>
   <!--PRELOADER END-->
   <!--Header START-->
   <header class="kayden-header sticky-top">
      <div class="header-inside transparent_header">
         <div class="d-flex flex-row justify-content-between align-items-center">
            <!--Header Toggler START-->
            <div class="kayden-menu-toggler">
               <a class="kayden-toggler text-reset" data-bs-toggle="offcanvas" href="#kaydenOffCanvas" role="button" aria-controls="kaydenOffCanvas">
                  <div class="kt-r">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
                  <div class="kt-t">
                     MENU
                  </div>
               </a>
            </div>
            <!--Header Toggler END-->
            <!--Header Logo START-->
            <div class="kayden-logo">
               <a href="#">
                  <h5 class="text-white fs-3">Ahmad</h5>
               </a>
            </div>
            <!--Header Logo END-->
            <!--Header Info START-->
            <div class="kayden-nav-meta fs-5 fw-bold d-none d-sm-block text-end">
               <a href="#" class="text-reset">+880 1935 056526</a>
            </div>
            <!--Header Info END-->
         </div>
      </div>
   </header>
   <!--Header END-->
   <!--Off Canvas START-->
   <div class="offcanvas offcanvas-start" id="kaydenOffCanvas">
      <!--Off Canvas Header START-->
      <div class="offcanvas-header">
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fas fa-times"></i>
         </button>
      </div>
      <!--Off Canvas Header END-->
      <!--Off Canvas Body START-->
      <div class="offcanvas-body">
         <div class="kayden-offcanvas-nav-container d-flex flex-column justify-content-center align-items-center">
            <!--Off Canvas Navigation START-->
            <ul class="kayden-offcanvas-nav list-inline">
               <li class="py-3">
                  <a href="#home" class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold" data-bs-dismiss="offcanvas">Home</a>
               </li>
               <li class="py-3">
                  <a href="#about" class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold" data-bs-dismiss="offcanvas">About</a>
               </li>
               <li class="py-3">
                  <a href="#portfolio" class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold" data-bs-dismiss="offcanvas">Portfolio</a>
               </li>
               <li class="py-3">
                  <a href="#faq" class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold" data-bs-dismiss="offcanvas">FAQ</a>
               </li>
               <li class="py-3">
                  <a href="#contact" class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold" data-bs-dismiss="offcanvas">Contact</a>
               </li>
            </ul>
            <!--Off Canvas Navigation END-->
         </div>
      </div>
      <!--Off Canvas Body END-->
   </div>
   <!--Off Canvas END-->
   <!--Home Section START-->
   <section id="home" class="home min-vh-100 d-flex">
      <!--Home Container START-->
      <div class="container my-auto position-relative">
         <div class="row">
            <div class="offset-2 col-8 offset-md-0 col-md-12">
               <div class="row gy-5">
                  <div class="offset-md-5 col-md-2">
                     <div class="about-image h-100 w-100 d-flex align-items-center">
                        <img src="{{asset('asset')}}/img/ad.jpg" class="img-fluid kayden-shadow fit-cover fit-left-top rounded-circle" alt="kayden Picture" data-aos="zoom-in" data-aos-duration="800">
                     </div>
                  </div>
                  <div class="offset-md-1 col-md-10">
                     <div class="text-center w-100 h-100 d-flex align-items-center">
                        <div class="w-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                           <p class="welcome_text fs-4"><span class="typed_text" data-options="Web Developer, Quick Learner, Problem solver"></span></p>
                           <h1 class="fs-1 fw-bold d-block typed_text mb-5">I'm Ahmad</h1>
                           <a href="#portfolio" class="btn btn-outline-primary btn-lg kayden_scrollspy">My Portfolio</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Home Section END-->
   <!--About Section START-->
   <section id="about" class="secondary-section">
      <div class="container h-100">
         <div class="about_inside w-100 h-100 d-flex justify-content-center align-items-center flex-wrap">
            <div class="row w-100 mb-5">
               <!--About Section Details START-->
               <div class="offset-md-1 col-md-5 mt-5 mt-md-0">
                  <div class="h-100 d-flex align-items-center justify-content-center">
                     <div class="about-details">
                        <h2 class="fs-3 fw-bold mb-5">I'm Ahmad Ali</h2>
                        <p class="text-secondary mb-5">
                           A motivated, passionate, responsible, strategic and enterprising young professional whose aim is to establish
                           himself as a well renowned creative person through developing his knowledge by working in a well reputed organization,
                           gather experiences of working in a team and
                           gain the capability of leading team which will increase his
                           confident and working skills and betterment for his future.
                        </p>
                        <!--Social Links START-->
                        <ul class="social-links list-inline mb-5">
                           <!-- <li class="list-inline-item">
                                          <a href="#" title="facebook">
                                             <i class="fab fa-facebook-f"></i>
                                          </a>
                                       </li> -->
                           <li class="list-inline-item">
                              <a href="http://linkedin.com/in/adahmadali" title="linkedin">
                                 <i class="fab fa-linkedin-in"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="http://github.com/adahmadali" title="git">
                                 <i class="fab fa-git"></i>
                              </a>
                           </li>
                        </ul>
                        <!--Social Links END-->
                        <a href="#" class="btn btn-outline-primary" title="Download CV">Download CV</a>
                     </div>
                  </div>
               </div>
               <!--About Section Details END-->
               <!--About Section Progress START-->
               <div class="offset-md-1 col-md-5 mt-5 mt-md-0">
                  <div class="skills_container">
                     <h2 class="fs-3 mb-5 fw-bold">My Skills</h2>
                     <!--Progress Bar START-->
                     <div class="mb-4">
                        <label class="mb-3 fs-6">Web Design 75%</label>
                        <div class="progress">
                           <div class="progress-bar progress-bar-loadAnimation" data-percent="75" style="width: 0%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <!--Progress Bar END-->
                     <!--Progress Bar START-->
                     <div class="mb-4">
                        <label class="mb-3 fs-6">Web Development 90%</label>
                        <div class="progress">
                           <div class="progress-bar progress-bar-loadAnimation" data-percent="90" style="width: 0%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <!--Progress Bar END-->
                     <!--Progress Bar START-->
                     <div class="mb-4">
                        <label class="mb-3 fs-6">Wordpress development 70%</label>
                        <div class="progress">
                           <div class="progress-bar progress-bar-loadAnimation" data-percent="70" style="width: 0%;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <!--Progress Bar END-->
                     <!--Progress Bar START-->
                     <div class="mb-4">
                        <label class="mb-3 fs-6">Front end development 95%</label>
                        <div class="progress">
                           <div class="progress-bar progress-bar-loadAnimation" data-percent="95" style="width: 0%;" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <!--Progress Bar END-->
                  </div>
               </div>
               <!--About Section Progress END-->
            </div>
            <!--Facts START-->
            <div class="row w-100 g-5 g-md-0">
               <div class="col-6 col-md-3">
                  <!--Facts Item START-->
                  <!-- <div class="fact d-flex flex-column align-items-center align-items-center">
                     <h3 class="fs-2 d-inline-block"><span class="tmcounter" data-from="0" data-to="9" data-speed="1500">0</span><sup>+</sup></h3>
                     <p class="fs-4 d-inline-block text-center text-md-left">Years Experience</p>
                  </div> -->
                  <!--Facts Item END-->
               </div>
               <div class="col-6 col-md-3">
                  <!--Facts Item START-->
                  <!-- <div class="fact d-flex flex-column align-items-center align-items-center">
                     <h3 class="fs-2 d-inline-block"><span class="tmcounter" data-from="0" data-to="100" data-speed="1500">0</span><sup>+</sup></h3>
                     <p class="fs-4 d-inline-block text-center text-md-left">Happy Clients</p>
                  </div> -->
                  <!--Facts Item END-->
               </div>
               <div class="col-6 col-md-3">
                  <!--Facts Item START-->
                  <!-- <div class="fact d-flex flex-column align-items-center align-items-center">
                     <h3 class="fs-2 d-inline-block"><span class="tmcounter" data-from="0" data-to="8963" data-speed="1500">0</span></h3>
                     <p class="fs-4 d-inline-block text-center text-md-left">Downloads</p>
                  </div> -->
                  <!--Facts Item END-->
               </div>
               <div class="col-6 col-md-3">
                  <!--Facts Item START-->
                  <!-- <div class="fact d-flex flex-column align-items-center align-items-center">
                     <h3 class="fs-2 d-inline-block"><span class="tmcounter" data-from="0" data-to="2569" data-speed="1500">0</span></h3>
                     <p class="fs-4 d-inline-block text-center text-md-left">Projects done</p>
                  </div> -->
                  <!--Facts Item END-->
               </div>
            </div>
            <!--Facts END-->
         </div>
      </div>
   </section>
   <!--About Section END-->
   <!--Services Section START-->
   <section id="services">
      <div class="container">
         <!--Section Heading START-->
         <div class="heading text-center mb-5">
            <h2 class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block">Technologies</h2>
         </div>
         <!--Section Heading END-->
            <!--Gradient Grid START-->
            <div class="slider-container">
               <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
                  <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                        <i class="fas fa-angle-left fa-5x"></i>
                  </li>
                  <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
                        <i class="fas fa-angle-right fa-5x"></i>          
                  </li>
               </ul>
               <div class="my-slider">
                  <div class="slider-item">
                        <div class="card">                
                           <img src="{{asset('asset')}}/img/html.png" alt="">
                           <h2>Html</h2>
                        </div>
                  </div>
                  
                  <div class="slider-item">
                        <div class="card">                
                           <img src="{{asset('asset')}}/img/css.png" alt="">                       
                           <h2>CSS</h2>
                        </div>
                  </div>
                  
                  <div class="slider-item">
                        <div class="card">                
                           <img src="{{asset('asset')}}/img/js.svg" alt="">
                           <h2>JS</h2>
                        </div>
                  </div>
                  <div class="slider-item">
                        <div class="card">                
                           <img src="{{asset('asset')}}/img/js.svg" alt="">
                           <h2>PHP</h2>
                        </div>
                  </div>
               </div>    
            </div>
            <!--Gradient Grid END-->
         
         <!--Section Body END-->
      </div>
   </section>
   


   <!--Services Section END-->
   <!--Portfolio Section START-->
   <section id="portfolio" class="secondary-section">
      <div class="container">
         <!--Section Heading START-->
         <div class="heading text-center mb-5">
            <h2 class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block">Portfolio</h2>
         </div>
         <!--Section Heading END-->
         <!--Section Body START-->
         <div class="section-body">
            <!--Masonry Grid Container START-->
            <div class="row gy-5 grid">
               <!--Masonry Grid Item START-->
               <div class="col-md-6 col-lg-4 grid-item">

                  <a href="./portfolio/portfolio1.html" class="portfolio-item portfolio-ajax underline_animation text-reset">
                     <div class="portfolio-thumbnail">
                        <img src="{{asset('asset')}}/img/portfolio1.jpg" class="img-fluid img-grayTransition" alt="">
                     </div>
                     <div class="portfolio-description my-3">
                        <h3 class="fs-5 underline_text fw-bold d-inline-block">Man in Neon</h3>
                        <span class="d-block fw-light small-font-size">Street</span>
                     </div>
                  </a>

               </div>
               <!--Masonry Grid Item END-->
               <!--Masonry Grid Item START-->
               <div class="col-md-6 col-lg-4 grid-item">

                  <a href="{{asset('asset')}}/img/portfolio3.jpg" class="portfolio-item portfolio-image underline_animation text-reset">
                     <div class="portfolio-thumbnail">
                        <img src="{{asset('asset')}}/img/portfolio3.jpg" class="img-fluid img-grayTransition" alt="">
                     </div>
                     <div class="portfolio-description my-3">
                        <h3 class="fs-5 underline_text fw-bold d-inline-block">Blue words</h3>
                        <span class="d-block fw-light small-font-size">Neon</span>
                     </div>
                  </a>

               </div>
               <!--Masonry Grid Item END-->
               <!--Masonry Grid Item START-->
               <div class="col-md-6 col-lg-4 grid-item">

                  <a href="{{asset('asset')}}/img/portfolio4.jpg" class="portfolio-item portfolio-image underline_animation text-reset">
                     <div class="portfolio-thumbnail">
                        <img src="{{asset('asset')}}/img/portfolio4.jpg" class="img-fluid img-grayTransition" alt="">
                     </div>
                     <div class="portfolio-description my-3">
                        <h3 class="fs-5 underline_text fw-bold d-inline-block">Blue words</h3>
                        <span class="d-block fw-light small-font-size">Neon</span>
                     </div>
                  </a>

               </div>
               <!--Masonry Grid Item END-->
               <!--Masonry Grid Item START-->
               <div class="col-md-6 col-lg-4 grid-item">

                  <a href="{{asset('asset')}}/img/portfolio5.jpg" class="portfolio-item portfolio-image underline_animation text-reset">
                     <div class="portfolio-thumbnail">
                        <img src="{{asset('asset')}}/img/portfolio5.jpg" class="img-fluid img-grayTransition" alt="">
                     </div>
                     <div class="portfolio-description my-3">
                        <h3 class="fs-5 underline_text fw-bold d-inline-block">Blue words</h3>
                        <span class="d-block fw-light small-font-size">Neon</span>
                     </div>
                  </a>
               </div>
               <!--Masonry Grid Item END-->
               <!--Masonry Grid Item START-->
               <div class="col-md-6 col-lg-4 grid-item">

                  <a href="{{asset('asset')}}/img/portfolio6.jpg" class="portfolio-item portfolio-image underline_animation text-reset">
                     <div class="portfolio-thumbnail">
                        <img src="{{asset('asset')}}/img/portfolio6.jpg" class="img-fluid img-grayTransition" alt="">
                     </div>
                     <div class="portfolio-description my-3">
                        <h3 class="fs-5 underline_text fw-bold d-inline-block">Blue words</h3>
                        <span class="d-block fw-light small-font-size">Neon</span>
                     </div>
                  </a>

               </div>
               <!--Masonry Grid Item END-->
               <!--Masonry Grid Item START-->
               <div class="col-md-6 col-lg-4 grid-item">

                  <a href="{{asset('asset')}}/img/portfolio7.jpg" class="portfolio-item portfolio-image underline_animation text-reset">
                     <div class="portfolio-thumbnail">
                        <img src="{{asset('asset')}}/img/portfolio7.jpg" class="img-fluid img-grayTransition" alt="">
                     </div>
                     <div class="portfolio-description my-3">
                        <h3 class="fs-5 underline_text fw-bold d-inline-block">Blue words</h3>
                        <span class="d-block fw-light small-font-size">Neon</span>
                     </div>
                  </a>

               </div>
               <!--Masonry Grid Item END-->
               <!--Masonry Grid Item START-->
               <div class="col-md-6 col-lg-4 grid-item">

                  <a href="{{asset('asset')}}/img/portfolio8.jpg" class="portfolio-item portfolio-image underline_animation text-reset">
                     <div class="portfolio-thumbnail">
                        <img src="{{asset('asset')}}/img/portfolio8.jpg" class="img-fluid img-grayTransition" alt="">
                     </div>
                     <div class="portfolio-description my-3">
                        <h3 class="fs-5 underline_text fw-bold d-inline-block">Blue words</h3>
                        <span class="d-block fw-light small-font-size">Neon</span>
                     </div>
                  </a>

               </div>
               <!--Masonry Grid Item END-->
            </div>
            <!--Masonry Grid Container END-->
         </div>
         <!--Section Body START-->
      </div>
   </section>
   <!--Portfolio Section END-->
   <!--Education Section START-->
   <section id="education">
      <div class="container">
         <!--Section Heading START-->
         <div class="heading text-center mb-5">
            <h2 class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block">Education</h2>
         </div>
         <!--Section Heading END-->
         <!--Section Body START-->
         <div class="section-body">
            <div class="table-responsive">
               <!--Educational Table START-->
               <table class="table">
                  <tbody>
                     <tr>
                        <td class="d-table-cell d-sm-none">
                           <div class="mb-3 fw-light">2010-2016</div>
                           <div class="mb-3 fw-bold">Univercity of Boston, Computer Science</div>
                           <div>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</div>
                        </td>
                        <td class="w-25 d-none d-sm-table-cell">
                           <span class="fw-light fs-5">2010-2016</span>
                        </td>
                        <td class="w-50 d-none d-sm-table-cell">
                           <span class="fw-bold fs-5">Univercity of Boston, Computer Science</span>
                        </td>
                        <td class="w-25 d-none d-sm-table-cell">
                           <span class="fw-normal text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </span>
                        </td>
                     </tr>
                     <tr>
                        <td class="d-table-cell d-sm-none border-0">
                           <div class="mb-3 fw-light">2010-2016</div>
                           <div class="mb-3 fw-bold">Univercity of Boston, Computer Science</div>
                           <div>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</div>
                        </td>
                        <td class="w-25 d-none d-sm-table-cell border-0">
                           <span class="fw-light fs-5">2010-2016</span>
                        </td>
                        <td class="w-50 d-none d-sm-table-cell border-0">
                           <span class="fw-bold fs-5">Univercity of Boston, Computer Science</span>
                        </td>
                        <td class="w-25 d-none d-sm-table-cell border-0">
                           <span class="fw-normal text-secondary">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </span>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <!--Educational Table END-->
            </div>
         </div>
         <!--Section Body END-->
      </div>
   </section>
   <!--Education Section END-->
   <!--Contact Us START-->
   <section id="contact" class="secondary-section">
      <div class="container">
         <!--Section Heading START-->
         <div class="heading text-center mb-5">
            <h2 class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block">Contact Us</h2>
         </div>
         <!--Section Heading END-->
         <!--Section Body START-->
         <div class="section-body">
            <div class="row gy-5">
               <div class="col-md-6">
                  <div class="d-flex flex-column justify-content-center h-100">
                     <!--Contact Details START-->
                     <div class="contact-details d-flex flex-row align-items-center mb-3">
                        <div class="cd-icon fs-2 me-4">
                           <i class="fas fa-envelope"></i>
                        </div>
                        <div class="cd-info fs-5 font-family-secondary">
                           <a href="#" class="text-white">
                              <span class="__cf_email__"> ahmadali09787@gmail.com</span>
                           </a>
                        </div>
                     </div>
                     <!--Contact Details END-->
                     <!--Contact Details START-->
                     <div class="contact-details d-flex flex-row align-items-center mb-3">
                        <div class="cd-icon fs-2 me-4">
                           <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="cd-info fs-5 font-family-secondary">
                           East Ahmmad Nagar, Paik para, Mirpur-1, Dhaka-1216
                        </div>
                     </div>
                     <!--Contact Details END-->
                     <!--Contact Details START-->
                     <div class="contact-details d-flex flex-row align-items-center">
                        <div class="cd-icon fs-2 me-4">
                           <i class="fas fa-phone"></i>
                        </div>
                        <div class="cd-info fs-5 font-family-secondary">
                           <a href="#" class="text-white">
                              +880 1935 056526 <br>
                              +880 1755 431380
                           </a>
                        </div>
                     </div>
                     <!--Contact Details END-->
                  </div>
               </div>
               <div class="col-md-6">
                  <h3 class="mb-5 fs-4 text-center text-sm-left">Or Let's start to conversation</h3>
                  <form id="form" action="{{route('contMsg')}}" method="post">
                     @csrf
                     <div class="input-control">
                        <label for="name">Name</label>
                        <input id="name" name="contactMsg_name" type="text">
                        <div class="error" id="nameError"></div>
                     </div>
                     <div class="input-control">
                        <label for="email">Email</label>
                        <input id="email" name="contactMsg_email" type="text">
                        <div class="error" id="emailError"></div>
                     </div>
                     <div class="input-control">
                        <label for="subject">Subject</label>
                        <input id="subject" name="contactMsg_subject" type="text">
                        <div class="error" id="subjectError"></div>
                     </div>
                     <div class="input-control">
                        <label for="message">Message</label>
                        <input id="message" name="contactMsg_message" type="text">
                        <div class="error" id="messageError"></div>
                     </div>
                     <button type="submit" id="submit">Send</button>
                  </form>
               </div>
            </div>
         </div>
         <!--Section Body END-->
      </div>
   </section>
   <!--Contact Us END-->
   <!--Footer START-->
   <footer class="kayden-footer py-4">
      <div class="container">
         <div class="d-flex flex-column align-items-center justify-content-center py-3">
            <!--Social Links START-->
            <ul class="social-links list-inline mb-4">
               <li class="list-inline-item">
                  <a href="#" title="facebook">
                     <i class="fab fa-facebook-f"></i>
                  </a>
               </li>
               <li class="list-inline-item">
                  <a href="#" title="linkedin">
                     <i class="fab fa-linkedin-in"></i>
                  </a>
               </li>
               <li class="list-inline-item">
                  <a href="#" title="pinterest">
                     <i class="fab fa-pinterest-p"></i>
                  </a>
               </li>
               <li class="list-inline-item">
                  <a href="#" title="git">
                     <i class="fab fa-git"></i>
                  </a>
               </li>
            </ul>
            <!--Social Links END-->
            <!--Copyright START-->
            <p class="text-center m-0">2021 © Kayden HTML Template.</p>
            <!--Copyright END-->
         </div>
      </div>
   </footer>
   <!--Footer END-->
   <!--To TOP START-->
   <a href="#" class="toTop d-inline" id="return-to-top">
      <i class="fas fa-chevron-up"></i>
   </a>
   <!--To TOP END-->

   <!--Style switcher START-->
   <div id="color-switcher" class="d-flex flex-row">
      <div class="switcher-area">
         <h3 class="mb-4 mt-2">Choose your color</h3>
         <ul class="switcher-list">

         </ul>
      </div>
      <div class="switcher-button">
         <i class="fas fa-cog"></i>
      </div>
   </div>
   <!--Style switcher END-->

   <!--JavaScript START-->
   <!--Popper-->
   <script src="{{asset('asset')}}/js/jquery.min.js"></script>
   <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
   <!--Bootstrap-->
   <script src="{{asset('asset')}}/js/bootstrap.min.js"></script>
   <!--JQuery-->
   <!--AOS Animations-->
   <script src="{{asset('asset')}}/js/aos.js"></script>
   <!--Jquery Easing -->
   <script src="{{asset('asset')}}/js/jquery.easing.min.js"></script>
   <!--Jquery Appear -->
   <script src="{{asset('asset')}}/js/jquery.appear.min.js"></script>
   <!--Kayden preloader -->
   <script src="{{asset('asset')}}/js/preloader.js"></script>
   <!--Jquery Count To -->
   <script src="{{asset('asset')}}/js/jquery.countTo.js"></script>
   <!--Masonry -->
   <script src="{{asset('asset')}}/js/masonry.pkgd.min.js"></script>
   <!--Jquery Magnific Popup -->
   <script src="{{asset('asset')}}/js/jquery.magnific-popup.min.js"></script>
   <!--OWL Carousel -->
   <script src="{{asset('asset')}}/js/owl.carousel.min.js"></script>
   <!--Typed JS -->
   <script src="{{asset('asset')}}/js/typed.min.js"></script>
   <!--Kayden Alert -->
   <script src="{{asset('asset')}}/js/alert.js"></script>
   <!--Kayden Contact US -->
   <script src="{{asset('asset')}}/js/contact.js"></script>
   <!--Kayden Custom Script -->
   <script src="{{asset('asset')}}/js/kayden.js"></script>
   <!--JavaScript END-->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.11/min/tiny-slider.js"></script>
   <script src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
   <script src="{{asset('asset')}}/js/switcher.js"></script>
   <script src="{{asset('asset')}}/js/costom.js"></script>

   <script>
     

      // function loadForm(){

      //    btnSend.disabled = true;
      // }
      // alert('ello');
   </script>
</body>

</html>