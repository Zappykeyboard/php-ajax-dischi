<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
   <!--  <script src="script.js" charset="utf-8"></script>
 -->
    <title>php-ajax-dischi</title>

    <?php 
      include 'api.php';

      function printAlbum($album){
        $image = $album['image'];
        $name = $album['name'];
        $author = $album['author'];
        $release = $album['release_date'];
        echo "<div class=album> 
        <img src='{$image}'>
        <p class='album-name'> {$name}</p>
        <p class='album-author'> {$author}</p>
        <p class='album-release'> {$release}</p>  
        </div>" ;
      }


    ?>
  </head>
  <body>
  <header>
      <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="" srcset="">
  </header>
  <div class="container">
      <?php
        foreach($albums as $album){
          printAlbum($album);
        }
      ?>
  
  </div>
  </body>
</html>