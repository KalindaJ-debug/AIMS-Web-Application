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
     <div class="content">
         <br> <br>
        <h1 class="text-center">Crops in Sri Lanka</h1>
        <hr>
        {{-- Crops Cards begin  --}}
        <div class="container" style="margin-left:100px;">
            <div class="row">
                {{-- card section begins  --}}
                <div class="col-md-8">
                    <h4 class="text-center">List Available Crops in Sri Lanka</h4> <br>

                    {{-- crop category section begins  --}}
                    <div class="card text-center">
                        <div class="card-header">
                          Crop Categories in Sri Lanka 
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Select Crop Category</h4>
                          {{-- category cards begin --}}
                          <div class="row">
                            <div class="col-sm">
                                {{-- card 1 - vegetables --}}
                                <div class="card border-white">
                                    <img src="{{ url('assets/img/vegetables.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">VEGETABLES</p>
                                      <a data-toggle="modal" data-target="#vegetableModal" class="btn btn-success" style="color:whitesmoke;"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 2 - fruits --}}
                                <div class="card border-white">
                                    <img src="{{ url('assets/img/fruits.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">FRUITS</p>
                                      <a href="#" class="btn btn-success"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 3 - leafy vegetables  --}}
                                <div class="card border-white">
                                    <img src="{{ url('assets/img/leafy.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">LEAFY VEGETABLES</p>
                                      <a href="#" class="btn btn-success"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>
                          </div>

                          {{-- cards row 2 --}}
                          <div class="row">
                            <div class="col-sm">
                                {{-- card 4 - roots and tubers --}}
                                <div class="card border-white">
                                    <img src="{{ url('assets/img/roots.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">ROOTS & TUBERS</p>
                                      <a href="#" class="btn btn-success"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 5 - paddy --}}
                                <div class="card border-white">
                                    <img src="{{ url('assets/img/paddy_main.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">PADDY</p>
                                      <a href="#" class="btn btn-success"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 6- ofc  --}}
                                <div class="card border-white">
                                    <img src="{{ url('assets/img/ofc.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">OTHER FIELD CROPS</p>
                                      <a href="#" class="btn btn-success"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>
                          </div>
                          {{-- cards row 2 ends  --}}

                          {{-- category cards end  --}}
                          
                        </div>
                        <div class="card-footer text-muted">
                            <img src="{{ url('assets/img/DOA emblem.png') }}" class="card-img" alt="headerLogo" style="width:50px;height:50px;margin-right:20px;">
                          <font class="font-italic font-weight-bold">Department of Agriculture </font>
                        </div>
                      </div>
                    {{-- crop category section ends  --}}

                </div>
                {{-- card section ends  --}}
                {{-- map section begins --}}
                <div class="col-6 col-md-4"> 
                    <h3 class="text-center">Sri Lanka</h3> <br>
                    <div>
                        <img src="{{ url('assets/img/sri_lanka_map.png') }}" alt="map" style="margin-left:100px;width:400px;height:700px;">
                    </div>
                </div>
                {{-- map section ends  --}}
            </div>
        </div>
        {{-- Crop cards end  --}}
       
     </div>
     <!-- body ends -->

     {{-- card modals begin  --}}

     {{-- vegatble modal  --}}
     <div id="vegetableModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="margin-left:50px;">Vegetable List</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="col-2">
                        <img src="{{ url('assets/img/vegetables.png') }}" alt="delete" style="margin-left:100px;margin-top:20px;width:80px;height:80px;">
                    </div>
                    <div class="col-10">
                        <p class="text-center font-weight-bold" style="font-size:20px;margin-top:30px;">The available vegetable crops in Sri Lanka are listed below.</p>
                    </div>
                  </div>
                  <hr>
                  {{-- crop list  --}}
                  <div class="row">
                    <div class="col-6">
                      <div class="list-group list-group-flush" id="list-tab" role="tablist">
                          @foreach ($vegetableList as $item)
                      <a class="list-group-item list-group-item-action text-center" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">{{ $item->name }}</a>      
                          @endforeach
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">..ahda.</div>
                      </div>
                    </div>
                  </div>
                  
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
              </div>
            
          </div>
        </div>
      </div>

     {{-- fruits modal  --}}
     {{-- roots modal  --}}
     {{-- leafy vegatble modal  --}}
     {{-- paddy modal  --}}
     {{-- ofc modal  --}}

     {{-- card modals end  --}}

     <!-- footer begins -->
     @include('layouts.footer')
     <!-- footer ends -->

     <!-- Bootstrap JS links -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>

</html>
