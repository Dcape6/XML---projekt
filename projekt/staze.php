<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staze</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
      $json = file_get_contents("staze.json");
      $json_data = json_decode($json,true);
    ?>


<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Formula 1</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Naslovna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Staze</a>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <div class="container ponuda">
        <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">STAZA</th>
                <th scope="col">LOKACIJA</th>
                <th scope="col">BROJ KRUGOVA</th>
                <th scope="col">DULJINA KRUGA</th>
                <th scope="col"></th>
              </tr>
            </thead>
            


              <?php

              $images = [
                'slike/1.jpg',
                'slike/2.jpg',
                'slike/3.jpg',
                'slike/4.jpg',
                'slike/5.jpg',
                'slike/6.jpg',
                'slike/7.jpg',
                'slike/8.jpg',
                'slike/9.jpg',
                'slike/10.jpg',
                'slike/11.jpg',
                'slike/12.jpg',
                'slike/13.jpg',
                'slike/14.jpg',
                'slike/15.jpg',
                'slike/16.jpg',
                'slike/17.jpg',
                'slike/18.jpg',
                'slike/19.jpg',
                'slike/20.jpg',
                'slike/21.jpg',
                'slike/22.jpg',
                'slike/23.jpg',
                'slike/24.jpg'
              ];
              foreach($json_data as $key => $value){
                echo '
                <tr>
                <th scope="row"><img src="' . $images[$key] . '" width="30%"></th>
                <td>' .$json_data[$key]["staza"] . '</td>
                <td>' .$json_data[$key]["lokacija"] . '</td>
                <td>' .$json_data[$key]["krugovi"] . '</td>
                <td>' .$json_data[$key]["duljina"] . '</td>
                </tr>';
            }
            ?>
            </tbody>
          </table>
    </div>

    <footer>
        <div class="container">
            <h4>Dorian Cape</h4>
        </div>
    </footer>
    </body>
</html>
