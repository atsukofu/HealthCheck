@extends('layout')

@section('content')
  <h2>スタッフID：{{ $staff->id }}&emsp;{{ $staff->name }}さんの健康状態</h2>
  <p></p>
  <table class="table table-striped table-hover">
    <tr>
      <th>日付</th><th>体温</th><th>爪の長さ</th><th>お腹の調子</th><th>手指の傷</th><th>その他体調不良</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>{{ $item->created_at }}</td>

      @if($item->body_temperture < 37.5)
      <td>{{ $item->body_temperture }}</td>
      @else
      <td style="color: red;">{{ $item->body_temperture }}</td>
      @endif

      @if($item->nail == 1)
      <td>◯</td>
      @else
      <td style="color: red;">X</td>
      @endif

      @if($item->belly == 1)
        <td>◯</td>
      @else
        <td style="color: red;">X</td>
      @endif

      @if($item->rough_hands == 1)
        <td>◯</td>
      @else
        <td style="color: red;">X</td>
      @endif

      @if($item->other == 1)
        <td>◯</td>
      @else
        <td style="color: red;">X</td>
      @endif

    </tr>
    @endforeach
  </table>


<script src="{{ asset('js/app.js') }}" defer>
  $('#flashMessage').fadeOut(3000);
</script>