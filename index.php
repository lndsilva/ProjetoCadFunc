<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar Funcionário</title>
</head>
<body>

	<h1>Gerenciar Funcionários</h1>

	<form action="crud.php" method="post">
		Nome: <input type="text" name="nome"> <br>
		E-mail: <input type="email" name="email"><br>
		CPF: <input type="text" name="cpf"><br>
		Telefone: <input type="tel" name="telefone"><br>
		<button>Cadastrar</button>
		<button>Alterar</button>
		<button>Excluir</button>
		<button>Pesquisar</button>

	</form>

</body>
</html>