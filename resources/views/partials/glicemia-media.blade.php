    <div class="row">
      <div style="padding:0px !important;" class="col-md-6">

<!-- 5. $Glicemias_chart =============================================================================

        Glicemias chart
-->

        <!-- Javascript -->
        <script>
          init.push(function () {
            var uploads_data = <?php echo $averages ?>;
            Morris.Line({
              element: 'hero-graph',
              data: uploads_data,
              xkey: 'datetime',
              ykeys: ['glucoseAverage'],
              labels: ['Value'],
              lineColors: ['#fff'],
              lineWidth: 2,
              pointSize: 4,
              gridLineColor: 'rgba(255,255,255,.5)',
              resize: true,
              gridTextColor: '#fff',
              xLabels: "day",
              xLabelFormat: function(d) {
                return ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov', 'Dez'][d.getMonth()] + ' ' + d.getDate();
              },
            });
          });          

        </script>

        <script type='application/javascript' src='/assets/javascripts/fastclick.js'>
        </script>

        <script type="text/javascript">
          if ('addEventListener' in document) {
            document.addEventListener('DOMContentLoaded', function() {
                FastClick.attach(document.body);
            }, false);
            console.log("Oi!");
          }
        </script>
        <!-- / Javascript -->

        <div style="-webkit-user-select: none; -webkit-touch-callout: none;" class="stat-panel">
                <!-- Primary background, small padding, vertically centered text -->
            <div class="stat-cell col-sm-8 padding-sm valign-middle" style="background-color:#5c89c7">
              <div id="hero-graph" class="graph" style="height: 230px;"></div>
            </div>
            <div class="stat-row">
                <!-- Small horizontal padding, bordered, without right border, top aligned text -->
                <div class="stat-cell col-sm-4 padding-sm-hr bordered no-border-r valign-top">
                    <!-- Small padding, without top padding, extra small horizontal padding -->
                    <h4 class="padding-sm no-padding-t padding-xs-hr"><i class="fa fa-area-chart text-primary"></i>&nbsp;&nbsp;Glicemia</h4>
                    <!-- Without margin -->
                    <ul class="list-group no-margin">
                        <!-- Without left and right borders, extra small horizontal padding, without background, no border radius -->
                        <li class="list-group-item no-border-hr padding-xs-hr no-bg no-border-radius">
                            Total de Medições <span class="label label-pa-blue pull-right">{{ $glucoseLimits['total'] }}</span>
                        </li>
                        <li class="list-group-item no-border-hr padding-xs-hr no-bg no-border-radius">
                            Hiperglicemias <span class="label label-pa-purple pull-right">
                    {{ $glucoseLimits['hiper'] }}
                  </span>
                        </li> <!-- / .list-group-item -->
                        <!-- Without left and right borders, extra small horizontal padding, without background -->
                        <li class="list-group-item no-border-hr padding-xs-hr no-bg">
                            Zona alvo <span class="label label-danger pull-right">{{ $glucoseLimits['normal'] }}</span>
                        </li> <!-- / .list-group-item -->
                        <!-- Without left and right borders, without bottom border, extra small horizontal padding, without background -->
                        <li class="list-group-item no-border-hr no-border-b padding-xs-hr no-bg">
                            Hipoglicemia <span class="label label-success pull-right">{{ $glucoseLimits['hipo'] }}</span>
                        </li> <!-- / .list-group-item -->
                    </ul>
                </div> <!-- /.stat-cell -->
          </div>
        </div> <!-- /.stat-panel -->
<!-- /5. $Glicemias_chart -->

<!-- 6. $EASY_PIE_CHARTS GLICEMIAS
===========================================================================

        Easy Pie charts
-->
