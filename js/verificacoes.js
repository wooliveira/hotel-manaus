function validar(){
    var senha1 = document.getElementById('senha').value;
    var senha2 = document.getElementById('confsenha').value;
    var cpf = document.getElementById('cpf').value;
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var data = document.getElementById('data').value;
    var contato = document.getElementById('contato').value;
    var cidade = document.getElementById('cidade').value;

    if(nome.length < 4){
        alert('Minimo de caracteres no nome são 4');
    }else if(!validacaoEmail(email) || email == ""){
        alert('email');
    }else if(cpf.length == ""){
        alert('cpf');
    }else if(data.length < 4){
        alert('data');
    }else if(contato.length < 10){
        alert('contato');
    }else if(cidade.length < 4){
        alert('cidade');
    }else if(senha1 != senha2 || senha1 == ""){
        alert('As senhas não conferem');
    }else if(senha1.length < 8){
        alert('Numero minimo da senha não atingidas');
    }else{
        var formulario = document.getElementById('formAluno');
        formulario.submit();
    }
}


function validarFormAlteracao(){
    var senha1 = document.getElementById('senha').value;
    var cpf = document.getElementById('cpf').value;
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var data = document.getElementById('data').value;
    var contato = document.getElementById('contato').value;
    var cidade = document.getElementById('cidade').value;

    if(nome.length < 4){
        alert('Minimo de caracteres no nome são 4');
    }else if(!validacaoEmail(email) || email == ""){
        alert('email');
    }else if(cpf.length == ""){
        alert('cpf');
    }else if(data.length < 4){
        alert('data');
    }else if(contato.length < 10){
        alert('contato');
    }else if(cidade.length < 4){
        alert('cidade');
    }else if(senha1.length == ""){
        alert('Digite a sua senha atual para poder realizar as alterações');
    }else{
        var formulario = document.getElementById('formAlunoAlterar');
        formulario.submit();
    }
}
function mincarcsenha(){
    var senha1 = document.getElementById('senha').value;
    if(senha1.length == 0){
        document.getElementById("spansenha").style.visibility = "hidden";  
    }else if(senha1.length < 8){
        document.getElementById("spansenha").style.visibility = "visible";
    }else{
        document.getElementById("spansenha").style.visibility = "hidden";   
    }
}
//formatação de contato
$(document).ready(function(){
    $('#contato').mask('(00) 0000-00009');
    $('#contato').blur(function(event) {
    if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
        $('#contato').mask('(00) 0 0000-0009');
    } else {
        $('#contato').mask('(00) 0000-00009');
    }
    });
})

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
      if (tecla==8 || tecla==0) return true;
  else  return false;
    }
}

//mascara para cpf
function mascara(src, mask){
    var i = src.value.length;
    var saida = mask.substring(0,1);
    var texto = mask.substring(i);
  
    if(texto.substring(0,1) != saida){
  
      src.value += texto.substring(0,1);
    }
  }

  //validação de email
  function validacaoEmail(value) {
    var valid = true;  
    var emails = value.replace(';', ',').split(",");  
  
    jQuery.each(emails, function () {  
        if (jQuery.trim(this) != '')  
        {  
            if (!jQuery.trim(this).match(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i))  
                valid = false;  
        }  
    });  
    return valid;
    }

//validação de cpf
$(function()
{
    //Executa a requisição quando o campo username perder o foco
    $('#cpf').blur(function()
    {
        var cpf = $('#cpf').val().replace(/[^0-9]/g, '').toString();

        if( cpf.length == 11 )
        {
            var v = [];

            //Calcula o primeiro dígito de verificação.
            v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
            v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
            v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
            v[0] = v[0] % 11;
            v[0] = v[0] % 10;

            //Calcula o segundo dígito de verificação.
            v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
            v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
            v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
            v[1] = v[1] % 11;
            v[1] = v[1] % 10;

            //Retorna Verdadeiro se os dígitos de verificação são os esperados.
            if ( (v[0] != cpf[9]) || (v[1] != cpf[10]) )
            {
                $("#cpfInvalido").show();
                $('#cpf').focus();
                $(this).css({"box-shadow" : "0 0 0 0.2rem #ff00002b"});
            }else{

              $("#cpfInvalido").hide();
              $(this).css({"border-color" : "#ced4da"});
              $(this).css({"box-shadow" : "none"});

            }
        }else{

           if($('#cpf').val() == ""){
            $("#cpfInvalido").hide();
            $(this).css({"border-color" : "#ced4da"});
            $(this).css({"box-shadow" : "none"});

           }else{

            $("#cpfInvalido").show();
            $('#cpf').focus();
            $(this).css({"box-shadow" : "0 0 0 0.2rem #ff00002b"});

           }


        }

      });
});
