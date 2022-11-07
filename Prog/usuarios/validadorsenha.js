// Criado por Sam.
// Adaptado de https://pt.stackoverflow.com/questions/316987/validar-for%C3%A7a-da-senha-no-front-end

document.addEventListener("DOMContentLoaded", function(){

    document.forms[0].onsubmit = function(e){
       return val(e);
    }
 
    senha.oninput = function(e){
       val(e);
    }
 
    function val(e){
 
       var qtde = 0,
           v = senha.value,
           cor = "#fff",
           e = e.type == "submit";
    
       // verifica se tem 6 caracteres ou mais
       if(v.match(/.{6,}/))
            qtde++;

       // verifica se tem ao menos uma letra maiúscula
       if(v.match(/[A-Z]{1,}/))
            qtde++;
 
       // verifica de tem ao menus um número
       if(v.match(/[0-9]{1,}/))
            qtde++;
 
       var validacao = 'Fraca';
       switch (qtde)
       {
            case 2:
                validacao = 'M\u00e9dia'; break;
            case 3:
                validacao = 'Forte'; break;
       }

       document.getElementById('medidor').innerHTML = "<strong>For\u00e7a:&nbsp;</strong>" + validacao;
    }
 });