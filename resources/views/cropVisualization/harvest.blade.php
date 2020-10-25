<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        
        <!-- Data Table -->
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
        <script type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        
        <title>Crop Visualisation</title>

        
        </style>
    </head>
    <body>
        @include('layouts.header')
        @include('layouts.navbar')

        <div class="container">
            <h2>Harvest Crop Data Visulization</h2>

            <form method="post" action="{{action('CropVisualizationController@updateHarvest')}}" enctype="multipart/form-data">
                @csrf
            
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <label for="cars">Crops</label>
                            </br>
                            <select name="cropId" id="cropId">
                                @foreach ($crops as $crop)
                                    <option value="{{ $crop->id }}">{{ $crop->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="cars">Province</label>
                            </br>
                            <select name="provinceId" id="provinceId" onchange='provinceChange()'>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                            </br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="provinceCheckId" name="provinceCheck" onclick="provincesCheckbox()">
                                <label class="form-check-label" for="provinceCheckId">
                                    Province
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="cars">District</label>
                            </br>
                            <select name="districtId" id="districtId" onchange='districtChange()'>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                            </br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="districtCheckId" name="districtCheck" onclick="districtsCheckbox()">
                                <label class="form-check-label" for="districtCheckId">
                                    District
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="cars">Region</label>
                            </br>
                            <select name="regionId" id="regionId">
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                            </br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="regionCheckId" name="regionCheck" onclick="regionsCheckbox()">
                                <label class="form-check-label" for="regionCheckId">
                                    Region
                                </label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <button type="submit" class="btn btn-outline-dark">Genarate</button>
                        </div>
                        <div class="col-sm">
                                <a class="btn btn-outline-primary" onclick="harvestReportGeneration()" >
                                    Report Generation
                                </a>
                        </div>
                        
                    </div>
                </div>
 
            </form>
            @if (count($harvests) !== 0)
            <canvas id="bar-chart" width="800" height="450"></canvas>
            @endif
        </div>

        <script>
            function harvestReportGeneration() {
                var crop = document.getElementById('cropId').value;
                window.location.href = "http://127.0.0.1:8000/harvestPdfConvert/" + crop;     
            }

            function provinceChange() {
                console.log("Province Change");
                var province = document.getElementById('provinceId').value;

                $('#districtId').empty();
                var sel = document.getElementById('districtId');

                @foreach ($districts as $district)

                if ('{{$district->province_id}}' == province) {
                    var opt = document.createElement('option');
                    opt.appendChild( document.createTextNode('{{$district->name}}') );
                    opt.value = '{{$district->id}}'; 
                    sel.appendChild(opt); 
                }
                    
                @endforeach
            } 

            function districtChange()
            {
                console.log("District Change");
                var district = document.getElementById('districtId').value;

                $('#regionId').empty();
                var sel = document.getElementById('regionId');

                @foreach ($regions as $region)

                if ('{{$region->district_id}}' == district) {
                    var opt = document.createElement('option');
                    opt.appendChild( document.createTextNode('{{$region->name}}') );
                    opt.value = '{{$region->id}}'; 
                    sel.appendChild(opt); 
                }
                    
                @endforeach
            } 

            function provincesCheckbox() {
                document.getElementById("districtCheckId").checked = false;
                document.getElementById("regionCheckId").checked = false;
            }

            function districtsCheckbox() {
                document.getElementById("provinceCheckId").checked = false;
                document.getElementById("regionCheckId").checked = false;
            }

            function regionsCheckbox() {
                document.getElementById("provinceCheckId").checked = false;
                document.getElementById("districtCheckId").checked = false;
            }
            
            $(document).ready( function () {
                $('#cropId option[value={{$cropId}}]').prop('selected', 'selected').change();
            });

            new Chart(document.getElementById("bar-chart"), {
                type: 'bar',
                data: {
                labels: [
                    @foreach ($harvests as $harvest)
                    "{{$harvest[0]}}", 
                    @endforeach
                ],
                datasets: [
                    {
                    label: "Cultivated Land (hectars)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [
                        @foreach ($harvests as $harvest)
                        "{{$harvest[1]}}",
                        @endforeach
                        ]
                    }
                ]
                },
                options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Cultivated Land (Hectars per district)'
                }
                }
            });
	    </script>

        @include('layouts.footer')
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>