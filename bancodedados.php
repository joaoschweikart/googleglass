<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>
        Curso de HTML-5
    </title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="_css/form.css"/>
</head>
<script src="_javascript/funcoes.js"></script>
<script>
</script>
<body>
<header id="cabecalho">
    <nav id="menu">
        <li id="glass" onmouseover="mudaFoto('_imagens/glass-oculos-preto-peq.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="index.html">Google Glass</a></li>
        <ul>
            <li onmouseover="mudaFoto('_imagens/especificacoes.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="specs.html">Especificações</a></li>
            <li onmouseover="mudaFoto('_imagens/fotos.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fotos.html">Fotos</a></li>
            <li onmouseover="mudaFoto('_imagens/multimidia.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="multimidia.html">Multimídia</a></li>
            <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fale-conosco.html">Fale conosco</a></li>
        </ul>
    </nav>
    <div id="subtitulo">
        <h2>A revolução do Google está chegando</h2>
        <img id="icone" src="_imagens/contato.png" alt=""/>
    </div>
</header>
<div id="interface">

    <section id="corpo-full"><h3>Glass > Confirmação</h3>
    
    <?php
        include("conexao.php");
        $nome = $_POST['Nome'];
        $senha = $_POST['Senha'];
        $email = $_POST['Email'];
        $sexo = $_POST['Sexo'];
        $nascimento = $_POST['Nascimento'];
        $endereco = $_POST['Rua'];
        $numero = $_POST['Numero'];
        $estado = $_POST['Estado'];
        $cidade = $_POST['Cidade'];
        $urgencia = $_POST['Urgencia'];
        $mensagem = $_POST['Msg'];
        $pedido = $_POST['Pedido'];
        $cor = $_POST['Cor'];
        $quantidade = $_POST['Quantidade'];
        $preco = $_POST['Preco'];

        $sql="INSERT INTO usuarios(id, nome, senha, email, sexo, nascimento, endereco, numero, estado, cidade, urgencia, mensagem, pedido, cor, quantidade, preco) values (default, '$nome', '$senha', '$email', '$sexo', '$nascimento', '$endereco' , '$numero', '$estado', '$cidade', '$urgencia', '$mensagem', '$pedido', '$cor', '$quantidade', '$preco');";
        if(mysqli_query($conexao, $sql)) {
            echo "<h2>Seus dados foram enviados com sucesso.</h2>";
        } else {
            echo "<h2>Não foi possível enviar seus dados. Tente novamente.</h2>";
        
        }
        mysqli_close($conexao)
    ?>
    <a href="fale-conosco.html"><h3>Voltar ao formulário<h3></a>
    </section>

<footer id="rodape">
    <p>Copyright &copy; 2022 - by João Vitor Schweikart</p>
    <p><a href="https://www.instagram.com/joaoschweikart/" target="_blank">Instagram</a> | <a href="https://twitter.com/joaoschweikart" target="_blank">Twitter</a></p>
</footer>
</div>
</body>
</html>