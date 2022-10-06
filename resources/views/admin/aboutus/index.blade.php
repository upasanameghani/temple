@extends('admin.layouts.index')

@section('content')
<div class="content">
     <div class="container">

         <!-- Page-Title -->
         <div class="row">
             <div class="col-sm-12">
                 <div class="btn-group pull-right m-t-15">
                     <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                     <ul class="dropdown-menu drop-menu-right" role="menu">
                         <li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something else here</a></li>
                         <li class="divider"></li>
                         <li><a href="#">Separated link</a></li>
                     </ul>
                 </div>

                <h4 class="page-title">About</h4>
                 <ol class="breadcrumb">
                     <li>
                         <a href="#">Ubold</a>
                     </li>
                     <li>
                         <a href="#">Tables</a>
                     </li>
                     <li class="active">
                         Datatable
                     </li>
                 </ol>
             </div>
         </div>

         <div class="row">
            <div class="col-sm-12">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                </div>
            @endif
            @if (session()->has('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('danger') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                </div>
            @endif
            </div>
         </div>

         <div class="row">
             <div class="col-sm-12">
                 <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"> Add - About</h4>
                        <a href="{{ url('add-about')}}" class="btn btn-primary btn-sm float-right">ADD</a>

                     <table id="datatable" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <th>Id</th>
                                  <th>Who WE ARE</th>
                                  <th>Vision</th>
                                  <th>Mission</th>
                                   <td>Image</td>
                                   <td>Status</td>
                                   <th>Edit</th>
                              </tr>
                         </thead>

                         <tbody>
                              @foreach ($about as $item)
                                   <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->whoweare }}</td>
                                        <td>{{ $item->vision }}</td>
                                        <td>{{ $item->mission }}</td>
                                        <td>
                                             <img src="{{ asset('storage/abouts/'.$item->image)}}" alt="Image here" height="50" width="50">
                                        </td>
                                        <td>  @if ($item->status == '1')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Active</span>
                                        @endif</td>
                                       
                                        <td>
                                            <a href="{{ url('edit-about/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                       </td>
                                   </tr>
                              @endforeach
                              
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     

         
         <!-- end row -->


     </div> <!-- container -->

 </div>


@endsection