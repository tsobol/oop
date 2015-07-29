$(document).ready(function () {
    $('#insert-market').click(function(){
          if (!$('#market_type option:selected').text()|| !$('#name').val()||
                  !$('#address').val()||!$('#registration').val()||!$('#available_registers').val()||
                  !$('#working_registers').val()||!$('#minimum_gain').val()||!$('#attachments option:selected').text()){
         
         
         console.log();
         
            
            $('#result').removeClass('alert-success');
        $('#result').addClass('alert-danger');
        $('#result').html('Complete all fields');}
    
    else{
         $('#result').removeClass('alert-danger');
        $('#result').addClass('alert-success');
        $('#result').html('Information is saved');
    }
    });
    
    $('#insert-attachment').click(function(){
          if (!$('#attachment_name').val()|| !$('#attachment_gain').val()){
        $('#result-attachment').removeClass('alert-success');
        $('#result-attachment').addClass('alert-danger');
        $('#result-attachment').html('Complete all fields');}
    
    else{
         $('#result-attachment').removeClass('alert-danger');
        $('#result-attachment').addClass('alert-success');
        $('#result-attachment').html('Information is saved');
    }
    });
    
    
});



