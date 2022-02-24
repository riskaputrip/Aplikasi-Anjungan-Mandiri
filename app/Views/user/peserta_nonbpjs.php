<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="peserta_bpjs.css">

    <title>Peserta NON BPJS</title>
  </head>
  <body>
<a href="<?= base_url('console_box')?>" class="btn btn-dark"  style="margin-left: 92%; margin-top:1%;">Kembali</a>
<div class="signupSection" style="border-radius: 20px;">
  <div class="info" style="border-radius: 20px 0px 0px 20px;">
    <img src="/img/image2.png" id="image1" alt="image 1" style="width:200px;height:160px; margin-top: 20px;" align="center">
    <i class="icon" aria-hidden="true"></i>
    <hr width="70%" style="color: black; margin-left: 40px;" />
    <p style="font-family: 'Archivo Narrow', sans-serif; color: #043F84;" align="center">Silahkan mengisi <br> formulir disamping!</p>
  </div>

  <div class="container">
    <div id="wrapper">
     <div class="photoprofile">
     <img src="/img/user.png" class="imgprofile" style="width:50px;height:50px; margin-top: 30px;"></img>
     <h5 style="color: black; margin-top: 10px; font-weight: bold; font-family: 'Archivo Narrow', sans-serif;">PESERTA NON BPJS</h5>
      <hr WIDTH="50%" style="color: black; margin-left: 120px;" >
     </div>
     <div class="dataprofile"></div>
    </div>
  <form>
    <div class="radio" style="color: black; font-weight: bold; font-family: 'Archivo Narrow', sans-serif;">
    <input type="radio" id="nik" name="nomor" > 
    <label for="nik" style="font-weight: bold; font-family: 'Archivo Narrow', sans-serif; margin-right: 50px;">NIK</label>
    <input type="radio" id="resolved" name="nomor"> 
    <label for="rm" style="font-weight: bold; font-family: 'Archivo Narrow', sans-serif;">Rekam Medis</label> 
    <p id="result" style="margin-top: 10px; font-weight: bold; font-family: 'Archivo Narrow', sans-serif "></p>

  <div class="row g-3 align-items-center">
  <div class="col-auto">
  </div>
  <div class="col-sm-5" style="margin-top: 10px; margin-left: 120px; width: 270px;" >
    <input type="result" id="result" class="form-control" aria-describedby="nikHelpInline">
  </div>
    <span id="nikHelpInline" class="form-text" style="margin-bottom: 10px; text-align: center; margin-left: 0px;" >
      *NIK must be 16 digits.
    </span>
     <div class="form-group row">
    <label for="inputPoli" class="col-sm-5 col-form-label" style="color: black; margin-left: 5px; font-weight: bold; font-family: 'Archivo Narrow', sans-serif; text-align: center; margin-left: 155px;">Pilih Poli :</label>
    <div class="col-sm-6" style="margin-left: 134px;" align="center">    
        <select class="form-select" aria-label="Default select example" style="width: 250px;">
      <option selected style="text-align: center;">-- Pilih Poli --</option>
     
    </select>
    </div>
    </div>
  </div>
  <a href="<?= base_url('datadiri_nonbpjs')?>" style="margin-top: 30px;" class="btn btn-success" >Cari</a>
</div>
  </div>
</form>
</div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://103.74.143.59/3523/api/getPoli.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

      </script>



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