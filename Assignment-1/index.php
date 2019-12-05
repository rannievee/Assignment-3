<?php

$phone = "+254718105532";

switch ($phone){

   case strlen($phone)==13:
      echo "this number is valid";
   break;

   case strlen ($phone) > 13 || strlen ($phone)<13:
      echo "this number is invalid";
   break;

   default:
   echo " Error.please enter a number";
break;

}

echo "<br><br>";

switch($phone){
   case substr($phone,0,4)== +254 && strlen ($phone)==13:
      echo "from Kenya";
   break;

   case substr($phone,0,4)== +255 && strlen ($phone)==13:
      echo "from Tanzania";
   break;

   case substr($phone,0,4)== +256 && strlen ($phone)==13:
      echo "from Uganda";
   break;

   case substr($phone,0,4)== +257 && strlen ($phone)==13:
      echo "from Rwanda";
   break;

   default:
   echo "you must enter a country in East Africa";

}
?>