@extends('admin.layouts.index')
 @section('content') 
 <div class="content">
 <div class="container mt-5">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h4> Add - Gallery
                              <a href="{{ url('home-gallery')}}" class="btn btn-danger btn-sm float-right">Back</a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <form action="{{ url('store-gallery')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                             
                              
                              <div class="form-group">
                                   <label> Image Upload</label>
                                   
                                   <input type="file" name="image" class="form-control">
                           
                              </div>
                              
                              <div class="form-group">
                                   <label> Video Upload</label>
                                   
                                        <input type="file" name="video" class="form-control">
                              </div>
                            <br><br>
                            
                           
                              <div class="form-group">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
 </div>
 @endsection







