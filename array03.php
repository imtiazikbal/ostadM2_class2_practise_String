<?php

$user = [

    "john" => [
        "age"   => 30,
        "email" => "imtiaz@gmail.com",
    ],
    
    "karim" => [
        "age"   => 30,
        "email" => "imtiaz@gmail.com",
    ],

];


$colors = [
    "fistColor" => "Red",
    "secondColor" => "Green"
];



foreach($colors as $color ){
   // echo $color;
}

//echo $user["john"]["age"];

//Foreach loop

foreach($user as  $details){
    print_r ($details);
   //echo "$username <br/>";
    foreach($details as $key => $value ){
       // echo "$value <br/>";
    }

}