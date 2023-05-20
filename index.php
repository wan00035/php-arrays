<?php 
  $number = [1,2,3,4,5];
  $book =[

    'title'=> 'The foot book',
    'author' => 'Dr. Seuss'
  ];

  $books =[

    [
        'title'=> 'The Cat in the Hat',
        'author'=> 'Dr.Seuss'
    ],
    [
        'title' => 'Hichiker\'s Guide to the Galaxy',
        'author'=> 'Douglas Adams'
    ],
    [
        'title'=> 'Off to be the Wizard',
        'author'=> 'Scott Meyer'
    ]


    ];
 //get value 
  echo $number[2];
  $number[2]=6;
  echo '<br>';

 echo $book['title'];

 rsort($number);
 var_dump($number);

 $even = array_filter($number, function($number){
    return $number %2 ===0;
 });

 var_dump($even);

 $search ='cat';
 $results = array_filter($books, function($book){
    global $search;
    return strpos(strtolower($book['title']),strtolower($search)) 
    !== false;
 });

 var_dump($results);

