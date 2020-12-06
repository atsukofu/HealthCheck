@extends('layout')

@section('content')
<h2 style="margin-bottom: 50px;">月別検索結果</h2>
<div style="width: 100%;display:flex;">
  <div style="width:80px"></div>
  <div>
    @if(isset($month_datas) && count($month_datas) > 0)
      @foreach ($month_datas as $data)
        {{ $data->created_at}}
      @endforeach
    @else
      <p>該当する月のデータは登録されていません</p>
    @endif
  </div>
</div>
@endsection

<script src="{{ asset('js/app.js') }}" defer></script>