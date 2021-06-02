<!--Returns -->
<?php
session_start();
$qid=$_GET["qid"];
$first=$_GET["first"];
$_SESSION["answer"][$qid]=$first;
?>