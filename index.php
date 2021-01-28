<!doctype html>

<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Mateusz Malinkiewicz">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <!-- bootstrap, css and js -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://use.fontawesome.com/e81361c95e.js"></script>
  <script src='main.js'></script>
  

</head>

<body>
    <main>

    <!-- front-login page -->
      <div id="front-page">

          <div class='container p-0' id="login-box">
            <div class="row m-0">

              <h1>Witamy na E-dzienniku</h1>
                <div class="login">
                  <form action='login.php' method="POST">
                    <input type='text' name='login' placeholder="LOGIN">
                    <input type='password' name='password' placeholder="HASŁO">
                    <input type='submit' value='zaloguj'>
                  </form>
              </div>   
            </div>
        </div>
    </div>

      <!-- add hover options to display info -->
      <div class='container-fluid d-flex' id="info-page">

        <div class='row m-auto justify-content-center align-self-center infoboxes'>
            <h1>Kilka słow o projekcie</h1>
            <span class='p-5 col-sm-12'>Technologie</span>
            <span class='p-5 col-md-6 col-lg-8'>Funkcje Dziennika</span>
            <span class='p-5 col-md-6 col-lg-4'>Cos tam</span>
            <span class='p-5 col-md-6 col-lg-4'>Funkcje</span>
            <span class='p-5 col-md-6 col-lg-8'>Opinie</span>
        </div>

      </div>

      <!-- change color and add sample contant information -->
      <div class="contrainer" id='contact-page'>
        <div class="row h-100">

          <div class='my-auto col-sm-12 offset-sm-2 col-md-3 offset-md-1'>
            <img src='https://www.onlygfx.com/wp-content/uploads/2018/08/4-old-telephone-drawing-1.png' alt='telefon'>
          </div>

          <div class='col-sm-12 col-md-7 my-auto'>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <br>
              <p>Feel free to call at 0-232-4324 US</p>
          </div>
        </div>
      </div>

      <!-- add prewiew rules here -->
      <div class="container-fluid" id='rules-page'>
        <div class="row">
          <p>Cos tam<p>
        </div>
      </div>

      <!-- footer - only navbar -->
      <footer>
        <!-- navbar stuff -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <div class="container-fluid">

              <!-- navbar collapses at MD and button to dropdown appears -->
              <a class="navbar-brand" href="#">E-Dziennik</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                
                <!-- Navbar items -->
                <ul class="navbar-nav">

                  <li class='navbar-item'>
                    <a class="nav-link active" aria-current="page" href="#front-page">Logowanie</a>
                  </li class='navbar-item'>

                  <li>
                    <a class="nav-link" aria-current="page" href="#info-page">Informacje</a>
                  </li>

                  <li class='navbar-item'>
                    <a class="nav-link" href="#contact-page">Kontakt</a>
                  </li>

                  <li class='navbar-item'>
                    <a class="nav-link" href="#rules-page">Regulamin</a>
                  </li class='navbar-item'>
                  
                  <li class='navbar-item'>
                    <a class="nav-link" href="mailto:sample@mail.com">Pomoc</a>
                  </li>

                </ul>

              </div>
            </div>
          </div>
        </nav>

      </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


<!-- https://www.geeksforgeeks.org/how-to-set-active-class-to-nav-menu-from-bootstrap/ -->