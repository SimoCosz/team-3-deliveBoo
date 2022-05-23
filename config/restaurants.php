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
];

// ALMENO 5 RISTORANTI A TESTA