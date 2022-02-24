<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">

    <title>Dashboard</title>
  </head>
  <body style="background-color: #CDDEFF">
    <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #98ACF8;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          </ul>
            <button class="btn btn-sm btn-dark" type="button">Logout</button>
        </div>
      </div>
    </nav>
        </nav>

     <!-- Container -->
  <main class="container">
      <style>
      .flex-container {
        display: flex;
        justify-content: space-around;
        }

      .flex-container > div {
        background-color: #CCEDD2;
        width: 350px;
        margin: 0px;
        margin-top: 20px;
        margin-bottom: 40px;
        text-align: center;
        line-height: 40px;
        font-size: 30px;
        border-radius: 20px;
      }
      </style>
      </head>
      <body>

      <div class="flex-container">
        <div style="border: 3px solid black; box-shadow: 6px 6px 6px 6px #888888;"> 
          <img src="/img/tourist.png" id="image1" alt="image 1" style="width:50px;height:50px; margin-top: 20px;" align="center"> 
          <p class="text1">CONSOLE BOX</p>
          <a href="<?= base_url('console_box')?>" class="btn btn-danger mb-4">Open</a>
        </div>
      
        <div style="border: 3px solid black; box-shadow: 6px 6px 6px 6px #888888;">
          <img src="/img/admin.png" id="image2" alt="image 2" style="width:50px;height:50px; margin-top: 20px;" align="center"> 
          <p class="text2">PETUGAS PANGGIL</p>
          <a href="<?= base_url('petugas_panggil')?>" class="btn btn-danger mb-4" >Open</a>
        </div>  
      </div>      

      <div class="flex-container">
        <div style="border: 3px solid black; box-shadow: 6px 6px 6px 6px #888888;
}"> 
          <img src="/img/display.png" alt="image 3" style="width:50px;height:50px; margin-top: 20px;" align="center"> 
          <p class="text3">DISPLAY</p>
          <a href="<?= base_url('display')?>" class="btn btn-danger mb-4" >Open</a>
        </div>
      
        <div style="border: 3px solid black; box-shadow: 6px 6px 6px 6px #888888;">
          <img src="/img/administrator.png" alt="image 4" style="width:50px;height:50px; margin-top: 20px;" align="center"> 
          <p class="text4">ADMINISTRATOR</p>
          <a href="<?= base_url('administrator')?>" class="btn btn-danger mb-4" >Open</a>
        </div>  
      </div>   
  </main>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

