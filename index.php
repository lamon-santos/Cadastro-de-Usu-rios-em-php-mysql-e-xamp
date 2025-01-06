<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Arial', sans-serif;
		}
		html {
			font-size: 62.5%;
		}
		body {
			background-color: #f4f4f4;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-size: 1.6rem;
			color: #333;
		}
		header, footer {
			background-color: #1E90FF;
			color: #fff;
			padding: 3rem;
			width: 100%;
			text-align: center;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}
		section {
			background: #fff;
			padding: 2rem;
			border-radius: 8px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 500px;
			margin: 2rem 0;
		}
		h1, h2 {
			margin-bottom: 1rem;
		}
		form {
			display: flex;
			flex-direction: column;
		}
		label {
			font-weight: bold;
			margin-bottom: 0.5rem;
		}
		input {
			font-size: 1.6rem;
			padding: 0.8rem;
			margin-bottom: 1.5rem;
			border: 1px solid #ccc;
			border-radius: 4px;
			width: 100%;
		}
		.botao {
			background-color: #1E90FF;
			color: #fff;
			padding: 1rem;
			border: none;
			border-radius: 4px;
			font-size: 1.8rem;
			cursor: pointer;
			transition: background-color 0.3s;
		}
		.botao:hover {
			background-color: #1C86EE;
		}
	</style>
</head>
<body>
	<header>
		<h1>Cadastro de Usuários</h1>
	</header>
	<section>
		<h2>Preencha os campos abaixo e cadastre-se</h2>
		<form action="validar.php" method="post" id="usuarios">
			<label for="usuario">Usuário</label>
			<input type="text" id="usuario" name="usuario" placeholder="Crie um Nome de Usuário">
			<label for="email">E-Mail</label>
			<input type="email" id="email" name="email" placeholder="Digite seu e-mail">
			<label for="senha">Senha</label>
			<input type="password" id="senha" name="senha" placeholder="Crie uma senha">
			<input type="submit" class="botao" name="cadastrar" value="Cadastrar">
		</form>
	</section>
	<footer>
		<h3>@lamoncomputingg</h3>
	</footer>
</body>
</html>