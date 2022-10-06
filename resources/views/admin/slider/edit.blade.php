@extends('admin.layouts.index')

@section('content')
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header">
                              <h4> Edit - Slider 
                                   <a href="{{ url('home-slider')}}" class="btn btn-danger btn-sm float-right">Back</a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <form action="{{ url('update-slider/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('patch')
                                   <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                                   </div>
                                   
                                     
                                        <label>Slider Image Upload</label>
                                        
                                             <input type="file" name="image" class="form-control">
                                             @if ($slider->image)
                                             <img src="{{ asset('storage/slider/'.$slider->image)}}" alt="img" width="100" height="100">
                                                  
                                             @endif
                       
                                   <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>


@endsection