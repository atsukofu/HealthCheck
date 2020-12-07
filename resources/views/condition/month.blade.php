@extends('layout')

@section('content')
<h2 style="margin-bottom: 50px;">月別検索結果</h2>
<div style="width: 100%;display:flex;">
  <div style="width:80px"></div>
  <div>
    @if(isset($month_datas) && count($month_datas) > 0)
    <table class="table table-striped table-hover">
      <tr>
        <th>登録日</th><th>社員名</th><th>体温</th><th>爪の長さ</th><th>お腹の調子</th><th>手指の傷</th><th>その他体調不良</th>
      </tr>
      @foreach ($month_datas as $item)
        <tr>
          <td>{{ $item->created_at->format('Y年m月d日')}}</td>
          <td>{{ $item->staff->name }}</td>

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
    @else
      <p>該当する月のデータは登録されていません</p>
    @endif
  </div>
</div>
@endsection

<script src="{{ asset('js/app.js') }}" defer></script>