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
                          <h4 class="card-title cardbox">Select Crop Category</h4>
                          {{-- category cards begin --}}
                          <div class="row">
                            <div class="col-sm">
                                {{-- card 1 - vegetables --}}
                                <div class="card border-white vege">
                                    <img src="{{ url('assets/img/vegetables.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">VEGETABLES</p>
                                      <a data-toggle="modal" data-target="#vegetableModal" class="btn btn-success" style="color:whitesmoke;"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 2 - fruits --}}
                                <div class="card border-white fruitcard">
                                    <img src="{{ url('assets/img/fruits.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">FRUITS</p>
                                      <a data-toggle="modal" data-target="#fruitsModal" class="btn btn-success" style="color:whitesmoke;"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 3 - leafy vegetables  --}}
                                <div class="card border-white leafycard">
                                    <img src="{{ url('assets/img/leafy.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">LEAFY VEGETABLES</p>
                                      <a data-toggle="modal" data-target="#leafyModal" class="btn btn-success" style="color:whitesmoke;"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>
                          </div>

                          {{-- cards row 2 --}}
                          <div class="row">
                            <div class="col-sm">
                                {{-- card 4 - roots and tubers --}}
                                <div class="card border-white rootcard">
                                    <img src="{{ url('assets/img/roots.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">ROOTS & TUBERS</p>
                                      <a data-toggle="modal" data-target="#rootsModal" class="btn btn-success" style="color:whitesmoke;"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 5 - paddy --}}
                                <div class="card border-white paddycard">
                                    <img src="{{ url('assets/img/paddy_main.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">PADDY</p>
                                      <a data-toggle="modal" data-target="#paddyModal" class="btn btn-success" style="color:whitesmoke;"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-sm">
                                {{-- card 6- ofc  --}}
                                <div class="card border-white ofccard">
                                    <img src="{{ url('assets/img/ofc.png') }}" class="card-img-top" alt="vegetables" style="width:80px;height:80px;margin-left:70px;margin-top:30px;">
                                    <div class="card-body">
                                      <p class="card-title font-weight-bold">OTHER FIELD CROPS</p>
                                      <a data-toggle="modal" data-target="#ofcModal" class="btn btn-success" style="color:whitesmoke;"><i class="fa fa-eye mr-2" aria-hidden="true"></i>View</a>
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
                    <div class="map">
                        <img src="{{ url('assets/img/sri_map.png') }}" alt="map" style="margin-left:100px;width:400px;height:700px;">
                    </div>
                </div>
                {{-- map section ends  --}}
            </div>
        </div>
        {{-- Crop cards end  --}}
       
     </div>
     <!-- body ends -->

     {{-- card modals begin  --}}

     {{-- vegatable modal  --}}
     <div id="vegetableModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
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
                  <div class="row">
                    <div class="col-6 text-center">
                        <h5>Crop Name</h5>
                    </div>
                    <div class="col-6 text-center">
                        <h5>Crop Variety</h5>
                    </div>
                  </div>
                  <hr>
                  {{-- crop list  --}}
                  @php
                      $varietiesList; 
                  @endphp

                  @foreach ($vegetableList as $item)
                  <div class="row">
                    
                    <div class="col-6">
                      <div class="list-group list-group-flush">  
                        <a class="list-group-item text-center list-group-item-warning" id="list-home-list vegetable">{{ $item->name }}</a>      
                        <hr>
                      </div>
                    </div>

                    <div class="col-6">
                      <select class="custom-select">
                        <option> View Crop Varieties...</option>
                        @foreach ($item->varieties as $item)
                          <option> {{$item->name}}</option>
                        @endforeach
                      </select>
                    </div>
                
                  </div>
                  @endforeach

              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
              <form action="{{ url('exportCropList') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" value="Vegetables" name="crop_category">
                <button type="submit" class="btn bg-dark text-white">
                  <i class="fas fa-file-pdf mr-2"></i> Download 
                </button>
              </form>
              
              </div>
            
          </div>
        </div>
      </div>

     {{-- fruits modal  --}}
     <div id="fruitsModal" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin-left:50px;">Fruit List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-2">
                      <img src="{{ url('assets/img/fruits.png') }}" alt="delete" style="margin-left:100px;margin-top:20px;width:80px;height:80px;">
                  </div>
                  <div class="col-10">
                      <p class="text-center font-weight-bold" style="font-size:20px;margin-top:30px;">The available fruit crops in Sri Lanka are listed below.</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-6 text-center">
                      <h5>Crop Name</h5>
                  </div>
                  <div class="col-6 text-center">
                      <h5>Crop Variety</h5>
                  </div>
                </div>
                <hr>
                {{-- crop list  --}}
                @php
                    $varietiesList; 
                @endphp

                @foreach ($fruitList as $item)
                <div class="row">
                  
                  <div class="col-6">
                    <div class="list-group list-group-flush">  
                      <a class="list-group-item text-center list-group-item-warning" id="list-home-list vegetable">{{ $item->name }}</a>      
                      <hr>
                    </div>
                  </div>

                  <div class="col-6">
                    <select class="custom-select">
                      <option> View Crop Varieties...</option>
                      @foreach ($item->varieties as $item)
                        <option> {{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
              
                </div>
                @endforeach

            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
              <form action="{{ url('exportCropList') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" value="Fruits" name="crop_category">
                <button type="submit" class="btn bg-dark text-white">
                  <i class="fas fa-file-pdf mr-2"></i> Download 
                </button>
              </form>
            </div>
          
        </div>
      </div>
    </div>

     {{-- roots modal  --}}
     <div id="rootsModal" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin-left:50px;">Roots & Tubers List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-2">
                      <img src="{{ url('assets/img/roots.png') }}" alt="delete" style="margin-left:100px;margin-top:20px;width:80px;height:80px;">
                  </div>
                  <div class="col-10">
                      <p class="text-center font-weight-bold" style="font-size:20px;margin-top:30px;">The available roots and tubers crops in Sri Lanka are listed below.</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-6 text-center">
                      <h5>Crop Name</h5>
                  </div>
                  <div class="col-6 text-center">
                      <h5>Crop Variety</h5>
                  </div>
                </div>
                <hr>
                {{-- crop list  --}}
                @php
                    $varietiesList; 
                @endphp

                @foreach ($rootList as $item)
                <div class="row">
                  
                  <div class="col-6">
                    <div class="list-group list-group-flush">  
                      <a class="list-group-item text-center list-group-item-warning" id="list-home-list vegetable">{{ $item->name }}</a>      
                      <hr>
                    </div>
                  </div>

                  <div class="col-6">
                    <select class="custom-select">
                      <option> View Crop Varieties...</option>
                      @foreach ($item->varieties as $item)
                        <option> {{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
              
                </div>
                @endforeach

            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
              <form action="{{ url('exportCropList') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" value="Roots" name="crop_category">
                <button type="submit" class="btn bg-dark text-white">
                  <i class="fas fa-file-pdf mr-2"></i> Download 
                </button>
              </form>
            </div>
          
        </div>
      </div>
    </div>

     {{-- leafy vegatble modal  --}}
     <div id="leafyModal" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin-left:50px;">Leafy Vegetable List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-2">
                      <img src="{{ url('assets/img/leafy.png') }}" alt="delete" style="margin-left:100px;margin-top:20px;width:80px;height:80px;">
                  </div>
                  <div class="col-10">
                      <p class="text-center font-weight-bold" style="font-size:20px;margin-top:30px;">The available leafy vegetable crops in Sri Lanka are listed below.</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-6 text-center">
                      <h5>Crop Name</h5>
                  </div>
                  <div class="col-6 text-center">
                      <h5>Crop Variety</h5>
                  </div>
                </div>
                <hr>
                {{-- crop list  --}}
                @php
                    $varietiesList; 
                @endphp

                @foreach ($leafyList as $item)
                <div class="row">
                  
                  <div class="col-6">
                    <div class="list-group list-group-flush">  
                      <a class="list-group-item text-center list-group-item-warning" id="list-home-list vegetable">{{ $item->name }}</a>      
                      <hr>
                    </div>
                  </div>

                  <div class="col-6">
                    <select class="custom-select">
                      <option> View Crop Varieties...</option>
                      @foreach ($item->varieties as $item)
                        <option> {{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
              
                </div>
                @endforeach

            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
              <form action="{{ url('exportCropList') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" value="Leafy" name="crop_category">
                <button type="submit" class="btn bg-dark text-white">
                  <i class="fas fa-file-pdf mr-2"></i> Download 
                </button>
              </form>
            </div>
          
        </div>
      </div>
    </div>

     {{-- paddy modal  --}}
     <div id="paddyModal" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin-left:50px;">Paddy List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-2">
                      <img src="{{ url('assets/img/paddy_main.png') }}" alt="delete" style="margin-left:100px;margin-top:20px;width:80px;height:80px;">
                  </div>
                  <div class="col-10">
                      <p class="text-center font-weight-bold" style="font-size:20px;margin-top:30px;">The available paddy crops in Sri Lanka are listed below.</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-6 text-center">
                      <h5>Crop Name</h5>
                  </div>
                  <div class="col-6 text-center">
                      <h5>Crop Variety</h5>
                  </div>
                </div>
                <hr>
                {{-- crop list  --}}
                @php
                    $varietiesList; 
                @endphp

                @foreach ($paddyList as $item)
                <div class="row">
                  
                  <div class="col-6">
                    <div class="list-group list-group-flush">  
                      <a class="list-group-item text-center list-group-item-warning" id="list-home-list vegetable">{{ $item->name }}</a>      
                      <hr>
                    </div>
                  </div>

                  <div class="col-6">
                    <select class="custom-select">
                      <option> View Crop Varieties...</option>
                      @foreach ($item->varieties as $item)
                        <option> {{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
              
                </div>
                @endforeach

            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
              <form action="{{ url('exportCropList') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" value="Paddy" name="crop_category">
                <button type="submit" class="btn bg-dark text-white">
                  <i class="fas fa-file-pdf mr-2"></i> Download 
                </button>
              </form>
            </div>
          
        </div>
      </div>
    </div>

     {{-- ofc modal  --}}
     <div id="ofcModal" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin-left:50px;">Other Field Crops' List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-2">
                      <img src="{{ url('assets/img/ofc.png') }}" alt="delete" style="margin-left:100px;margin-top:20px;width:80px;height:80px;">
                  </div>
                  <div class="col-10">
                      <p class="text-center font-weight-bold" style="font-size:20px;margin-top:30px;">The available other field crops in Sri Lanka are listed below.</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-6 text-center">
                      <h5>Crop Name</h5>
                  </div>
                  <div class="col-6 text-center">
                      <h5>Crop Variety</h5>
                  </div>
                </div>
                <hr>
                {{-- crop list  --}}
                @php
                    $varietiesList; 
                @endphp

                @foreach ($ofcList as $item)
                <div class="row">
                  
                  <div class="col-6">
                    <div class="list-group list-group-flush">  
                      <a class="list-group-item text-center list-group-item-warning" id="list-home-list vegetable">{{ $item->name }}</a>      
                      <hr>
                    </div>
                  </div>

                  <div class="col-6">
                    <select class="custom-select">
                      <option> View Crop Varieties...</option>
                      @foreach ($item->varieties as $item)
                        <option> {{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
              
                </div>
                @endforeach

            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
              <form action="{{ url('exportCropList') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" value="ofc" name="crop_category">
                <button type="submit" class="btn bg-dark text-white">
                  <i class="fas fa-file-pdf mr-2"></i> Download 
                </button>
              </form>
            </div>
          
        </div>
      </div>
    </div>


     {{-- card modals end  --}}

     <!-- footer begins -->
     @include('layouts.footer')
     <!-- footer ends -->

     <!-- Bootstrap JS links -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

     {{-- Load Crop Varieties  --}}
     <script type="text/javascript">
        ScrollReveal().reveal('.cardbox', {
         duration:1000,
         origin:'bottom',
         distance: '200px',
         delay:100
       });

       ScrollReveal().reveal('.map', {
         duration:2000,
         origin:'right',
         distance: '200px',
         delay:100
       });

       ScrollReveal().reveal('.vege', {
         duration:2000,
         origin:'right',
         distance: '200px',
         delay:200
       });

       ScrollReveal().reveal('.fruitcard', {
         duration:2000,
         origin:'right',
         distance: '200px',
         delay:300
       });

       ScrollReveal().reveal('.leafycard', {
         duration:2000,
         origin:'right',
         distance: '200px',
         delay:400
       });

       ScrollReveal().reveal('.rootcard', {
         duration:2000,
         origin:'left',
         distance: '200px',
         delay:200
       });

       ScrollReveal().reveal('.paddycard', {
         duration:2000,
         origin:'left',
         distance: '200px',
         delay:300
       });

       ScrollReveal().reveal('.ofccard', {
         duration:2000,
         origin:'left',
         distance: '200px',
         delay:400
       });

     </script>

  </body>

</html>
