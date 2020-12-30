@extends('layout')

@section('content')


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