<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links here-->

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/feedbackTable.css')}}">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Land Information | AIMS</title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: white;">
    <!-- header begins -->
    @include('layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content">
       <!-- feedback Management Public View  -->
     <h1 class="display-5" style="margin-left:200px;margin-top:40px;">{{ $firstName }} {{ $lastName }} </h1>

       <!-- view table begins -->
       <div class="container-xl">
      	<div class="table-responsive">
      		<div class="table-wrapper">
      			<div class="table-title" style="background:#457d43;">
      				<div class="row">
      					<div class="col-sm-6">
      						<h2>All Registered Land Records</b></h2>
      					</div>
      					<div class="col-sm-6">
                  {{-- <a class="btn btn-success"><i class="fa fa-sort mr-3" aria-hidden="true"></i> <span>Sort</span></a> --}}
                  @php
                       $farmer_id = Request::segment(2); //fetch farmer ID
                  @endphp
                  <form action="{{ route('registration.show', $farmer_id) }}" method="get">
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus mr-3" aria-hidden="true"></i> <span>Register</span></button>
                  </form>
                  <a href="#deleteFeedback" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash mr-3" aria-hidden="true"></i> <span>Delete All Records</span></a>
                  <form action="{{ url('exportAllLandRecordsPDF', $farmer_id)}}" method="get">
                    <button type="submit" class="btn btn-dark"><i class="fa fa-print mr-3" aria-hidden="true"></i> <span>Export to PDF</span></button>
                  </form>
      					</div>
      				</div>
      			</div>
      			<table class="table table-striped table-hover">
      				<thead>
      					<tr>
      						{{-- <th> --}}
      							{{-- <span class="custom-checkbox">
      								<input type="checkbox" id="selectAll" class="selectAll">
      								<label for="selectAll"></label>
                    </span> --}}
                    
      						{{-- </th> --}}
                      <th>Land ID</th>
                      <th>Address No</th>  
                      <th>Lane</th>
                      <th>Land Type</th>  
                      <th>District</th>
                      <th>Province</th>
                      <th>Land Extent (ha)</th>
                      <th style="width: 170px;">Actions</th>
      					</tr>
      				</thead>
      				<tbody>

                @php
                    $i = 0;
                @endphp

                @if ($count <= 0)
                  {{"$count Records Found"}}

                @elseif($count > 0)
                  {{ "$count Records Found" }}
                  {{-- row begins --}}
                  @foreach ($landRecords as $item)
                  
                  <form action="{{$item->id}}/edit" method="get" name="edit">
                    <input type="hidden" name="landId" value="{{$item->id}}">
                      {{ csrf_field() }}
                      <tr>
                        {{-- data visualization calculations --}}
                        @php
                            $totalCultivatedLand = 0.0;
                            $uncultivatedLand = 0.0;
                            $harvestedLand = 0.0;

                            //assign values
                            //null values
                            if($harvestRecords == null || isset($harvestRecords)){
                              $harvestedLand = 0.0;
                            }                           
                            
                            if($cultivationRecords == null || isset($cultivationRecords)){
                              $totalCultivatedLand = 0.0;
                            }
                            //cultivation
                            foreach($cultivationRecords as $record){
                              if($record->land_id == $item->id){
                                $totalCultivatedLand = $totalCultivatedLand + $record->cultivatedLand;
                              }
                            }//end of foreach

                            //harvest
                            foreach($harvestRecords as $record){
                              if($record->land_id == $item->id){
                                $harvestedLand = $harvestedLand + $record->cultivatedLand;
                              }
                            }//end of foreach
                            
                            $uncultivatedLand = ($item->landExtend - $totalCultivatedLand);

                            //percentage values
                            if($totalCultivatedLand > 0.0){
                              $totalCultivatedLand = ($totalCultivatedLand / $item->landExtend) * 100.0;
                            }
                            
                            if($harvestedLand > 0.0){
                              $harvestedLand = ($harvestedLand / $item->landExtend) * 100.0;
                            }

                            if($uncultivatedLand > 0.0){
                              $uncultivatedLand = ($uncultivatedLand / $item->landExtend) * 100.0;
                            }
                            
                            //two decimal places values
                            $totalCultivatedLand = floatval(number_format((float)$totalCultivatedLand, 2, '.', ''));
                            $harvestedLand = floatval(number_format((float)$harvestedLand, 2, '.', ''));
                            $uncultivatedLand = floatval(number_format((float)$uncultivatedLand, 2, '.', ''));

                        @endphp
                        {{-- end calculations  --}}
                                                    
                        {{-- </td> --}}
                        <td> {{ $item->id }} </td>
                        <td>{{ $item->addressNo }}</td>  
                        <td>{{$item->laneName}}</td>
                        <td>{{$item->land_type->name}}</td>
                        <td>{{$item->districts->name}}</td>
                        <td>{{$item->provinces->name}}</td>
                        <td class="font-italic">{{$item->landExtend}}</td>
                        <td>
                        <a> <button type="submit" style="border: none;background:transparent;width:35px;"><i class="fa fa-eye" data-toggle="tooltip" title="Edit" aria-hidden="true"></i> </button> </a>
                          <a href="#deleteSelectedFeedback" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                        <a href="{{ url('exportLandPDF', $item->id) }}"><i class="fa fa-file" data-toggle="tooltip" title="Export"></i></a>
                        <a onclick="generateLandChart({{$totalCultivatedLand}}, {{$harvestedLand}}, {{$uncultivatedLand}})" href="#landChart" class="chart" data-toggle="modal" style="color:#7A378B	;"><i class="fa fa-pie-chart" aria-hidden="true" data-toggle="tooltip" title="Chart"></i></a>
                        </td>
                      </tr>
                  </form>
                  @endforeach
                {{-- row ends  --}}
                @endif

      				</tbody>
      			</table>
      			<div class="clearfix">
            <div class="hint-text">Showing <b>{{ $count }}</b> out of <b> {{ $landRecords->total() }} </b> entries</div>
      				<ul class="pagination">
              <li class="page-item">{{ $landRecords->links() }}</li>
      				</ul>
      			</div>
      		</div>
      	</div>
      </div>
       <!-- view table ends -->

       <!-- feedback Management Public View -->

     </div>

     <!-- Modals -->

     {{-- Generate Pie Chart Modal  --}}
     <div id="landChart" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin-left:250px;">View Land Summary</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-1">
                  <img src="{{ url('assets/img/piechart.png') }}" alt="pie-chart" style="margin-left:10px;width:80px;height:80px;">
                </div>
                <div class="col-11">
                  <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">View selected land summary of crop cultivation and harvest.</p>
                </div>
              </div>
              <hr>
              {{-- generate chart  --}}
              <div class="container chart-wrapper">
                <canvas id="landSummaryChart"></canvas>
            </div>
            {{-- end chart  --}}
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              {{-- <button type="submit" class="btn btn-dark" value="Delete">Export</button> --}}
            </div>
        </div>
      </div>
    </div>

     <!-- Delete Selected Modal begins -->
     <div id="deleteSelectedFeedback" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="{{$item->id}}" method="post" name="delete">
            @method('delete')
            {{ csrf_field() }}
            <div class="modal-header">
              <h4 class="modal-title">Delete Registered Land Records</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <img src="{{ url('assets/img/delete.png') }}" alt="delete" style="margin-left:350px;margin-top:20px;">
              <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete these registered land record(s)?</p>
              <p class="text-danger text-center font-weight-normal" style="font-size:17px;"> <i class="fa fa-exclamation-triangle mr-3" aria-hidden="true"></i>This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <button type="submit" class="btn btn-danger" value="Delete">Delete </button>
            </div>
          </form>
        </div>
      </div>
    </div>
     <!-- Delete Selected Modal ends -->

     {{-- Delete All Records Modal begins  --}}
     <div id="deleteFeedback" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          <form action="{{ route('land-records.store') }}" method="POST" name="deleteAll">
              {{ csrf_field() }}
            <input type="hidden" name="farmerid" value="{{$farmerID}}">
              <div class="modal-header">
                <h4 class="modal-title">Delete All Registered Land Records</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
              <img src="{{ url('assets/img/quit.png') }}" alt="delete" style="margin-left:350px;margin-top:20px;">
                <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete all the registered land records?</p>
                <p class="text-danger text-center font-weight-normal" style="font-size:17px;"> <i class="fa fa-exclamation-triangle mr-3" aria-hidden="true"></i>This action cannot be undone.</p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button type="submit" class="btn btn-danger" value="Delete">Delete </button>
              </div>
            </form>
          </div>
        </div>
      </div>
     {{-- Delete All Records modal ends  --}}

     <!-- body ends -->

     <!-- footer begins -->
    @include('layouts.footer')
     <!-- footer ends -->

     {{-- Bootstrap  --}}
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     
    <!-- jquery validation links -->
     <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
     
     {{-- chart js link  --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
     {{-- script for pie chart  --}}
     <script>
      function generateLandChart(totalCultivatedLand, harvestedLand, uncultivatedLand){
        let ctx = document.getElementById('landSummaryChart').getContext('2d');
        let labels = ['Cultivated Land', 'Harvested Land', 'Uncultivated Land'];
        let colorHex =['#81c14b', '#ecba82', '#204e4a'];

        let landSummaryChart = new Chart(ctx, {
          type: 'pie',
          data:{
            datasets:[{
              data:[totalCultivatedLand, harvestedLand, uncultivatedLand], //sum 100
              backgroundColor: colorHex
            }],
            labels: labels
          },
          options:{
            responsive: true,
            legend:{
              position: 'bottom'
            },
            plugins:{
              datalabels:{
                color: '#fff', 
                anchor: 'end',
                align: 'start',
                offset: -10,
                borderWidth: 2,
                borderColor: '#fff',
                borderRadius: 25,
                backgroundColor: (context) =>{
                  return context.dataset.backgroundColor;
                },
                font: {
                  weight: 'bold',
                  size: '12'
                },
                formatter:(value) => {
                  return value + '%';
                }
              }
            }
          }
        }); //end of chart
      }

    </script>

     <script type="text/javascript">
     // Checkbox scripting
     $(document).ready(function(){
      // Select
      $(document).ready(function() {
        $('.selectAll').click(function() {
          $('input[type="checkbox"]').prop('checked', this.checked);
        })
      });

      });

     </script>

     <!-- Animations -->
     <script type="text/javascript">

       ScrollReveal().reveal('.content', {
         duration:2000,
         origin:'bottom',
         distance: '200px',
         delay:100
       });

     </script>

  </body>
