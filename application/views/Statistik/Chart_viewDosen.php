<!DOCTYPE html> 
  <head> 
  <title>Google Chart and Codeigniter with MySQL</title> 
    <!--Load the AJAX API--> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
   
   <!--Script Grafik Dosen-->
   <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'index.php/Statistik/GrafikDosen/getdata' ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
      
	  var options = {
          title: 'Data Sebaran Dosen'
        };

      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_div')); 
      chart.draw(data, {width: 900, height: 500}); 
	  chart.draw(data, google.charts.Pie.convertOptions(options));
    } 
 
    </script> 

	 <!--Script Grafik Pengajuan-->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

     var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'index.php/Statistik/GrafikUsulan/getdata' ?>", 
          dataType: "json", 
          async: false 
          }).responseText;

      var options = {
        chart: {
          title: 'Grafik total usulan judul',
          
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

	   // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>

   <!--Script Grafik Pengajuan yg belum atau sudah -->
   <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
       
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'index.php/Statistik/GrafikMahasiswa/getdata' ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
      
	  var options = {
          title: 'Data Sebaran Dosen'
        };

      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chartmahasiswa_div')); 
      chart.draw(data, {width: 900, height: 500}); 
	  chart.draw(data, google.charts.Pie.convertOptions(options));
    } 
 
    </script> 
	
	
	
	
<style> 
h1 { 
    text-align: center; 
} 
</style> 
  </head> 
 
  <body> 
    <!--Div that will hold the pie chart--> 
	<br>
    <h2>Statistik</h2> 
    <div id="chart_div"></div> 
	<div id="line_top_x"></div> 
	<div id="chartmahasiswa_div"></div> 
	<br><br><br>
  </body> 
</html>