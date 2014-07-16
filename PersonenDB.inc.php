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
    echo "&nbsp;";
    echo "<input type=\"submit\" name=\"submit\" " . 
           "value=\"alle\" >";
  }
  
  function showPersDetail ($id = null)
  {
    $sql = "SELECT * FROM personen WHERE id = $id "; 
    //echo "<h3>$sql</h3>";
 
    $res = mysql_query ( $sql );
    $row = mysql_fetch_array ( $res );
    echo "<table>";    
    echo "<tr><td>Vorname</td><td>$row[vname]</td></tr>";
    echo "<tr><td>Nachname</td><td>$row[nname]</td></tr>";
    echo "<tr><td>EMail</td><td>$row[email]</td></tr>";
    echo "</table>";
 }

 function showPersSelect ($selected = null)
 {
    $sql = "SELECT * FROM personen WHERE nname LIKE '$selected%' "; 
    //echo "<h3>$sql</h3>";
 
    $res = mysql_query ( $sql );
    if (mysql_num_rows ($res) == 0)
    {
      echo "<h3>keine Datens&auml;tze vorhanden</h3>";
      return;
    }
    
    echo "<table>";
    while ( $row = mysql_fetch_array ($res) )
    {
          echo "<tr>" . 
               "<td><b>$row[nname]</b></td><td> ... </td>" .
               "<td><A href=\"PersonenDB.php?id=$row[id]\">
                     mehr</A></td>".     
               "</tr>";
    }
    echo "</table>";
 
 }
 
?>  
