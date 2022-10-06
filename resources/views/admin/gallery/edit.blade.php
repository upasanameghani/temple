@extends('admin.layouts.index')

@section('content')
<div class="content">
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header">
                              <h4> Edit - Gallery 
                                   <a href="{{ url('home-gallery')}}" class="btn btn-danger btn-sm float-right">Back</a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <form action="{{ url('update-gallery/'.$gallery->id)}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('patch')
                                
                                  
                                    <div class="form-group"> 
                                        <label>Image</label>
                                             <input type="file" name="image" class="form-control">
                                             @if ($gallery->image)
                                             <img src="{{ asset('storage/products/'.$gallery->image)}}" alt="img" width="100" height="100">
                                                  
                                             @endif
                                       
                                   </div>
                                   <div class="form-group"> 
                                        <label>Video</label>
                                             <input type="file" name="video" class="form-control">
                                             @if ($gallery->video)
                                             <img src="{{ asset('storage/gallery/'.$gallery->video)}}" alt="img" width="100" height="100">
                                                  
                                             @endif
                                       
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