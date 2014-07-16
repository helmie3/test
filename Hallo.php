<HTML>
<?php
  echo "Hallo";
  echo "Hallo World ! <br>";
  
  $x = 3;
  echo "x = $x <br>";
  $x = 'Hallo';
  echo 'x = $x <br>';

  $y = $x . " noch etwas " . 3;
  echo "y = $y <br>";
  //phpinfo ();
  
  for ($i = 0; $i < 10; $i++)
  {
    echo "Hallo: $i <br>";
    if ($i > 4)
      echo "gross<br>";
  }
?>
</HTML>

