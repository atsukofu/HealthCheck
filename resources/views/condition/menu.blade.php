@extends('layout')

@section('content')
<h2 style="margin-bottom: 50px;">データを確認する</h2>
<div style="width: 100%;display:flex;">
  <div style="width:80px"></div>
  <div>
    <a href={{ route('condition.list') }}><img src={{asset('image/daily_data_btn.png')}}></a>
  </div>
  <div style="width: 80px;"></div>
  <div>
    <a href={{ route('staff.list') }}><img src={{asset('image/staff_data_btn.png')}}></a>
  </div>
  <div style="width: 200px;"></div>
</div>
@endsection

<script src="{{ asset('js/app.js') }}" defer></script>