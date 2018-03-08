
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "asset");  
 $query3 = "SELECT pc_kondition, count(*) as number FROM tb_pc GROUP BY pc_kondition";  
 $result3 = mysqli_query($connect, $query3); 

 ?>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
           
                 var data3 = google.visualization.arrayToDataTable([  
                          ['Condition1', 'Number1'],  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["pc_kondition"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]); 
                var options3 = {  
                      title: 'SYSTEM UNIT',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
           
                var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart3.draw(data3, options3);

     
           }  
           </script>  
  


	