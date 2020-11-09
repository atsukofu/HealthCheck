@extends('layout')

@section('content')
<h2>{{ $date }}のデータ一覧</h2>
<table class="table table-striped table-hover">
    <tr>
      <th>社員ID</th><th>体温</th><th>日付</th><th>爪の長さ</th>
    </tr>
    @foreach ($days as $item)
    <tr>
      <td>{{ $item->user_id }}</td>
      @if($item->body_temperture < 37.5)
      <td>{{ $item->body_temperture }}</td>
      @else
      <td style="color: red;">{{ $item->body_temperture }}</td>
      @endif
      <td>{{ $item->created_at }}</td>
      @if($item->nail == 1)
      <td>◯</td>
      @else
      <td style="color: red;">X</td>
      @endif
    </tr>
    @endforeach