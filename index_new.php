<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/yodlee.png">
    <title>Unified Dashboard</title>
    <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.page-wrapper {
    margin-left: 0px;
}
.col-lg-9 {
    max-width: 100%;
}
tbody tr td {
    font-family: 'Poppins', sans-serif;
    color: #202223;
    text-align:left;
}
thead tr th:last-child {
    text-align: left;
}
.container-fluid {
  padding: 0 0;
  padding-right: 25px;
}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    line-height: 32px;
    vertical-align: top;
    text-align: left;
}
.navbar-header {
    width: 100%;
}
.dataTables_wrapper {
    padding-top: 0;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0;
}
</style>
<script>
function openbox(){
    window.open("http://172.17.15.222/SO/SO/UN_DASHBOARD/statd/MQ_SC9.php",'_blank');
}
function openboxmquk(){
    window.open("http://172.17.15.222/SO/SO/UN_DASHBOARD/statd/MQ_UK.php",'_blank');
}
function openboxmqaus(){
    window.open("http://172.17.15.222/SO/SO/UN_DASHBOARD/statd/MQ_AUS.php",'_blank');
}
function openboxmqcanada(){
    window.open("http://172.17.15.222/SO/SO/UN_DASHBOARD/statd/MQ_CANADA.php",'_blank');
}
function openboxmqidc(){
    window.open("http://172.17.15.222/SO/SO/UN_DASHBOARD/statd/MQ_IDC.php",'_blank');
}
function openboxmqmal(){
    window.open("http://172.17.15.222/SO/SO/UN_DASHBOARD/statd/MQ_MAL.php",'_blank');
}
function openboxdc(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DChome.php",'_blank');
}
function openboxdcuk(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCUK.php",'_blank');
}
function openboxdcaus(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCAUS.php",'_blank');
}
function openboxdccan(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCCAN.php",'_blank');
}
function openboxdcmal(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCMAL.php",'_blank');
}
function openboxdcidc(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCIDC.php",'_blank');
}
function openboxdcs(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCShome.php",'_blank');
}

function openboxdcsuk(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCSUK.php",'_blank');
}
function openboxdcsaus(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCSAUS.php",'_blank');
}
function openboxdcscan(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCSCAN.php",'_blank');
}
function openboxdcsmal(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCSMAL.php",'_blank');
}
function openboxdcsidc(){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/DCSIDC.php",'_blank');
}
function openboxnet(region){
    window.open("http://172.17.15.222/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/net_details_"+region+".html",'_blank');
}
function openboxgatherer(dc){
    window.open("http://172.17.15.222/gatherer_tool/homedetailsregion.php?dc_name="+dc,'_blank');
}
</script>

</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                   <h4 style="color:blue"><strong>Unified Dashboard</strong></h4> 
                </div>
                <!-- End Logo -->
				
				<div class="card-body p-b-0" style="margin-left:265px">
 
				</div>
				
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
       
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                    
					   
                            <div class="col-lg-9">
                            <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive m-t-40">
                                    <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
<button onclick="location.href = 'http://172.17.15.222//inventory/home.php';" id="myButton" class="float-right submit-button" ><img src="inventory.png" style="width:40px; height:40px" title="Inventory">Inventory Details</button>
<br>
<table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                        <thead>
                                            <tr role="row">
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"  style="background-color:#27457a;color:white;width: 165.4px;height:60px">Environment</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"   style="background-color:#27457a;color:white;width: 149.4px;">SC9</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"  style="background-color:#27457a;color:white;width: 149.4px;">UK</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"  style="background-color:#27457a;color:white;width: 149.4px;">AUS</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"  style="background-color:#27457a;color:white;width: 149.4px;">CANADA</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"  style="background-color:#27457a;color:white;width: 149.4px;">IDC</th>
                                                <th  tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"  style="background-color:#27457a;color:white;width: 149.4px;">RHB</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">BDF</td>
					<?php
                                        $bdf_stat=shell_exec('curl -s http://172.17.15.222/bdf_dashboard/home.php | grep \'#ff4d4d\'');
                                        if(empty($bdf_stat))
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }
                                                else
                                                {
                                                 $color="#ff0808";
                                                $status="RED";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' target=\"_blank\" href='http://172.17.15.222/bdf_dashboard/home.php'>$status</a> </td>"
                                              ?>
					<td  style='width:149.4px;background-color:#4cd137'><a style='color:white'>NA</a> </td>
					 <td  style='width:149.4px;background-color:#4cd137'><a style='color:white'>NA</a> </td>
					 <td  style='width:149.4px;background-color:#4cd137'><a style='color:white'>NA</a> </td>
					 <td  style='width:149.4px;background-color:#4cd137'><a style='color:white'>NA</a> </td>
					 <td  style='width:149.4px;background-color:#4cd137'><a style='color:white'>NA</a> </td>
                             <tr role="row" class="odd">
                                                <td class="sorting_1">MQ</td>
                                              <?php
						$stat=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/SC9_status');
 
					        if(trim($stat)=="GREEN")
                                                {
                                                        $color="#4cd137";
                                                }
						else
						{
						 $color="#ff0808";
                                                }

						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openbox()'> $stat</a> </td>"
                                              ?>
                                              <?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/UK_status');

                                                if(trim($stat1)=="GREEN")
                                                {
                                                        $color="#4cd137";
                                                }
                                                else
                                                {
                                                 $color="#ff0808";
                                                }

					echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxmquk()'> $stat</a> </td>"	


                                               ?>
                                              <?php
                                                
                                                $stat2=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/AUS_status');

                                                if(trim($stat2)=="GREEN")
                                                {
                                                        $color="#4cd137";
                                                }
                                                else
                                                {
                                                 $color="#ff0808";
                                                }

                                        echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxmqaus()'> $stat2</a> </td>"
                                               ?> 

                                              <?php

                                                $stat3=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/CANADA_status');

                                                if(trim($stat3)=="GREEN")
                                                {
                                                        $color="#4cd137";
                                                }
                                                else
                                                {
                                                 $color="#ff0808";
                                                }

                                        echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxmqcanada()'> $stat3</a> </td>"
                                               ?>

                                               <?php

                                                $stat4=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/IDC_status');

                                                if(trim($stat4)=="GREEN")
                                                {
                                                        $color="#4cd137";
                                                }
                                                else
                                                {
                                                 $color="#ff0808";
                                                }

                                        echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxmqidc()'> $stat4</a> </td>"
                                               ?>

                                              <?php

                                                $stat5=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/UN_DASHBOARD/RHB_status');

                                                if(trim($stat5)=="GREEN")
                                                {
                                                        $color="#4cd137";
                                                }
                                                else
                                                {
                                                 $color="#ff0808";
                                                }

                                        echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxmqmal()'> $stat5</a> </td>"
                                               ?>

                                               
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Gatherer</td>
                                               <?php
					$stat1=shell_exec('python /var/www/html/gatherer_tool/homedetailsregion.py US-SC9 | grep "below threshold"');

                                                if(empty($stat1))
                                                {
							$color="#4cd137";
							$status="GREEN";
                                                }
                                                else
                                                {
						  $color="#ff0808";
						  $status="RED";
                                                }
						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxgatherer('US-SC9')\"> $status</a> </td>";
						$stat1=shell_exec('python /var/www/html/gatherer_tool/homedetailsregion.py UK_Cloud | grep "below threshold"');

                                                if(empty($stat1))
                                                {
                                                        $color="#4cd137";
                                                        $status="GREEN";
                                                }
                                                else
                                                {
                                                  $color="#ff0808";
                                                  $status="RED";
                                                }
						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxgatherer('UK_Cloud')\"> $status</a> </td>";
						$stat1=shell_exec('python /var/www/html/gatherer_tool/homedetailsregion.py SLAU_Cloud | grep "below threshold"');

                                                if(empty($stat1))
                                                {
                                                        $color="#4cd137";
                                                        $status="GREEN";
                                                }
                                                else
                                                {
                                                  $color="#ff0808";
                                                  $status="RED";
                                                }
						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxgatherer('SLAU_Cloud')\"> $status</a> </td>";
						$stat1=shell_exec('python /var/www/html/gatherer_tool/homedetailsregion.py SLCA_Cloud | grep "below threshold"');

                                                if(empty($stat1))
                                                {
                                                        $color="#4cd137";
                                                        $status="GREEN";
                                                }
                                                else
                                                {
                                                  $color="#ff0808";
                                                  $status="RED";
                                                }
						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxgatherer('SLCA_Cloud')\"> $status</a> </td>";
						$stat1=shell_exec('python /var/www/html/gatherer_tool/homedetailsregion.py IDC | grep "below threshold"');

                                                if(empty($stat1))
                                                {
                                                        $color="#4cd137";
                                                        $status="GREEN";
                                                }
                                                else
                                                {
                                                  $color="#ff0808";
                                                  $status="RED";
                                                }

						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxgatherer('IDC')\"> $status</a> </td>";
						$stat1=shell_exec('python /var/www/html/gatherer_tool/homedetailsregion.py RHB | grep "below threshold"');

                                                if(empty($stat1))
                                                {
                                                        $color="#4cd137";
                                                        $status="GREEN";
                                                }
                                                else
                                                {
                                                  $color="#ff0808";
                                                  $status="RED";
                                                }
						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxgatherer('RHB')\"> $status</a> </td>";
						?> 
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">DC</td>
						<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DC_instance_status_SC9.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
							 $color="#ff0808";
							$status="RED";
                                                }
                                                else
                                                {
						$color="#4cd137";
						$status="GREEN";
                                                }

						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdc()'> $status</a> </td>"
                                               ?>
                                               
                                               <?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DC_instance_status_UK.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcuk()'> $status</a> </td>"
                                               ?>

                                               <?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DC_instance_status_AUS.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcaus()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DC_instance_status_CAN.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdccan()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DC_instance_status_IDC.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcidc()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DC_instance_status_MAL.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcmal()'> $status</a> </td>"
                                               ?>
                                                <!--<td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td> -->

                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">DCS</td>
						<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DCS_instance_status_SC9.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

						echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcs()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DCS_instance_status_UK.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcsuk()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DCS_instance_status_AUS.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcsaus()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DCS_instance_status_CAN.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcscan()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DCS_instance_status_IDC.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcsidc()'> $status</a> </td>"
                                               ?>

<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/DCS_instance_status_MAL.txt | grep down | cut -d "," -f2 | uniq');

                                                if(trim($stat1)=="down")
                                                {
                                                         $color="#ff0808";
                                                        $status="RED";
                                                }
                                                else
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick='openboxdcsmal()'> $status</a> </td>"
                                               ?>
<!--                                                <td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td> -->

                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Database</td>
                                               <td  style='width:149.4px;background-color:#4cd137'><a style='color:white' target="_blank" href='http://172.17.15.222/database_dashboard/home.php#'>GREEN</a> </td> 
						<td  style='width:149.4px;background-color:#4cd137'><a style='color:white' target="_blank" href='http://172.17.15.222/database_dashboard/home.php#'>GREEN</a> </td>
						<td  style='width:149.4px;background-color:#4cd137'><a style='color:white' target="_blank" href='http://172.17.15.222/database_dashboard/home.php#'>GREEN</a> </td>
						<td  style='width:149.4px;background-color:#4cd137'><a style='color:white' target="_blank" href='http://172.17.15.222/database_dashboard/home.php#'>GREEN</a> </td>
						<td  style='width:149.4px;background-color:#4cd137'><a style='color:white' target="_blank" href='http://172.17.15.222/database_dashboard/home.php#'>GREEN</a> </td>
						<td  style='width:149.4px;background-color:#4cd137'><a style='color:white' target="_blank" href='http://172.17.15.222/database_dashboard/home.php#'>GREEN</a> </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Load Balancer</td>
                                                <?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/net_details_SC9.html | grep "<td>down\|User Down" | wc -l');

                                                if(trim($stat1)=="0")
                                                {
						$color="#4cd137";
                                                $status="GREEN";
                                                }
                                                else
                                                {
						$color="#ff0808";
                                                        $status="RED";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxnet('SC9')\"> $status</a> </td>"
                                               ?>
	

						<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/net_details_UK.html | grep "<td>down\|User Down" | wc -l');

                                                if(trim($stat1)=="0")
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }
                                                else
                                                {
                                                $color="#ff0808";
                                                        $status="RED";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxnet('UK')\"> $status</a> </td>"
                                               ?>
						

						<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/net_details_AUS.html | grep "<td>down\|User Down" | wc -l');

                                                if(trim($stat1)=="0")
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }
                                                else
                                                {
                                                $color="#ff0808";
                                                        $status="RED";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxnet('AUS')\"> $status</a> </td>"
                                               ?>

						<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/net_details_CAN.html | grep "<td>down\|User Down" | wc -l');

                                                if(trim($stat1)=="0")
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }
                                                else
                                                {
                                                $color="#ff0808";
                                                        $status="RED";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxnet('CAN')\"> $status</a> </td>"
                                               ?>


						<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/net_details_IDC.html | grep "<td>down\|User Down" | wc -l');

                                                if(trim($stat1)=="0")
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }
                                                else
                                                {
                                                $color="#ff0808";
                                                        $status="RED";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxnet('IDC')\"> $status</a> </td>"
                                               ?>

						<?php

                                                $stat1=shell_exec('cat /var/www/html/SO/SO/ToolOpsDashBoard/RETINS/MQ_scripts/DCS_UN_DASH/dinesh_test/net_details_MAL.html | grep "<td>down\|User Down" | wc -l');

                                                if(trim($stat1)=="0")
                                                {
                                                $color="#4cd137";
                                                $status="GREEN";
                                                }
                                                else
                                                {
                                                $color="#ff0808";
                                                        $status="RED";
                                                }

                                                echo "<td  style='width:149.4px;background-color:$color'><a style='color:white' href='#' onclick=\"openboxnet('MAL')\"> $status</a> </td>"
                                               ?>

 
                                            
<!--                                            </tr>
<tr role="row" class="odd">
                                                <td class="sorting_1">API Monitoring</td>
                                                <td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td>
                                                <td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td>
                                                <td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td>
                                                <td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td>
                                                <td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td>
                                                <td data-toggle="modal" data-target="#myModal" style="background-color:#4cd137;color:white">GREEN</td>
                                                
                                            </tr>
--></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                             </div>
                             <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
       
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
        <p>Some text in the modal.</p>
        <p>Some text in the modal.</p>
        <p>Some text in the modal.</p>

         <p>Some text in the modal.</p>
         <p>Some text in the modal.</p>
         <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#273c75">Close</button>
      </div>
    </div>

  </div>
</div>
					
                           
		
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script>
	 <script src="js/lib/toastr/toastr.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/toastr/toastr.init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
