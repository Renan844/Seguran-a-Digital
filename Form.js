$(document).ready(function(){
    $('#Enviar').click(function(){

        var user = $('#inome').val();
        var trial = $("input[name='avaliacao']:checked").val();
        var comment = $('#icomentario').val();
        

        $.ajax({
            url: 'FormInserir.php',
            type: 'POST',
            data: {
               u: user,
               a: trial, 
               c: comment
            },
            success: function(data) {
                alert('Seu comentário foi cadastrado com sucesso!');
            }
        });
    });
    $('#Comentarios').click(function(){
        $.ajax({
            url: 'Formselect.php',
            success: function(data) {
                $('#Resultado').html(data);
            }
        })
    })
});