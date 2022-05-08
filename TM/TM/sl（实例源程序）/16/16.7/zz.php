<?php
$tob=$_POST['tob'];
include_once("conn.php");
$conn->autocommit(false);
if(!$conn->query("update tb_zy set money=money-'".$tob."' where flag='mrsoft'")){
 $conn->rollback();
}
if(!$conn->query("update tb_zy set money=money+'".$tob."' where flag='mr'")){
 $conn->rollback();
}
$conn->commit();
$conn->autocommit(true);
echo "<script>window.location.href='index.php';</script>";
?>