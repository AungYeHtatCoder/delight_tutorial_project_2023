@extends('layouts.admin_app')
@section('styles')

@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">Responsive Datatable</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="index.html">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="#">DataTables</a>
       </li>
       <li class="breadcrumb-item active">Responsive Datatable
       </li>
      </ol>
     </div>
    </div>
   </div>
   <div class="content-header-right col-md-3 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
     <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1"
      type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
     <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a
       class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item"
       href="component-progress.html"> Progress</a>
      <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="content-overlay"></div>
<div class="row">
 <div class="col-md-12">
  <div id='calendar'></div>

  @php
  if($formattedEvents)
  {
  print_r($formattedEvents);

  }else{
  echo " error";
  }
  @endphp

 </div>
</div>

<div class="modal fade" id="eventModal" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <form id="eventForm">
    @csrf
    <div class="modal-header">
     <h5 class="modal-title">Add Event</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
    <div class="modal-body">
     <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" required>
     </div>
     <div class="form-group">
      <label for="start_date">Start Date</label>
      <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
     </div>
     <div class="form-group">
      <label for="end_date">End Date</label>
      <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
     </div>
     <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description" name="description"></textarea>
     </div>
     <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" name="location">
     </div>
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
   </form>
  </div>
 </div>
</div>
@endsection

@section('scripts')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.min.js"
 integrity="sha512-xCMh+IX6X2jqIgak2DBvsP6DNPne/t52lMbAUJSjr3+trFn14zlaryZlBcXbHKw8SbrpS0n3zlqSVmZPITRDSQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.global.js"
 integrity="sha512-i1QYxrZ2eJKNdGkTdSVfokfaXHQEpcjj5CfnWhJ6dQ0X76aG9rIaWvB77GpqFtVp83iRzE/b6e20weGSZpecjQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.global.min.js"
 integrity="sha512-R2ktoX0ULWEVnA5+oE1kuNEl3KZ9SczXbJk4aT7IgPNfbgTqMG7J14uVqPsdQmZfyTjh0rddK9sG/Mlj97TMEw=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.js"
 integrity="sha512-bBl4oHIOeYj6jgOLtaYQO99mCTSIb1HD0ImeXHZKqxDNC7UPWTywN2OQRp+uGi0kLurzgaA3fm4PX6e2Lnz9jQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
// document.addEventListener('DOMContentLoaded', function() {
//  var calendarEl = document.getElementById('calendar');
//  var calendar = new FullCalendar.Calendar(calendarEl, {
//   initialView: 'dayGridMonth',
//   events: "{{ route('admin.events.index') }}",
//   editable: true,
//   eventClick: function(info) {
//    alert('Description: ' + info.event.extendedProps.description);
//   },
//   // Other options...
//  });
//  calendar.render();
// });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
 var calendarEl = document.getElementById('calendar');
 var calendar = new FullCalendar.Calendar(calendarEl, {
  initialView: 'dayGridMonth',
  events: "{{ route('admin.events.index') }}",
  editable: true,
  eventClick: function(info) {
   alert('Description: ' + info.event.extendedProps.description);
  },
  // Other options...
  // Add the dateClick event handler here
  dateClick: function(info) {
   $('#eventModal').modal('show');
   $('#start_date').val(info.dateStr);
   $('#end_date').val(info.dateStr);
  },
 });
 calendar.render();

 $('#eventModal').on('show.bs.modal', function() {
  $('#eventForm')[0].reset();
 });

 $('#eventForm').submit(function(event) {
  event.preventDefault();
  var formData = $(this).serialize();
  $.ajax({
   url: "{{ route('admin.events.store') }}",
   method: 'POST',
   data: formData,
   success: function(response) {
    calendar.refetchEvents();
    $('#eventModal').modal('hide');
   }
  });
 });
});
</script>
@endsection