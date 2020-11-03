@extends('layout')

@section('content')
  <table class="table table-striped table-hover">
    <tr>
      <th>スタッフID</th><th>スタッフ名</th>
    </tr>
    @foreach($staffs as $staff)
      <tr data-href="staff.show">
          <td>{{ $staff->id }}</a></td>
          <td><a href={{ route('staff.show', ['id' => $staff->id]) }} style="color:#212529;">{{ $staff->name }}</a></td>
      </tr>
    @endforeach
  </table>
  
 
   
@endsection