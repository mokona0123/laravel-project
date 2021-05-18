@extends('journals.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Edit Journals</h2>
            <a href="{{route('journals.index')}}" class="btn btn-primary my-3">
            Back</a>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <Strong>Whoops!</Strong>
        There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('journals.update', $journals->id)}}" method="post">
    @csrf
@method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Journals name</strong>
                <input type="text" name="title" value="{{$journals->title}}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name="description" value="{{$journals->description}}" class="form-control">
            </div>
        </div>
        
        
        <div class="col-md-12">
            <button type="submit" class="btn btn-success my-3">Update</button>
        </div>
    </div>
    </form>
@endsection