<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    
    <!-- TEMPLATE: Albums -->
    <script id="item-template" type="text/x-handlebars-template">
      <div class=album> 
        <img src='{{image}}'>
        <p class='album-name'> {{name}}</p>
        <p class='album-author'> {{author}}</p>
        <p class='album-release'> {{release}}</p>
      </div>
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

    <title>php-ajax-dischi</title>
  </head>
  <body>
    <header>
        <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="" srcset="">
    </header>

    <div class="container">

    </div>
  </body>
</html>