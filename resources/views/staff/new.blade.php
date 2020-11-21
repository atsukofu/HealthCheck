@extends('layout')

@section('content')
@if (session('flash_message'))
  <div class="flash_message alert-primary text-center py-3 my-0" id="flashMessage">
      {{ session('flash_message') }}
  </div>
@endif

<h2>新しい社員を登録する</h2>
<table class="table table-striped table-hover">
{{ Form::open(['route' => 'staff.store', 'name' => 'form']) }}
  <tr>
    <div class="form-group">
      <th>{{ Form::label('user_name', '社員名:') }}</th>
      <td>{{ Form::text('user_name', null)}}</td>
    </div>
  </tr>
  <tr><th></th><td>{{ Form::submit('登録する') }}</td></tr>
{{ Form::close() }}
</table>
@endsection
