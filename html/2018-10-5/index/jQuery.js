$(document).ready(function(){
    $('#hien').click(function(){
        $('#an-hien').show();
    });
    $('#an').click(function(){
        $('#an-hien').hide();
    });
    $('#anhien').click(function(){
        $('#an-hien').toggle();
    });
});