<?php
include 'db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>User Data</h2>
	  <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>Sl No</th>
            <th>indicator</th>
            <th>unit</th>
			<th>baseline</th>
			<th>yearly plan</th>
			<th>Quarter one</th>
			<th>Quarter two</th>
			<th>Quarter three</th>
			<th>Quarter four</th>
			<th>rank</th>
			<th>code</th>
			<th>year</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn=1;
          $user_qry="SELECT * from yearly_planD";
          $user_res=mysqli_query($conn,$user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
          {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $user_data['indicator']; ?></td>
            <td><?php echo $user_data['unit']; ?></td>
			<td><?php echo $user_data['baseline']; ?></td>
			    <td><?php echo $user_data['yeariyplan']; ?></td>
				  <td><?php echo $user_data['quarterone']; ?></td>
				    <td><?php echo $user_data['quartertwo']; ?></td>
					  <td><?php echo $user_data['quarterthree']; ?></td>
					    <td><?php echo $user_data['quarterfour']; ?></td>
						  <td><?php echo $user_data['rank']; ?></td>
						    <td><?php echo $user_data['code']; ?></td>
							  <td><?php echo $user_data['year']; ?></td>
          </tr>
          <?php
          $sn++;
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
</body>
</html>






























