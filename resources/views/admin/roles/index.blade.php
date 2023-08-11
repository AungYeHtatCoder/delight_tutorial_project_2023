@extends('layouts.admin_app')
@section('styles')

<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css') }}"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css') }}">
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
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="{{ route('admin.roles.create') }}">Create Role</a>
       </li>
       <li class="breadcrumb-item active">Role Responsive Datatable
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

<!-- Configuration option table -->
<section id="configuration">
 <div class="row">
  <div class="col-12">
   <div class="card">
    <div class="card-header">
     <h4 class="card-title">
      <a href="{{ route('admin.roles.create') }}" class="btn btn-success btn-round">New Role Create</a>
     </h4>
     <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
     <div class="heading-elements">
      <ul class="list-inline mb-0">
       <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
       <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
       <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
       <li><a data-action="close"><i class="ft-x"></i></a></li>
      </ul>
     </div>
    </div>
    <div class="card-content collapse show">
     <div class="card-body card-dashboard">
      <p class="card-text">The Responsive
      </p>

      @if (session('toast_success'))
      <div class="alert alert-success">
       {{ session('toast_success') }}
      </div>
      @endif
      <table class="table table-striped table-bordered dataex-res-configuration">
       <thead>
        <tr>
         <th>ID</th>
         <th>RoleName</th>
         <th>Created_At</th>
         <th>Updated_At</th>
         <th>Action</th>

        </tr>
       </thead>
       <tbody>
        @foreach ($roles as $key => $role)
        <tr>
         <td>{{ ++$key }}</td>
         <td>{{ $role->title }}</td>
         <td>{{ $role->created_at->format('F j, Y') }}</td>
         <td>{{ $role->updated_at->format('F j, Y') }}</td>
         <td>
          <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <a href="{{ route('admin.roles.show', $role->id) }}" class="btn btn-primary btn-sm">Show</a>
          <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>

         </td>
        </tr>
        @endforeach
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
 @include('sweetalert::alert')

</section>
<!--/ Configuration option table -->
@endsection

@section('scripts')
<!-- <script src="{{ asset('admin_app/app-assets/vendors/js/material-vendors.min.js') }}"></script> -->

<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js') }}"></script>

<script src="{{ asset('admin_app/app-assets/js/scripts/tables/datatables-extensions/datatable-responsive.js') }}">
</script>
@endsection