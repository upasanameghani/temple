@extends('admin.layouts.index')

@section('content')
<div class="content">
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header">
                              <h4> Edit - Product 
                                   <a href="{{ url('home-product')}}" class="btn btn-danger btn-sm float-right">Back</a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <form action="{{ url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('patch')
                                   <div class="form-group">
                                        <label>Title</label>
                                        
                                             <input type="text" name="title" class="form-control" value="{{ $product->title }}">
                                       
                                   </div> 
                                   
                                   <div class="form-group">
                                        <label>Description</label>
                                       
                                             <textarea name="description" required class="form-control">{{ $product->description }}</textarea>
                                       
                                   </div>
                                   <div class="form-group">
                                        <label>Height</label>
                                        
                                             <input type="text" class="form-control" name="height" required placeholder="Height" value="{{ $product->height }}"/>
                                        
                                   </div>
                                   
                                   <div class="form-group">
                                        <label>Width</label>
                                       
                                             <input type="text" class="form-control" name="width" required placeholder="Width" value="{{ $product->width }}" />
                                       
                                   </div>
                                   
                                   <div class="form-group">
                                        <label>Depth</label>
                                       
                                             <input type="text" class="form-control" name="depth" required placeholder="Depth" value="{{ $product->depth }}"/>
                                       
                                   </div>
                                   
                                   <div class="form-group">
                                        <label>Weight</label>
                                        
                                             <input type="text" class="form-control" name="weight" required placeholder="Weight" value="{{ $product->weight }}"/>
                                       
                                   </div>
                                    <div class="form-group"> 
                                        <label>Image</label>
                                             <input type="file" name="image" class="form-control">
                                             @if ($product->image)
                                             <img src="{{ asset('storage/products/'.$product->image)}}" alt="img" width="100" height="100">
                                                  
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