<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        body{
            background:#fdfdfb;
            
        }
        .bg{
            background-image: url(imagen/Imagen6.png);
            background-position: center center;
            }
    </style>
  </head>
  <body>
    <div class="container w-75 bg-danger  mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none  d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>

            <div class="col bg-white p-5 rounded-end">
                <div class="text-center ">
                    <img src="imagen/logo.png" width="100" height="100" alt=""> 
            </div>
            <h2 class="fw-bold text-center py-5"></h2>
            
            <form action="registrar-usuario.php" method="post">
                <div class="mb-4">
                    <label form="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="username">
                </div>
                <div class="mb-4">
                    <label form="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>





        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
</html>