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
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
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
    <h1>Quantity of fruits we have in our store - Displayed by Google Chart and Codeigniter with MySQL</h1> 
    <div id="chart_div"></div> 
	<div id="line_top_x"></div> 
	<div id="barchart_values" style="width: 900px; height: 300px;"></div>
	<br><br><br>
  </body> 
</html>