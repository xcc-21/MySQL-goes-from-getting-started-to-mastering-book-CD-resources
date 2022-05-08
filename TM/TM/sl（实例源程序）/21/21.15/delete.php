<?php
$id=$_GET[id];
include_once("conn.php");
$conn->autocommit(false);
if(!$conn->query("delete from tb_sco where id='".$id."'"))
{
 $conn->rollback();
}
if(!$conn->query("delete from tb_stu where id='".$id."'"))
{
 $conn->rollback();
}
$conn->commit();
$conn->autocommit(true);
echo "<script>window.location.href='index.php';</script>";
?>