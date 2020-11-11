@extends('layout')

@section('content')
{{ Form::open(['route' => 'condition.store']) }}
  <div class="form-group">
    {{ Form::label('user_id', '社員名:') }}
    {{ Form::select('user_id', $staff) }}
  </div>
  <div class="form-group">
    {{ Form::label('body_temperture', '体温:') }}
    {{ Form::text('body_temperture', null) }}℃
  </div>
  <div class="form-group">
    {{ Form::label('nail', '爪の長さ:') }}
    <lavel>OK{{ Form::radio('nail', 1) }}&emsp;</lavel>
    <lavel>NG{{ Form::radio('nail', 2) }}</lavel>
  </div>
  <div class="form-group">
    {{ Form::label('belly', 'お腹の調子:') }}
    <lavel>OK{{ Form::radio('belly', 1) }}&emsp;</lavel>
    <lavel>NG{{ Form::radio('belly', 2) }}</lavel>
  </div>
  <div class="form-group">
    {{ Form::label('rough_hands', '手指の傷:') }}
    <lavel>OK{{ Form::radio('rough_hands', 1) }}&emsp;</lavel>
    <lavel>NG{{ Form::radio('rough_hands', 2) }}</lavel>
  </div>
  <div class="form-group">
    {{ Form::label('other', 'その他健康状態:') }}
    <lavel>OK{{ Form::radio('other', 1) }}&emsp;</lavel>
    <lavel>NG{{ Form::radio('other', 2) }}</lavel>
  </div>
  {{ Form::submit('登録する')}}
{{ Form::close() }}