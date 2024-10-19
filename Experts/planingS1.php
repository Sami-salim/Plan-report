<?php
  $page_title = 'Planing A';
  //require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  // page_require_level(3);
  //$planings = join_product_table();
?>


         <div class="pull-right">
           <a href="./index.php?page=add_planS" class="btn btn-primary"><?= __('Add New')?></a>

         </div>
        </div>
  
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
                          
                          include "db_conn.php";   

                         if(isset($_POST['save'])) {
                          $txtindicatore=$_POST['txtindicatore'];
                          $txtunit=$_POST['txtunit'];
						  $txtunit=$_POST['txtrank'];
                          $txtyeariyplan=$_POST['txtyeariyplan'];
                          $txtquarterfour=$_POST['txtquarterfour'];
                          $txtquarterfour_report=$_POST['txtquarterfour_report'];
                          $txtquarterfour_achiv=$_POST['txtquarterfour_achiv'];                         
                          $txtyear=$_POST['code'];
						  $txtyear=$_POST['year'];
                      
}

include "db_conn.php";   
                           $sql2='SELECT `id`,code, categorie_id,`indicator`, `unit`,`baseline`, `yeariyplan`, `quarterone`, `quartertwo`, `quarterthree`,
                          `quarterfour`, rank,`year`, `quarterone_report`, `quartertwo_report`, `quarterthree_report`, `quarterfour_report`, `section`, 
                         (`quarterone`+`quartertwo`+ `quarterthree`+`quarterfour`) as uptoqfour_plan, (`quarterone_report`+`quartertwo_report`+`quarterthree_report`+`quarterfour_report`) as uptoqfour_report, 
                         FORMAT(((`quarterone_report`+`quartertwo_report`+`quarterthree_report`+`quarterfour_report`)*100)/(`quarterone`+`quartertwo`+`quarterthree`+`quarterfour`),2) as uptoqfour_achiv, FORMAT((`quarterfour_report`*100)/(`quarterfour`),2) as quarterfour_achiv
                         FROM `yearly_planS` WHERE 1';
                         $save = mysqli_query($conn,$sql2);
                         $yearly_plan = mysqli_fetch_all($save, MYSQLI_ASSOC);
                         mysqli_free_result($save);
                         mysqli_close($conn);
                        // print_r($yearly_plan);
?>  
<?php function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}?>
<?php function read_date($str){
     if($str)
      return date('F j, Y, g:i:s a', strtotime($str));
     else
      return null;
  }?>

      


<?php
error_reporting(0);
include_once('dbdb.php');
include "db_conn.php"; 
?>

<style>

.tablevk thead, tfoot {
background:#f9f9f9;
background-color: #17b900;
border-color: #00bd41;
width:150%;

}
th,td
{
border:1px solid black;
padding:10px;
}

</style>

<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>Your MessagesP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
   <div class="container">


   <br />
<div class="col-sm-12">

   <h3 align="center">Your Messages</h3>
   <h3 align="center" ><?php echo $_REQUEST['msg']; ?></h3>
   <br />   
   
<form action="editeS.php" method="post">
  
<table width="100%" class="table table-striped tablevk" >
  <thead>
   <tr>
   <th width="2%" align="center">Sl No</th>  
      <th width="20%" align="center">Indicatore</th>
       <th width="5%" align="center">unit</th>
        <th width="8%" align="center">baseline</th>
        <th width="8%" align="center">yearly plan</th>
        <th width="10%" align="center">Quarter one</th>
        <th width="10%" align="center">Quarter two</th>
        <th width="10%" align="center">Quarter three</th>
        <th width="10%" align="center">Quarter four</th>
		<th width="10%" align="center">rank</th>
		<th width="10%" align="center">code</th>
        <th width="10%" align="center">year</th>
      <th width="30%" align="center">
      <div class="row">
<div class="col-sm-5" id="edit_div" style="margin-left: -10px;">
Edit-<input type='checkbox' id='EditAll' autocomplete="off" >
 </div>
 <div class="col-sm-6" id="dalete_div">
Delete-<input type='checkbox' id='DeleteAll' autocomplete="off">
 </div>
 </div>
    </th>
    </tr>
  </thead>
  <tbody>
  <?php
$i=1;   
$sql2="SELECT * FROM `yearly_planS` order by id DESC";

foreach($yearly_plan as $row) { ?>
    <tr>
    <td width="5%" align="left"><?php echo $i++;?></td>
    <td width="20%" align="left"><?php echo $row['indicator'];?></td>
    <td width="90" align="left"><a href="<?php echo $row['unit'];?>"><?php echo $row['unit'];?></a></td>
    <td width="10%" align="left"><?php echo $row['baseline'];?></td>
    <td width="10%" align="left"><?php echo $row['yeariyplan'];?></td>
    <td width="10%" align="left"><?php echo $row['quarterone'];?></td>
    <td width="10%" align="left"><?php echo $row['quartertwo'];?></td>
    <td width="10%" align="left"><?php echo $row['quarterthree'];?></td>
    <td width="10%" align="left"><?php echo $row['quarterfour'];?></td>
	<td width="10%" align="left"><?php echo $row['rank']; ?></td>
	<td width="10%" align="left"><?php echo $row['code']; ?></td>
    <td width="10%" align="left"><?php echo read_date($row['year']);?></td>
    <td width="10%" align="left">
 <div class="row">
<div class="col-sm-5" id="edit_div">
 Edit-<input type="checkbox" class="edit_customer" name="editid[]"  value="<?php echo $row['id'];?>" autocomplete="off"/>
 </div>
 <div class="col-sm-6" id="dalete_div">
 Delete-<input type="checkbox" class="delete_customer" name="deleteid[]"  value="<?php echo $row['id'];?>" autocomplete="off"/>
 </div>
 </div>       
       </td>
     </tr>
<?php  }  ?>
  </tbody>
  <tfoot>
     <tr>
     <th width="2%" align="center">Sl No</th>  
      <th width="20%" align="center">Indicatores</th>
       <th width="10%" align="center">Unit</th>
        <th width="8%" align="center">baselines</th>
        <th width="8%" align="center">yearly plan</th>
        <th width="10%" align="center">Quarter one</th>
        <th width="10%" align="center">Quarter two</th>
        <th width="8%" align="center">Quarter three</th>
        <th width="10%" align="center">Quarter four</th>
		<th width="10%" align="center">rank</th>
		<th width="10%" align="center">code</th>
        <th width="20%" align="center">year</th>
      <th width="10%" align="center">
       
        
<div class="row">
<div class="col-sm-5" style="margin-Right: -8px;">
 <button type="submit" name="btn_edit" id="btn_edit" class="btn btn-warning" >Edit</button>
 </div><br>
 <div class="col-sm-6" style="margin-left:">
<button type="submit" name="btn_delete" id="btn_delete" class="btn btn-danger" >Delete</button>

 </div>
 </div>

        </th>
    </tr>
  </tfoot>
</table>

</div>
</form> 
</div>



</div>


</body>
   <script>
$(document).ready(function(){
$('#DeleteAll').on('click',function(){
        if($('#DeleteAll:checked').length == $('#DeleteAll').length){
           $('.delete_customer').prop('checked',true);
        }else{
            $('.delete_customer').prop('checked',false);
        }
});



$('#EditAll').on('click',function(){
        if($('#EditAll:checked').length == $('#EditAll').length){
           $('.edit_customer').prop('checked',true);
        }else{
            $('.edit_customer').prop('checked',false);
        }
});




});
</script> 
</html>
<?php include_once('layouts/footer.php'); ?>