@extends('admin.layouts.index')
 @section('content') 
 <div class="content">
 <div class="container mt-5">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                          <h4> Add - 
                              <a href="{{ url('home-work')}}" class="btn btn-danger btn-sm float-right">Back</a>
                         </h4>
                    </div>
                    <div class="card-body">
                         <form action="{{ url('store-work')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group"> 
                                   <label>Title</label>
                                   <input type="text" name="title" class="form-control">
                              </div>
                              
                              <div class="form-group">
                                   <label>Description</label>
                                   <textarea required class="form-control" name="description" ></textarea>
                              </div>
                              
                                
                                   <label> Image Upload</label>
                                   
                                        <input type="file" name="image" class="form-control">
                                
                            <br><br>
                            
                            <div class="form-group">
                              <label>City</label>
                              <input type="text" name="city" class="form-control">
                         </div>
                         
                         <div class="form-group">
                              <label>partyName</label>
                              <input type="text" name="party_name" class="form-control">
                         </div>
                         
                        
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







