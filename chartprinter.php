
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "asset");  
 $query1 = "SELECT printer_kondition, count(*) as number FROM tb_printer GROUP BY printer_kondition";  
 $result1 = mysqli_query($connect, $query1); 

 ?>  


           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
           
                 var data2 = google.visualization.arrayToDataTable([  
                          ['Condition1', 'Number1'],  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row["printer_kondition"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]); 
                var options2 = {  
                      title: 'PRINTER',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
           
                var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart2.draw(data2, options2);

     
           }  
           </script>  
  


	