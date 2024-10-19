<!DOCTYPE html>

       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

       <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

         <div class="col-md-8">
      <form class="form-group" action="add_sale.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">indicator</th>
                    <th scope="col">unit</th>
                    <th scope="col">yeariyplan</th>
                    <th scope="col">quarterone</th>
					 <th scope="col">quarterone_report</th>
					  <th scope="col">quarterone_achiv</th>
					   <th scope="col">rank</th>
					    <th scope="col">code</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","planning_system");
                    global $con;

                    $query = "select * from yearly_planD;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
              
                      #$indicator = $row['indicator'];
                      #$unit = $row['unit'];
                      #$yeariyplan = $row['yeariyplan'];
                      #$quarterone = $row['quarterone'];
					   #$quarterone_report = $row['quarterone_report'];
					    #$quarterone_achiv = $row['quarterone_achiv'];
						 #$rank = $row['rank'];
						  #$code = $row['code'];
                  ?>
                      <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['indicator'];?></td>
                        <td><?php echo $row['unit'];?></td>
                        <td><?php echo $row['yeariyplan'];?></td>
                        <td><?php echo $row['quarterone'];?></td>
						 <td><?php echo $row['quarterone_report'];?></td>
						  <td><?php echo $row['quarterone_achiv'];?></td>
						   <td><?php echo $row['rank'];?></td>
						    <td><?php echo $row['code'];?></td>
                      </tr>
                    <?php $cnt++; } ?>
                </tbody>
              </table>
        <br>
      </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>