<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <div class="topo">
        <div class="logo">
            <img id="logo_site" src="images/corinthians.png">
        </div>
        <div class="menu">
            <div class="menu-item">
                Estudante
            </div>
            <div class="menu-item">
                Biblioteca
                <div class="submenu">
                    <div class="submenu-item">
                        Livros
                    </div>
                    <div class="submenu-item">
                        Coleções
                    </div>
                    <div class="submenu-item">
                        Periódicos
                    </div>
                </div>
            </div>
            <div id="i-maxmenu-servicos" class="menu-item">
                Serviços
                <div class="maxmenu-servicos">

                </div>
            </div>
            
        </div>
    </div>
    <div class="conteudo">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">

            <?php

            // for($i = 1; $i < 4; $i++)
            // {

            //     if ($i == 1)
            //     {
            //         $active = 'active';
            //     }
            //     else
            //     {
            //         $active = '';
            //     }

            //     echo '<div class="carousel-item ' . $active . '">';
            //     echo '    <img src="images/banner-game-0' . $i . '.png" class="d-block w-100" alt="...">';
            //     echo '</div>';
            // }
            ?>

            <div class="carroussel-inner">

            <?php

            // Credenciais da Base de Dados:
                $servidor = 'localhost';
                $base = 'bd_publicidade';
                $usuario = 'root';
                $senha = '';

            //     // Criar a CONEXÃO com a Base de Dados:
                $conexao = new mysqli ($servidor, $usuario, $senha, $base);

            //     // Criar e Excecutar a SQL para INSERIR os dados da tabela:
                $sql = 'SELECT imagem from tbl_banners';
                $resultado = $conexao->query($sql);

                $active = '';
                $i = 1;

            while($imagem = $resultado->fetch_assoc())
            {
                if ($i == 1)
                {
                    $active = 'active';
                }
                else
                {
                    $active = '';
                }

                echo '<div class="carousel-item ' . $active . '">';
                echo '    <img src="images/' . $imagem['imagem'] . '" class="d-block w-100" alt="...">';
                echo '</div>';

                $i++;
            }

            //Encerrar CONEXÃO com a Base de Dados:
            $conexao->close();

            ?>

            </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>


            </button> 
            </div>
            <form action="banner.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Título</label>
                <input name="campo-titulo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea name="campo-descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Imagem do Banner</label>
                <input name="campo-imagem" class="form-control" type="file" id="formFile" accept=".png, .jpg">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
            
    </div>

        </form>
    <footer>
        
    </footer>
</body>
</html>