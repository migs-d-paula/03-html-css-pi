<?php
// Variáveis POST do Formulário
$banner_titulo = $_POST['campo-titulo'];
$banner_descricao = $_POST['campo-descricao'];
$banner_imagem = $_FILES['campo-imagem'];

// Credenciais da Base de Dados:
$servidor = 'localhost';
$base = 'bd_publicidade';
$usuario = 'bd_publicidade';
$senha = 'P@ssw0rd';

// Criar a CONEXÃO com a Base de Dados:


// Criar e Excecutar a SQL para INSERIR os dados da tabela:
$sql = 'INSERT INTO tbl_banners(titulo, descricao, imagem) VALUES ("' . $banner_titulo . '", "' . $banner_descricao . '", "' . $banner_imagem . '");';


// Encerrar CONEXÃO com a Base de Dados:
$conexao.close();

// Direcionar o usuário de volta a página inicial:
header('Location: ');
?>