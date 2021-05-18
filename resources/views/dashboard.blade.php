@extends('font')

<?php
$displaydata = DB::table('posts')->get();
$selectID=0;
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12"> --}}
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}
                {{-- <x-jet-welcome /> --}}
               
            {{-- </div> --}}
        {{-- </div> --}}
        
    {{-- </div> --}}
</x-app-layout>
<table class="table table-bordered border-primary" style="text-align: left;">
    <thead>
      <tr>
        <th rowspan="2"></th>
        <th colspan="4" rowspan="2" style="text-align: center;">ตัวชี้วัด</th>
        <th colspan="4" style="text-align: center;">baseline</th>
        <th colspan="2" style="text-align: center;">ปีที่ 1</th>
        <th colspan="2" style="text-align: center;">ปีที่ 2</th>
        <th colspan="2" style="text-align: center;">ปีที่ 3</th>
        <th colspan="2" style="text-align: center;">รวม</th>
      </tr>
      <tr>
        <td style="text-align: center;">ปี<br>61</td>
        <td style="text-align: center;">ปี<br>62</td>
        <td style="text-align: center;">ปี<br>63</td>
        <td style="text-align: center;background-color:#D3D3D3;">เฉลี่ย</td>
        <td style="text-align: center;">เป้า</td>
        <td style="text-align: center;">ผล</td>
        <td style="text-align: center;">เป้า</td>
        <td style="text-align: center;">ผล</td>
        <td style="text-align: center;">เป้า</td>
        <td style="text-align: center;">ผล</td>
        <td style="text-align: center;">เป้า</td>
        <td style="text-align: center;">ผล</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td colspan="4">จำนวนบัณฑิตศึกษาที่ได้รับการสนับสนุน (รับใหม่)</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">1.1 ระดับปริญญาโท</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;">2</td>
        <td style="text-align: center;"><?php $countmd1=DB::table('posts')->where('student_degree','=','master_degree')->where('project_start_at','LIKE','%'.'2021'.'%')->count('student_degree'); echo $countmd1;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countmd2=DB::table('posts')->where('student_degree','=','master_degree')->where('project_start_at','LIKE','%'.'2022'.'%')->count('student_degree'); echo $countmd2;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countmd3=DB::table('posts')->where('student_degree','=','master_degree')->where('project_start_at','LIKE','%'.'2023'.'%')->count('student_degree'); echo $countmd3;?></td>
        <td></td>
        <td style="text-align: center;"><?php $sumcountmd = $countmd1+$countmd2+$countmd3; echo $sumcountmd; ?></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">1.2 ระดับปริญญาเอก</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;">1</td>
        <td style="text-align: center;"><?php $countphd1=DB::table('posts')->where('student_degree','=','ph_degree')->where('project_start_at','LIKE','%'.'2021'.'%')->count('student_degree'); echo $countphd1;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countphd2=DB::table('posts')->where('student_degree','=','ph_degree')->where('project_start_at','LIKE','%'.'2022'.'%')->count('student_degree'); echo $countphd2;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countphd3=DB::table('posts')->where('student_degree','=','ph_degree')->where('project_start_at','LIKE','%'.'2023'.'%')->count('student_degree'); echo $countphd3;?></td>
        <td></td>
        <td style="text-align: center;"><?php $sumcountphd = $countphd1+$countphd2+$countphd3; echo $sumcountphd; ?></td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td colspan="4">จำนวนผลงานตีพิมพ์ในวารสารวิชาการจากอาจารย์ (ผลงาน)</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">2.1 ระดับนานาชาติในฐาน ISI</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">&nbsp;&nbsp;- เป็น First author / Corresponding authors</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;">2</td>
        <td style="text-align: center;"><?php $countisi1=DB::table('posts')->where('journal_title','=','ISI')->where('journal_position','=','first_or_cor')->where('project_start_at','LIKE','%'.'2021'.'%')->count('journal_title'); echo $countisi1;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countisi2=DB::table('posts')->where('journal_title','=','ISI')->where('journal_position','=','first_or_cor')->where('project_start_at','LIKE','%'.'2022'.'%')->count('journal_title'); echo $countisi2;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countisi3=DB::table('posts')->where('journal_title','=','ISI')->where('journal_position','=','first_or_cor')->where('project_start_at','LIKE','%'.'2023'.'%')->count('journal_title'); echo $countisi3;?></td>
        <td></td>
        <td style="text-align: center;"><?php $sumcountisi = $countisi1+$countisi2+$countisi3; echo $sumcountisi; ?></td>
        <td></td>
       
      </tr>
      <tr>
        <td></td>
        <td colspan="4">&nbsp;&nbsp;- เป็นผู้ร่วม</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;">1</td>
        <td style="text-align: center;"><?php $countisi1p=DB::table('posts')->where('journal_title','=','ISI')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2021'.'%')->count('journal_title'); echo $countisi1p;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countisi2p=DB::table('posts')->where('journal_title','=','ISI')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2022'.'%')->count('journal_title'); echo $countisi2p;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countisi3p=DB::table('posts')->where('journal_title','=','ISI')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2023'.'%')->count('journal_title'); echo $countisi3p;?></td>
        <td></td>
        <td style="text-align: center;"><?php $sumcountisip = $countisi1p+$countisi2p+$countisi3p; echo $sumcountisip; ?></td>
        <td></td>
        
      </tr>
      <tr>
        <td></td>
        <td colspan="4">2.2 ระดับนานาชาติในฐาน Scopus (นับที่ไม่ซ้ำกับ ISI)</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">&nbsp;&nbsp;- เป็น First author / Corresponding authors</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;">1</td>
        <td style="text-align: center;"><?php $countscopus1=DB::table('posts')->where('journal_title','=','Scopus')->where('journal_position','=','first_or_cor')->where('project_start_at','LIKE','%'.'2021'.'%')->count('journal_title'); echo $countscopus1;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countscopus2=DB::table('posts')->where('journal_title','=','Scopus')->where('journal_position','=','first_or_cor')->where('project_start_at','LIKE','%'.'2022'.'%')->count('journal_title'); echo $countscopus2;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countscopus3=DB::table('posts')->where('journal_title','=','Scopus')->where('journal_position','=','first_or_cor')->where('project_start_at','LIKE','%'.'2023'.'%')->count('journal_title'); echo $countscopus3;?></td>
        <td></td>
        <td style="text-align: center;"><?php $sumcountscopus = $countscopus1+$countscopus2+$countscopus3; echo $sumcountscopus; ?></td>
        <td></td>
        
        {{-- <td></td>
        <td></td> --}}
      </tr>
      <tr>
        <td></td>
        <td colspan="4">&nbsp;&nbsp;- เป็นผู้ร่วม</td>
        <td></td>        
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;">2</td>
        <td style="text-align: center;"><?php $countscopus1p=DB::table('posts')->where('journal_title','=','Scopus')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2021'.'%')->count('journal_title'); echo $countscopus1p;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countscopus2p=DB::table('posts')->where('journal_title','=','Scopus')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2022'.'%')->count('journal_title'); echo $countscopus2p;?></td>
        <td></td>
        <td style="text-align: center;"><?php $countscopus3p=DB::table('posts')->where('journal_title','=','Scopus')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2023'.'%')->count('journal_title'); echo $countscopus3p;?></td>
        <td></td>
        <td style="text-align: center;"><?php $sumcountscopus_p = $countscopus1p+$countscopus2p+$countscopus3p; echo $sumcountscopus_p; ?></td>
        <td></td>
        {{-- <td></td>
        <td></td> --}}
      </tr>
      <tr>
        <td></td>
        <td colspan="4">2.3 ระดับนานาชาติตามหลักเกณฑ์ ก.พ.อ.</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">2.4 ระดับชาติที่ผ่านการประเมินจาก TCI</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td>3</td>
        <td colspan="4">จำนวนโครงการวิจัยที่เสนอขอรับทุน<br>(นับเฉพาะที่เป็นหัวหน้าโครงการและไม่นับคาบเกี่ยวปีงบประมาณ)</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">3.1 ทุนเงินรายได้/งบประมาณแผ่นดิน</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;">3</td>
        <td style="text-align: center;"><?php $countfund11=DB::table('posts')->where('resource_funds','=','ทุนเงินรายได้/งบประมาณแผ่นดิน')->where('project_start_at','LIKE','%'.'2021'.'%')->count('resource_funds'); echo $countfund11;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfund12=DB::table('posts')->where('resource_funds','=','ทุนเงินรายได้/งบประมาณแผ่นดิน')->where('project_start_at','LIKE','%'.'2022'.'%')->count('resource_funds'); echo $countfund12;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfund13=DB::table('posts')->where('resource_funds','=','ทุนเงินรายได้/งบประมาณแผ่นดิน')->where('project_start_at','LIKE','%'.'2023'.'%')->count('resource_funds'); echo $countfund13;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountfund1 = $countfund11+$countfund12+$countfund13; echo $sumcountfund1; ?></td>
        <td style="text-align: center;"></td>
        
      </tr>
      <tr>
        <td></td>
        <td colspan="4">3.2 ทุนวิจัยจากแหล่งทุนภายนอก</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;">0.33</td>
        <td style="text-align: center;"><?php $countfund21=DB::table('posts')->where('resource_funds','=','ทุนวิจัยจากแหล่งทุนภายนอก')->where('project_start_at','LIKE','%'.'2021'.'%')->count('resource_funds'); echo $countfund21;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfund22=DB::table('posts')->where('resource_funds','=','ทุนวิจัยจากแหล่งทุนภายนอก')->where('project_start_at','LIKE','%'.'2022'.'%')->count('resource_funds'); echo $countfund22;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfund23=DB::table('posts')->where('resource_funds','=','ทุนวิจัยจากแหล่งทุนภายนอก')->where('project_start_at','LIKE','%'.'2023'.'%')->count('resource_funds'); echo $countfund23;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountfund2 = $countfund21+$countfund22+$countfund23; echo $sumcountfund2; ?></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">3.3 ทุนวิจัยที่ได้รับ (เป็นผู้ร่วมโครงการวิจัย)</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;">2.67</td>
        <td style="text-align: center;"><?php $countfund31=DB::table('posts')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2021'.'%')->count('journal_title'); echo $countfund31;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfund32=DB::table('posts')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2022'.'%')->count('journal_title'); echo $countfund32;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfund33=DB::table('posts')->where('journal_position','=','participant')->where('project_start_at','LIKE','%'.'2023'.'%')->count('journal_title'); echo $countfund33;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountfund3 = $countfund31+$countfund32+$countfund33; echo $sumcountfund3; ?></td>
        <td style="text-align: center;"></td>
        
      </tr>
      <tr>
        <td>4</td>
        <td colspan="4">เงินทุนวิจัยจากภายนอกที่ได้รับการสนับสนุน(ล้านบาท)</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">&nbsp;&nbsp;- เป็นหัวหน้าโครงการ</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;">0.2</td>
        <td style="text-align: center;"><?php $countfundmoney_leader1=DB::table('posts')->where('project_status_leader','=','leader')->where('project_start_at','LIKE','%'.'2021'.'%')->sum('fund_money'); echo $countfundmoney_leader1;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfundmoney_leader2=DB::table('posts')->where('project_status_leader','=','leader')->where('project_start_at','LIKE','%'.'2022'.'%')->sum('fund_money'); echo $countfundmoney_leader2;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfundmoney_leader3=DB::table('posts')->where('project_status_leader','=','leader')->where('project_start_at','LIKE','%'.'2023'.'%')->sum('fund_money'); echo $countfundmoney_leader3;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountfundmoney_leader = $countfundmoney_leader1+$countfundmoney_leader2+$countfundmoney_leader3; echo $sumcountfundmoney_leader; ?></td>
        <td style="text-align: center;"></td>

      </tr>
      <tr>
        <td></td>
        <td colspan="4">&nbsp;&nbsp;- เป็นผู้ร่วมวิจัย</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;">0.64</td>
        <td style="text-align: center;"><?php $countfundmoney_part1=DB::table('posts')->where('project_status_leader','=','co-research')->where('project_start_at','LIKE','%'.'2021'.'%')->sum('fund_money'); echo $countfundmoney_part1;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfundmoney_part2=DB::table('posts')->where('project_status_leader','=','co-research')->where('project_start_at','LIKE','%'.'2022'.'%')->sum('fund_money'); echo $countfundmoney_part2;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countfundmoney_part3=DB::table('posts')->where('project_status_leader','=','co-research')->where('project_start_at','LIKE','%'.'2023'.'%')->sum('fund_money'); echo $countfundmoney_part3;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountfundmoney_part = $countfundmoney_part1+$countfundmoney_part2+$countfundmoney_part3; echo $sumcountfundmoney_part; ?></td>
        <td style="text-align: center;"></td>
        
      </tr>
      <tr>
        <td>5</td>
        <td colspan="4">จำนวนนักวิจัยใหม่ที่เข้าร่วมโครงการ</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td>6</td>
        <td colspan="4">ฐานข้อมูล / website ของเครือข่ายภาษาอังกฤษ (มี/ปรับปรุง)</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;">มี</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;">ปรับปรุง</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;">ปรับปรุง</td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;">มี/ปรับปรุง</td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td>7</td>
        <td colspan="4">การใช้ประโยชน์จากผลงานวิจัย</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">7.1 จำนวนผลิตภัณฑ์/นวัตกรรม (ชิ้น)</td>
        <td style="text-align: center;"></td>   
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"><?php $countproj_benefit11=DB::table('posts')->where('project_benefit','=','product')->where('project_start_at','LIKE','%'.'2021'.'%')->count('project_benefit'); echo $countproj_benefit11;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit12=DB::table('posts')->where('project_benefit','=','product')->where('project_start_at','LIKE','%'.'2022'.'%')->count('project_benefit'); echo $countproj_benefit12;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit13=DB::table('posts')->where('project_benefit','=','product')->where('project_start_at','LIKE','%'.'2023'.'%')->count('project_benefit'); echo $countproj_benefit13;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountproj_benefit1 = $countproj_benefit11+$countproj_benefit12+$countproj_benefit13; echo $sumcountproj_benefit1; ?></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">7.2 การยื่นขอจดสิทธิบัตร (เรื่อง)</td>
        <td style="text-align: center;"></td>   
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"><?php $countproj_benefit21=DB::table('posts')->where('project_benefit','=','patent')->where('project_start_at','LIKE','%'.'2021'.'%')->count('project_benefit'); echo $countproj_benefit21;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit22=DB::table('posts')->where('project_benefit','=','patent')->where('project_start_at','LIKE','%'.'2022'.'%')->count('project_benefit'); echo $countproj_benefit22;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit23=DB::table('posts')->where('project_benefit','=','patent')->where('project_start_at','LIKE','%'.'2023'.'%')->count('project_benefit'); echo $countproj_benefit23;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountproj_benefit2 = $countproj_benefit21+$countproj_benefit22+$countproj_benefit23; echo $sumcountproj_benefit2; ?></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">7.3 การยื่นขอจดอนุสิทธิบัตร (เรื่อง)</td>
        <td style="text-align: center;"></td>   
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;">0.33</td>
        <td style="text-align: center;"><?php $countproj_benefit31=DB::table('posts')->where('project_benefit','=','petty_patent')->where('project_start_at','LIKE','%'.'2021'.'%')->count('project_benefit'); echo $countproj_benefit31;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit32=DB::table('posts')->where('project_benefit','=','petty_patent')->where('project_start_at','LIKE','%'.'2022'.'%')->count('project_benefit'); echo $countproj_benefit32;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit33=DB::table('posts')->where('project_benefit','=','petty_patent')->where('project_start_at','LIKE','%'.'2023'.'%')->count('project_benefit'); echo $countproj_benefit33;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountproj_benefit3 = $countproj_benefit31+$countproj_benefit32+$countproj_benefit33; echo $sumcountproj_benefit3; ?></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">7.4 การนำไปใช้ประโยชน์อย่างอื่น (เรื่อง)<br>(โปรดระบุรายละเอียด)</td>
        <td style="text-align: center;"></td>   
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"><?php $countproj_benefit41=DB::table('posts')->where('project_benefit','=','other_benefit')->where('project_start_at','LIKE','%'.'2021'.'%')->count('project_benefit'); echo $countproj_benefit41;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit42=DB::table('posts')->where('project_benefit','=','other_benefit')->where('project_start_at','LIKE','%'.'2022'.'%')->count('project_benefit'); echo $countproj_benefit42;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countproj_benefit43=DB::table('posts')->where('project_benefit','=','other_benefit')->where('project_start_at','LIKE','%'.'2023'.'%')->count('project_benefit'); echo $countproj_benefit43;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountproj_benefit4 = $countproj_benefit41+$countproj_benefit42+$countproj_benefit43; echo $sumcountproj_benefit4; ?></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td>8</td>
        <td colspan="4">อื่นๆ</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">8.1 รางวัลที่ได้รับ</td>
        <td style="text-align: center;"></td>   
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"><?php $countothers_reward11=DB::table('posts')->where('others_reward','=','prize')->where('project_start_at','LIKE','%'.'2021'.'%')->count('others_reward'); echo $countothers_reward11;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countothers_reward12=DB::table('posts')->where('others_reward','=','prize')->where('project_start_at','LIKE','%'.'2022'.'%')->count('others_reward'); echo $countothers_reward12;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countothers_reward13=DB::table('posts')->where('others_reward','=','prize')->where('project_start_at','LIKE','%'.'2023'.'%')->count('others_reward'); echo $countothers_reward13;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountothers_reward1 = $countothers_reward11+$countothers_reward12+$countothers_reward13; echo $sumcountothers_reward1; ?></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">8.2 ความร่วมมือกับหน่วยงานอื่น (คน/ครั้ง)</td>
        <td style="text-align: center;"></td>   
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"><?php $countothers_reward21=DB::table('posts')->where('others_reward','=','coop')->where('project_start_at','LIKE','%'.'2021'.'%')->count('others_reward'); echo $countothers_reward21;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countothers_reward22=DB::table('posts')->where('others_reward','=','coop')->where('project_start_at','LIKE','%'.'2022'.'%')->count('others_reward'); echo $countothers_reward22;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countothers_reward23=DB::table('posts')->where('others_reward','=','coop')->where('project_start_at','LIKE','%'.'2023'.'%')->count('others_reward'); echo $countothers_reward23;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountothers_reward2 = $countothers_reward21+$countothers_reward22+$countothers_reward23; echo $sumcountothers_reward2; ?></td>
        <td style="text-align: center;"></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="4">อื่นๆ</td>
        <td style="text-align: center;"></td>   
        <td style="text-align: center;"></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;background-color:#D3D3D3;"></td>
        <td style="text-align: center;"><?php $countothers_reward31=DB::table('posts')->where('others_reward','=','others')->where('project_start_at','LIKE','%'.'2021'.'%')->count('others_reward'); echo $countothers_reward31;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countothers_reward32=DB::table('posts')->where('others_reward','=','others')->where('project_start_at','LIKE','%'.'2022'.'%')->count('others_reward'); echo $countothers_reward32;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $countothers_reward33=DB::table('posts')->where('others_reward','=','others')->where('project_start_at','LIKE','%'.'2023'.'%')->count('others_reward'); echo $countothers_reward33;?></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><?php $sumcountothers_reward3 = $countothers_reward31+$countothers_reward32+$countothers_reward33; echo $sumcountothers_reward3; ?></td>
        <td style="text-align: center;"></td>
      </tr>
    </tbody>
    </table>