<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links -->

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Agriculture Information Management System | AIMS </title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: #FFFAF0;">
    
    <!-- header begins -->
    @include('layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content" id="bodyFirst">
         <br> <br>
        <h1 class="text-center">Main Crop Summary</h1>
        <hr>

        {{-- main crop list  --}}
        <div class="row" style="margin-left:50px;">
            <div class="col-3 text-center">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-beans" role="tab" aria-controls="home">Beans</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-beetroot" role="tab" aria-controls="profile">Beetroot</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-bittergourd" role="tab" aria-controls="messages">Bitter Gourd</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-brinjal" role="tab" aria-controls="settings">Brinjal</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-cabbage" role="tab" aria-controls="settings">Cabbage</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-capsicum" role="tab" aria-controls="settings">Capsicum</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-carrot" role="tab" aria-controls="settings">Carrot</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-cucumber" role="tab" aria-controls="settings">Cucumber</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-leeks" role="tab" aria-controls="settings">Leeks</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-longbeans" role="tab" aria-controls="settings">Long Beans</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-luffa" role="tab" aria-controls="settings">Luffa</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-okra" role="tab" aria-controls="settings">Okra</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-pumpkin" role="tab" aria-controls="settings">Pumpkin</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-raddish" role="tab" aria-controls="settings">Radish</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-snakegourd" role="tab" aria-controls="settings">Snake Gourd</a>
                <a onclick="scrollUp()" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-tomato" role="tab" aria-controls="settings">Tomato</a>


              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="nav-tabContent">

                {{-- beans start --}}
                <div class="tab-pane fade show active" id="list-beans" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/beans.jpg') }}" class="card-img" alt="Beans">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Beans</h5> <hr>
                              @php
                                  $comment = "";
                                  if($beans[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($beans[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($beans[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($beans[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($beans[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($beans[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Selection";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($beans[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($beans[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($beans[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($beans[2] == "General Price"){
                                $progress = 40;
                              }

                              if($beans[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($beans[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"> {{$progress}}% </div>                                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{ $beans[0] }} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                        <th>: {{ $beans[1] }}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{ $beans[2] }} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                <form action="{{ url('exportMainCropsReport', "Beans") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                <input type="hidden" name="cultivation" value="{{ $beans[0] }}">
                                <input type="hidden" name="rate" value="{{ $beans[1] }}">
                                <input type="hidden" name="comment" value="{{ $beans[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>
                                  </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- beans end  --}}
                {{-- beetroot  --}}
                <div class="tab-pane fade" id="list-beetroot" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/beet.png') }}" class="card-img" alt="Beetroot" style="margin-top: 30px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Beetroot</h5> <hr>
                              @php
                                  $comment = "";
                                  if($beetroot[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($beetroot[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($beetroot[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($beetroot[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($beetroot[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($beetroot[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Selection";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($beetroot[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($beetroot[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($beetroot[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($beetroot[2] == "General Price"){
                                $progress = 40;
                              }

                              if($beetroot[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($beetroot[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{ $beetroot[0] }} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                        <th>: {{ $beetroot[1] }}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$beetroot[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Beetroot") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $beetroot[0] }}">
                                    <input type="hidden" name="rate" value="{{ $beetroot[1] }}">
                                    <input type="hidden" name="comment" value="{{ $beetroot[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div> 
                </div>
                {{-- beetroot ends  --}}
                {{-- bittergourd starts  --}}
                <div class="tab-pane fade" id="list-bittergourd" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            @php
                                  $comment = "";
                                  if($bittergourd[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($bittergourd[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($bittergourd[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($bittergourd[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($bittergourd[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($bittergourd[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <img src="{{ url('assets/img/bittergourd.png') }}" class="card-img" alt="Bittergourd" style="width:180px;height:180px;margin-top:30px;margin-left:80px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Bitter Gourd</h5> <hr>
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($bittergourd[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($bittergourd[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($bittergourd[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($bittergourd[2] == "General Price"){
                                $progress = 40;
                              }

                              if($bittergourd[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($bittergourd[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$bittergourd[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$bittergourd[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$bittergourd[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Bitter Gourd") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $bittergourd[0] }}">
                                    <input type="hidden" name="rate" value="{{ $bittergourd[1] }}">
                                    <input type="hidden" name="comment" value="{{ $bittergourd[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- bittergourd ends  --}}
                {{-- brinjal starts  --}}
                <div class="tab-pane fade" id="list-brinjal" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            @php
                                  $comment = "";
                                  if($brinjal[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($brinjal[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($brinjal[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($brinjal[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($brinjal[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($brinjal[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <img src="{{ url('assets/img/brinjal.png') }}" class="card-img" alt="Brinjol" style="margin-top:10px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Brinjal</h5> <hr>
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($brinjal[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($brinjal[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($brinjal[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($brinjal[2] == "General Price"){
                                $progress = 40;
                              }

                              if($brinjal[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($brinjal[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{ $brinjal[0] }} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{ $brinjal[1] }}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{ $brinjal[2] }} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Brinjal") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $brinjal[0] }}">
                                    <input type="hidden" name="rate" value="{{ $brinjal[1] }}">
                                    <input type="hidden" name="comment" value="{{ $brinjal[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- brinjol ends  --}}
                {{-- cabbage starts  --}}
                <div class="tab-pane fade" id="list-cabbage" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            @php
                                  $comment = "";
                                  if($cabbage[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($cabbage[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($cabbage[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($cabbage[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($cabbage[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($cabbage[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <img src="{{ url('assets/img/cabbage.png') }}" class="card-img" alt="Cabbage" style="width:180px;height:180px;margin-left:80px;margin-top:20px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Cabbage</h5> <hr>
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($cabbage[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($cabbage[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($cabbage[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($cabbage[2] == "General Price"){
                                $progress = 40;
                              }

                              if($cabbage[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($cabbage[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$cabbage[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$cabbage[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$cabbage[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Cabbage") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $cabbage[0] }}">
                                    <input type="hidden" name="rate" value="{{ $cabbage[1] }}">
                                    <input type="hidden" name="comment" value="{{ $cabbage[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- cabbage ends  --}}
                {{-- capsicum starts  --}}
                <div class="tab-pane fade" id="list-capsicum" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/capsicum.jpeg') }}" class="card-img" alt="Capsicum" style="width:250px; height:180px;margin-left:50px;margin-top:20px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Capsicum</h5> <hr>
                              @php
                                  $comment = "";
                                  if($capsicum[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($capsicum[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($capsicum[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($capsicum[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($capsicum[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($capsicum[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($capsicum[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($capsicum[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($capsicum[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($capsicum[2] == "General Price"){
                                $progress = 40;
                              }

                              if($capsicum[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($capsicum[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">{{ $progress }}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{ $capsicum[0] }} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{ $capsicum[1] }}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{ $capsicum[2] }} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Capsicum") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $capsicum[0] }}">
                                    <input type="hidden" name="rate" value="{{ $capsicum[1] }}">
                                    <input type="hidden" name="comment" value="{{ $capsicum[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- capsicum ends  --}}
                {{-- carrot starts  --}}
                <div class="tab-pane fade" id="list-carrot" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/carrot.jpeg') }}" class="card-img" alt="Carrot" style="width:250px;height:200px;margin-left:30px;margin-top:20px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Carrot</h5> <hr>
                              @php
                                  $comment = "";
                                  if($carrot[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($carrot[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($carrot[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($carrot[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($carrot[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($carrot[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($carrot[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($carrot[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($carrot[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($carrot[2] == "General Price"){
                                $progress = 40;
                              }

                              if($carrot[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($carrot[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;"> Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$carrot[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$carrot[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$carrot[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Carrot") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $carrot[0] }}">
                                    <input type="hidden" name="rate" value="{{ $carrot[1] }}">
                                    <input type="hidden" name="comment" value="{{ $carrot[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- carror ends  --}}
                {{-- cucumber starts  --}}
                <div class="tab-pane fade" id="list-cucumber" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/cucumber.jpeg') }}" class="card-img" alt="Cucumber" style="height:200px;width:200px;margin-left:80px;margin-top:30px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Cucumber</h5> <hr>
                              @php
                                  $comment = "";
                                  if($cucumber[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($cucumber[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($cucumber[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($cucumber[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($cucumber[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($cucumber[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($cucumber[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($cucumber[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($cucumber[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($cucumber[2] == "General Price"){
                                $progress = 40;
                              }

                              if($cucumber[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($cucumber[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;"> Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$cucumber[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$cucumber[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$cucumber[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Cucumber") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $cucumber[0] }}">
                                    <input type="hidden" name="rate" value="{{ $cucumber[1] }}">
                                    <input type="hidden" name="comment" value="{{ $cucumber[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- cucumber ends  --}}
                {{-- leeks start --}}
                <div class="tab-pane fade" id="list-leeks" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/leeks.jpeg') }}" class="card-img" alt="Leeks" style="height:200px;width:250px;margin-left:50px;margin-top:20px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Leeks</h5> <hr>
                              @php
                                  $comment = "";
                                  if($leeks[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($leeks[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($leeks[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($leeks[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($leeks[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($leeks[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($leeks[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($leeks[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($leeks[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($leeks[2] == "General Price"){
                                $progress = 40;
                              }

                              if($leeks[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($leeks[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;"> Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$leeks[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                        <th>: {{$leeks[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$leeks[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Leeks") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $leeks[0] }}">
                                    <input type="hidden" name="rate" value="{{ $leeks[1] }}">
                                    <input type="hidden" name="comment" value="{{ $leeks[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- leeks end  --}}
                {{-- long beans start  --}}
                <div class="tab-pane fade" id="list-longbeans" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/longbeans.jpeg') }}" class="card-img" alt="Long Beans" style="height:200px;width:250px;margin-left:50px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Long Beans</h5> <hr>
                              @php
                                  $comment = "";
                                  if($long_beans[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($long_beans[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($long_beans[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($long_beans[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($long_beans[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($long_beans[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($long_beans[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($long_beans[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($long_beans[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($long_beans[2] == "General Price"){
                                $progress = 40;
                              }

                              if($long_beans[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($long_beans[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;"> Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$long_beans[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$long_beans[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$long_beans[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Long Beans") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $long_beans[0] }}">
                                    <input type="hidden" name="rate" value="{{ $long_beans[1] }}">
                                    <input type="hidden" name="comment" value="{{ $long_beans[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- long beans end  --}}
                {{-- luffa starts --}}
                <div class="tab-pane fade" id="list-luffa" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/luffa.png') }}" class="card-img" alt="Luffa">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Luffa</h5> <hr>
                              @php
                                  $comment = "";
                                  if($luffa[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($luffa[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($luffa[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($luffa[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($luffa[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($luffa[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($luffa[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($luffa[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($luffa[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($luffa[2] == "General Price"){
                                $progress = 40;
                              }

                              if($luffa[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($luffa[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;"> Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$luffa[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$luffa[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$luffa[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Luffa") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $luffa[0] }}">
                                    <input type="hidden" name="rate" value="{{ $luffa[1] }}">
                                    <input type="hidden" name="comment" value="{{ $luffa[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- luffa ends  --}}
                {{-- okra strats  --}}
                <div class="tab-pane fade" id="list-okra" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/okra.jpeg') }}" class="card-img" alt="Okra" style="height:200px;width:250px;margin-left:40px;margin-top:10px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Okra | Ladies Fingers</h5> <hr>
                              @php
                                  $comment = "";
                                  if($okra[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($okra[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($okra[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($okra[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($okra[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($okra[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($okra[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($okra[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($okra[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($okra[2] == "General Price"){
                                $progress = 40;
                              }

                              if($okra[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($okra[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$okra[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$okra[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$okra[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Okra") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $okra[0] }}">
                                    <input type="hidden" name="rate" value="{{ $okra[1] }}">
                                    <input type="hidden" name="comment" value="{{ $okra[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- okra ends  --}}
                {{-- pumpkin starts  --}}
                <div class="tab-pane fade" id="list-pumpkin" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/pumpkin.jpeg') }}" class="card-img" alt="Pumpkin" style="height:200px;width:250px;margin-left:50px;margin-top:20px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Pumpkin</h5> <hr>
                              @php
                                  $comment = "";
                                  if($pumpkin[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($pumpkin[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($pumpkin[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($pumpkin[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($pumpkin[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($pumpkin[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{ $comment }} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($pumpkin[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($pumpkin[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($pumpkin[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($pumpkin[2] == "General Price"){
                                $progress = 40;
                              }

                              if($pumpkin[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($pumpkin[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;"> Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$pumpkin[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                        <th>: {{$pumpkin[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$pumpkin[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Pumpkin") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $pumpkin[0] }}">
                                    <input type="hidden" name="rate" value="{{ $pumpkin[1] }}">
                                    <input type="hidden" name="comment" value="{{ $pumpkin[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- pumpkin ends  --}}
                {{-- raddish starts  --}}
                <div class="tab-pane fade" id="list-raddish" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/raddish.jpeg') }}" class="card-img" alt="Raddish" style="height:200px;width:300px;margin-left:30px;margin-top:30px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Radish</h5> <hr>
                              @php
                                  $comment = "";
                                  if($radish[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($radish[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($radish[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($radish[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($radish[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($radish[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($radish[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($radish[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($radish[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($radish[2] == "General Price"){
                                $progress = 40;
                              }

                              if($radish[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($radish[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;"> Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$radish[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                            <th>: {{$radish[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{$radish[2]}} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Radish") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $radish[0] }}">
                                    <input type="hidden" name="rate" value="{{ $radish[1] }}">
                                    <input type="hidden" name="comment" value="{{ $radish[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- raddish ends  --}}
                {{-- snakegourd starts  --}}
                <div class="tab-pane fade" id="list-snakegourd" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/snakegourd.jpeg') }}" class="card-img" alt="Snakegourd" style="height:200px;width:200px;margin-left:60px;margin-top:10px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Snake Gourd</h5> <hr>
                              @php
                                  $comment = "";
                                  if($snakegourd[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($snakegourd[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($snakegourd[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($snakegourd[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($snakegourd[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($snakegourd[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Select";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{$comment}} </div> </p>
                            <div class="progress">
                              @php
                              $progress = 0;
                              if($snakegourd[2] == "Excellent Demand"){
                                $progress = 100;
                              }

                              if($snakegourd[2] == "Best Price"){
                                $progress = 80;
                              }

                              if($snakegourd[2] == "Good Price"){
                                $progress = 60;
                              }

                              if($snakegourd[2] == "General Price"){
                                $progress = 40;
                              }

                              if($snakegourd[2] == "Poor Price"){
                                $progress = 20;
                              }

                              if($snakegourd[2] == "Price Loss"){
                                $progress = 10;
                              }

                          @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$progress}}%;" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">{{$progress}}%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}

                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                            <th>: {{$snakegourd[0]}} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                        <th>: {{$snakegourd[1]}}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{ $snakegourd[2] }} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Snake Gourd") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $snakegourd[0] }}">
                                    <input type="hidden" name="rate" value="{{ $snakegourd[1] }}">
                                    <input type="hidden" name="comment" value="{{ $snakegourd[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- snakegourd ends  --}}
                {{-- tomato starts  --}}
                <div class="tab-pane fade" id="list-tomato" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card mb-3" style="max-width: 95%;height:400px;">
                        {{-- row starts --}}
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ url('assets/img/tomato.jpeg') }}" class="card-img" alt="Tomato" style="height:200px;width:280px;margin-left:30px;margin-top:20px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <br>
                              <h5 class="card-title font-weight-bold">Tomato</h5> <hr>
                              @php
                                  $comment = "";
                                  if($tomato[2] == "Excellent Demand"){
                                    $comment = "Excellent Selection";
                                  }

                                  if($tomato[2] == "Best Price"){
                                    $comment = "Better Selection";
                                  }

                                  if($tomato[2] == "Good Price"){
                                    $comment = "Good Selection";
                                  }

                                  if($tomato[2] == "General Price"){
                                    $comment = "Average Selection";
                                  }

                                  if($tomato[2] == "Poor Price"){
                                    $comment = "Poor Selection";
                                  }

                                  if($tomato[2] == "Price Loss"){
                                    $comment = "Warning: Do Not Selection";
                                  }
                              @endphp
                            <p class="card-text"><img class="mr-3" src="{{ url('assets/img/rating.png') }}" alt="rating" style="width:30px;height:30px;"> Predicted Price Satisfaction : <div class="font-weight-bold text-muted font-italic"> {{ $comment }} </div> </p>
                            <div class="progress">
                              @php
                                  $progress = 0;
                                  if($tomato[2] == "Excellent Demand"){
                                    $progress = 100;
                                  }

                                  if($tomato[2] == "Best Price"){
                                    $progress = 80;
                                  }

                                  if($tomato[2] == "Good Price"){
                                    $progress = 60;
                                  }

                                  if($tomato[2] == "General Price"){
                                    $progress = 40;
                                  }

                                  if($tomato[2] == "Poor Price"){
                                    $progress = 20;
                                  }

                                  if($tomato[2] == "Price Loss"){
                                    $progress = 10;
                                  }

                              @endphp
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"> {{$progress}}% </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- row ends  --}}
                        
                        {{-- row starts --}}
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="col" style="width:365px;">Cultivated Extent in Hectares (ha)</th>
                                        <th>: {{ $tomato[0] }} </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Satisfaction Rate of Harvest Estimation</th>
                                        <th>: {{ $tomato[1] }}% </th>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="width:365px;">Recommendation to Cultivate Crop</th>
                                            <th>: {{ $tomato[2] }} </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div style="margin-top:50px;margin-left:50px;margin-right:50px;">
                                  <form action="{{ url('exportMainCropsReport', "Tomato") }}" name="export" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="cultivation" value="{{ $tomato[0] }}">
                                    <input type="hidden" name="rate" value="{{ $tomato[1] }}">
                                    <input type="hidden" name="comment" value="{{ $tomato[2] }}">
                                    <button type="submit" class="btn btn-dark btn-block" name="export"> <i class="fa fa-print mr-3" aria-hidden="true"></i>Export</button>
                                  </form>                                </div>
                            </div>
                        </div>
                        {{-- row ends  --}}
                      </div>
                </div>
                {{-- tomato ends  --}}
              </div>
            </div>
          </div>

     <!-- footer begins -->
     @include('layouts.footer')
     <!-- footer ends -->

     <!-- Bootstrap JS links -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

     {{-- Scroll to View  --}}
     <script>
         function scrollUp(){
             var destination = document.getElementById("bodyFirst");
             destination.scrollIntoView();
         }
     </script>

  </body>

</html>
