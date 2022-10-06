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

                <h4 class="page-title">Contact Us</h4>
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
                    <h4 class="m-t-0 header-title"> Get- contact</h4>
                     

                     <table id="datatable" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <th>Id</th>
                                   <td>Name</td>
                                   <td>Email</td>
                                   <td>Contact No</td>
                                   <td>Message</td>
                              </tr>
                         </thead>

                         <tbody>
                              @foreach ($contact as $item)
                                   <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->message }}</td>
                                       
                                        
                                        
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