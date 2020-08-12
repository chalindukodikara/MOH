<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->siteTitle(); ?></title>
    <link rel="icon" type="image/png" href="<?= PROOT ?>img/National.png" />

    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="<?= PROOT ?>/bootstrap/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="<?= PROOT ?>css/reset-stylesheet.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
<link href="<?= PROOT ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= PROOT ?>/css/Mother_css.css" rel="stylesheet">
  </head>
  <body style="background-color: rgb(198, 220, 253); ">
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color:rgb(43, 51, 71) ;">
    <a class="navbar-brand" href="#">
      <img src="<?= PROOT ?>/img/National.png" width="40" height="40" class="d-inline-block align-top" alt="">
    </a>
    <a class="navbar-brand" href="#">MOH Kelaniya</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <a class="btn-logout" href="<?= PROOT ?>login/logout">Log out</a>
    </div>
  </nav>
</header>

        <?= $this->content('body'); ?>

        <div class="row justify-content-between" style="background-color: #3d3d3d;">
            <div class="col-md-6 footer-text ">
                <h1>Medical Officer of Health</h1>
                Medical officer of health or MOH is the leader of Medical Officer Of Health (MOOH) offices and under his
                guidance Public Health Nurses, Public Health Mid-wives and Public Health Inspectors distribute preventive
                services at the rural levels.
            </div>
            <div class="col-md-2 footer-icon">
                <a href="#" class="fa fa-facebook icon"></a>
                <a href="#" class="fa fa-twitter icon"></a>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 footer-dashboard">

                <center>Designed by <span style="color: aliceblue;">University of Moratuwa</span> | 2020 All Rights Reserved
                </center>

            </div>

        </div>
    </div>
</body>

</html>
