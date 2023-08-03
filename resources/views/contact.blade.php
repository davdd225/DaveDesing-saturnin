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
  <body class="d-flex h-100 w-100" data-bs-spy="scroll" data-bs-target="#navScroll">
    <div class="h-100 container-fluid bg-jane">
      <div class="h-100 row d-flex align-items-stretch"> 
          <div class="col-12 col-md-7 col-lg-6 d-flex align-items-start flex-column px-vw-5">
            <header class="mb-auto py-vh-2 col-12">
              <a class="navbar-brand pe-4 fs-4" href="{{url('/')}}">
               <img src="img/ja.ico" alt=""  width="100">
                <span class="ms-1 fw-bolder">Studio Jane</span>
              </a>
            </header>
            <h1 class="about-text">Contact</h1>
            <main class="mb-auto col-12">
                 <form id="form" class="row form" onsubmit="return validateForm()" method="POST" action="votre_traitement.php">
                  <div class="contact-section">
                    <div class="mb-3">
                      <label for="name" class="form-label">Nom</label>
                      <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                      <label for="firstName" class="form-label">Prénom</label>
                      <input type="text" class="form-control form-control-lg" id="firstName" name="firstName" required>
                    </div>
                    <div class="mb-3">
                      <label for="number" class="form-label">Numéro de Téléphone</label>
                      <input type="tel" class="form-control form-control-lg" id="number" name="number" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                      <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label">Message</label>
                      <textarea class="form-control form-control-lg" id="message" name="message" required></textarea>
                    </div>

                    <p class="small text-muted">En créant un compte, vous acceptez nos conditions d'utilisation bien cachées. Elles sont quelque part ici... pour des raisons légales... mais vous ne les trouveriez pas!</p>
                    <button type="submit" class="btn btn-primary btn-xl">Envoyer</button>
                  </div>
                </form>
            </main>
          </div>
            <div class="col-12 col-md-5 col-lg-6 bg-cover" style="background-image: url('img/ja/photo_20.jpg');"></div>
       </div>
     </div>



     
<script>
    function validateForm() {
      var name = document.getElementById("name").value;
      var firstName = document.getElementById("firstName").value;
      var number = document.getElementById("number").value;
      var email = document.getElementById("exampleInputEmail1").value;
      var message = document.getElementById("message").value;

      if (name === "" || firstName === "" || number === "" || email === "" || message === "") {
        alert("Veuillez remplir tous les champs obligatoires.");
        return false; // Empêche la soumission du formulaire s'il manque des champs.
      }

      // Vous pouvez également ajouter d'autres validations ici si nécessaire.

      return true; // Permet la soumission du formulaire si tout est valide.
    }
</script>
  </body>
</html>
