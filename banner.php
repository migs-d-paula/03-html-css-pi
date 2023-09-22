<?php
// Variáveis POST do Formulário
$banner_titulo = $_POST['campo-titulo'];
$banner_descricao = $_POST['campo-descricao'];
$banner_imagem = $_FILES['campo-imagem'];
$banner_diretorio = 'images/';

// Credenciais da Base de Dados:
$servidor = 'localhost';
$base = 'bd_publicidade';
$usuario = 'root';
$senha = '';

//upload
if (move_uploaded_file($banner_imagem['tmp_name'], $banner_diretorio.$banner_imagem['name']))
{
    echo 'imagem enviada com sucesso!';
}
else
{
    echo 'imagem nao enviada';
}

// Criar a CONEXÃO com a Base de Dados:
$conexao = new mysqli ($servidor, $usuario, $senha, $base);

// Criar e Excecutar a SQL para INSERIR os dados da tabela:
$sql = 'INSERT INTO tbl_banners(titulo, descricao, imagem) VALUES ("' . $banner_titulo . '", "' . $banner_descricao . '", "' . $banner_imagem['name'] . '");';
$conexao->query($sql);

// Encerrar CONEXÃO com a Base de Dados:
$conexao->close();

// Direcionar o usuário de volta a página inicial:
header('Location: ');
?>