<?php // number of working assets
	$search_result = mysqli_query($konek, "SELECT * FROM tb_aircon WHERE air_kondition='Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $total = $number_of_rows; 

    $search_result = mysqli_query($konek, "SELECT * FROM tb_printer WHERE printer_kondition='Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $total1 = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_tv WHERE tv_kondition='Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $total2 = $number_of_rows;


	$search_result = mysqli_query($konek, "SELECT * FROM tb_pc WHERE  pc_kondition='Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $total3 = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_pc_nonbranded WHERE  pc_kondition='Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $total4 = $number_of_rows;

     $pctotal = $total3 + $total4;

     $tot = $total + $total1 + $total2 + $pctotal; 
     //end


    // number of Not working assets
     $search_result = mysqli_query($konek, "SELECT * FROM tb_aircon WHERE air_kondition='Not_Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $airtotal = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_printer WHERE printer_kondition='Not_Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $printertotal = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_tv WHERE tv_kondition='Not_Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $tvtotal = $number_of_rows;


	$search_result = mysqli_query($konek, "SELECT * FROM tb_pc WHERE  pc_kondition='Not_Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $pcbranded = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_pc_nonbranded WHERE  pc_kondition='Not_Working'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $pc_nonbranded = $number_of_rows;

     $Notworking_pc = $pcbranded + $pc_nonbranded;

     $notworking = $airtotal + $printertotal + $tvtotal + $Notworking_pc; 
     //end

     //number of deprecated assets

     $search_result = mysqli_query($konek, "SELECT * FROM tb_aircon WHERE air_kondition='Deprecated'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $dep_total_air = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_printer WHERE printer_kondition='Deprecated'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $dep_total_print = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_tv WHERE tv_kondition='Deprecated'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $dep_total_tv = $number_of_rows;


    $search_result = mysqli_query($konek, "SELECT * FROM tb_pc WHERE  pc_kondition='Deprecated'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $dep_total_pcbranded = $number_of_rows;

     $search_result = mysqli_query($konek, "SELECT * FROM tb_pc_nonbranded WHERE  pc_kondition='Deprecated'");
    $number_of_rows = mysqli_num_rows($search_result);  
     $dep_total_pcnonbranded = $number_of_rows;

     $dep_total_pc = $dep_total_pcbranded + $dep_total_pcnonbranded;

     $Deprecated = $dep_total_air + $dep_total_print + $dep_total_tv + $dep_total_pc;


     $total = $tot + $notworking + $Deprecated;

     //end

     //number of accounts

?>