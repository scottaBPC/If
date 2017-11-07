<?php

$dice = rand(1, 6);
echo $dice;
echo "Testing the stuff";

if ($dice == "1") {
  echo "you rolled a 1";
}
elseif ($dice == "6") {
  echo "you rolled a 6";
}
else {
  echo "you rolled another number";
}

?>
