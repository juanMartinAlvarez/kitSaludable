<?php
session_start();
$_SESSION['login']=="";
session_unset();
$_SESSION['action1']="Ha cerrado sesion";
?>
<script language="javascript">
  document.location="index.php";
</script>
