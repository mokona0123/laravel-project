{{-- @inject('thaiDateHelper', 'App\Http\Controller\ThaiDateHelperService') --}}
@extends('journals.layout')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <h2>Show Fund {{$fund->id}}</h2>
        <a href="{{route('fund.index')}}" class="btn btn-primary my-3">
        Back</a>
    </div>
</div>

<div class="row">
    <div class="card p-3">
        <div class="card-title">
            <strong>ข้อมูลทุน</strong>
        </div>
        <div class="border-top my-1"></div>
        <div class="card-text">
            <Strong>แหล่งทุน:</Strong>
            {{$fund->resource_funds}}
        </div>
        <div class="card-text">
            <Strong>ชื่อทุน:</Strong>
            {{$fund->funds_category}}
        </div>
        {{-- <div class="card-title">
            <Strong>Title:</Strong>
            {{$post->project_name_th}}
        </div> --}}
        
        
        <div class="card-text">
            <Strong>ปีงบประมาณ:</Strong>
            {{$fund->fiscal_year}}
        </div>
       
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