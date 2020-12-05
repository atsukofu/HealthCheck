@extends('layout')

@section('content')
<h2 style="margin-bottom: 50px;">月別検索結果</h2>
<div style="width: 100%;display:flex;">
  <div style="width:80px"></div>
  <div>
    @foreach ($month_datas as data)
      {{ data->created_at}}
    @endforeach
  </div>
</div>
@endsection

<script src="{{ asset('js/app.js') }}" defer></script>