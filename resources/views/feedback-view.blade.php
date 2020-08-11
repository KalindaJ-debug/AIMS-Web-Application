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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Administrative Assistance Inquiries | AIMS</title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: white;">
    <!-- header begins -->
    @include('layouts.headerAdmin')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content">
       <!-- feedback Management Public View  -->
       <h1 class="display-5" style="margin-left:200px;margin-top:40px;">Administrative Assistance Inquiries</h1>

       <!-- view table begins -->
       <div class="container-xl">
      	<div class="table-responsive">
      		<div class="table-wrapper">
      			<div class="table-title" style="background:#457d43;">
      				<div class="row">
      					<div class="col-sm-6">
      						<h2>All Administrative Assistance Inquiries</b></h2>
      					</div>
      					<div class="col-sm-6">
      						<a class="btn btn-success"><i class="fa fa-sort mr-3" aria-hidden="true"></i> <span>Sort by Recent Date</span></a>
      						<a href="#deleteFeedback" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash mr-3" aria-hidden="true"></i> <span>Delete All</span></a>
      					</div>
      				</div>
      			</div>
      			<table class="table table-striped table-hover">
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
      					<tr>
      						<td>
      							<span class="custom-checkbox">
      								<input type="checkbox" name="options[]" value="1">
      								<label for="checkbox1"></label>
      							</span>
      						</td>
      						<td>Thomas Hardy</td>
      						<td>thomashardy@mail.com</td>
      						<td>Request for new Password</td>
      						<td class="font-italic">Available</td>
      						<td>
      							<a href="#viewFeedback" class="edit" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
      							<a href="#deleteSelectedFeedback" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
      						</td>
      					</tr>
      					<tr>
      						<td>
      							<span class="custom-checkbox">
      								<input type="checkbox" name="options[]" value="1">
      								<label for="checkbox2"></label>
      							</span>
      						</td>
      						<td>Dominique Perrier</td>
      						<td>dominiqueperrier@mail.com</td>
      						<td>No Tomato sales shown</td>
      						<td class="font-italic">Unavailable</td>
                  <td>
      							<a href="#viewFeedback" class="edit" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
      							<a href="#deleteSelectedFeedback" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
      						</td>
      					</tr>
      					<tr>
      						<td>
      							<span class="custom-checkbox">
      								<input type="checkbox" name="options[]" value="1">
      								<label for="checkbox3"></label>
      							</span>
      						</td>
      						<td>Maria Anders</td>
      						<td>mariaanders@mail.com</td>
      						<td>Request official documents</td>
      						<td class="font-italic">Available</td>
                  <td>
      							<a href="#viewFeedback" class="edit" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
      							<a href="#deleteSelectedFeedback" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
      						</td>
      					</tr>
      					<tr>
      						<td>
      							<span class="custom-checkbox">
      								<input type="checkbox" name="options[]" value="1">
      								<label for="checkbox4"></label>
      							</span>
      						</td>
      						<td>Fran Wilson</td>
      						<td>franwilson@mail.com</td>
      						<td>Request for contact details</td>
      						<td class="font-italic">Available</td>
                  <td>
      							<a href="#viewFeedback" class="edit" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
      							<a href="#deleteSelectedFeedback" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
      						</td>
      					</tr>
      					<tr>
      						<td>
      							<span class="custom-checkbox">
      								<input type="checkbox" name="options[]" value="1">
      								<label for="checkbox5"></label>
      							</span>
      						</td>
      						<td>Martin Blank</td>
      						<td>martinblank@mail.com</td>
      						<td>Request to register</td>
      						<td class="font-italic">Available</td>
                  <td>
      							<a href="#viewFeedback" class="edit" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" title="Edit" aria-hidden="true"></i></a>
      							<a href="#deleteSelectedFeedback" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
      						</td>
      					</tr>
      				</tbody>
      			</table>
      			<div class="clearfix">
      				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      				<ul class="pagination">
      					<li class="page-item disabled"><a href="#">Previous</a></li>
      					<li class="page-item"><a href="#" class="page-link">1</a></li>
      					<li class="page-item"><a href="#" class="page-link">2</a></li>
      					<li class="page-item active"><a href="#" class="page-link">3</a></li>
      					<li class="page-item"><a href="#" class="page-link">4</a></li>
      					<li class="page-item"><a href="#" class="page-link">5</a></li>
      					<li class="page-item"><a href="#" class="page-link">Next</a></li>
      				</ul>
      			</div>
      		</div>
      	</div>
      </div>
       <!-- view table ends -->

       <!-- feedback Management Public View -->

     </div>

     <!-- Modals -->

     <!-- View Modal begins -->
     <div id="viewFeedback" class="modal fade">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Feedback Message</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" style="height:200px;" disabled></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
              <input type="submit" class="btn btn-success" value="Close">
            </div>
          </form>
        </div>
      </div>
     </div>

     <!-- View Modal ends -->

     <!-- Delete Selected Modal begins -->
     <div id="deleteSelectedFeedback" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Delete Administrative Assistance Request Records</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <img src="assets/img/delete.png" alt="delete" style="margin-left:350px;margin-top:20px;">
              <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete these administrative assistance request record(s)?</p>
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
     <!-- Delete Selected Modal ends -->

     {{-- Delete All Records Modal begins  --}}
     <div id="deleteFeedback" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <h4 class="modal-title">Delete All Administrative Assistance Request Records</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <img src="assets/img/quit.png" alt="delete" style="margin-left:350px;margin-top:20px;">
                <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete all the administrative assistance request records?</p>
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
