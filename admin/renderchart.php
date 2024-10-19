<?php
     
     $dataPoints = array( 
         array("label"=>"Industrial", "y"=>51.7),
         array("label"=>"Transportation", "y"=>26.6),
         array("label"=>"Residential", "y"=>13.9),
         array("label"=>"Commercial", "y"=>7.8)
     );
     $link=mysqli_connect("localhost","root","");
     mysqli_select_db($link,"planning_system");
     
     $test=array();
     $count=0;
     $res=mysqli_query($link,"select*from stratagyc_gols");
     while($row=mysqli_fetch_array($res))
     {
        $test[$count]["label"]=$row["stratagic_gools"];
        $test[$count]["y"]=$row["rank"];
        $count=$count+1;
     
     }
      
     ?>

<!DOCTYPE HTML>
<html>
<head>  
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "A Combination of five dataSeries"
      
      },   
      data: [{        
        type: "column",
        dataPoints: [
        { x: 10, y: 171 },
        { x: 20, y: 155},
        { x: 30, y: 150 },
        { x: 40, y: 165 },
        { x: 50, y: 195 },
        { x: 60, y: 168 },
        { x: 70, y: 128 },
        { x: 80, y: 134 },
        { x: 90, y: 114}
        ]
      },{        
        type: "column",
        dataPoints: [
        { x: 10, y: 101 },
        { x: 20, y: 105},
        { x: 30, y: 100 },
        { x: 40, y: 105 },
        { x: 50, y: 105 },
        { x: 60, y: 108 },
        { x: 70, y: 108 },
        { x: 80, y: 104 },
        { x: 90, y: 104}
        ]
      },{        
        type: "area",
        dataPoints: [
        { x: 15, y: 17 },
        { x: 25, y: 15},
        { x: 35, y: 10 },
        { x: 45, y: 16 },
        { x: 55, y: 15 },
        { x: 65, y: 68 },
        { x: 75, y: 18 },
        { x: 85, y: 34 },
        { x: 95, y: 14}
        ]
      },
        
      {        
        type: "line",
        dataPoints: [
        { x: 30, y: 71 },
        { x: 35, y: 55},
        { x: 40, y: 50 },
        { x: 45, y: 65 },
        { x: 50, y: 95 },
        { x: 55, y: 68 },
        { x: 60, y: 28 },
        { x: 65, y: 34 },
        { x: 70, y: 14}
        ]
      },
              {        
        type: "line",
        dataPoints: [
        { x: 5, y: 171 },
        { x: 15, y: 105},
        { x: 25, y: 90 },
        { x: 45, y: 65 },
        { x: 55, y: 75 },
        { x: 65, y: 68 },
        { x: 75, y: 28 },
        { x: 85, y: 34 },
        { x: 95, y: 84}
        ]
      }
      ]
    });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</head>
<body>
  <div id="chartContainer" style="height: 300px; width: 40%;">
  </div>
</body>
</html>