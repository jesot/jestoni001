
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "asset");  
 $query4 = "SELECT tv_kondition, count(*) as number FROM tb_tv GROUP BY tv_kondition";  
 $result4 = mysqli_query($connect, $query4); 

 ?>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
           
                 var data4 = google.visualization.arrayToDataTable([  
                          ['Condition1', 'Number1'],  
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                               echo "['".$row["tv_kondition"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]); 
                var options4 = {  
                      title: 'TELEVISION',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
           
                var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart4.draw(data4, options4);

     
           }  
           </script>  
  


	