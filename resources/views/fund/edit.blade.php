@extends('fund.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Edit Fund</h2>
            <a href="{{route('fund.index')}}" class="btn btn-primary my-3">
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

<form action="{{route('fund.update', $fund->id)}}" method="post">
    @csrf
@method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>แหล่งทุน</strong>
                <input type="text" name="resource_funds" value="{{$fund->resource_funds}}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ประเภททุน</strong>
                <input type="text" name="funds_category" value="{{$fund->funds_category}}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ปีงบประมาณ</strong>
                <input type="text" name="fiscal_year" value="{{$fund->fiscal_year}}" class="form-control">
            </div>
        </div>
        
        <div class="col-md-12">
            <button type="submit" class="btn btn-success my-3">Update</button>
        </div>
    </div>
    </form>
@endsection