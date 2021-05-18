@extends('posts.layout')
<x-app-layout>
    
{{-- <x-jet-welcome /> --}}
@section('content')
<div class="row mt-5">
{{-- <h2>All Project</h2> --}}
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Project') }}
    </h2>
    
</x-slot>
<div class="container">
<div class="row">
    
        <div class="col-sm-3">
         
    </div><div class="col-sm-6">
               <form action="{{ route('search') }}" method="GET">
        <div class="form-floating mb-3">
        
        <input type="text" class="form-control" id="floatingInput2" name="search"  placeholder="รหัสอ้างอิง,ชื่อทุน" required>
        
        <label for="floatingInput2">Search...</label>

       </div>  
    </div>
    <div class="col-sm-3">
             <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-2x"></i></button>
 
        </div>
      </form>
        
        </div>
    
    @if($data->isNotEmpty())
    @foreach($data as $key=>$value)
            <div class="post-list">
                {{-- <p>{{ $value->ref_id }}</p> --}}
               
            </div>
        @endforeach
    @else 
        <div>
            <h2>No project found</h2>
        </div>
    @endif

    </div>
    
    
<div class="col-md-12">
    <a href="{{ route ('posts.create')}}" class="btn btn-success my-3">Create new project</a>
    
</div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>

@endif
<table class="table table-bordered" id="tb1">
    <tr>
        <th>รหัสอ้างอิง</th>
        <th>ชื่อโครงการ</th>
        <th>ทุนวิจัย</th>
        <th>สถานะ</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($data as $key => $value)
    <tr>
        <td>{{$value->ref_id}}</td>
        <td><u class="ttd">{{$value->project_id}}</u>{{$value->project_name_th}}</td>
        <td>{{Str::limit($value->resource_funds,100)}}</td>
        <td>{{$value->project_status}}</td>
        <td>
            <form action="{{route('posts.destroy',$value->id)}}" method="post">
            <a href="{{route('posts.show', $value->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
            <a href="{{route('posts.edit', $value->id)}}" class="btn btn-secondary"><i class="fa fa-cog"></i></a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i>
            {{-- </button> --}}
            </form>
        </td>
    </tr>

    @endforeach
</table>

{!! $data->links()!!}
@endsection
              
            
      
    
</x-app-layout>
