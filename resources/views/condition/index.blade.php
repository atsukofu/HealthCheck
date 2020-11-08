@extends('layout')

@section('content')
<h2>日別データ一覧</h2>

<table>
  <tr><th>日付</th></tr>
 
  @foreach ($remove_times as $date)
  <tr><td>{{$date}}</td></tr>
  @endforeach
</table>