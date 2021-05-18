@extends('posts.layout')
<?php
$items = DB::table('funds')->get();
$items2 = DB::table('journals')->get();
// echo $items;
$selectID=0;
?>
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Add new project</h2>
            <a href="{{route('posts.index')}}" class="btn btn-primary my-3">Back</a>
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
    <form action="{{route('posts.store')}}" method="post">
    @csrf

    <div class="row">
        <div class="card-title">
            <h4>⏵ข้อมูลทุน</h4>
            <div class="border-top my-1"></div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>ชื่อทุน</strong>
                <select class="form-select" name="resource_funds">

                    <option>Select...</option>
                  
                    @foreach ($items as $item)
                      <option value="{{ $item->resource_funds }}" {{ ( $item->id == $selectID) ? 'selected' : '' }}> {{ $item->resource_funds }} </option>
                    @endforeach    </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>แหล่งทุน</strong>
                <select class="form-select" name="funds_category">

                    <option>Select...</option>
                  
                    @foreach ($items as $item)
                      <option value="{{ $item->funds_category }}" {{ ( $item->id == $selectID) ? 'selected' : '' }}> {{ $item->funds_category }} </option>
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
                <input type="text" name="ref_id" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>รหัสโครงการ</strong>
                <input type="text" name="project_id" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ประเภทโครงการ</strong>
                <input type="text" name="project_category" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>ลักษณะโครงการ</strong>
                <input type="text" name="project_description" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>คณะ/หน่วยงาน ที่เสนอโครงการ</strong>
                <input type="text" name="project_faculty" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ชื่อโครงการ(ภาษาไทย)</strong>
                <input type="text" name="project_name_th" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ชื่อโครงการ(ภาษาอังกฤษ)</strong>
                <input type="text" name="project_name_en" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>คำสำคัญ</strong>
                <input type="text" name="project_keyword" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Email (สำหรับติดต่อหัวหน้าโครงการ)</strong>
                <input type="text" name="project_email_leader" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>สถานะปัจจุบัน</strong>
                {{-- <input type="text" name="project_status_leader" class="form-control"> --}}
                <select class="form-select" name="project_status_leader">

                    <option>Select...</option>
                  
                    
                      <option value="leader">หัวหน้าโครงการ</option>
                      <option value="co-research">ผู้เข้าร่วมวิจัย</option>
                        </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>ชื่อนักศึกษาที่เข้าร่วมงานวิจัย</strong>
                <input type="text" name="student_name" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>สถานะปัจจุบัน</strong>
                {{-- <input type="text" name="project_status_leader" class="form-control"> --}}
                <select class="form-select" name="student_degree">

                    <option>Select...</option>
                  
                    
                      <option value="master_degree">ระดับปริญญาโท</option>
                      <option value="ph_degree">ระดับปริญญาเอก</option>
                        </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>เงินทุน</strong>
                <input type="text" name="fund_money" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Database/Website</strong>
                {{-- <input type="text" name="project_status_leader" class="form-control"> --}}
                <select class="form-select" name="db_website">

                    <option>Select...</option>
                  
                    
                      <option value="yes">มี</option>
                      <option value="maintainance">ปรับปรุง</option>
                      <option value="both">มี/ปรับปรุง</option>
                        </select>
            </div>
        </div>
        <div class="border-top my-4"></div>
        <div class="col-md-12">
            <div class="form-group">

                <h4>⏵การใช้ประโยชน์จากผลงานวิจัย</h4>
            <div class="border-top my-1"></div>  
            <div class="col-md-6">
                <div class="form-group">
                    {{-- <input type="text" name="project_status_leader" class="form-control"> --}}
                    <select class="form-select" name="project_benefit">
    
                        <option>Select...</option>
                      
                        
                          <option value="product">ผลิตภัณฑ์/นวัตกรรม</option>
                          <option value="patent">จดสิทธิบัตร</option>
                          <option value="petty_patent">จดอนุสิทธิบัตร</option>
                          <option value="other_benefit">การนำไปใช้ประโยชน์อย่างอื่น</option>

                            </select>
                </div>
            </div>  
            <div class="col-md-6">
                <div class="form-group">
                    <strong>รายละเอียด</strong>
                    <input type="text" name="project_benefit_description" class="form-control">
                </div>
            </div>
            <div class="border-top my-4"></div>
            <div class="col-md-12">
                <div class="form-group">
    
                    <h4>⏵อื่นๆ</h4>
                <div class="border-top my-1"></div>  
                <div class="col-md-6">
                    <div class="form-group">
                        {{-- <input type="text" name="project_status_leader" class="form-control"> --}}
                        <select class="form-select" name="others_reward">
        
                            <option>Select...</option>
                          
                            
                              <option value="prize">รางวัลที่ได้รับ</option>
                              <option value="coop">ความร่วมมือกับหน่วยงานอื่น</option>
                              <option value="others">อื่นๆ</option>
    
                                </select>
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>รายละเอียด</strong>
                        <input type="text" name="others_reward_description" class="form-control">
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
                <input type="date" name="project_start_at" class="form-control">
            </div>
        </div>
                
          
        <div class="col-md-6">
            <div class="form-group">
                
                <strong>วันที่สิ้นสุด</strong>
                <input type="date" name="project_end_at" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>ระยะเวลาโครงการ</strong>
                <input type="text" name="project_duration" class="form-control"***>
            </div>
        </div>
        <div class="border-top my-4"></div>
        <div class="col-md-6">
            <div class="form-group">
                <h4>⏵Journals name</h4>
                <div class="border-top my-4"></div>
                <strong>Database</strong>
                <select class="form-select" name="journal_title">

                    <option>Select...</option>
                  
                    @foreach ($items2 as $item2)
                      <option value="{{ $item2->title }}" {{ ( $item2->id == $selectID) ? 'selected' : '' }}> {{ $item2->title }} </option>
                    @endforeach    </select>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Quartile</strong>
                    <input type="text" name="project_quartile" class="form-control">
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Impact factor</strong>
                        <input type="text" name="project_impact_factor" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Position</strong>
                            {{-- <input type="text" name="project_status_leader" class="form-control"> --}}
                            <select class="form-select" name="journal_position">
            
                                <option>Select...</option>
                              
                                
                                  <option value="first_or_cor">First author/Corresponding authors</option>
                                  <option value="participant">Participant</option>
        
                                    </select>
                        </div>
                    
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success my-3">Submit</button>
        </div>
    </div>
    </form>
@endsection