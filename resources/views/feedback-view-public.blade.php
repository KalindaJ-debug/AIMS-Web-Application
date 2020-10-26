<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links -->

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/feedbackTable.css')}}">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}


    <!-- Data Table links-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Public Feedback Managment | AIMS</title>
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
       <h1 class="display-5" style="margin-left:200px;margin-top:40px;">Public Feedback Inquiries</h1>

       <!-- view table begins -->
       <div class="container-xl">
      	<div class="table-responsive">
      		<div class="table-wrapper">
      			<div class="table-title" style="background:#457d43;">
      				<div class="row">
      					<div class="col-sm-6">
      						<h2>All Feedback</b></h2>
      					</div>
      					<div class="col-sm-6">
      						<a href="{{url('feedback-view-public-sort')}}" class="btn btn-success"><i class="fa fa-sort mr-3" aria-hidden="true"></i> <span>Sort by Recent Date</span></a>
      						<a href="#deleteFeedback" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash mr-3" aria-hidden="true"></i> <span>Delete All</span></a>
      					</div>
      				</div>
      			</div>
      			<table id="datatable" class="table table-striped table-hover">
      				<thead>
      					<tr>
      						<th>
      							<span class="custom-checkbox">
      								<input type="checkbox" id="selectAll" class="selectAll">
      								<label for="selectAll"></label>
      							</span>
      						</th>
      						<th>Name</th>
      						<th>Email</th>
      						<th>Subject</th>
      						<th>Message</th>
      						<th>Actions</th>

      					</tr>
      				</thead>
              <tbody>
                
              @if(count($feedbackPublic) > 0)
                @foreach($feedbackPublic as $fPublic)
                
                <tr>
      						<td>
      							<span class="custom-checkbox">
      								<input type="checkbox" name="options[]" value="1">
      								<label for="checkbox1"></label>
      							</span>
      						</td>
                  
                  <td>{{$fPublic->name}}</td>
                  <td>{{$fPublic->email}}</td>
                  <td>{{$fPublic->subject}}</td>
                  <td>{{$fPublic->message}}</td>
                  
                  <td>

                  
      
                  
                  <form action="{{ url('/feedbackpublic',$fPublic->id) }}" method="POST">
                  
                  @method('DELETE')
                  @csrf

        
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>  
                  
                  </form> 
                  </td>
                </tr>
                @endforeach
                
                
                
      			  @else
                <p>No posts found</p>
              @endif
              
              </tbody>
              
            </table>
              <!-- Pagination -->
              {{ $feedbackPublic->links() }}
              <div class="clearfix">
              <div class="hint-text"><i>Showing {{count($feedbackPublic)}} out of {{$feedbackPublic->total()}} entries</i></div>
              </div> 
              <br>
              <div class="container">
                  <a href="{{ url('/feedback-management')}}"	class="btn btn-success"><i class="fa fa-caret-left mr-2" style="color:white;" aria-hidden="true"></i>Return to feedback management</a>
              </div>           
      		</div>
      	</div>
      </div>
       <!-- view table ends -->

       <!-- feedback Management Public View -->

     </div>

     <!-- Modals -->

     <!-- Delete Selected Modal begins -->
     <div id="deleteSelectedFeedback" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          
            <div class="modal-header">
              <h4 class="modal-title">Delete Feedback Records</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <form action="feedbackpublic/{{$fPublic->id}}" name="delete" method="post">
            @method('delete')
            {{ csrf_field() }}
              <img src="assets/img/delete.png" alt="delete" style="margin-left:350px;margin-top:20px;">
              <input type="hidden" method="DELETE">
              <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete these feedback record(s)?</p>
              <p class="text-danger text-center font-weight-normal" style="font-size:17px;"> <i class="fa fa-exclamation-triangle mr-3" aria-hidden="true"></i>This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-danger" value="Delete" > 
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
          <form method="POST" action="{{action('FeedbackPublicController@destroy_all')}}">
            {{ csrf_field() }}
              <div class="modal-header">
                <h4 class="modal-title">Delete All Feedback Records</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <img src="assets/img/quit.png" alt="delete" style="margin-left:350px;margin-top:20px;">
                <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete all feedback records?</p>
                <p class="text-danger text-center font-weight-normal" style="font-size:17px;"> <i class="fa fa-exclamation-triangle mr-3" aria-hidden="true"></i>This action cannot be undone.</p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-danger" value="Delete">
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
     <!-- <script src="js/checkbox.js"></script> -->

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
