@extends('layout')

@section('content')
  <h2>スタッフID：{{ $staff->id }} {{ $staff->name }}さんの健康状態</h2>
  <p></p>
  <table class="table table-striped table-hover">
    <tr>
      <th>体温</th><th>日付</th><th>爪の長さ</th>
    </tr>
    @foreach ($items as $item)
    <tr>
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
  </table>
@endsection