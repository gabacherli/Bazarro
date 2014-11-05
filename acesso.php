<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> Bazarro.com </title>
		<meta charset="utf-8"/>
		<meta name="description" content="E-commerce, tudo quanto é produto bizarro que você queira comprar.">
		<meta name="keywords"    content="Vendas, bazarro,bizarro, engraçado, compras, e-commerce">
		<meta name="author"      content="Thomaz Picelli, Gabriel e Rhenan Cocev">
		
		<link rel="stylesheet" type="text/css" href="css/padrao.css"/> <!-- CSS TOPO PADRÃO -->
		<link rel="stylesheet" type="text/css" href="css/acesso.css"/> <!-- CSS ACESSO DE PRODUTOS -->
		<link rel="shortcut icon" type="image/x-icon" href="Img/Sociais/favicon.png"/> <!-- ÍCONE NAVEGADOR -->
		
	</head>

	<body>
		<header>
                    <?php include 'header.php' ?>
                </header>
		
		<section>
			<div class="login">
				<p>Já tenho cadastro</p></br>
                                <form action = "validaLogin.php" method = "post">
					E-mail:<input type="email" placeholder="E-mail" name="campoemail"/></br>
					Senha:<input type="password" placeholder="Senha" name="camposenha"/></br></br>
					<input type="image" src="Img/Sociais/enviar.png" alt="Submit Form"/>
				</form>
			</div>

			<div class="signin">
				<p>Ainda não tenho cadastro</p></br>
                                <form method="POST" action="validaCadastro.php">
				
					<p>Dados de Identificação</p>
                                        Nome Completo:<input type="text" placeholder="Nome" name="nome""></br>
					Data de Nascimento:<input type="date" placeholder="Data de Nascimento"name="datanasc"/></br>
					Sexo:<input type="radio" name="sexo" value="Masculino"name="sexo"/>Masculino
                			     <input type="radio" name="sexo" value="Feminino"name="sexo"/>Feminino</br>
					RG:<input type="text" placeholder="RG" name="RG"/></br>
					CPF:<input type="text" placeholder="CPF"name="CPF"/></br>
					Celular:<input type="text" placeholder="Celular"name="cel"/></br>
					Telefone:<input type="text" placeholder="Telefone"name="tel"/></br>
                                        E-mail:<input type="email" placeholder="E-mail"name="email"/></br>
					Senha: <input type="password" placeholder="Senha"name="senha1"/></br>
					Confirma sua Senha:<input type="password" placeholder="Senha"name="senha2"/></br>
					
					<p> Meu Endereço</p>
					Endereço:</br><input type="text" placeholder="Endereço"name="endereco"/>,
                                        <input type="number" placeholder="Número"name="num"/></br>
					<input type="text" placeholder="Complemento"name="comp"/></br>
					CEP:<input type="address" placeholder="CEP"name="CEP"/></br>
                                        Cidade:<input type="text" placeholder="Cidade"name="cidade"/></br>
					Estado:<select name="estado"> 
						<option value="estado">Selecione o Estado</option>
						<option value="ac">Acre</option> 
						<option value="al">Alagoas</option>
						<option value="am">Amazonas</option> 
						<option value="ap">Amapá</option> 
						<option value="ba">Bahia</option> 
						<option value="ce">Ceará</option> 
						<option value="df">Distrito Federal</option> 
						<option value="es">Espírito Santo</option> 
						<option value="go">Goiás</option> 
						<option value="ma">Maranhão</option> 
						<option value="mt">Mato Grosso</option> 
						<option value="ms">Mato Grosso do Sul</option> 
						<option value="mg">Minas Gerais</option> 
						<option value="pa">Pará</option> 
						<option value="pb">Paraíba</option> 
						<option value="pr">Paraná</option> 
						<option value="pe">Pernambuco</option> 
						<option value="pi">Piauí</option> 
						<option value="rj">Rio de Janeiro</option> 
						<option value="rn">Rio Grande do Norte</option> 
						<option value="ro">Rondônia</option> 
						<option value="rs">Rio Grande do Sul</option> 
						<option value="rr">Roraima</option> 
						<option value="sc">Santa Catarina</option> 
						<option value="se">Sergipe</option> 
						<option value="sp">São Paulo</option> 
						<option value="to">Tocantins</option> 
					</select>

                                        </br><input type="image" src="Img/Sociais/enviar.png" alt="Submit Form"value="cadastrar"name="cadastrar"/>
				</form>
			</div>
		</section>
		
		<footer>
                    <?php include 'footer.php' ?>
                </footer>
		
		
	</body>

</html>