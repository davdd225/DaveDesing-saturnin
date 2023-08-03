<!-- <!doctype html>
<html class="h-100" lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
      <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
      <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
      <meta name="author" content="Holger Koenemann">
      <meta name="generator" content="Eleventy v2.0.0">
      <meta name="HandheldFriendly" content="true">
      <title>Stride HTML Template - Frontpage one</title>
      <link rel="stylesheet" href="css/theme.min.css">
      <link rel="stylesheet" href="css/JansStyle.css">

      <style>
        /* inter-300 - latin */
        @font-face {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 300;
          font-display: swap;
          src: local(''),
              url('./fonts/inter-v12-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
              url('./fonts/inter-v12-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 500;
          font-display: swap;
          src: local(''),
              url('./fonts/inter-v12-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
              url('./fonts/inter-v12-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }
        @font-face {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 700;
          font-display: swap;
          src: local(''),
              url('./fonts/inter-v12-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
              url('./fonts/inter-v12-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
       }
    </style>

  </head>

  <body data-bs-spy="scroll" data-bs-target="#navScroll">

    <nav id="navScroll" class="navbar navbar-expand-lg navbar-light fixed-top" tabindex="0">
        <div class="container">
            <a class="navbar-brand pe-4 fs-4" href="/">
              <img src="img\ja.ico" alt="" type="icon" width="100">
              <span class="ms-jane fw-jane">Studio Jane</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#services" aria-label="Brings you to the frontpage">
                      Services
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="porject.html">
                     Projets
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#numbers">
                      Numbers
                    </a>
                  </li>
                </ul>
             </div>
         </div>
       </nav>
  <main>
         -->
@extends('layouts.layout')
@section('content')
             
      
    <div class="bg-jane w-100 overflow-hidden" id="testimonials">
      <div class="container-fluid  ">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8 text-center projet-jane top-jane">
            <h2 class="display-6">Loved by people all around the globe</h2>
            <p class="lead">Our spaces and offices are soooooo lovely, no one would give us a negative rating! And look at these trustworthy avatar pictures! Trust us!</p>

            
          </div>
         
          <div class="container ">
            <div class="row main" id="gallery">
                <!-- <img src="img/ja/photo_2023-07-05_12-21-55.jpg  " class="shadow  image-jane active" data-salon alt="nice gallery image salon"  width="844" height="562" cover>
                <img src="img/ja/photo_2023-07-05_12-21-55.jpg  " class="shadow image-jane active" data-chambre alt="nice gallery image salon" width="844" height="562" cover>
                <img src="img/ja/photo_2023-07-05_12-21-55.jpg  " class="shadow image-jane active" data-douche alt="nice gallery image salon" width="844" height="562" cover>
                <img src="img/ja/photo_2023-07-05_12-21-55.jpg  " class="shadow  image-jane active"data-deco alt="nice gallery image salon" width="844" height="562" cover> -->

                <!-- <div class="col-sm-6 col-md-4 col-lg-3 col-jane-interieur  container-jane" data-aos="fade-up" data-aos-delay="600">
                  <img src="img/ja/photo_2023-07-05_12-21-55.jpg  " class="shadow image-jane active" alt="nice gallery image salon" width="844" height="562" cover>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-jane-interieur container-jane" data-aos="fade-up" data-aos-delay="600">
                  <img src="img/ja/photo_2023-07-05_12-21-55.jpg " class="shadow image-jane active" alt="nice gallery image chambre" width="844" height="562" cover>
                </div>
                <div class=" col-sm-6 col-md-4 col-lg-3 col-jane-interieur container-jane" data-aos="fade-up" data-aos-delay="600">
                  <img src="img/ja/photo_2023-07-05_12-21-55.jpg " class="shadow  image-jane active" alt="nice gallery image douche" width="844" height="562" cover>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-jane-interieur  container-jane"  data-aos="fade-up" data-aos-delay="600">
                  <img src="img/ja/photo_2023-07-05_12-21-55.jpg  " class="shadow image-jane active" alt="nice gallery image deco" width="844" height="562" cover>
                </div> -->
                <!-- <div class="col-sm-6 col-md-4 col-lg-3 col-jane-interieur container-jane" data-aos="fade-up" data-aos-delay="600">
                  <img src="img/ja/photo_2023-07-05_12-21-55.jpg " class="shadow image-jane active" alt="nice gallery image" width="844" height="562" cover>
                </div>
                <div class=" col-sm-6 col-md-4 col-lg-3 col-jane-interieur container-jane data-aos="fade-up" data-aos-delay="600">
                  <img src="img/ja/photo_2023-07-05_12-21-55.jpg " class="shadow  image-jane active" alt="nice gallery image" width="844" height="562" cover>
                </div> -->
                

                  <div class="col-12 mt-4 jane-bottom">
                    <div class="row row-cols-1 row-cols-md-2 g-5 d-flex align-items-center">
                      <div class="col-12 col-lg-6 col-xl-4" data-aos="fade-right">
                          <div div class="card p-4 mt-3 border-0 card-jane">
                            <div class="card-body">
                              <div class="text-dark py-2 fs-3">
                              
                              </div>
                                <img src="img/ja/photo_2023-07-05_12-21-55.jpg  " class="image-jane active" data-salon alt="nice gallery image salon" height="400"  cover>
                              <div class="d-flex justify-content-between border-top pt-3">
                              <div>
                                <span class="h6 fw-5">Jane Doemunsky</span><br>
                                <small class="text-muted">COO, The Boo Corp.</small>
                              </div>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card p-4 shadow mt-3 border-0 card-jane" data-aos="fade-down">
                      <div class="card-body">
                        <div class="text-dark py-2 fs-3">
                        
                          </div>
                            <img src="img/ja/photo_2023-07-05_12-21-55.jpg" class="image-jane active" data-salon alt="nice gallery image salon"  height="400"  cover>
                          <div class="d-flex justify-content-between border-top pt-3">
                            <p class="card-text">
                              <span class="h6 fw-5">Jenny Matrix</span><br>
                              <small class="text-muted">Daughter of Col. John Matrix, Commando.</small>
                            </p>
                           
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                    <div class="card p-4 mt-3 border-0 card-jane" data-aos="fade-left">
                      <div class="card-body">
                        <div class="text-dark py-2 fs-3">
                        
                          </div>
                            <img src="img/ja/photo_2023-07-05_12-21-55.jpg" class="image-jane active" data-salon alt="nice gallery image salon" height="400"   cover>

                        <div class="d-flex justify-content-between border-top pt-3">
                          <p class="card-text">
                            <span class="h6 fw-5">Rustin Cohle</span><br>
                            <small class="text-muted">Detective, Somewhere in the swamps</small>
                          </p>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

    


<!-- 
  <div class="container py-vh-4 w-100 overflow-hidden">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-5">
    <h3 class="py-5 border-top border-dark" data-aos="fade-right">What our clients say</h3>
  </div>
    <div class="col-md-7" data-aos="fade-left">
      <blockquote>
        <div class="fs-4 my-3 fw-light pt-4 border-bottom pb-3">“I´am the CEO of this company. So maybe you think "he will tell us something super awesome about it only". But no. Its a really strange place to work with creepy people all around.
          They do some computer stuff I don´t understand. But I wear expensive Glasses and a Patagonia Hoodie. So I´am fine with it.”</div>
        <img src="img/webp/person11.webp" width="64" height="64" class="img-fluid rounded-circle me-3" alt="" data-aos="fade">
        <span><span class="fw-bold">John Doe,</span>
          CEO of Stride Ltd.</span>
      </blockquote>
    </div>
    </div>
  </div>
      <div class="py-vh-6 bg-gray-900 text-light w-100 overflow-hidden" id="workwithus">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8 text-center" data-aos="fade">
              <p class="text-secondary lead">Let´s start a project together!</p>
          <h2 class="display-6 mb-5">Hell no! This button is linked to a none working contact form. A none working form without any user feedback. So you might think you done something wrong. But in reality we just don´t want to start anything with you or anyone else.</h2>
        </div>
        <div class="col-12">
          <a href="#" class="btn btn-warning btn-xl shadow me-3 mt-4" data-aos="fade-down">Get in contact</a>
        </div>
      </div>
    </div>
  </div>
</div> -->



<!-- </main>

<footer class="bg-jane">
  <div class="container small border-top ">
    <div class="row py-5 d-flex justify-content-between">

<div class="col-12 col-lg-6 col-xl-3 border-end p-5">
  <img src="img\ja.ico" alt="" type="icon" width="150">

  <address class="text-secondary mt-3">
    <strong>Stride, Inc.</strong><br>
    1355 Market St, Suite 900<br>
    San Francisco, CA 94103<br>
    <abbr title="Phone">P:</abbr>
    (123) 456-7890
  </address>
</div>
<div class="col-12 col-lg-6 col-xl-3 border-end p-5">
  <h3 class="h6 mb-3">Company</h3>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" aria-current="page" href="#">Lorem ipsum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" href="#">Dolor sitam est</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" href="#">Sed odio cras</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" href="#">Commodo tortor ac</a>
    </li>
  </ul>
</div>
<div class="col-12 col-lg-6 col-xl-3 border-end p-5">
  <h3 class="h6 mb-3">Products</h3>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" aria-current="page" href="#">Fusce dapibus est</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" href="#">Donec sed dui</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" href="#">Tortor mauris</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" href="#">Ut fermentum massa</a>
    </li>

    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" href="#">Magna mollis</a>
    </li>
  </ul>
</div>
<div class="col-12 col-lg-6 col-xl-3 p-5">
  <h3 class="h6 mb-3">Subpages</h3>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link link-secondary ps-0" aria-current="page" href="404.html">404 System Page</a>
      <a class="nav-link link-secondary ps-0" aria-current="page" href="register.html">Register System Page</a>
            <a class="nav-link link-secondary ps-0" aria-current="page" href="content.html">Simple Text Content Page</a>
    </li>
  </ul>
</div>
</div>
</div>

<div class="container text-center py-3 small">Made by <a href="https://templatedeck.com" class="link-fancy" target="_blank">templatedeck.com</a>
</div> -->
<!-- </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/aos.js"></script>
 <script>
 AOS.init({
   duration: 800, // values from 0 to 3000, with step 50ms
 });
 </script>

 <script>
  let scrollpos = window.scrollY
  const header = document.querySelector(".navbar")
  const header_height = header.offsetHeight

  const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
  const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

  window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

    console.log(scrollpos)
  })
</script>

  </body>
</html> -->
@endsection