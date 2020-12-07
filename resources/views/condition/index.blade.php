@extends('layout')

@section('content')
<h2 style="margin-bottom: 50px";>日別データ一覧</h2>
<p>月で検索する</p>
  <form action="/condition/month" method="post">
    @csrf
    <select name="year">
      @for($i = 2020; $i <= 2024; $i++)
        <option value="{{$i}}">{{$i}}</option>
      @endfor
    </select>年
    <select name="month">
      @for($i = 1; $i <= 12; $i++)
        <option value="{{$i}}">{{$i}}</option>
      @endfor
    </select>月
    <input type="submit" value="検索">
  </form>
<table class="table table-striped table-hover">
  <tr><th>日付</th></tr>
  @foreach ($remove_times as $key=>$val)
  <tr><td><a href={{route('condition.show', ['date' => $val])}} style="color:#212529";>{{$key}}</a></td></tr>
  @endforeach
</table>
@endsection

<script src="{{ asset('js/app.js') }}" defer></script>