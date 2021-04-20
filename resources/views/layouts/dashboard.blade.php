@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Chartjs',true)
@section('plugins.Sweetalert2',true)
@section('plugins.ionicon',true)
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner"> 
                      
                      <h3>$ 0.00</h3>
                      <p>Capital invertido en pesos.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
                      <p>Incremento</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-chart-line"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>2</h3>
                      <p>Proyectos registrados</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-file-alt"></i>
                    </div>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>
      
                      <p>Inversionitas registrados</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users"></i>
                    </div>
                 
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <div class="row ">
                <div class="col-md-12">
                  <div class="card bg-dark">
                    <div class="card-header">
                      <h5 class="card-title">General | inversiones</h5>
      
                      <div class="card-tools ">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-wrench"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <a class="dropdown-divider"></a>
                            <a href="#" class="dropdown-item">Separated link</a>
                          </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header --> 
                    <div class="card-body " >
                      <div class="row">
                        <div class="col-md-8">
                          
                          <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <!-- Sales Chart Canvas -->
                            <canvas id="barChart2" height="198" style="height: 180px; display: block; width: 550px;" width="605" class="chartjs-render-monitor"></canvas>
                          </div>
                          <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                          <p class="text-center">
                            <strong>Cumplimiento de objetivos</strong>
                          </p>
      
                          <div class="progress-group">
                            Add Products to Cart
                            <span class="float-right"><b>160</b>/200</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 80%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
      
                          <div class="progress-group">
                            Complete Purchase
                            <span class="float-right"><b>310</b>/400</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-danger" style="width: 75%"></div>
                            </div>
                          </div>
      
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text">Visit Premium Page</span>
                            <span class="float-right"><b>480</b>/800</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" style="width: 60%"></div>
                            </div>
                          </div>
      
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            Send Inquiries
                            <span class="float-right"><b>250</b>/500</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-warning" style="width: 50%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-sm-3 col-6 ">
                          <div class="description-block border-right ">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 25%</span>
                            <h5 class="description-header">$35,210.43</h5>
                            <span class="description-text">INGRESOS TOTALES</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 25%</span>
                            <h5 class="description-header">$10,390.90</h5>
                            <span class="description-text">COSTO TOTAL </span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 25%</span>
                            <h5 class="description-header">$24,813.53</h5>
                            <span class="description-text">GANANCIA TOTAL </span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block">
                            <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 25%</span>
                            <h5 class="description-header">1200</h5>
                            <span class="description-text">CUMPLIMIENTO DE OBJETIVOS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
           <!-- Left col -->
            <section class="col-lg-6 connectedSortable ui-sortable">


                <div class="card bg-dark">
                    <div class="card-header">
                      <h3 class="card-title">Acciones</h3>
      
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="chart-responsive"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="pieChart" height="84" width="170" class="chartjs-render-monitor -" style="display: block; height: 77px; width: 155px;"></canvas>
                          </div>
                          <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 ">
                          <ul class="chart-legend clearfix">
                            <li><i class="far fa-circle text-danger"></i> Barlovento</li>
                            <li><i class="far fa-circle text-success"></i> Nuevo Chacala</li>
                            <li><i class="far fa-circle text-warning"></i> Ejemplo 1</li>
                            <li><i class="far fa-circle text-info"></i> Ejemplo 2 </li>
                            <li><i class="far fa-circle text-info"></i> Ejemplo 3</li>
                          </ul>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer  p-0">
                      <table class="table bg-dark">
                        <thead>
                          <tr>
                           
                            <th class="text-center" scope="col">Proyecto</th>
                            <th class="text-center" scope="col">Inversion</th>
                            <th class="text-center" scope="col">Participacion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">Barlovento</td>
                            <td class="text-center text-success">500,000.00</td>
                            <td class="text-center text-success">10%</td>
                          </tr>
                          <tr>
                            <td class="text-center">Nuevo Chacala</td>
                            <td class="text-center text-success">1,000,000.00</td>
                            <td class="text-center text-success">10%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.footer -->
                  </div>
                  
           
 <!-- right col -->
          <!-- Calendar -->
        
            
          </section>
          <section class="col-lg-6 connectedSortable ui-sortable ">
            <div class="card  bg-dark">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <div class="card-tools">
                        <!-- button with a dropdown -->
                       
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Ganancias </span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class=" ">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text">Desde el mes pasado</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
                    <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class="">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"><div class="">
                        </div>
                    </div>
                </div>
                     <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 447px;" width="447" height="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
              </div>
              <div class="card  bg-dark">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendario
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->
                   
                    <button type="button" class="btn   btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn  btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget   usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">April 2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Dom</th><th class="dow">Lun</th><th class="dow">Mar</th><th class="dow">Mie</th><th class="dow">Jue</th><th class="dow">Vie</th><th class="dow">Sav</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="03/28/2021" class="day old weekend">28</td><td data-action="selectDay" data-day="03/29/2021" class="day old">29</td><td data-action="selectDay" data-day="03/30/2021" class="day old">30</td><td data-action="selectDay" data-day="03/31/2021" class="day old">31</td><td data-action="selectDay" data-day="04/01/2021" class="day">1</td><td data-action="selectDay" data-day="04/02/2021" class="day">2</td><td data-action="selectDay" data-day="04/03/2021" class="day weekend">3</td></tr><tr><td data-action="selectDay" data-day="04/04/2021" class="day weekend">4</td><td data-action="selectDay" data-day="04/05/2021" class="day">5</td><td data-action="selectDay" data-day="04/06/2021" class="day">6</td><td data-action="selectDay" data-day="04/07/2021" class="day">7</td><td data-action="selectDay" data-day="04/08/2021" class="day">8</td><td data-action="selectDay" data-day="04/09/2021" class="day">9</td><td data-action="selectDay" data-day="04/10/2021" class="day weekend">10</td></tr><tr><td data-action="selectDay" data-day="04/11/2021" class="day weekend">11</td><td data-action="selectDay" data-day="04/12/2021" class="day active today">12</td><td data-action="selectDay" data-day="04/13/2021" class="day">13</td><td data-action="selectDay" data-day="04/14/2021" class="day">14</td><td data-action="selectDay" data-day="04/15/2021" class="day">15</td><td data-action="selectDay" data-day="04/16/2021" class="day">16</td><td data-action="selectDay" data-day="04/17/2021" class="day weekend">17</td></tr><tr><td data-action="selectDay" data-day="04/18/2021" class="day weekend">18</td><td data-action="selectDay" data-day="04/19/2021" class="day">19</td><td data-action="selectDay" data-day="04/20/2021" class="day">20</td><td data-action="selectDay" data-day="04/21/2021" class="day">21</td><td data-action="selectDay" data-day="04/22/2021" class="day">22</td><td data-action="selectDay" data-day="04/23/2021" class="day">23</td><td data-action="selectDay" data-day="04/24/2021" class="day weekend">24</td></tr><tr><td data-action="selectDay" data-day="04/25/2021" class="day weekend">25</td><td data-action="selectDay" data-day="04/26/2021" class="day">26</td><td data-action="selectDay" data-day="04/27/2021" class="day">27</td><td data-action="selectDay" data-day="04/28/2021" class="day">28</td><td data-action="selectDay" data-day="04/29/2021" class="day">29</td><td data-action="selectDay" data-day="04/30/2021" class="day">30</td><td data-action="selectDay" data-day="05/01/2021" class="day new weekend">1</td></tr><tr><td data-action="selectDay" data-day="05/02/2021" class="day new weekend">2</td><td data-action="selectDay" data-day="05/03/2021" class="day new">3</td><td data-action="selectDay" data-day="05/04/2021" class="day new">4</td><td data-action="selectDay" data-day="05/05/2021" class="day new">5</td><td data-action="selectDay" data-day="05/06/2021" class="day new">6</td><td data-action="selectDay" data-day="05/07/2021" class="day new">7</td><td data-action="selectDay" data-day="05/08/2021" class="day new weekend">8</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month active">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                </div>
                <!-- /.card-body -->
              </div>
        </section>
        </div>
       </div>
@endsection
@section('js')  
<script>
    //-------------
    //- BAR CHART -
    //-------------
    var ctx = document.getElementById('barChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets: [{
            label: '# Ganancia Mensual',
            data: [19, 17, 14, 13, 8, 8,8, 5, 8, 8, 13, 20],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',      
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
//-------------
    //- line CHART -
    //-------------
    var ctx = document.getElementById('barChart2').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        datasets: [{
            label: '# Ganancia Mensual',
            data: [19, 17, 14, 13, 8, 8,8, 5, 8, 8, 13, 20],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(54, 162, 235, 0.5)',      
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

    //-------------
    //- radial CHART -
    //-------------
    var ctx = document.getElementById('pieChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Barlovento', 'Nuevo Chacala' ],
        datasets: [{
            label: '# Proyectos',
            data: [60000, 40000,],
            backgroundColor: [
                'rgba(255, 162, 35, 0.5)',
                'rgba(54, 162, 235, 0.5)',   
            ],
            borderWidth: 1
        }]
    },
    options: {
      
    }
});

</script>
    
@endsection