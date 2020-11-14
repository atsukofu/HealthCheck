@extends('layout')

@section('content')
<h2 style="margin-bottom: 50px";>日別データ一覧</h2>
<table class="table table-striped table-hover">
  <tr><th>日付</th></tr>
  @foreach ($remove_times as $date)
  <tr><td><a href={{route('condition.show', ['date' => $date])}} style="color:#212529";>{{$date}}</a></td></tr>
  @endforeach
</table>