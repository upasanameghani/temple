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
                 <div class="card-box table-responsive">
                     <h4 class="m-t-0 header-title"><b>Default Example</b></h4>
                     <p class="text-muted font-13 m-b-30">
                         DataTables has most features enabled by default, so all you need to do to use it with
                         your own tables is to call the construction function: <code>$().DataTable();</code>.
                     </p>

                     <table id="datatable" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <th>Sr.No</th>
                                   <th>Title</th>
                                   <th>DESCRIPTION</th>
                                        <th>IMAGE</th>
                                        <th>STATUS</th>
                                        <td>Banner</td>
                                        <th>ACTION</th>
                              </tr>
                         </thead>

                         <tbody>
                              @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                             <img src="{{ asset('storage/slider/' . $item->image) }}"
                                             style="width: 200px" alt="image">

                                        </td>
                                        <td>  @if ($item->status == 'active')
                                             <span class="badge bg-success">Active</span>
                                         @else
                                             <span class="badge bg-danger">Active</span>
                                         @endif</td>
                                         <td>{{ $item->banner }}</td>
                                        <td>
                                             <a href="" class="btn btn-primary">Edit</a>
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
 