@extends('layout')

@section('content')
@if (session('flash_message'))
  <div class="flash_message alert-primary text-center py-3 my-0" id="flashMessage">
      {{ session('flash_message') }}
  </div>
@endif

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
  <tr><th></th><td>{{ Form::submit('登録する',['class' => "btn btn-primary", 'id' => 'submit-btn', 'data-toggle' => 'modal','data-target' => '#testModal'])}}</td>
  {{ Form::close() }}
</table>

<!-- モーダル -->
<div class="modal fade" id="confirmModal" tabindex="1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4class="modal-title" id="myModalLabel">登録確認画面</h4></h4>
      </div>
      <div class="modal-body">
        <label>以下の通り登録しますか？</label>
        <p>名前：<span id="nameInsert"></span></p>
        <p>体温：<span id="tempInsert"></span>℃</p>
        <p>爪の長さ：<span id="nailInsert"></span></p>
        <p>お腹の調子：<span id="bellyInsert"></span></p>
        <p>手指の傷：<span id="roughHandsInsert"></span></p>
        <p>その他健康状態：<span id="otherInsert"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="submit">登録</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
      </div>
    </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>        
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
  $('#flashMessage').fadeOut(3000);

  $(function() {
    $('#submit-btn').on('click', function(e){
      e.preventDefault();

      var selectedStaff = $("#user_id option:selected").text();
      var nameInsert = $('#nameInsert');
      nameInsert.text(selectedStaff);

      var inputtemp = $('#body_temperture').val();
      var tempInsert = $('#tempInsert');
      tempInsert.text(inputtemp);

      var selectedNail = $('#nail');
      var nailInsert = $('#nailInsert');
      if (selectedNail[0].checked){
        nailInsert.text('OK');
      } else {
        nailInsert.text('NG');
      }

      var selectedBelly = $('#belly');
      var bellyInsert = $('#bellyInsert');
      if (selectedBelly[0].checked){
        bellyInsert.text('OK');
      } else {
        bellyInsert.text('NG');
      }

      var selectedRoughHands = $('#rough_hands');
      var roughHandsInsert = $('#roughHandsInsert');
      if (selectedRoughHands[0].checked){
        roughHandsInsert.text('OK');
      } else {
        roughHandsInsert.text('NG');
      }

      var selectedOther = $('#other');
      var otherInsert = $('#otherInsert');
      if (selectedOther[0].checked){
        otherInsert.text('OK');
      } else {
        otherInsert.text('NG');
      }

      $('#confirmModal').modal();

      $('#submit').on('click', function(){
        document.form.submit();
      });
    });

    
    
  });
</script>