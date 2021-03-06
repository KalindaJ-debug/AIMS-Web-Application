<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
        <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script type="text/JavaScript">
        $(document).ready( function () {
            $('#categoryTable').DataTable();
            $('#cropTable').DataTable();
            $('#varietyTable').DataTable();
        } );
        </script>
        <title>Crop Management</title>
    </head>
    <body>

        @include('layouts.header')
        @include('layouts.navbar')
    <!-- style="background-color:#2E933C;" -->   
        <div class="container" style="background-color:white;">

            <h2 class="display-4">Crop Category</h2>
            
            </br>

            <button type="button" class="btn btn-success" onclick='addCategory()'><i class="fas fa-plus"></i> Add</button>
            <table class="table" id="categoryTable"> 
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Crop Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $categories)
                    <tr>
                        <th scope="row">{{ $categories->name }}</th>
                        <td>
                            <button type="button" class="btn btn-warning" onclick='editCategory(@json($categories->name), @json($categories->id))'><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick='deleteCategory(@json($categories->id))'><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </br>

            <h2 class="display-4">Crop</h2>
            
            </br>

            <button type="button" class="btn btn-success" onclick='addCrop()'><i class="fas fa-plus"></i> Add</button>
            <table class="table" id="cropTable"> 
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Crop Category</th>
                        <th scope="col">Crop</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($crop as $crops)
                    @php
                        $category = App\CropCategory::where('id', $crops->type_id)->first();
                    @endphp
                    <tr>
                        <th scope="row">{{ $category->name }}</th>
                        <td><p style='color:blue'>{{ $crops->name }}</p></td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick='updateCropTable(@json($crops->id), @json($category->id))'><i class="fas fa-pen-alt"></i> Update</button>
                            <button type="button" class="btn btn-warning" onclick='editCrop(@json($crops->name), @json($crops->id))'><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick='deleteCrop(@json($crops->id))'><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </br>

            <h2 class="display-4">Variety</h2>
            
            </br>

            <button type="button" class="btn btn-success" onclick='addVariety()'><i class="fas fa-plus"></i> Add</button>
            <table class="table" id="varietyTable"> 
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Crop Category</th>
                        <th scope="col">Crop</th>
                        <th scope="col">Variety</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($varieties as $variety)
                    @php
                        $crop = App\Crop::where('id', $variety->crop_id)->first();
                        $category = App\CropCategory::where('id', $crop->type_id)->first();
                    @endphp
                    <tr>
                        <th scope="row">{{ $category->name }}</th>
                        <td>{{ $crop->name }}</td>
                        <td><p style='color:blue'>{{ $variety->name }}</p></td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick='updateVarietyTable(@json($variety->id), @json($variety->crops->id))'><i class="fas fa-pen-alt"></i> Update</button>
                            <button type="button" class="btn btn-warning" onclick='editVariety(@json($variety->name), @json($variety->id))'><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick='deleteVariety(@json($variety->id))'><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="button" class="btn bg-dark text-white" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-file-pdf"></i> Download Report
            </button>

            <!-- Edit Tables  -->

            <div class="modal" tabindex="-1" role="dialog" id="editCategory">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="edit">
                                <input type="hidden" name="category" value="Category">
                                <input type="hidden" id="editCategoryId" name="id">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Readonly input here..." id="editCategoryText" name="name">
                                </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="editCrop">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Crop</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="edit">
                                <input type="hidden" name="category" value="Crop">
                                <input type="hidden" id="editCropId" name="id">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Readonly input here..." id="editCropText" name="name">
                                </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="editVariety">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Crop</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="edit">
                                <input type="hidden" name="category" value="Variety">
                                <input type="hidden" id="editVarietyId" name="id">

                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Readonly input here..." id="editVarietyText" name="name">
                                </div>

                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Dependancy -->

            <div class="modal" tabindex="-1" role="dialog" id="updateCrop">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Crop</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="update">
                                <input type="hidden" name="category" value="Crop">
                                <input type="hidden" id="updateCategoryId" name="id">

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="categoryId" id="cropOption" class="form-control">
                                        @foreach ($categoryList as $category)
                                            <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="updateVariety">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Variety</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="update">
                                <input type="hidden" name="category" value="Variety">
                                <input type="hidden" id="updateCropId" name="id">

                                <div class="form-group">
                                    <label>Crop</label>
                                    <select name="cropId" id="varietyOption" class="form-control">
                                        @foreach ($cropList as $crop)
                                            <option value='{{ $crop->id }}'>{{ $crop->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Dependancy -->

            <div class="modal" tabindex="-1" role="dialog" id="addCategory">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="add">
                                <input type="hidden" name="category" value="Category">

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter new name here..." name="name">
                                </div>
            
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="addCrop">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="add">
                                <input type="hidden" name="category" value="Crop">

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="catgoryId" class="form-control">
                                        @foreach ($categoryAddList as $category)
                                            <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter new name here..." name="name">
                                </div>
                                
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="addVariety">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="add">
                                <input type="hidden" name="category" value="Variety">

                                <div class="form-group">
                                    <label>Crop</label>
                                    <select name="cropId" class="form-control">
                                        @foreach ($cropAddList as $crop)
                                            <option value='{{ $crop->id }}'>{{ $crop->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter new name here..." name="name">
                                </div>  
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal to get pdf -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Export PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="{{ route('reportcrop.store') }}">
                        @csrf
        
                        <div class="form-group row">
                        <label for="page" class="col-md-4 col-form-label text-md-right">{{ __('Page Size') }}</label>
        
                        <div class="col-md-6">
                            <select id="page" class="form-control" name="page" required>
                                <option value="A4" selected>A4</option>
                                <option value="A6">A6</option>
                            </select>
                        </div>
                        </div>
        
                        <div class="form-group row">
                        <label for="orientation" class="col-md-4 col-form-label text-md-right">{{ __('Orientation') }}</label>
        
                        <div class="col-md-6">
                            <select id="orientation" class="form-control" name="orientation" required>
                                <option value="portrait" selected>Portrait</option>
                                <option value="landscape">Landscape</option>
                            </select>
                        </div>
                        </div>
        
                        <div class="form-group row">
                        <label for="checkbox" class="col-md-4 col-form-label text-md-right">{{ __('Filter Report') }}</label>
        
                        <div class="col-md-8 checkbox">
                            <input type="checkbox" name="fields" value="District">District<br>
                            <select class="custom-select" id="selectDistrict" name="district_select">
        
                                @if($district != null)
                                
                                @foreach ($district as $item)
                                    <option value="{{$item->id}}"> {{$item->name}}</option>
                                @endforeach

                                @endif

                            </select><br>

                        </div>
                        </div>
        
                        <div>
                        <input type="checkbox" name="sendEmail" value="send">Would you like a copy of the document mailed to you ?<br>
                        </div>
        
                    <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" hidden>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Download PDF</button>
                    </div>
                </form>
                </div>
                </div>
            </div>

            <!-- Delete Dependancy -->

            <div class="modal" tabindex="-1" role="dialog" id="deleteData">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteHeading">Delete Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('CropController@store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="function" value="delete">
                                <input type="hidden" name="category" id="deleteCategoryId">
                                <input type="hidden" name="id" id="cropId">

                                <p>Are are you sure you want to delete</p>  
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-danger">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        @include('layouts.footer')
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        // Edit Functions 
        function editCategory(name, id)
        {
            $('#editCategory').modal('show');
            document.getElementById("editCategoryText").value = name;
            document.getElementById("editCategoryId").value = id;
        } 

        function editCrop(name, id)
        {
            $('#editCrop').modal('show');
            document.getElementById("editCropText").value = name;
            document.getElementById("editCropId").value = id;
        } 

        function editVariety(name, id)
        {
            $('#editVariety').modal('show');
            document.getElementById("editVarietyText").value = name;
            document.getElementById("editVarietyId").value = id;
        } 

        // function updateCropTable(id)
        // {
        //     $('#updateCrop').modal('show');
        //     document.getElementById("updateCategoryId").value = id;
        //     $('#cropOption option[value=id]').prop('selected', 'selected').change();
        // } 

        // Update Functions
        function updateCropTable(id, categoryId)
        {
            $('#updateCrop').modal('show');
            document.getElementById("updateCategoryId").value = id;
            $('#cropOption option[value=id]').prop('selected', 'selected').change();
            document.getElementById("cropOption").value = categoryId;
        } 

        function updateVarietyTable(id, cropId)
        {
            $('#updateVariety').modal('show');
            document.getElementById("updateCropId").value = id;
            $('#varietyOption option[value=id]').prop('selected', 'selected').change();
            document.getElementById("varietyOption").value = cropId;
        } 

        //Add Functions 
        function addCategory()
        {
            $('#addCategory').modal('show');
        } 
        
        function addCrop()
        {
            $('#addCrop').modal('show');
        } 

        function addVariety()
        {
            $('#addVariety').modal('show');
        } 

        //Delete Functions
        function deleteCategory(id)
        {
            $('#deleteData').modal('show');
            document.getElementById("deleteHeading").innerHTML = "Delete Category";
            document.getElementById("deleteCategoryId").value = "Category";
            document.getElementById("cropId").value = id;
        } 

        function deleteCrop(id)
        {
            $('#deleteData').modal('show');
            document.getElementById("deleteHeading").innerHTML = "Delete Crop";
            document.getElementById("deleteCategoryId").value = "Crop";
            document.getElementById("cropId").value = id;
        } 

        function deleteVariety(id)
        {
            $('#deleteData').modal('show');
            document.getElementById("deleteHeading").innerHTML = "Delete Variety";
            document.getElementById("deleteCategoryId").value = "Variety";
            document.getElementById("cropId").value = id;
        } 
    </script>
</html>