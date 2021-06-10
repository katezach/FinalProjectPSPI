<!--Returns the selected answer, for previous/next/current question -->
<?php
session_start();
$qid=$_GET["qid"];
$value=$_GET["value"];
$_SESSION["answer"][$qid]=$value;
?>