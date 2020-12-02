<?php

class Users extends DB {
  function setstudent( $name,$family,$mobile, $jensiat, $reshte, $addres){
$sqli="INSERT INTO user (name, family, addres, mobile, jensiat, reshte) VALUES ('".$name."','".$family."','".$mobile."','".$jensiat."','".$reshte."','".$addres."')";
 return $this->exs($sqli);
  }
 
}
?>
