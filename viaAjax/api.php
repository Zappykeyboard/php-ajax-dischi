<?php
  header('Content-type: application/json');

  $albums = [
    [
      'name' => 'Highway to hell',
      'author' => 'The handsome devils',
      'image' => 'img/album_1.jpg'
    ],
    [
      'name' => 'Smash song hits',
      'author' => 'Rodgers & Hart',
      'image' => 'img/album_2.jpg'
    ],
    [
      'name' => 'Tattoos',
      'author' => 'Jason Derulo',
      'image' => 'img/album_3.jpg'
    ],
    [
      'name' => 'Blurryface',
      'author' => 'Twentyone Pilots',
      'image' => 'img/album_4.png'
    ],
    [
      'name' => 'Fear of the dark',
      'author' => 'Iron Maiden',
      'image' => 'img/album_5.jpg'
    ],
    [
      'name' => 'Greatest hits II',
      'author' => 'Queen',
      'image' => 'img/album_6.jpg'
    ],
    [
      'name' => 'Plastic beach',
      'author' => 'Gorillaz',
      'image' => 'img/album_7.jpg'
    ]
    ];

  echo json_encode($albums);
?>