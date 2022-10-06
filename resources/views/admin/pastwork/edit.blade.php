@extends('admin.layouts.index')

@section('content')
<div class="content">
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header">
                              <h4> Edit 
                                   <a href="{{ url('home-work')}}" class="btn btn-danger btn-sm float-right">Back</a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <form action="{{ url('update-work/'.$work->id)}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   @method('patch')
                                   <div class="form-group">
                                        <label>Title</label>
                                        
                                             <input type="text" name="title" class="form-control" value="{{ $work->title }}">
                                       
                                   </div> 
                                   
                                   <div class="form-group">
                                        <label>Description</label>
                                       
                                             <textarea name="description" required class="form-control">{{ $work->description }}</textarea>
                                       
                                   </div>
                                   <div class="form-group">
                                        <label>City</label>
                                        
                                             <input type="text" class="form-control" name="city" required placeholder="City" value="{{ $work->city }}"/>
                                        
                                   </div>
                                   
                                   <div class="form-group">
                                        <label>partyName</label>
                                       
                                             <input type="text" class="form-control" name="party_name" required placeholder="Width" value="{{ $work->party_name }}" />
                                       
                                   </div>
                                   
                                    <div class="form-group"> 
                                        <label>Image</label>
                                             <input type="file" name="image" class="form-control">
                                             @if ($work->image)
                                             <img src="{{ asset('storage/past_work/'.$work->image)}}" alt="img" width="100" height="100">
                                                  
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