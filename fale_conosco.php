<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fale Conosco - Weballoon</title>
	<link rel="shortcut icon" href="_imagens/icone.ico">
	<link rel="stylesheet" href="./_css/geral.css">
	<link rel="stylesheet" href="./_css/fale_conosco.css">
	<script type="text/javascript" src="./_js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./_js/fale_conosco.js"></script>
</head>

<body>
	<header>
		<img src="_imagens\logo_weballon.png" alt="logo Weballoon" id="logo">
		<br>
		<nav>
			<ul id="index">
				<li><a href="index.html">PÁGINA INICIAL</a></li>
				<li><a href="baloes.html">TIPOS DE BALÕES</a></li>
				<li><a href="voos.html">TIPOS DE VOO</a></li>
				<li><a href="provas.html">PROVAS DE BALONISMO</a></li>
				<li><a href="competicoes.html">COMPETIÇÕES</a></li>
				<li><a href="fale_conosco.php">FALE CONOSCO</a></li>
				<li><a href="sobre.html">SOBRE</a></li>
			</ul>
		</nav>
	</header>

	<fieldset id="form">
		<legend>Envie-nos um feedback:</legend>
		Nome: <br />
		<input type="text" name="nome" id="nome" autofocus required="required" autocomplete="off" placeholder="(obrigatório)"><br /><br />
		Sobrenome: <br />
		<input type="text" name="sobrenome" id="sobrenome" placeholder="(Opcional)"><br /><br />
		<label>Sexo:</label> <br />
		<input type="radio" name="gender" value="masculino" id="idmasc" checked>Masculino<br />
		<input type="radio" name="gender" value="feminino" id="idfem">Feminino<br /><br />

			Email: <br />
			<input type="Email" name="email" id="email" required="required" placeholder="exemplo@dominio.com"><br /><br />

			Estado: <br />
			<select name="estado" id="estado">
				<option value="" disabled selected>Selecione</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
				<option value="EX">Estrangeiro</option>
			</select><br /><br />

			Assunto: <br>
			<select name="assunto" id="assunto">
				<option value="" disabled selected>Selecione</option>
				<option value="reclamação">Reclamação</option>
				<option value="elogio">Elogio</option>
				<option value="duvida">Dúvida</option>
				<option value="sugestao">Sugestão</option>
				<option value="outro">Outro</option>
			</select>
			<br><br>

			Sua Mensagem:<br />
			<textarea name="mensagem" id="mensagem" rows="10" cols="30"></textarea><br /><br />

			<input type="submit" name="submit" value="Enviar" id="enviar" onclick="enviar()"><br><br>

	</fieldset>


	<footer>
		<img id="img_rodape" src="./_imagens/logo_weballoon_simples.png" alt="logo">
		<ul>
			<li><a target="blank" href="https://www.facebook.com"><img class="social" src="./_imagens/facebook.png" alt="logo facebook"></a> </li>
			<li><a target="blank" href="https://www.twitter.com"><img class="social" src="./_imagens/twitter.png" alt="logo twitter"></a></li>
			<li><a target="blank" href="https://www.instagram.com"><img class="social" src="./_imagens/instagram.png" alt="logo instagram"></a></li>
		</ul>
		<p class="txt_rodape"> E-mail: weballoon@gmail.com <br> Telefone: +55 (42) 9</p>
		<hr>
		<p class="txt_rodape">&copy; 2020 - Todos os direitos reservados.</p>
	</footer>
</body>

</html>