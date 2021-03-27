@extends('layouts.app')

@section('content')
    <div class = "row">
        <div class = "col-lg-12 margin-tb">
            <div class = "float-left">
                <h2>Edit Product</h2>
            </div>
            <div class = "float-right">
                <a class = "btn btn-primary" href = "{{ route('projects.index') }}" title ="Go back"> <i class = "fas fa-backward"></i></a>
            </div>
        </div>
    </div>

    @if($errors->any()) 
        <div class = "alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $error) 
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action = "{{ route('projects.update', $project->id) }}" method = "POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class = "row">
            <div class = "col-lg-12">
                <div class = "float-left col-lg-10">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $project->name }}" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class = "col-xs-12 col-sm-12 col-md-12">
                        <div class = "form-group">
                            <strong>Introduction:</strong>
                            <textarea class = "form-control" style = "height:50px" name = "introduction" placeholder = "Introduction">{{ $project->introduction }}</textarea>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Location:</strong>
                            <input type="text" name="location" class="form-control" placeholder="{{ $project->location }}"
                                value="{{ $project->location }}">
                        </div>
                    </div> -->
                    <div class = "col-xs-12 col-sm-12 col-md-12">
                        <div class = "form-group">
                            <strong>Cost:</strong>
                            <input type = "text" name = "cost" class = "form-control" placeholder = "{{ $project->cost }}" value = "{{ $project->cost }}">
                        </div>
                    </div>
                    <div class = "col-xs-12 col-sm-12 col-md-12">
                        <div class = "form-group">
                            <strong>Upload Resume:</strong>
                            <input type = "file" name = "resume" class = "form-control">
                        </div>
                    </div>
                    <div class = "col-md-12 text-center mt-3">
                        <button type = "submit" class = "btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="float-right mt-3">
                    <div class="form-group ">
                        <img src="{{ asset('storage/'.$project->name.'.jpg') }}" height="160px" width="150px">
                    </div>
                </div>
            </div>
        </div>
    <form>
@endsection

        