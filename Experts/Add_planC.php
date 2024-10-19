<?php
  $page_title = 'All Planing';
  //require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  // page_require_level(3);
  //$products = join_product_table();
?>

     </div>
           <a href="./index.php?page=planingC" class="btn btn-primary">BACK</a>

    
     
  
<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


            
</head>
    <body>
        <div class="container">
            <form  class="insert-form" id="insert_form" method="post" action="">
                <hr>

                <div class="input-field">
                    <table class="table table-bordered" id="table_field">
                       				   
						   <tr>
                          
                            
                           

                        </tr>
						   
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
                          
                          include "db_conn.php";   

                         if(isset($_POST['save'])) {
                          $txtindicatore=$_POST['txtindicatore'];
                          $txtunit=$_POST['txtunit'];
                          $txtbaseline=$_POST['txtbaseline'];
                          $txtyeariyplan=$_POST['txtyeariyplan'];
                          $txtquarterone=$_POST['txtquarterone'];
                          $txtquartertwo=$_POST['txtquartertwo'];
                          $txtquarterthree=$_POST['txtquarterthree'];
                          $txtquarterfour=$_POST['txtquarterfour'];
						    $txtrank=$_POST['txtrank'];
							$txtcode=$_POST['txtcode'];
                          $date    = make_date();
						  
                      
                          foreach($txtindicatore as $key => $value){
                             $save="INSERT INTO yearly_planC(indicator, unit, baseline, yeariyplan, quarterone , quartertwo , quarterthree , quarterfour,rank,code, year) VALUE ('".$value."','".$txtunit[$key]."','".$txtbaseline[$key]."','".$txtyeariyplan[$key]."','".$txtquarterone[$key]."','".$txtquartertwo[$key]."','".$txtquarterthree[$key]."','".$txtquarterfour[$key]."','".$txtrank[$key]."','".$txtcode[$key]."','".$date."')";
                             $query=mysqli_query($conn,$save);

                          }
                         }

                         
                         ?>
                                            
                    </table>
					 <table class="table table-bordered" id="table_field">
					<tr>
                            <th>indicatore</th><td><input class="form-control" type="text" name="txtindicatore[]" size="100" required=""></td></tr>						   
                            <th>unit</th><td><input class="form-control" type="text" name="txtunit[]"required=""></td></tr>
                            <th>baseline</th><td><input class="form-control" type="text" name="txtbaseline[]"  required=""></td></tr>
                            <th>yearlyplan</th> <td><input class="form-control" type="text" name="txtyeariyplan[]" required=""></td></tr>
                            <th>Quarterone</th><td><input class="form-control" type="text" name="txtquarterone[]" required=""></td></tr>
                            <th>Quartertwo</th><td><input class="form-control" type="text" name="txtquartertwo[]" required=""></td></tr>
                            <th>Quarterthree</th><td><input class="form-control" type="text" name="txtquarterthree[]" required=""></td></tr>
                            <th>Quarterfour</th><td><input class="form-control" type="text" name="txtquarterfour[]" required=""></td></tr>
							<th>rank</th><td><input class="form-control" type="text" name="txtrank[]" required=""></td></tr>
							<th>code</th><td><input class="form-control" type="text" name="txtcode[]" required=""></td></tr>
                            
                           

                        </tr>
                      </table>

                    </table>
                    <center>
                    <input class="btn btn-success" type="submit" name="save" id="save" value="save Data">
                    </center>
          </form>
    </div>
    </script></h1>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
    </html> 

<style>
body{
background-color: #d9f2ff !important;
}
.tablevk{
background-color: white;
 }  
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

<?php
error_reporting(0);
include_once('dbdb.php');
?>
<!DOCTYPE HTML>
<html>
<head>

 <meta charset="utf-8">
 <title></title>
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

   <h3 align="center">your messegs</h3>
   <h3 align="center" ><?php echo $_REQUEST['msg']; ?></h3>
   <br />   
   
<form action="editeC.php" method="post">
  
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
<div class="col-sm-5" id="edit_div" style="margin-left: -33px;">
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
$sql2="SELECT * FROM `yearly_planC` order by id DESC";
foreach($dbConnection->query($sql2, PDO::FETCH_ASSOC) as $row)
 {
  ?>
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
		<th width="20%" align="center">rank</th>
		<th width="20%" align="center">code</th>
        <th width="20%" align="center">year</th>
      <th width="10%" align="center">
       
        
<div class="row">
<div class="col-sm-5" style="margin-Right: -13px;">
 <button type="submit" name="btn_edit" id="btn_edit" class="btn btn-warning" >Edit</button>
 </div>
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