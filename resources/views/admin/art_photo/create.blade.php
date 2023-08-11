@extends('layouts.admin_app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin_app/app-assets/vendors/css/ui/prism.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/css/plugins/file-uploaders/dropzone.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_app/app-assets/css/pages/dropzone.css') }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">Art Photo Create Dashboard</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="#">Art Photo</a>
       </li>
       <li class="breadcrumb-item active">Art Photo Create Dashboard
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
 <div class="col-12">
  <div class="card">
   <div class="card-header">
    <h4 class="card-title">Remove All Thumbnails</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
    <div class="heading-elements">
     <ul class="list-inline mb-0">
      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
      <li><a data-action="close"><i class="ft-x"></i></a></li>
     </ul>
    </div>
   </div>
   <div class="card-content collapse show">
    <div class="card-body">
     <!-- <button id="clear-dropzone" class="btn btn-primary mb-1"><i class="ft-trash"></i> Clear Dropzone</button>
     <form action="{{ route('admin.artphotos.store') }}" method="post" class="dropzone dropzone-area"
      id="dpz-remove-all-thumb" enctype="multipart/form-data">
      @csrf
      <div class="dz-message">Drop Files Here To Upload</div>
     
      <input type="file" name="photo" style="display: none;">
     </form> -->
     <form class="form mt-5" method="post" action="{{ route('admin.artphotos.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-body">
       <div class="row">
        <div class="form-group col-12 mb-2">
         <label for="title">Art Photo Title</label>
         <input type="text" id="title" class="form-control" placeholder="Art photo title" name="title">
        </div>
       </div>

       <div class="row">
        <div class="form-group col-12 mb-2">
         <label for="title">Art Photo Title</label>
         <input type="file" id="photo" class="form-control" name="photo">
        </div>
       </div>
       <div class="row">
        <div class="form-group col-12 mb-2">
         <div class="form-check">
          <input class="form-check-input" type="checkbox" value="1" name="published" id="published">
          <label class="form-check-label" for="published">
           Art Photo Publish Status
          </label>
         </div>
        </div>
       </div>
       <div class="row">
        <div class="form-group col-12 mb-2">
         <label for="plans">Plan</label>
         <span class="btn btn-info btn-sm select-all">Select All</span>
         <span class="btn btn-info btn-sm deselect-all">Deselect</span>
         <select name="plans[]" id="plans" class="form-control select2" multiple="multiple" required>
          <option value="" disabled>Select Plan</option>
          @foreach($plans as $id => $plan)
          <option value="{{ $id }}">{{ $plan }}</option>
          @endforeach
         </select>
        </div>
       </div>
       <div class="row">
        <div class="form-group col-12 mb-2">
         <label for="description">Art Photo Description</label>
         <textarea type="text" id="classic-editor" class="form-control"
          placeholder="Write Here Your Art Photo Description" name="description"></textarea>
        </div>
       </div>
      </div>

      <div class="form-actions text-center">
       <button type="button" class="btn btn-warning mr-1">
        <i class="ft-x"></i> Cancel
       </button>
       <button type="submit" class="btn btn-primary">
        <i class="la la-check-square-o"></i> Save
       </button>
      </div>
     </form>
    </div>


   </div>
  </div>
 </div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('admin_app/app-assets/vendors/js/extensions/dropzone.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/ui/prism.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/js/scripts/extensions/dropzone.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/editors/ckeditor/ckeditor-super-build.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/js/scripts/editors/editor-ckeditor.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
Dropzone.autoDiscover = false;

$(document).ready(function() {
 let myDropzone = new Dropzone('#dpz-remove-all-thumb', {
  // Dropzone options here
 });

 // Manually link the named file input field to Dropzone
 $('#dpz-remove-all-thumb input[name="photo"]').change(function() {
  myDropzone.addFile(this.files[0]);
 });
});
</script>
<script>
$(document).ready(function() {
 $('.select2').select2({
  multiple: true
 });
});
</script>
<script>
$(document).ready(function() {
 $('.select-all').click(function() {
  $('#plans option').prop('selected', true);
  $('#plans').trigger('change.select2');
 });

 $('.deselect-all').click(function() {
  $('#plans option').prop('selected', false);
  $('#plans').trigger('change.select2');
 });

 // Initialize Select2
 $('#plans').select2();
});
</script>



@endsection