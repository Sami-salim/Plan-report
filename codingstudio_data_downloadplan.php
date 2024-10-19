<?php 

include('connection.php');
include_once('dbdb.php');
include "db_conn.php";  

header('content-type:application/vnd-ms-excel');
$filename="codingstudio_data.xls";
header("content-Disposition:attachment;filename=\"$filename\"");

?>
<form action="" method="post">
  
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
          <th width="10%" align="center">year</th>
        <th width="30%" align="center">
        

      </th>
      </tr>
    </thead>
    <tbody>
      <?php
  $i=1;   
  $sql2="SELECT * FROM `yearly_pland` order by id DESC";
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
      <td width="10%" align="left"><?php echo $row['year'];?></td>
      <td width="10%" align="left">
      
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
          <th width="20%" align="center">year</th>
        <th width="10%" align="center">
         
 
          </th>
      </tr>
    </tfoot>
  </table>
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