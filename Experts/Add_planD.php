<?php
  //$page_title = 'All Planing';
  //require_once('includes/load.php');./index.php?page=planingD
  // Checkin What level user has permission to view this page
  // page_require_level(3);
  //$products = join_product_table();
?>
<?php
  $page_title = 'Add_PlanD';
 
  // Checkin What level user has permission to view this page
  // page_require_level(3);
 // $products = join_product_table();
?>

  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
         <div class="pull-right">
		   <a href="./index.php?page=planingD" class="btn btn-primary"><?= __('BACK')?></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       
         </div>
        </div>

<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


            </script>
</head>
    <body>
        <div class="container">
            <form  class="insert-form" id="insert_form" method="post" action="">
                <hr>

                <div class="input-field">
                    <table class="table table-bordered" id="table_field">
                       				   
						   <tr>
                           
                            
                           

                        </tr>
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
                             $save="INSERT INTO yearly_planD(indicator, unit, baseline, yeariyplan, quarterone , quartertwo , quarterthree , quarterfour,rank,code, year) VALUE ('".$value."','".$txtunit[$key]."','".$txtbaseline[$key]."','".$txtyeariyplan[$key]."','".$txtquarterone[$key]."','".$txtquartertwo[$key]."','".$txtquarterthree[$key]."','".$txtquarterfour[$key]."','".$txtrank[$key]."','".$txtcode[$key]."','".$date."')";
                             $query=mysqli_query($conn,$save);

                          }
                         }

                         
                         ?>
                         <?php function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}?>
<?php function read_date($str){
     if($str)
      return date('F j, Y, g:i:s a', strtotime($str));
     else
      return null;
  }?>                   <center>
                    <input class="btn btn-success" type="submit" name="save" id="save" value="save Data">
                    </center>
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
                   
          </form>
    </div>
    </script></h1>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
    </html> 
	


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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

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