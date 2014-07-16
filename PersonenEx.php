<HTML>
<HEAD><TITLE>unsere Mitarbeiter</TITLE></HEAD>
<?php
  include ("PersonenEx.inc.php");  
?>
<BODY>
<CENTER>
<h3>unsere Mitarbeiter</h3>
<FORM method="POST">

<?php
  showButtons ();
  if ( isset ($_POST['submit']) )
    showPersSelect ($_POST['submit']);
  else if ( isset ($_GET['id']) )
    showPersDetail ($_GET['id']);
?>  

</FORM>
</CENTER>
</BODY>
</HTML>

