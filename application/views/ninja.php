<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>View Excercise #2</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="world">Ninja</a>
        </div>
    </nav>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2>Display 3 ninjas <?=$number?> time(s)</h2>
                </div>
            </div>
<?php for($i = 1; $i <= $number; $i++){ ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="img-fluid" src="https://i.pinimg.com/originals/cf/aa/f8/cfaaf815f22bef8d0fc979c53ba5d05b.jpg" alt="Naruto Uzumaki">
                        <div class="card-body">
                            <h4 class="card-title">Naruto Uzumaki</h4>
                            <p class="card-text">Naruto Uzumaki is a fictional character in the manga and anime franchise Naruto, created by Masashi Kishimoto. Serving as the eponymous protagonist of the series, he is a young ninja from the fictional village of Konohagakure</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="img-fluid" src="https://wallpaperaccess.com/full/322360.jpg" alt="Sasuke Uchiha">
                        <div class="card-body">
                            <h4 class="card-title">Sasuke Uchiha</h4>
                            <p class="card-text">Sasuke Uchiha is a fictional character in the Naruto manga and anime franchise created by Masashi Kishimoto. Sasuke belongs to the Uchiha clan, a notorious ninja family, and one of the most powerful, allied with Konohagakure.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="img-fluid" src="https://i.pinimg.com/originals/63/c6/26/63c626d973f83cca57ec2fc2129cdc6d.jpg" alt="Minato Namikaze">
                        <div class="card-body">
                            <h4 class="card-title">Minato Namikaze</h4>
                            <p class="card-text">Minato Namikaze was the Fourth Hokage ( literally meaning: Fourth Fire Shadow) of Konohagakure.  He died during the Nine-Tailed Demon Fox's Attack, sacrificing his life to seal a part of the Nine-Tails into his newborn son, Naruto Uzumaki.</p>
                            <div class="d-flex justify-content-between align-items-center">

                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>