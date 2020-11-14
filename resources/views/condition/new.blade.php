@extends('layout')

@section('content')
<h2 style="margin-bottom: 50px";>データを入力してください</h2>
<table class="table table-striped table-hover">
{{ Form::open(['route' => 'condition.store', 'name' => 'form']) }}
  <tr>
    <div class="form-group">
      <th>{{ Form::label('user_id', '社員名:') }}</th>
      <td>{{ Form::select('user_id', $staff)}}</td>
    </div>
  </tr>
  <tr>
    <div class="form-group">
      <th>{{ Form::label('body_temperture', '体温:') }}</th>
      <td>{{ Form::text('body_temperture', null)}}℃</td>
    </div>
  </tr>
  <tr>
    <div class="form-group">
      <th>{{ Form::label('nail', '爪の長さ:') }}</th>
      <td><lavel>OK{{ Form::radio('nail', 1) }}&emsp;</lavel>
      <lavel>NG{{ Form::radio('nail', 2) }}</lavel></td>
    </div>
  </tr>
  <tr>
    <div class="form-group">
      <th>{{ Form::label('belly', 'お腹の調子:') }}</th>
      <td><lavel>OK{{ Form::radio('belly', 1) }}&emsp;</lavel>
      <lavel>NG{{ Form::radio('belly', 2) }}</lavel></td>
    </div>
  </tr>
  <tr>
    <div class="form-group">
      <th>{{ Form::label('rough_hands', '手指の傷:') }}</th>
      <td><lavel>OK{{ Form::radio('rough_hands', 1) }}&emsp;</lavel>
      <lavel>NG{{ Form::radio('rough_hands', 2) }}</lavel></td>
    </div>
  </tr>
  <tr>
    <div class="form-group">
      <th>{{ Form::label('other', 'その他健康状態:') }}</th>
      <td><lavel>OK{{ Form::radio('other', 1) }}&emsp;</lavel>
      <lavel>NG{{ Form::radio('other', 2) }}</lavel></td>
    </div>
  </tr>
  <tr><th></th><td>{{ Form::submit('登録する',['onClick' => 'modal()'])}}</td>
  {{ Form::close() }}
</table>

<script>
  
  
  function modal() {
    var selectedStaff = document.getElementById("user_id");
    var staffIdx = selectedStaff.selectedIndex;
    var staffName = selectedStaff.options[staffIdx].text;

    var staffTemperture = document.getElementById("body_temperture").value;

    var staffNail = document.getElementsByName("nail");
    if (staffNail[0].checked){
      var staffNailLabel = "OK";
    } else {
      var staffNailLabel = "NG";
    }
    
    var staffBelly = document.getElementsByName("belly");
    if (staffBelly[0].checked){
      var staffBellyLabel = "OK";
    } else {
      var staffBellyLabel = "NG";
    }
    
    var staffRoughHands = document.getElementsByName("rough_hands");
    if (staffRoughHands[0].checked){
      staffRoughHandsLabel = "OK";
    } else {
      staffRoughHandsLabel = "NG";
    }
    
    var staffOther = document.getElementsByName("other");
    if (staffOther[0].checked){
      staffOtherLabel = "OK";
    } else {
      staffOtherLabel = "NG";
    }
    

    if(!window.confirm('名前：'+ staffName + '体温：' + staffTemperture + '爪'+ staffNailLabel + 'お腹' + staffBellyLabel + '手指' + staffRoughHandsLabel + 'その他' + staffOtherLabel + '登録しますか？')){
      window.alert('キャンセルしました');
      return false;
    }
    document.form.submit();
  }
</script>