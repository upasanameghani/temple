@extends('admin.layouts.index')

@section('content')
<div class="content">
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header">
                              <h4> Edit - About 
                                   <a href="{{ url('home-about')}}" class="btn btn-danger btn-sm float-right">Back</a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <form action="{{ url('update-about/'.$about->id)}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('patch')
                                   <div class="form-group">
                                        <label>Who we are</label>
                                        
                                        <textarea name="whoweare" required class="form-control">{{ $about->whoweare }}</textarea>
                                       
                                   </div> 
                                   
                                   <div class="form-group">
                                        <label>Vision</label>
                                       
                                             <textarea name="vision" required class="form-control">{{ $about->vision }}</textarea>
                                       
                                   </div>
                                    
                                   <div class="form-group">
                                        <label>Mission</label>
                                       
                                             <textarea name="mission" required class="form-control">{{ $about->mission }}</textarea>
                                       
                                   </div>
                                  
                                    <div class="form-group"> 
                                        <label>Image</label>
                                             <input type="file" name="image" class="form-control">
                                             @if ($about->image)
                                             <img src="{{ asset('storage/abouts/'.$about->image)}}" alt="img" width="100" height="100">
                                                  
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