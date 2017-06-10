<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-download"></i> Downloaded Apps</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-desktop"></i>Analytics</li>
						<li><i class="fa fa-download"></i>Downloaded Apps</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Bar
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="bar" height="300" width="500"></canvas>
                                   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Android', 'iOS'],
          ['2014', 1000, 400],
          ['2015', 1170, 460],
          ['2016', 660, 1120],
          ['2017', 1030, 540]
        ]);

        var options = {
          chart: {
            title: 'Apps Downloaded',
            subtitle: 'iOS and Android: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
                                  </div>

                              </section>
                </div>
            </div>