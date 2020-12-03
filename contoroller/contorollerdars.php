<?php
class dars extends DB {
  function setsdars( $idu,$idd){
$sqli="INSERT INTO entekhab (idu,idd) VALUES ('".$idu."','".$idd."')";
 return $this->exs($sqli);
  }

 function getdars( ){
$sqli="SELECT * FROM `dars`";
 return $this->exs($sqli);
  }
 
}
?>
