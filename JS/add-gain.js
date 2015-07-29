$(document).ready(function () {
    $('#input-insert').click(function(){
        var date=$('#date'); console.log(date);
          if (!$('#date').val()|| !$('#cash-registers').val()){
        $('#result').removeClass('alert-success');
        $('#result').addClass('alert-danger');
        $('#result').html('Complete all fields');}
    
    else{
         $('#result').removeClass('alert-danger');
        $('#result').addClass('alert-success');
        $('#result').html('Information is saved');
    }
    });
    
    $('tr').click(function(){
       $('#myModal').modal('show');
    });
  

    $('[data-toggle="tooltip"]').tooltip();
    
    
  
});

