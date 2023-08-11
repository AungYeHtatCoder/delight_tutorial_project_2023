@extends('layouts.admin_app')

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
       <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Back To Role</a>
       </li>
       <li class="breadcrumb-item active">Role Detail Dashboard
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
      <table class="table table-striped table-bordered dataex-res-configuration">
       <tr>
        <th>ID</th>
        <td>{!! $role_detail->id !!}</td>
       </tr>
       <tr>
        <th>Role Name</th>
        <td>
         <span class="badge badge-success" style="font-size: 20px">
          <strong>
           {!! $role_detail->title !!}
          </strong>
         </span>
        </td>
       </tr>
       <tr>
        <th>Role Permissions</th>
        <td>
         @foreach($role_detail->permissions as $permission)
         <span class="badge badge-info">
          {{ $permission->title }}
         </span>
         <br>
         @endforeach
        </td>
       </tr>
       <tr>
        <th>Create Date</th>
        <td>{!! $role_detail->created_at->format('F j, Y') !!}</td>
       </tr>
       <tr>
        <th>Update Date</th>
        <td>{!! $role_detail->updated_at->format('F j, Y') !!}</td>
       </tr>

      </table>

     </div>
    </div>
   </div>
  </div>
 </div>

</section>
<!--/ Configuration option table -->
@endsection