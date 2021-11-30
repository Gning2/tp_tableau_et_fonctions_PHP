<?php
  
  $tab = array(
    "Gning" => array(
      "prenom" => "amadou",
      "ville" => "guediawaye",
      "age" => 60,
    ),
    "Diop" => array(
        "prenom" => "papa",
        "ville" => "dakar",
        "age" => 13,
      ),
      "ndiaye" => array(
        "prenom" => "moustapha",
        "ville" => "hlm",
        "age" => 27,
      )
  );
  foreach($tab as $key => $value){
    echo $key. " :\n";
    if(is_array($value)){
        foreach($value as $key => $value){
             echo $key." : ".$value."\n";
        }
    }
    echo "\n";
  }
?>