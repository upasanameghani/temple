@extends('admin.layouts.index')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit About</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('danger') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('about.update', $data->id) }}" class="row g-3 mt-3" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                @include('admin.about.fields')
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('storage/images/' . $data->image) }}" class="img-fluid mt-3" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
