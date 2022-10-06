@extends('admin.layouts.index')

@section('content')
<div class="content">
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header">
                              <h4> Edit - Blog 
                                   <a href="{{ url('home-blog')}}" class="btn btn-danger btn-sm float-right">Back</a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <form action="{{ url('update-blog/'.$blog->id)}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('patch')
                                   <div class="form-group">
                                        <label>Title</label>
                                        
                                             <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                                       
                                   </div> 
                                   
                                   <div class="form-group">
                                        <label>Description</label>
                                       
                                             <textarea name="description" required class="form-control">{{ $blog->description }}</textarea>
                                       
                                   </div>
                                   <div class="form-group">
                                        <label>Date</label>
                                        
                                             <input type="date" class="form-control" name="date" required placeholder="Date" value="{{ $blog->date }}"/>
                                        
                                   </div>
                                   
                                   <div class="form-group">
                                        <label>Writter</label>
                                       
                                             <input type="text" class="form-control" name="writter" required placeholder="Writter" value="{{ $blog->writter }}" />
                                       
                                   </div>
                                   
                                  
                                    <div class="form-group"> 
                                        <label>Image</label>
                                             <input type="file" name="image" class="form-control">
                                             @if ($blog->image)
                                             <img src="{{ asset('storage/blog/'.$blog->image)}}" alt="img" width="100" height="100">
                                                  
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