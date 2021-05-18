{{-- @inject('thaiDateHelper', 'App\Http\Controller\ThaiDateHelperService') --}}
@extends('posts.layout')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <h2>Show Post</h2>
        <a href="{{route('posts.index')}}" class="btn btn-primary my-3">
        Back</a>
    </div>
</div>

<div class="row">
    <div class="card p-3">
        <div class="card-title">
            <h4>⏵ข้อมูลทุน</h4>
        </div>
        <div class="border-top my-1"></div>
        <div class="card-text">
            <Strong>แหล่งทุน:</Strong>
            <u class="dotted">{{$post->resource_funds}}</u>
        </div>
        <div class="card-text">
            <Strong>ชื่อทุน:</Strong>
            <u class="dotted"> {{$post->funds_category}}</u>
        </div>
        {{-- <div class="card-title">
            <Strong>Title:</Strong>
            {{$post->project_name_th}}
        </div> --}}
        <div class="card-title">
            <h4>⏵ข้อมูลโครงการ</h4>
        </div>
        <div class="border-top my-1"></div>
        <div class="card-text">
            <Strong>รหัสอ้างอิง:</Strong>
            <u class="col"><u class="dotted">{{$post->ref_id}}</u></u>
        </div>
        <div class="card-text">
            <Strong>รหัสโครงการ:</Strong>
            <u class="col"><u class="dotted">{{$post->project_id}}</u></u>
        </div>
        <div class="card-text">
            <Strong>ประเภทโครงการ:</Strong>
            <u class="dotted">{{$post->project_category}}</u>
        </div>
        <div class="card-text">
            <Strong>ลักษณะโครงการ:</Strong>
            <u class="dotted">{{$post->project_description}}</u>
        </div>
        <div class="card-text">
            <Strong>คณะ/หน่วยงาน ที่เสนอโครงการ:</Strong>
            <u class="dotted">{{$post->project_faculty}}</u>
        </div>
        <div class="card-text">
            <Strong>ชื่อโครงการ(ภาษาไทย):</Strong>
            <u class="dotted">{{$post->project_name_th}}</u>
        </div>
        <div class="card-text">
            <Strong>ชื่อโครงการ(ภาษาอังกฤษ):</Strong>
            <u class="dotted">{{$post->project_name_en}}</u>
        </div>
        <div class="card-text">
            <Strong>คำสำคัญ:</Strong>
            <u class="dotted">{{$post->project_keyword}}</u>
        </div>
        <div class="card-text">
            <Strong>Email(สำหรับติดต่อหัวหน้าโครงการ):</Strong>
            <u class="dotted">{{$post->project_email_leader}}</u>
        </div>
        <div class="card-text">
            <Strong>สถานะปัจจุบัน(หัวหน้าโครงการ):</Strong>
            <u class="dotted">{{$post->project_status_leader}}</u>
        </div>
        
        <div class="card-title">
            <h4>⏵ระยะเวลาวิจัย</h4>
            
        </div>
        <div class="border-top my-1"></div>
        <div class="card-text">
            <Strong>วันที่เริ่มต้น:</Strong>
            <u class="dotted">{{thaidate('j F Y',$post->project_start_at)}}</u>
        </div>
        <div class="card-text">
            <Strong>วันที่สิ้นสุด:</Strong>
            <u class="dotted">{{thaidate('j F Y', $post->project_end_at)}}</u>
        </div>
        <div class="card-text">
            <Strong>ระยะเวลาโครงการ:</Strong>
            {{-- @php
            $datetime1 = new DateTime($post->project_start_at);
            $datetime2 = new DateTime($post->project_end_at);
            $interval = $datetime1->diff($datetime2);
       
            $days = $interval->format('%y years %m months %a days'); 
          @endphp --}}
          <u class="dotted">{{\Carbon\Carbon::parse($post->project_start_at)->diffInYears($post->project_end_at)}} ปี
            {{\Carbon\Carbon::parse($post->project_start_at)->diffInDays($post->project_end_at)-365}} วัน</u>
        </div>
    </div>
</div>
@endsection