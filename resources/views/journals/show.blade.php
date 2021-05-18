{{-- @inject('thaiDateHelper', 'App\Http\Controller\ThaiDateHelperService') --}}
@extends('journals.layout')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
       
        <h2>Show Journals {{$journals->id}}</h2>
        <a href="{{route('journals.index')}}" class="btn btn-primary my-3">
        Back</a>
    </div>
</div>

<div class="row">
    <div class="card p-3">
        <div class="card-title">
            <strong>Journals information</strong>
        </div>
        <div class="border-top my-1"></div>
        <div class="card-text">
            <Strong>Journals name:</Strong>
            {{$journals->title}}
        </div>
        <div class="card-text">
            <Strong>Description:</Strong>
            {{$journals->description}}
        </div>
        {{-- <div class="card-title">
            <Strong>Title:</Strong>
            {{$post->project_name_th}}
        </div> --}}
        
        
       
       
            {{-- @php
            $datetime1 = new DateTime($post->project_start_at);
            $datetime2 = new DateTime($post->project_end_at);
            $interval = $datetime1->diff($datetime2);
       
            $days = $interval->format('%y years %m months %a days'); 
          @endphp --}}
    
        </div>
    </div>
</div>
@endsection