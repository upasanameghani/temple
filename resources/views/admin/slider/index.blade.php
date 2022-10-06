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

                 <h4 class="page-title">Slider</h4>
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
                    <h4 class="m-t-0 header-title"> Add - Product</h4>
                        <a href="{{ url('add-slider')}}" class="btn btn-primary btn-sm float-right">ADD</a>

                     <table id="datatable" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <th>Id</th>
                                   <td>Title</td>
                                   <td>Image</td>
                                   <th>Edit</th>
                              </tr>
                         </thead>

                         <tbody>
                              @foreach ($slider as $item)
                                   <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                             <img src="{{ asset('storage/slider/'.$item->image)}}" alt="Image here" height="50" width="50">
                                        </td>
                                        <td>
                                             <a href="{{ url('edit-slider/'.$item->id) }}" class="btn btn-primary">Edit</a>
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