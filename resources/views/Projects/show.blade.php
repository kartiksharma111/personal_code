@extends('layouts.app')

@section('content')
    <div class = "row">
        <div class = "col-lg-12 margin-tb">
            <div class = "float-left">
                <h2> {{ $project->name }} </h2>
            </div>
            <div class = "float-right">
                <a class = "btn btn-primary" href = "{{ route('projects.index') }}" title = "Go back"> <i class = "fas fa-backward"></i></a>
            </div>
        </div>
    </div>
    <div class="float-right ">
        <div class="form-group">
            <img src="{{ asset('storage/'.$project->name.'.jpg') }}" height="160px" width="150px">
        </div>
    </div>    
    <div class = "row">
        <div class = "col-xs-12 col-md-12 col-sm-12">
            <div class = "form-group">
                <strong>Name:</strong>
                {{ $project->name }}
            </div>
        </div>
        <div class = "col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>Introduction:</strong>
                {{ $project->introduction }}
            </div>
        </div>
        <div class = "col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>Location:</strong>
                {{ $project->location }}
            </div>
        </div>
        <div class = "col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>Cost:</strong>
                {{ $project->cost }}
            </div>
        </div>
        <div class = "col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>Date Created:</strong>
                {{ date_format($project->created_at, 'jS M Y' ) }}
            </div>
        </div>
        <div class = "col-xs-12 col-sm-12 col-md-12">
            <div class = "form-group">
                <strong>Download Resume:</strong>
                <a href="{{asset('storage/'.$project->resume)}}" target="_blank">
                    <button class="btn"><i class="fa fa-download"></i> Download Resume</button>
                </a>
            </div>
        </div>
    </div>
@endsection