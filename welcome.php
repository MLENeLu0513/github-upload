<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fi">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no" />

        <title>Tervetuloa!</title>

        <!-- Bootstrapin css -->
        <link rel="stylesheet" href="vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/styles.css">

    </head>

    <body>

        <header>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container-fluid">

                <a class="navbar-brand" href="index.php">Etusivu</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                  <ul class="navbar-nav">

                    <li class="nav-item active">
                      <a class="nav-link" href="koirat.html">koirat <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="kissat.html">kissat <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="casper.html">Maine Coon</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Nero.html">Kultainennoutaja</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Luna.html">Staffordshirenbullterrieri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="messageboard.php" target="_blank">Viestittely</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Kirjaudu ulos</a>
                    </li>
                    
                    
                  </ul>
                </div>
              </nav>

            </div> <!--/.container-fluid-->

        </header>

        <main>

        <div class="page-header">
            <h1>Hei, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Tervetuloa!</h1>
        </div>

        <div class="container">

            <h1 class="text-center text-uppercase">Viestittely</h1>

            <p class="text-center">Nyt voit viestitellä muiden käyttäjien kanssa.<br>

        </div> <!--/.col-1-3-->


            <div class="container1">
                <img src="/w3images/bandmember.jpg" alt="Avatar">
                <p>Moi kaikki! Mitä lemmikkejä teillä on?</p>
                <span class="time-right">11:00</span>
              </div>
              
              <div class="container1 darker">
                <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
                <p>Moi, mulla on rottweiler uros 5v.</p>
                <span class="time-left">11:01</span>
              </div>
              
              <div class="container1">
                <img src="/w3images/bandmember.jpg" alt="Avatar">
                <p>Ai kun ihana, mikä sen nimi on?</p>
                <span class="time-right">11:02</span>
              </div>
              
              <div class="container1 darker">
                <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
                <p>Hän on Rocky!</p>
                <span class="time-left">11:05</span>
              </div> 

            </div> <!--/.container--> 


        </main>

        <footer>

          <div class="foot">

          <address>
              Minna Lehtinen <br />
              Vaskihuhdantie 1-3 <br />
              00730 Helsinki Finland <br />
              P: (+358 555 8858 999) <br />
              first.last@example.com <br />
              </address>
              <a href="tietosuojaseloste.html" target="_blank">Tietosuojaseloste</a><br />
              <br />
              <small>&copy; 2020 MLEfan81</small>
              <br />

            </div>

        </footer>

        


        <!-- ensin jQuery, sitten bootstrap js -->
    <script src="vendor/jquery-3.4.1.js"></script>
    <script src="vendor/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>