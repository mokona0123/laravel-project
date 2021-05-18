
@extends('posts.layout')
<?php


$items = DB::table('funds')->get();
$items2 = DB::table('journals')->get();
$selectID=0;
?>
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Edit Post</h2>
            <a href="{{route('posts.index')}}" class="btn btn-primary my-3">
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

<form action="{{route('posts.update', $post->id)}}" method="post">
    @csrf
@method('PUT')
    <div class="row">
        
            <div class="card-title">
                <h4>⏵ข้อมูลทุน</h4>
            </div>
            <div class="border-top my-1"></div>
           <div class="col-md-6">
            <div class="form-group">
                <strong>ชื่อทุน</strong>
                {{-- <input type="text" name="resource_funds" class="form-control" value="{{$post->resource_funds}}" readonly="readonly"> --}}
                <select class="form-select" name="resource_funds">

                    <option>Select...</option>
                  
                    @foreach ($items as $item)
                      <option value="{{ $item->resource_funds }}" {{ ( $item->resource_funds == $post->resource_funds) ? 'selected' : '' }}> {{ $item->resource_funds }} </option>
                    @endforeach    </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>แหล่งทุน</strong>
                {{-- <input type="text" name="funds_category" class="form-control" value="{{$post->funds_category}}" readonly="readonly"> --}}
                <select class="form-select" name="funds_category">

                    <option>Select...</option>
                  
                    @foreach ($items as $item)
                      <option value="{{ $item->funds_category }}" {{ ( $item->funds_category == $post->funds_category) ? 'selected' : '' }}> {{ $item->funds_category }} </option>
                    @endforeach    </select>
            </div>
        </div>
        <div class="border-top my-4"></div>
        <div class="card-title">
            <h4>⏵ข้อมูลโครงการ</h4>
        </div>
        <div class="border-top my-1"></div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>รหัสอ้างอิง</strong>
                <input type="text" name="ref_id" value="{{$post->ref_id}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>รหัสโครงการ</strong>
                <input type="text" name="project_id" value="{{$post->project_id}}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ประเภทโครงการ</strong>
                <input type="text" name="project_category" value="{{$post->project_category}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>ลักษณะโครงการ</strong>
                <input type="text" name="project_description" value="{{$post->project_description}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>คณะ/หน่วยงาน ที่เสนอโครงการ</strong>
                <input type="text" name="project_faculty" value="{{$post->project_faculty}}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ชื่อโครงการ(ภาษาไทย)</strong>
                <input type="text" name="project_name_th" value="{{$post->project_name_th}}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ชื่อโครงการ(ภาษาอังกฤษ)</strong>
                <input type="text" name="project_name_en" value="{{$post->project_name_en}}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>คำสำคัญ</strong>
                <input type="text" name="project_keyword" value="{{$post->project_keyword}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Email (สำหรับติดต่อหัวหน้าโครงการ)</strong>
                <input type="text" name="project_email_leader" value="{{$post->project_email_leader}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>สถานะปัจจุบัน</strong>
                <input type="text" name="project_status_leader" value="{{$post->project_status_leader}}" class="form-control">
            </div>
        </div>
        <div class="border-top my-4"></div>
        <div class="col-md-12">
            <div class="form-group">
                <h4>⏵ระยะเวลาการวิจัย</h4>
                <div class="border-top my-1"></div>
 </div>
        </div>
<div class="col-md-6">
    <div class="form-group">
         <strong>วันที่เริ่มต้น</strong>
                <input type="date" name="project_start_at" value="{{$post->project_start_at}}" class="form-control">
    </div>
</div>
               
           
        <div class="col-md-6">
            <div class="form-group">
                
                <strong>วันที่สิ้นสุด</strong>
                <input type="date" name="project_end_at" value="{{$post->project_end_at}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
         <div class="border-top my-4"></div>
        <div class="col-md-6">
            <div class="form-group">
                <h4>⏵Journals name</h4>
                <div class="border-top my-4"></div> <div class="form-group">
             <strong>Database</strong>
             {{-- <input type="text" name="resource_funds" class="form-control" value="{{$post->resource_funds}}" readonly="readonly"> --}}
             <select class="form-select" name="journal_title">

                 <option>Select...</option>
               
                 @foreach ($items2 as $item2)
                   <option value="{{ $item2->title }}" {{ ( $item2->title == $post->journal_title) ? 'selected' : '' }}> {{ $item2->title }} </option>
                 @endforeach    </select>
         </div>
     </div>
     <div class="border-top my-4"></div>
        <div class="col-md-6">
            <div class="form-group">
                <h4>⏵Status</h4>
                <div class="border-top my-4"></div> <div class="form-group">
             <strong>Project status</strong>
             {{-- <input type="text" name="resource_funds" class="form-control" value="{{$post->resource_funds}}" readonly="readonly"> --}}
             <select class="form-select" name="project_status" id="project_status">

                 {{-- <option>Select...</option> --}}
               
                 {{-- @foreach ($posts as $project_status) --}}
                    {{-- @if (old('project_status')==$post->id) --}}
                        <option value="Incomplete" {{old('project_status') == $post->project_status ? 'selected="selected"' : '' }} >Incomplete</option>
                    {{-- @else --}}
                        <option value="Complete" {{ old('project_status') == $post->project_status ? 'selected="selected"' : '' }} >Complete</option>
                    {{-- @endif --}}
                {{-- @endforeach --}}
                </select>
         </div>
     </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success my-3">Update</button>
        </div>
    </div>
    </form>
@endsection