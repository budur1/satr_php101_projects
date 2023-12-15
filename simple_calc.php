//Command-line PHP application that functions as a basic calculator.
//Users can input two numbers and perform addition, subtraction, division, and multiplication operations.
<?php
  echo "Welcome to Simple Calculator in PHP!\n";
  echo "Please Enter the frist Number: \n";
  $fnum = readline();
  echo "Please Enter the secound Number: \n";
  $snum = readline();

  $add = $fnum + $snum;
  echo "The result of Addition your Numbers = $add \n";

  $sub = $fnum - $snum;
  echo "The result of Substraction your Numbers = $sub \n";

  $dev = $fnum / $snum;
  echo "The result of Divition your Numbers = $dev \n";

  $mult = $fnum * $snum;
  echo "The result of Multiplication your Numbers = $mult \n";
  echo "Thank you for using My simple Calculator ^_^ !";
