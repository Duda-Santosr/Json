<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
    <h2>Cadastro de Carros</h2>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome" required> <br><br>
        Ano: <input type="date" name="date" required> <br><br>
        Preço: <input type="number" name="preco" required> <br><br>
        Descrição:<input type="text" name="descricao" required> <br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>