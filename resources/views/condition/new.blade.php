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
      <td>
        {{ Form::text('body_temperture_int', 36, ['id' => 'body_temperture_int'])}}.
        {{Form::text('body_temperture_dec', 0, ['id' => 'body_temperture_dec'])}}</td>
    </div>
  </tr>
  <tr>
    <div class="form-group">
      <th><label>その他</label></th>
      <td><lavel>OK<input type="radio" name="other" value=1></input></lavel>
      <lavel>NG<input type="radio" name="other" value=1></input></lavel></td>
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
          <h4class="modal-title" id="myModalLabel">登録確認画面</h4>
      </div>
      <div class="modal-body">
        <label>以下の通り登録しますか？</label>
        <table class="table table-striped">
          <tr><th>名前：</th><td id="nameInsert"></td></tr>
          <tr><th>体温：</th><td id="tempInsert">℃</td></tr>
          <tr><th>爪の長さ：</th><td id="nailInsert"></td></tr>
          <tr><th>お腹の調子：</th><td id="bellyInsert"></td></tr>
          <tr><th>手指の傷：</th><td id="roughHandsInsert"></td></tr>
          <tr><th>その他健康状態：</th><td id="otherInsert"></td></tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="submit">登録</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
      </div>
    </div>
    </div>
</div>

<div class="modal fade" id="errorModal" tabindex="1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4class="modal-title" id="myModalLabel">体温を入力してください</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
      </div>
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
  $('#flashMessage').fadeOut(3000);

  $(function() {
    $('#submit-btn').on('click', function(e){
      e.preventDefault();
      
      var inputtemp_int = $('#body_temperture_int').val();
      var inputtemp_dec = $('#body_temperture_dec').val();
      var inputtemp = inputtemp_int + "." + inputtemp_dec;
      

      if(inputtemp == "."){
        $('#errorModal').modal();
      } else {

        var tempInsert = $('#tempInsert');
        tempInsert.text(inputtemp + "℃");
        
        var selectedStaff = $("#user_id option:selected").text();
        var nameInsert = $('#nameInsert');
        nameInsert.text(selectedStaff);
        
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
      }

      $('#submit').on('click', function(){
        document.form.submit();
      });
    });  
  });
</script>