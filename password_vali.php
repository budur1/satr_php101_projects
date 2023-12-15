<?php
echo"What is the password?\n";
$pass = readline();
if ($pass == "abc$123") {
  echo "WELCOME!";
}
else  {
  echo "I dont know you!";
}
