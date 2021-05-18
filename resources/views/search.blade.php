@extends('posts.layout')
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>

@if($data->isNotEmpty())
@foreach($data as $key=>$value)
        <div class="post-list">
            {{-- <p>{{ $value->ref_id }}</p> --}}
            <table class="table table-bordered">
                <tr>
                    <th>รหัสอ้างอิง</th>
                    <th>ชื่อโครงการ</th>
                    <th>ทุนวิจัย</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($data as $key => $value)
                <tr>
                    <td>{{$value->ref_id}}</td>
                    <td>{{$value->project_name_th}}</td>
                    <td>{{Str::limit($value->resource_funds,100)}}</td>
                    <td>
                        {{-- <form action="{{route('posts.destroy',$value->id)}}" method="post"> --}}
                        <a href="{{route('posts.show', $value->id)}}" class="btn btn-primary">Show</a>
                        {{-- <a href="{{route('posts.edit', $value->id)}}" class="btn btn-secondary">Edit</a> --}}
                        @csrf
                        {{-- @method('DELETE') --}}
                        {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</button> --}}
            
                        </form>
                    </td>
                </tr>
            
                @endforeach
            </table>
        </div>
    @endforeach
@else 
    <div>
        <h2>No project found</h2>
    </div>
@endif