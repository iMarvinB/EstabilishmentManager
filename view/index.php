<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/index.css">
    <link rel="stylesheet" href="../src/css/alertas.css">
    <link rel="stylesheet" href="../src/css/canvas.css">

</head>


<body>
    <div class="row" id="allandnav">

        <div class="col-md-12 row" id="allandnav">

          <nav class="navbar navbar-light bg-light" style="width: 100%;">

            <div class="container-fluid" div="container-nav">

              <a class="navbar-brand" href="#">

                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"> Stock Manager

              </a>

              <form class="d-flex">

                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>

              </form>

            </div>

          </nav>

          <div class="col-md-2" id="sidepanel">
            <div class="row" id="brand">
              <h3>Home</h1>
            </div>

            <div class="col-md-12" id="categorycontainer">
              <span>Categoria</span>
              <br>
              <div class="row" id="category">
                <br>
                <ul>
                  <li><a href="google.com">Google</a></li>
                  <li><a href="duckduckgo.com">DuckDuckGo</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-12" id="categorycontainer">
              <span>Porno</span>
              <br>
              <div class="row" id="category">
                <br>
                <ul>
                  <li><a href="google.com">Google</a></li>
                  <li><a href="duckduckgo.com">DuckDuckGo</a></li>
                </ul>
              </div>
          </div>
            

          </div>

          <div class="col-md-10" id="display">

            <?php require('../model/alertas.php')?>

            <div class="row">


              <div class="col-md-5">

                <canvas id="chartProgress" width="400" height="250"></canvas>

              </div>

              <div class="col-md-5">

                <canvas id="chartProfit" width="400" height="250"></canvas>

              </div>


            </div>

            <div class="row">

              <div class="col-md-5">

                <canvas id="chartProfit" width="400" height="250"></canvas>
                
              </div>

              <div class="col-md-5">

                <canvas id="chartProfit" width="400" height="250"></canvas>

              </div>

            </div>

          </div>


        </div>

    </div>


    <!-- Scripts -->



    <script type="text/javascript" src="../model"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>