<HTML>
<HEAD><TITLE>unsere Mitarbeiter</TITLE></HEAD>
<?php
  include ("Personen.inc.php");
  
  if ( isset ($_POST['submit']) || isset ($_GET['id']))
  {
    $id = $_GET['id'];
    $selected = $_POST['submit'];
    $aLines = readPersonen ();
  }
?>
<BODY>
<CENTER>
<h3>unsere Mitarbeiter</h3>
<FORM action="Personen.php" method="POST">

<?php
  showButtons ();
  showDetails ($aLines, $id, $selected);
?>  

</FORM>
</CENTER>
</BODY>
</HTML>

