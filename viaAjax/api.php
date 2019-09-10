<?php
  header('Content-type: application/json');

  $albums = [
    [
      'name' => 'Highway to hell',
      'author' => 'The handsome devils',
      'image' => 'img/album_1.jpg',
      'release_date' => '2000/10/30'
    ],
    [
      'name' => 'Smash song hits',
      'author' => 'Rodgers & Hart',
      'image' => 'img/album_2.jpg',
      'release_date' => '1990/02/05'
    ],
    [
      'name' => 'Tattoos',
      'author' => 'Jason Derulo',
      'image' => 'img/album_3.jpg',
      'release_date' => '2010/05/20'
    ],
    [
      'name' => 'Blurryface',
      'author' => 'Twentyone Pilots',
      'image' => 'img/album_4.png',
      'release_date' => '2017/11/15'
    ],
    [
      'name' => 'Fear of the dark',
      'author' => 'Iron Maiden',
      'image' => 'img/album_5.jpg',
      'release_date' => '1992/05/11'
    ],
    [
      'name' => 'Greatest hits II',
      'author' => 'Queen',
      'image' => 'img/album_6.jpg',
      'release_date' => '2000/03/10'
    ],
    [
      'name' => 'Plastic beach',
      'author' => 'Gorillaz',
      'image' => 'img/album_7.jpg',
      'release_date' => '2010/03/03'
    ]
    ];

  echo json_encode($albums);
?>