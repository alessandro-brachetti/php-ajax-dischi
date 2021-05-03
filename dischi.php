<?php include __DIR__ . '/dist/php/data.php'; ?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Dischi</title>

    <link rel="stylesheet" href="dist/css/master.css">
  </head>

  <body>
    <div id="root">
      <?php
        // var_dump($database);
        for ($i=0; $i < count($database); $i++) {
          $album = $database[$i];
        ?>
        <div class="card-wrapper">
          <div class="card-image" style="background-image: url(<?php echo $album['poster']; ?>)">

          </div>
          <div class="overlay">
            <div class="card-info">
              <h3 class="title">"<?php echo $album['title']; ?>"</h3> <span class="year">(<?php echo $album['year']; ?>)</span>
              <p class="author"><?php echo $album['author']; ?></p>
            </div>
          </div>
        </div>

      <?php

      }

     ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="dist/js/main.js" charset="utf-8"></script>
  </body>
  </html>
