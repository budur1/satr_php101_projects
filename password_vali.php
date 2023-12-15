//Basic PHP script that prompts the user to enter a password and checks if the provided password matches a predefined value.

<?php
echo"What is the password?\n";
$pass = readline();
if ($pass == "abc$123") {
  echo "WELCOME!";
}
else  {
  echo "I dont know you!";
}
