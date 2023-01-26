<?php
$sekolah = array(
    "id" => "1",
    "nama" => "SMK IDN Boarding School",
    "address" => array(
      "city" => "Jonggol",
      "country" => "Indonesia"
      )
    );
    
  //mencetak array didalam array
  var_dump($sekolah["address"]["country"]);
?>