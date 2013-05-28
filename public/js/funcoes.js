var urlGlobal = document.URL.replace("view/","");
   urlGlobal = urlGlobal.replace("#","");

function validaSubmitCliente(){
          var nome= eval("document.frCliente.nome.value");
          var endereco= eval("document.frCliente.endereco.value");
          var complemento= eval("document.frCliente.complemento.value");
          var email= eval("document.frCliente.Email.value");
          var bairro= eval("document.frCliente.bairro.value");
          var cep= eval("document.frCliente.cep.value");
          var ok = true;
          var celular= eval("document.frCliente.celular.value");
          var senha= eval("document.frCliente.senha.value");
          var cidade= eval("document.frCliente.cidade.value");
          var estado= eval("document.frCliente.estado.value");
          var mensagem = "";

          if(trim(nome) == ""){
              mensagem += "O campo nome é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(endereco) == ""){
              mensagem += "O campo endereco é Obrigatorio <br/>";
              ok = false;
          }
          
          if(trim(complemento) == ""){
              mensagem += "O campo complemento é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(email) == ""){
              mensagem += "O campo email é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(bairro) == ""){
             mensagem += "O campo bairro é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(cep) == ""){
              mensagem += "O campo cep é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(celular) == ""){
              mensagem += "O campo celular é Obrigatorio<br/>";
              ok = false;
          }
          if(trim(senha) == ""){
              mensagem += "O campo senha é Obrigatorio<br/>";
              ok = false;
          }
           if(trim(cidade) == ""){
              mensagem += "O campo cidade é Obrigatorio<br/>";
              ok = false;
          }
          if(trim(estado) == ""){
              mensagem += "O campo estado é Obrigatorio<br/>";
              ok = false;
          }
		  
		  if(!ValidaEmail(document.frCliente.Email)){
				ok=false;
				mensagem += "O campo E-mail é Inválido<br/>";
		}
          document.getElementById("alert").innerHTML = mensagem;


          if(ok){
              cadastro(urlGlobal+"controller/cliente.php");
          }

}

function validaSubmitComentario(){
          var comentario= eval("document.frComentario.comentario.value");
          var ok = true;
          var mensagem = "";

          if(trim(comentario) == ""){
              mensagem += "O campo comentario é Obrigatorio <br/>";
              ok = false;
          }
          
          document.getElementById("alert").innerHTML = mensagem;


          if(ok){
              cadastroC(urlGlobal+"controller/comentario.php");
          }

}
function validaSubmitLogin(){
          var email= eval("document.frLogar.email_login.value");
          var senha= eval("document.frLogar.senha_login.value");
          var ok = true;
          var mensagem = "";

         if(trim(email) == ""){
              mensagem += "O campo email é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(senha) == ""){
              mensagem += "O campo senha é Obrigatorio<br/>";
              ok = false;
          }
          document.getElementById("alertLogin").innerHTML = mensagem;


          if(ok){
              cadastroL(urlGlobal+"controller/logar.php");
          }

}

function validaSubmitAssociado(){
          var nome= eval("document.frAssociado.nome.value");
          var endereco= eval("document.frAssociado.endereco.value");
          var complemento= eval("document.frAssociado.complemento.value");
          var email= eval("document.frAssociado.Email.value");
          var bairro= eval("document.frAssociado.bairro.value");
          var cep= eval("document.frAssociado.cep.value");
          var ok = true;
          var celular= eval("document.frAssociado.celular.value");
          var senha= eval("document.frAssociado.senha.value");
          var cidade= eval("document.frAssociado.cidade.value");
          var estado= eval("document.frAssociado.estado.value");
          var datanascimento= eval("document.frAssociado.datanascimento.value");
          var cpf= eval("document.frAssociado.cpf.value");
          var mensagem = "";

          if(trim(nome) == ""){
              mensagem += "O campo nome é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(endereco) == ""){
              mensagem += "O campo endereco é Obrigatorio <br/>";
              ok = false;
          }
          
          if(trim(complemento) == ""){
              mensagem += "O campo complemento é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(email) == ""){
              mensagem += "O campo email é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(bairro) == ""){
             mensagem += "O campo bairro é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(cep) == ""){
              mensagem += "O campo cep é Obrigatorio <br/>";
              ok = false;
          }
          if(trim(celular) == ""){
              mensagem += "O campo celular é Obrigatorio<br/>";
              ok = false;
          }
          if(trim(senha) == ""){
              mensagem += "O campo senha é Obrigatorio<br/>";
              ok = false;
          }
           if(trim(cidade) == ""){
              mensagem += "O campo cidade é Obrigatorio<br/>";
              ok = false;
          }
          if(trim(estado) == ""){
              mensagem += "O campo estado é Obrigatorio<br/>";
              ok = false;
          }

          if(trim(datanascimento) == ""){
              mensagem += "O campo data de nascimento é Obrigatorio<br/>";
              ok = false;
          }
          if(trim(cpf) == ""){
              mensagem += "O campo cpf é Obrigatorio<br/>";
			  ok = false;
          }
         
		  if(!ECpf(cpf)){
				ok = false;
				 mensagem += "O campo cpf é Inválido<br/>";
				 
			}
			
		if(!ValidaEmail(document.frAssociado.Email)){
				ok = false;
				mensagem += "O campo E-mail é Inválido<br/>";
		}
		   document.getElementById("alert").innerHTML = mensagem;
          
		  if(ok){
              cadastroA(urlGlobal+"controller/associado.php");
          }

}
//trim completo

function trim(str) {

  return str.replace(/^\s+|\s+$/g,"");

}

 function mudaform(valor){
	if(valor == 1){
		document.getElementById("formCliente").style.display="block";
		document.getElementById("formAssociado").style.display="none";
	}else if(valor == 2){
		document.getElementById("formAssociado").style.display="block";	
		document.getElementById("formCliente").style.display="none";
	}
	else {
		document.getElementById("formCliente").style.display="none";
		document.getElementById("formAssociado").style.display="none";
	}
}

function limitaCaracter(v,obj)
{
	if(v.length > 300){
			v = v.substring(0,(v.length - (v.length - 300)));
			document.getElementById("limite").innerHTML = "Limite do texto e de "+(300-v.length)+" caracteres";
	}else{
		document.getElementById("limite").innerHTML = "Limite do texto e de "+(300-v.length)+" caracteres";
	}
	obj.value = v;
}

function Telefone(v,obj){
    v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
    obj.value = v;
}

function Cpf(v,obj){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    obj.value = v;
}

function Cep(v,obj){
    v = v.replace(/D/g,"")                //Remove tudo o que não é dígito
    v = v.replace(/^(\d{5})(\d)/,"$1-$2") 
    obj.value = v;
}

function ECpf(cpf) {
var soma;
var resto;
var i;
  cpf = cpf.replace(".","");
  cpf = cpf.replace(".","");
  cpf = cpf.replace("-","");
 if ( (cpf.length != 11) ||
 (cpf == "00000000000") || (cpf == "11111111111") ||
 (cpf == "22222222222") || (cpf == "33333333333") ||
 (cpf == "44444444444") || (cpf == "55555555555") ||
 (cpf == "66666666666") || (cpf == "77777777777") ||
 (cpf == "88888888888") || (cpf == "99999999999") ) {
 document.getElementById("alert").innerHTML ="CPF Inválido";
 return false;
 }

 soma = 0;
 
 for (i = 1; i <= 9; i++) {
 soma += Math.floor(cpf.charAt(i-1)) * (11 - i);
 }
 
 resto = 11 - (soma - (Math.floor(soma / 11) * 11));
 
 if ( (resto == 10) || (resto == 11) ) {
 resto = 0;
 }
 
 if ( resto != Math.floor(cpf.charAt(9)) ) {
 document.getElementById("alert").innerHTML ="CPF Inválido";
	return false;
 }
 
 soma = 0;
 
 for (i = 1; i<=10; i++) {
 soma += cpf.charAt(i-1) * (12 - i);
 }
 
 resto = 11 - (soma - (Math.floor(soma / 11) * 11));
 
 if ( (resto == 10) || (resto == 11) ) {
 resto = 0;
 }
 
 if (resto != Math.floor(cpf.charAt(10)) ) {
		document.getElementById("alert").innerHTML ="CPF Inválido";
		return false;
 }
 document.getElementById("alert").innerHTML ="";
 return true;
 
}

function ValidaEmail(obj)
{
  
  email = obj.value;
  var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
    var check=/@[\w\-]+\./;
    var checkend=/\.[a-zA-Z]{2,3}$/;
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){obj.focus(); document.getElementById("alert").innerHTML ="E-mail Inválido"; return false;}
    else {return true;}
}

function pagina(url){
 var mreq;
 // Procura o componente nativo do Mozilla/Safari para rodar o AJAX 
 if(window.XMLHttpRequest){
  // Inicializa o Componente XMLHTTP do Mozilla
  mreq = new XMLHttpRequest();
 // Caso ele não encontre, procura por uma versão ActiveX do IE 
 }else if(window.ActiveXObject){ 
  // Inicializa o Componente ActiveX para o AJAX
  mreq = new ActiveXObject("Microsoft.XMLHTTP");
 }else{ 
  // Caso não consiga inicializar nenhum dos componentes, exibe um erro
  alert("Seu navegador não tem suporte a AJAX.");
 }

 // Carrega a função de execução do AJAX
 mreq.onreadystatechange = function() {
  if(mreq.readyState == 1){
   // Quando estiver "Carregando a página", exibe a mensagem
   document.getElementById('content').innerHTML = 'Carregando';   
  }else if(mreq.readyState == 4){ 
   // Quando estiver completado o Carregamento
   // Procura pela DIV com o id="minha_div" e insere as informações 
   document.getElementById('content').innerHTML = mreq.responseText;
  }
 };
 // Envia via método GET as informações
 mreq.open("GET",url,true);
    mreq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1") 
 mreq.send(null);
}
function sair(url){
 var mreq;
 // Procura o componente nativo do Mozilla/Safari para rodar o AJAX 
 if(window.XMLHttpRequest){
  // Inicializa o Componente XMLHTTP do Mozilla
  mreq = new XMLHttpRequest();
 // Caso ele não encontre, procura por uma versão ActiveX do IE 
 }else if(window.ActiveXObject){ 
  // Inicializa o Componente ActiveX para o AJAX
  mreq = new ActiveXObject("Microsoft.XMLHTTP");
 }else{ 
  // Caso não consiga inicializar nenhum dos componentes, exibe um erro
  alert("Seu navegador não tem suporte a AJAX.");
 }

 // Carrega a função de execução do AJAX
 mreq.onreadystatechange = function() {
  if(mreq.readyState == 1){
   // Quando estiver "Carregando a página", exibe a mensagem
   //document.getElementById('content').innerHTML = 'Carregando';   
  }else if(mreq.readyState == 4){ 
   // Quando estiver completado o Carregamento
   // Procura pela DIV com o id="minha_div" e insere as informações 
	document.location.reload(true);
  }
 };
 // Envia via método GET as informações
 mreq.open("GET",url,true);
    mreq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1") 
 mreq.send(null);
}


function cadastro(url){
 var mreq;
 // Procura o componente nativo do Mozilla/Safari para rodar o AJAX 
 if(window.XMLHttpRequest){
  // Inicializa o Componente XMLHTTP do Mozilla
  mreq = new XMLHttpRequest();
 // Caso ele não encontre, procura por uma versão ActiveX do IE 
 }else if(window.ActiveXObject){ 
  // Inicializa o Componente ActiveX para o AJAX
  mreq = new ActiveXObject("Microsoft.XMLHTTP");
 }else{ 
  // Caso não consiga inicializar nenhum dos componentes, exibe um erro
  alert("Seu navegador não tem suporte a AJAX.");
 }

 // Carrega a função de execução do AJAX
 mreq.onreadystatechange = function() {
  if(mreq.readyState == 1){
   // Quando estiver "Carregando a página", exibe a mensagem
   document.getElementById('alert').innerHTML = 'Carregando';   
  }else if(mreq.readyState == 4){ 
   // Quando estiver completado o Carregamento
   // Procura pela DIV com o id="minha_div" e insere as informações 
   document.getElementById('alert').innerHTML = mreq.responseText;
  }
 };
  var parametros = "nome="+eval("document.frCliente.nome.value")+"&endereco="+eval("document.frCliente.endereco.value")+
                   "&numero="+eval("document.frCliente.numero.value")+"&complemento="+eval("document.frCliente.complemento.value")+
                   "&telefone="+eval("document.frCliente.telefone.value")+"&email="+eval("document.frCliente.Email.value")+
                   "&bairro="+eval("document.frCliente.bairro.value")+"&cep="+eval("document.frCliente.cep.value")+
                   "&celular="+eval("document.frCliente.celular.value")+"&senha="+eval("document.frCliente.senha.value")
                   +"&op=cadastrar&cidade="+eval("document.frCliente.cidade.value")+"&estado="+eval("document.frCliente.estado.value");
   document.frCliente.nome.value = "";
  document.frCliente.endereco.value="";
  document.frCliente.complemento.value="";
  document.frCliente.Email.value="";
  document.frCliente.bairro.value="";
  document.frCliente.cep.value="";
  document.frCliente.celular.value="";
  document.frCliente.senha.value="";
  document.frCliente.cidade.value="";
  document.frCliente.estado.value="";
  document.frCliente.numero.value="";
  document.frCliente.telefone.value="";
 // Envia via método POST as informações
 mreq.open("post",url,true);
    mreq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8") 
 mreq.send(parametros);
}
function cadastroC(url){
 var mreq;
 // Procura o componente nativo do Mozilla/Safari para rodar o AJAX 
 if(window.XMLHttpRequest){
  // Inicializa o Componente XMLHTTP do Mozilla
  mreq = new XMLHttpRequest();
 // Caso ele não encontre, procura por uma versão ActiveX do IE 
 }else if(window.ActiveXObject){ 
  // Inicializa o Componente ActiveX para o AJAX
  mreq = new ActiveXObject("Microsoft.XMLHTTP");
 }else{ 
  // Caso não consiga inicializar nenhum dos componentes, exibe um erro
  alert("Seu navegador não tem suporte a AJAX.");
 }

 // Carrega a função de execução do AJAX
 mreq.onreadystatechange = function() {
  if(mreq.readyState == 1){
   // Quando estiver "Carregando a página", exibe a mensagem
   document.getElementById('alert').innerHTML = 'Carregando';   
  }else if(mreq.readyState == 4){ 
   // Quando estiver completado o Carregamento
   // Procura pela DIV com o id="minha_div" e insere as informações 
   document.getElementById('alert').innerHTML = mreq.responseText;
  }
 };
  var parametros = "comentario="+eval("document.frComentario.comentario.value")+"&op=cadastrar";
   document.frComentario.comentario.value = "";
 // Envia via método POST as informações
 mreq.open("post",url,true);
    mreq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8") 
 mreq.send(parametros);
}

function cadastroA(url){
 var mreq;
 // Procura o componente nativo do Mozilla/Safari para rodar o AJAX 
 if(window.XMLHttpRequest){
  // Inicializa o Componente XMLHTTP do Mozilla
  mreq = new XMLHttpRequest();
 // Caso ele não encontre, procura por uma versão ActiveX do IE 
 }else if(window.ActiveXObject){ 
  // Inicializa o Componente ActiveX para o AJAX
  mreq = new ActiveXObject("Microsoft.XMLHTTP");
 }else{ 
  // Caso não consiga inicializar nenhum dos componentes, exibe um erro
  alert("Seu navegador não tem suporte a AJAX.");
 }

 // Carrega a função de execução do AJAX
 mreq.onreadystatechange = function() {
  if(mreq.readyState == 1){
   // Quando estiver "Carregando a página", exibe a mensagem
   document.getElementById('alert').innerHTML = 'Carregando';   
  }else if(mreq.readyState == 4){ 
   // Quando estiver completado o Carregamento
   // Procura pela DIV com o id="minha_div" e insere as informações 
   document.getElementById('alert').innerHTML = mreq.responseText;
  }
 };
 
  var parametros = "nome="+eval("document.frAssociado.nome.value")+"&endereco="+eval("document.frAssociado.endereco.value")+
                   "&numero="+eval("document.frAssociado.numero.value")+"&complemento="+eval("document.frAssociado.complemento.value")+
                   "&telefone="+eval("document.frAssociado.telefone.value")+"&email="+eval("document.frAssociado.Email.value")+
                   "&bairro="+eval("document.frAssociado.bairro.value")+"&cep="+eval("document.frAssociado.cep.value")+
                   "&celular="+eval("document.frAssociado.celular.value")+"&senha="+eval("document.frAssociado.senha.value")
                   +"&op=cadastrar&cidade="+eval("document.frAssociado.cidade.value")+"&estado="+eval("document.frAssociado.estado.value")+
                   "&cpf="+eval("document.frAssociado.cpf.value")+"&datanascimento="+eval("document.frAssociado.datanascimento.value");
   document.frAssociado.nome.value = "";
  document.frAssociado.endereco.value="";
  document.frAssociado.complemento.value="";
  document.frAssociado.Email.value="";
  document.frAssociado.bairro.value="";
  document.frAssociado.cep.value="";
  document.frAssociado.celular.value="";
  document.frAssociado.senha.value="";
  document.frAssociado.cidade.value="";
  document.frAssociado.estado.value="";
  document.frAssociado.numero.value="";
  document.frAssociado.telefone.value="";
  document.frAssociado.cpf.value="";
  document.frAssociado.datanascimento.value="";
 // Envia via método GET as informações
 mreq.open("post",url,true);
    mreq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1") 
 mreq.send(parametros);
}

function cadastroL(url){
 var mreq;
 // Procura o componente nativo do Mozilla/Safari para rodar o AJAX 
 if(window.XMLHttpRequest){
  // Inicializa o Componente XMLHTTP do Mozilla
  mreq = new XMLHttpRequest();
 // Caso ele não encontre, procura por uma versão ActiveX do IE 
 }else if(window.ActiveXObject){ 
  // Inicializa o Componente ActiveX para o AJAX
  mreq = new ActiveXObject("Microsoft.XMLHTTP");
 }else{ 
  // Caso não consiga inicializar nenhum dos componentes, exibe um erro
  alert("Seu navegador não tem suporte a AJAX.");
 }

 // Carrega a função de execução do AJAX
 mreq.onreadystatechange = function() {
  if(mreq.readyState == 1){
   // Quando estiver "Carregando a página", exibe a mensagem
   document.getElementById('alertLogin').innerHTML = 'Carregando';   
  }else if(mreq.readyState == 4){ 
   // Quando estiver completado o Carregamento
   // Procura pela DIV com o id="minha_div" e insere as informações 
   if(mreq.responseText == "ok"){
		document.location.reload(true);
	}else{
		document.getElementById('alertLogin').innerHTML = mreq.responseText;
	}
  }
 };
 
  var parametros = "email="+eval("document.frLogar.email_login.value")+"&senha="+eval("document.frLogar.senha_login.value")+"&op=Logar";
  document.frLogar.email_login.value="";
  document.frLogar.senha_login.value="";
  
 // Envia via método GET as informações
 mreq.open("post",url,true);
    mreq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8") 
 mreq.send(parametros);
}

