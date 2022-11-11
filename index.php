<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sparks Bank</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- link to css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
  </head>
  <body>
    <!-- navbar -->
    <?php include 'nav.php'; ?>

    <!-- carasouel -->
    <section class="home"> 
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style = "background-image: url('images/im1.jpg');">
          <h1 class = "carousel-heading text-center mt-3">Welcome to Sparks Bank</h1>
          <div class="carousel-caption d-none d-md-block">
          <h1>Easy Money Transfer</h1>
          </div>  
          </div>
          <div class="carousel-item" style = "background-image: url('images/im2.jpg');">
          <h1 class = "carousel-heading text-center mt-3">Welcome to Sparks Bank</h1>
          <div class="carousel-caption d-none d-md-block">
            <h1>Cashless Payments through Cards</h1>
          </div>     
          </div>
          <div class="carousel-item" style = "background-image: url('images/im4.jpg');">
          <h1 class = "carousel-heading text-center mt-3">Welcome to Sparks Bank</h1>
          <div class="carousel-caption d-none d-md-block">
            <h1>Holds Your Savings</h1>
          </div>    
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
      
      <!-- about page  -->
      <section id="about">
        <?php include 'about.php'; ?>

      </section>

      
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- link to js -->
    <script src="js/index.js"></script>
  </body>
</html>

