@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- Success message for feedback creation -->
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif