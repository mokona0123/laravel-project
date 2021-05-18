@extends('fund.layout')
<x-app-layout>
    
{{-- <x-jet-welcome /> --}}
@section('content')
<div class="row mt-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funds') }}
        </h2>
    </x-slot>
<div class="col-md-12">
    <a href="{{ route ('fund.create')}}" class="btn btn-success my-3">Create new funds</a>
    
</div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>

@endif
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>แหล่งทุน</th>
        <th>ประเภททุน</th>
        <th>ปีงบประมาณ</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($data as $key => $value)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$value->resource_funds}}</td>
        <td>{{Str::limit($value->funds_category,100)}}</td>
        <td>{{$value->fiscal_year}}</td>

        <td>
            <form action="{{route('fund.destroy',$value->id)}}" method="post">
            <a href="{{route('fund.show', $value->id)}}" class="btn btn-primary">Show</a>
            <a href="{{route('fund.edit', $value->id)}}" class="btn btn-secondary">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</button>

            </form>
        </td>
    </tr>

    @endforeach
</table>

{{-- {!! $funddata->links()!!} --}}
@endsection
              
            
      
    
</x-app-layout>
