<!doctype html>
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
  <title>Register a new account</title>
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
  <body class="d-flex h-100 w-100 bg-jane" data-bs-spy="scroll" data-bs-target="#navScroll">
    <div class="h-100 container-fluid bg-jane">
      <div class="h-100 row d-flex align-items-stretch"> 
          <div class="col-12 col-md-7 col-lg-6 d-flex align-items-start flex-column px-vw-5">
         
            <header class="mb-auto py-vh-2 col-12">
              <a class="navbar-brand pe-4 fs-4" href="{{url('/')}}">
               <img src="img/ja.ico" alt=""  width="100">
                <span class="ms-1 fw-bolder">Studio Jane</span>
              </a>
            </header>           
             <h1 class="about-text">A Propos</h1>
            <main class="mb-auto col-12">  
              <div class="about-paragraphe shadow ">
                  <p >Les projets de Studio Jane Design sont basés sur des concepts de design solides et une grande attention aux détails. Avec une approche de conception ancrée dans les principes modernistes du design et de l'architecture.
                  Chacune des conceptions de l'entreprise est stylistiquement et fonctionnellement éternelle grâce à l'utilisation de matériaux de premier choix et à un savoir-faire inégalé. Les espaces extraordinaires qu'ils conçoivent sont très soucieux des détails et sont la somme d'idées soigneusement sélectionnées.
                  "... Nous pensons à des espaces confortables , écologiques dans des tonalités naturelles pour des personnes qui cherchent des solutions d'ameublement esthétique aux lignes épurées et minimalistes pouvant être réinterprétées avec le temps.  " Joele A.
                  </p> 
                </div>  
                <div class="jane-button">                     
                      <a href="{{url('/studio')}}" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5 btn-jane-contact ">Studio</a>
                      <a href="{{url('/contact')}}" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5 ">Contact</a>
                </div>
            </main>
          </div>
            <div class="col-12 col-md-5 col-lg-6 bg-cover" style="background-image: url('img/ja/photo_20.jpg');"></div>
       </div>
     </div>
  </body>
</html>

 