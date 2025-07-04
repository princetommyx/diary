<?php
/*
REQUESTS
GET
POST

PATCH
PUT
DELETE
associative arrays [$key => $value]
*/
// $array = [0 => 'a', 1 => 'b', 2 => 'c'];
// var_dump($array[0]);
// die();

// $user = [
//   'gender' => ['male', 'female', 'other'],
//   'name' => 'John Doe',
//   'age' => 34,
//   'country' => ['name'=>'Ghana',
//   'code'=> 'GH',
//   'currency' => "Ghana Cedis"
//   ]
// ];

// var_dump($user['gender'][2]);
// die();

switch ($_SERVER['REQUEST_METHOD'])
{
  case 'GET':
    $countries = ['nigeria', 'Ghana', 'Togo'];
    break;

  case 'POST':
    
    break;
}
