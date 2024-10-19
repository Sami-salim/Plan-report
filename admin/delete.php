<?php
error_reporting(0);
include_once('dbdb.php');

if(isset($_POST['btn_delete'])){
unset($_POST['btn_delete']);
$delete_ids=$_POST['deleteid'];
$totaldeleteid=count($_POST['deleteid']);
if($totaldeleteid==""){
echo "<script>alert('Sorry No Record Found');window.location.href = 'planingD.php';</script>";exit;
}
foreach($delete_ids as $key => $val)
  {
  $delete_que="DELETE from `yearly_planD` WHERE `id`='$val'";
  $dbConnection->exec($delete_que);
  }
 header("Location:planingD.php?msg=Record Delete Successfully");   
}
?>