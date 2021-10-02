

function enviar(){
    var nome=document.getElementById('nome').value
    var sobrenome=document.getElementById('sobrenome').value
    var sexo="Masculino"
    var email=document.getElementById('email').value
    var estado=document.getElementById('estado').value
    var assunto=document.getElementById('assunto').value
    var mensagem=document.getElementById('mensagem').value

    
    var fem=document.getElementById('idfem')
    if(fem.checked){
        sexo='Feminino'
    }
    if(nome==null || nome==""){
		alert("O campo nome é obrigatório");
	}else if(nome.length<3){
		alert("O campo nome deve ter no mínimo 3 caracteres");
	}else if(email==null || email==""){
		alert("O campo e-mail é obrigatório");
    }else if(estado==""){
		alert("Por favor, selecione seu Estado");
    }else if(assunto==""){
		alert("Por favor, selecione o assunto da mensagem");
	}else if(mensagem==null || mensagem=="" || mensagem.length<15){
		alert("A mensagem é obrigatória e precisa ter no mínimo 15 caracteres");
    }else{
        alert(
            "NOME: "+ nome+" "+sobrenome+
            "\n\nSEXO: "+ sexo+
            "\n\nE-MAIL: "+ email+
            "\n\nESTADO: "+estado+
            "\n\nASSUNTO: "+assunto+
            "\n\nMENSAGEM: "+ mensagem
            )
    }

}

