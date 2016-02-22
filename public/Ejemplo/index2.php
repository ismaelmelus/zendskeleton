<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MorrisJS</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bower_components/morrisjs/morris.css" media="screen" title="no title" charset="utf-8">
        <script src="bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
        <script src="bower_components/raphael/raphael-min.js" charset="utf-8"></script>
        <script src="bower_components/morrisjs/morris.js" charset="utf-8"></script>
    </head>
    <body>
        <?php
        require ("data.php");
        ?>
        <script>
        jQuery(document).ready(function()
        {
            // Bar Chart
            var MorrisBar = Morris.Bar({
                element: 'chart-bar',
                data: JSON.parse('<?php echo json_encode($data) ?>'),
                xkey: 'ext',
                ykeys: ['people'],
                labels: ['Personas'],
                hideHover: 'auto',
                resize: true,
                xLabelFormat: function(d)
                {
                    return "Ciudad " + d.src.city;
                },
                barColors: ["#090217"],
                hoverCallback: function(index, options, content)
                {
                    return content;
                }
            });
            var MorrisArea = Morris.Line({
                element: 'chart-line',
                data: JSON.parse('<?php echo json_encode($data) ?>'),
                parseTime: false,
                xkey: 'city',
                ykeys: ['people'],
                lineColors: ['#090217'],
                xLabelFormat: function(d)
                {
                    return "Ciudad " + d.src.city;
                },
                labels: ['Personas'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true,
                hoverCallback: function(index, options, content)
                {
                    return content;
                },
            });
 
            var MorrisArea = Morris.Area({
                element: 'chart-area',
                data: JSON.parse('<?php echo json_encode($data) ?>'),
                parseTime: false,
                xkey: 'city',
                ykeys: ['people'],
                lineColors: ['#090217'],
                xLabelFormat: function(d)
                {
                    return "Ciudad " + d.src.city;
                },
                labels: ['Personas'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true,
                hoverCallback: function(index, options, content)
                {
                    return content;
                },
            });
 
            var MorrisArea = Morris.Donut({
                element: 'chart-donut',
                data: JSON.parse('<?php echo json_encode($donut) ?>')
            });
        })
        </script>
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Bar Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-bar"></div>
              </div>
            </div>
        </div>
 
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Area Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-area"></div>
              </div>
            </div>
        </div>
 
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Line Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-line"></div>
              </div>
            </div>
        </div>
 
        <div class="container">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Donut Morris</h3>
              </div>
              <div class="panel-body">
                  <div id="chart-donut"></div>
              </div>
            </div>
        </div>
    </body>
</html>