<?php
$age = readline("Quel âge a votre enfant? ");

if ($age > 5 & $age < 8)
    echo ("Votre enfant est dans la catégorie Poussin");

else
if ($age > 7 & $age < 10)
    echo ("Votre enfant est dans la catégorie Pupille");
else
if ($age > 9 & $age < 12)
echo (" Votre enfant est dans la catégorie Minime");
else
if ($age >= 12 )
echo ("Votre enfant est dans la catégorie Cadet");

//                Une autre façon
// $age = readline("Quel âge a votre enfant? ");
//  if ($age >= 12){
//     echo "Cadet";
//  } elseif($age >=10){
//     echo("Minime");
//  }elseif($age >=8){
//     echo"Pupille";
//  }elseif($age >=6){
//     echo"Poussin";
//  }




