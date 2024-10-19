<?php 

//require 'lang.php';

?>
<html>
	<head>
		<meta charset="utf-8" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	</head>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<style>

		body{
			font-family: tahoma;
		}
		header{
			display: flex;
			padding: 5px;
			justify-content: center;
			align-items: center;
			margin-top:5px;
		}

		header div{
			padding: 10px;
			
		}

		.dropdown{
			position: relative;
		}

		.dropdown-content{
			position: absolute;
			margin-top:10px;
			background-color: white;
			border: solid thin #aaa;
			padding: 10px;
		}
		.card-header{
			color: black;
			
		}
		.form-check-label{
			color: black;
			
		}
		.form-group{
			color: black;
		}

		.hide{
			display: none;
		}

		section{
			padding: 0px;
			max-width: 1000px;
			margin:auto;
		}

	</style>
	
	
	
  

</header>
<body>
	<section>
		
<div>
<h1><a href="#"><?= __('Planing Monitoring And Evaluasion System')?></a></h1>
<p>        <?= __('Welcome ')?><?php echo $_SESSION['login_name'] ?>!</p> 

<!DOCTYPE HTML>

	<body>
     
		
		</div>
		<div class="card">
				<strong><div class="card-header"><?= __('service delivery Survey')?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp<?php echo date("F j, Y, g:i a");?></strong>
				</div>  		
				<div class="card-body">
					<div class="form-group">
						<h3 class="mb-4"><?= __('The Over all regional service delivery status in 2024?')?></h3>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_1" value="excellence" checked>
							<label class="form-check-label mb-2" for="programming_language_1"><?= __('excellence')?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						
						
							<input type="radio" name="programming_language" id="programming_language_2" class="form-check-input" value="Moderate">
							<label class="form-check-label mb-2" for="programming_language_2"><?= __('Moderate')?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						
						
							<input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_3" value="low">
							<label class="form-check-label mb-3" for="programming_language_3"><?= __('low')?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						
						
							<input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_4" value="very low">
							<label class="form-check-label mb-4" for="programming_language_4"><?= __('very low')?></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						</div>
					</div>
					
						<button type="button" name="submit_data" class="btn btn-primary" id="submit_data"><?= __('Submit')?></button>
						
					</div>
				</div>
			</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header"><?= __('Pie Chart')?></div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="pie_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4">
						<div class="card-header"><?= __('Doughnut Chart')?></div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="doughnut_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mt-4 mb-4">
						<div class="card-header"><?= __('Bar Chart')?> </div>
						<div class="card-body">
							<div class="chart-container pie-chart">
								<canvas id="bar_chart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>

<script>
	
$(document).ready(function(){

	$('#submit_data').click(function(){

		var language = $('input[name=programming_language]:checked').val();

		$.ajax({
			url:"data.php",
			method:"POST",
			data:{action:'insert', language:language},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				$('#submit_data').attr('disabled', false);

				$('#programming_language_1').prop('checked', 'checked');

				$('#programming_language_2').prop('checked', false);

				$('#programming_language_3').prop('checked', false);

				alert("Your Feedback has been send...");

				makechart();
			}
		})

	});

	makechart();

	function makechart()
	{
		$.ajax({
			url:"data.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			success:function(data)
			{
				var language = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					language.push(data[count].language);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:language,
					datasets:[
						{
							label:'Vote',
							backgroundColor:color,
							color:'#fff',
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#pie_chart');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});

				var group_chart2 = $('#doughnut_chart');

				var graph2 = new Chart(group_chart2, {
					type:"doughnut",
					data:chart_data
				});

				var group_chart3 = $('#bar_chart');

				var graph3 = new Chart(group_chart3, {
					type:'bar',
					data:chart_data,
					options:options
				});
			}
		})
	}

});

</script>

  
</div>
	</section>
</body>

<script>
	
	var dropdowns = document.querySelectorAll(".dropdown");

	for (var i = 0; i < dropdowns.length; i++) {
		
		dropdowns[i].addEventListener('click',function(e){

			for (var x = 0; x < dropdowns.length; x++) {
				dropdowns[x].querySelector(".dropdown-content").classList.add("hide");
			}

			e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");
		});
	}
	

</script>