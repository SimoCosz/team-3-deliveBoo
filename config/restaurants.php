<?php
return [
  [
    'name' => 'NomeRistorante',
    'address' => 'IndirizzoRistorante',
    'city' => 'CittàRistorante', 
    'telephone_number' => 'NumeroDiTelefono',
    'p_iva' => 'PartitaIvaRistorante',
    'cover' => 'ImmagineCopertinaRistorante',
    'email' => 'Email',
    'password' => 'Password',
    'categories' => [
      'cinese',
      'pizzeria',
      'ecc...'
    ],
    'products' => [
      [
        'cover' => 'img copertina',
        'name' => 'Hamburger di totano',
        'description' => 'un hamburger succulento',
        'ingredtients' => [
          'totano',
          'pane',
          'ecc...',
        ],
        'price' => '128,50',
        'disponibility' => true,
        'category' => 'primo/secondo/dessert'
      ]
    ],
  ],
  //La Casa De Los Burritos
  [
    'name' => 'La Casa De Los Burritos',
    'address' => 'Via Oreste Salomone, 4',
    'city' => 'Roma', 
    'telephone_number' => '3152456785',
    'p_iva' => ' 86334519757',
    'cover' => 'https://rs-menus-api.roocdn.com/images/c91843fe-b1d9-4c49-8043-0020fca35504/image.jpeg?width=1200&height=630&fit=crop',
    'email' => 'burritos@hotmai.it',
    'password' => 'burrito',
    'categories' => [
      'messicano'
    ],
    'products' => [
      [
        'cover' => 'https://tb-static.uber.com/prod/image-proc/processed_images/e63210fc71e5c8ce4c5d3363a6469a83/859baff1d76042a45e319d1de80aec7a.jpeg',
        'name' => 'El burrito de Berlino',
        'description' => 'Burritos Italianos',
        'ingredtients' => [
          'Rucola',
          'Prosciutto crudo',
          'Mozzarella',
          'Pomodorini datterini',
          'Olio extravergine di Oliva'
        ],
        'price' => '18,90',
        'disponibility' => true,
        'category' => 'Burritos De La Casa'
      ],
      [
        'cover' => 'https://tb-static.uber.com/prod/image-proc/processed_images/9edd016572d59fcabaab21614041a3f5/859baff1d76042a45e319d1de80aec7a.jpeg',
        'name' => 'El burrito del Profesor',
        'description' => 'Il burrito preferito del Professore',
        'ingredtients' => [
          'Riso bianco',
          'Ragù',
          'Petto di Pollo grigliato',
          'Bacon',
          'Rucola',
          'Crema di Parmigiano Reggiano, Olio EVO'
        ],
        'price' => '19,90',
        'disponibility' => true,
        'category' => 'Burritos De La Casa'
      ],
      [
        'cover' => 'https://tb-static.uber.com/prod/image-proc/processed_images/e63210fc71e5c8ce4c5d3363a6469a83/859baff1d76042a45e319d1de80aec7a.jpeg',
        'name' => 'El burrito de Tokyo',
        'description' => 'Burritos Picantes',
        'ingredtients' => [
          'Riso bianco',
          'Petto di Pollo grigliato',
          'Bacon',
          'Cipolle caramellate',
          'Jalapenos',
          'Crema di Cheddar'
        ],
        'price' => '18,90',
        'disponibility' => true,
        'category' => 'Burritos De La Casa'
      ],
      [
        'cover' => 'https://tb-static.uber.com/prod/image-proc/processed_images/e63210fc71e5c8ce4c5d3363a6469a83/859baff1d76042a45e319d1de80aec7a.jpeg',
        'name' => 'El burrito de Denver',
        'description' => 'Burritos de Pulled Pork',
        'ingredtients' => [
          'Riso bianco',
          'Pulled Pork',
          'Bacon cotto alla piastra',
          'Fagioli Neri',
          'Crema di Edamer',
        ],
        'price' => '18,90',
        'disponibility' => true,
        'category' => 'Burritos De La Casa'
      ],
      [
        'cover' => 'https://tb-static.uber.com/prod/image-proc/processed_images/e63210fc71e5c8ce4c5d3363a6469a83/859baff1d76042a45e319d1de80aec7a.jpeg',
        'name' => 'El Burrito de Helsinki',
        'description' => 'Burritos de Tonno',
        'ingredtients' => [
          'Briciole di Nachos',
          'Iceberg',
          'Straccetti di Tonno cotto al vapore',
          'Mais',
          'Mayo della casa',
          'Crema di Edamer',
        ],
        'price' => '19,90',
        'disponibility' => true,
        'category' => 'Burritos De La Casa'
      ],
      [
        'cover' => 'https://tb-static.uber.com/prod/image-proc/processed_images/e63210fc71e5c8ce4c5d3363a6469a83/859baff1d76042a45e319d1de80aec7a.jpeg',
        'name' => 'El Burrito de Oslo',
        'description' => 'Burritos de Salmone',
        'ingredtients' => [
          'Iceberg',
          'Salsa Caeser',
          'Filetti di Salmone cotto al vapore',
          'Cetrioli e Feta',
        ],
        'price' => '18,90',
        'disponibility' => true,
        'category' => 'Burritos De La Casa'
      ],
      [
        'cover' => 'https://tb-static.uber.com/prod/image-proc/processed_images/e63210fc71e5c8ce4c5d3363a6469a83/859baff1d76042a45e319d1de80aec7a.jpeg',
        'name' => 'El Burrito de Oslo',
        'description' => 'Burritos de Salmone',
        'ingredtients' => [
          'Iceberg',
          'Salsa Caeser',
          'Filetti di Salmone cotto al vapore',
          'Cetrioli e Feta',
        ],
        'price' => '18,90',
        'disponibility' => true,
        'category' => 'Burritos De La Casa'
      ],
      [
        'cover' => 'https://static.cookist.it/wp-content/uploads/sites/21/2019/08/Poke-bowl-avocado-salmone-hawaii-riso-insalata-2-1200x1200.jpg',
        'name' => 'La Bowl de Berlino',
        'description' => 'Bowls Italianas',
        'ingredtients' => [
          'Iceberg',
          'Petto di Pollo grigliato',
          'Bacon',
          'Pomodorini',
          'Mozzarella',
          'Noci',
          'Scaglie di Parmigiano',
          'Olio E.V.O'
        ],
        'price' => '23,90',
        'disponibility' => true,
        'category' => 'Bowl de La Casa'
      ],
      [
        'cover' => 'https://static.cookist.it/wp-content/uploads/sites/21/2019/08/Poke-bowl-avocado-salmone-hawaii-riso-insalata-2-1200x1200.jpg',
        'name' => 'La Bowl de Tokyo',
        'description' => 'Bowls Picantes',
        'ingredtients' => [
          'Riso bianco',
          'Chili di Carne',
          'Peperoncino frantumato',
          'Salsa Habanero',
          'Cipolla rossa di Tropea',
        ],
        'price' => '23,90',
        'disponibility' => true,
        'category' => 'Bowl de La Casa'
      ],
      [
        'cover' => 'https://static.cookist.it/wp-content/uploads/sites/21/2019/08/Poke-bowl-avocado-salmone-hawaii-riso-insalata-2-1200x1200.jpg',
        'name' => 'La Bowl de Nairobi',
        'description' => 'Bowls Vegetarianas',
        'ingredtients' => [
          'Riso integrale',
          'Tofu',
          'Ceci',
          'Mais',
          'Carote',
          'Cetrioli',
          'Mandorle',
          'Arancia a fette',
          'Hummus di ceci'
        ],
        'price' => '23,90',
        'disponibility' => true,
        'category' => 'Bowl de La Casa'
      ],


    ],
  ],
];

// ALMENO 5 RISTORANTI A TESTA