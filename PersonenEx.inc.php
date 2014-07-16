<?php
  function readPersonen ()
  {
    $fileName = "Personen.txt";
    $fp = fopen ($fileName, "r");
    if ($fp == null)
      die ("can't open File: $fileName");
    
    $aLines = array ();
    while ( $line = fgets ($fp) )
      $aLines[] = $line;
    
    fclose ($fp);
    return $aLines;
  }
  
  function showButtons ()
  {
    for ($i = 0, $letter = 'A'; $i < 26; $i++, $letter++)
      echo "<input type=\"submit\" name=\"submit\" " . 
           "value=\"$letter\" >";
  }
  
  function showPersDetail ($id = null)
  {
    $aLines = readPersonen ();
    echo "<table>";
    foreach ($aLines as $line)
    {
        $aPers = explode (";", $line);
        if ($aPers[0] == $_GET['id'])
        {
          echo "<tr><td>Vorname</td><td>$aPers[2]</td></tr>";
          echo "<tr><td>Nachname</td><td>$aPers[1]</td></tr>";
          echo "<tr><td>EMail</td><td>$aPers[3]</td></tr>";
          echo "<tr><td>Job</td><td>$aPers[4]</td></tr>";
          break;
        }
    }
    echo "</table>";
 }

 function showPersSelect ($selected = null)
 {
    $aLines = readPersonen ();
    echo "<table>";
    foreach ($aLines as $line)
    {
        $aPers = explode (";", $line);
        if ( substr ($aPers[1], 0, 1) == $selected )
          echo "<tr>" . 
               "<td><b>$aPers[1]</b></td><td> ... </td>" .
               "<td><A href=\"Personen.php?id=$aPers[0]\">
                     mehr</A></td>".     
               "</tr>";
    }
    echo "</table>";
 }
 
?>  
