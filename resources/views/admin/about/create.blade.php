@extends('admin.layouts.index')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add New About</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('about_store') }}" class="row g-3 mt-3" enctype="multipart/form-data" method="POST">
                                @csrf
                                @include('admin.about.fields')
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
