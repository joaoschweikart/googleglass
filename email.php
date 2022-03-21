<html></html>

<?php
    $nome = addslashes($_POST['Nome']);
    $senha = addslashes($_POST['Senha']);
    $email = addslashes($_POST['Email']);
    $sexo = $_POST['sexo'];
    $nascimento = addslashes($_POST['Nascimento']);
    $endereco = addslashes($_POST['Rua']);
    $numero = addslashes($_POST['Numero']);
    $estado = addslashes($_POST['Estado']);
    $cidade = addslashes($_POST['Cidade']);
    $urgencia = addslashes($_POST['Urgencia']);
    $mensagem = addslashes($_POST['Msg']);
    $pedido = addslashes($_POST['Pedido']);
    $cor = addslashes($_POST['Cor']);
    $quantidade = addslashes($_POST['Quantidade']);
    $preco = addslashes($_POST['Preco']);

    $to = "joaobernardonschweikart@gmail.com";
    $subject = "Formulário do Site";
    $body = "Nome: ".$nome."\n".
            "Senha: ".$senha."\n".
            "E-mail: ".$email."\n".
            "Sexo: ".$sexo."\n".
            "Nascimento: ".$nascimento."\n".
            "Endereço: ".$endereco."\n".
            "Número: ".$numero."\n".
            "Estado: ".$estado."\n".
            "Cidade: ".$cidade."\n".
            "Urgência (0-10): ".$urgencia."\n".
            "Mensagem: ".$mensagem."\n".
            "Pedido (on-off): ".$pedido."\n".
            "Cor: ".$cor."\n".
            "Quantidade: ".$quantidade."\n".
            "Preço Final: R$".$preco.",00";
    $header = "From: joaobernardonschweikart@gmail.com"."<\n>"."Reply-to: ".$email."<\n>"."X=Mailer:PHP/".phpversion();

/* echo "Para: ".$to."<br/>".
    "<br/>".
    $subject."<br/>".
    "<br/>".
    $body."<br/>".
    "<br/>".
    $header;
    */ 

if (mail ($to, $subject, $body, $header)) {
    echo "Seus dados foram enviados com sucesso.";
}

echo "<meta http-equiv='refresh' content='0;url=confirmacao.html'/>";

?>
