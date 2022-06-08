<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <header></header>
    <nav></nav>
    <article id="art">
        <img src="https://www.milkshakemixsorvetes.com.br/wp-content/uploads/2018/09/slide-two-2.png">
        <div class="form-group">
            <form class="caixa" method="post">
                <h1>Cadastro de Produtos</h1>
                <p>
                    PRODUTO:
                    <input type="text" name="Produto" placeholder="Produto" class="form-control">
                </p>
                <p>
                    PREÇO:
                    <input type="number" name="Preço" placeholder="Preço" class="form-control">
                </p>
                <p>
                    QUANTIDADE
                    <input type="number" name="Quantidade" placeholder="Quantidade" class="form-control">
                </p>
                <p> <input type="submit" name="Cadastrar" value="Cadastrar"></p>
                <a href="javascript: history.go(-1)">Voltar</a>
            </form>
            
        </div>
    </article>
    <footer></footer>
</body>

</html>