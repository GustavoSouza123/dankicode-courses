<?php
    if(isset($_GET['logout'])) {
        Panel::logout();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras,chave,do,meu,website">
    <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico"> <!-- website icon -->
    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">

    <!-- style.css file -->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PANEL; ?>css/style.css" />

    <title>Painel de controle</title>
</head>
<body>
    <!-- loader -->
    <div class="loading">
        <img src="<?php echo INCLUDE_PATH; ?>ajax/ajax-loader.gif" alt="Ajax loading gif" />
    </div>
    
    <header>
        <div class="menu-toggle">
            <div class="content">
                <span></span>
                <span></span>
                <span></span>
            </div>
         </div>

        <div class="btns">
<a class="btn home-page" href="<?php echo INCLUDE_PATH; ?>" target="_blank">
                <!-- icon -->
                Página Inicial
            </a>
            <a class="btn logout" href="?logout">
                <!-- icon -->
                Sair
            </a>
        </div>
    </header>

    <aside>
        <div class="profile">
                <?php
                    if($_SESSION['img'] == '') {
                ?>
                <div class="profile-photo">
                    <img src="../images/user.png" alt="User profile photo" />
                </div>
                <?php
                    } else {
                ?>
                <div class="profile-photo">
                    <img src="<?php echo INCLUDE_PATH_PANEL; ?>uploads/<?php echo $_SESSION['img']; ?>" alt="User profile photo" />
                </div>
                <?php } ?>
            <div class="name"><?php echo ucfirst($_SESSION['name']); ?></div>
            <div class="role"><?php echo ucfirst($_SESSION['role']); ?></div>
        </div>

        <nav>
            <ul class="actions">
                <li class="action-title">Cadastro</li>
                <li class="action"><a href="">Cadastrar Slides</a></li>
                <li class="action"><a href="">Cadastrar Depoimento</a></li>
                <li class="action"><a href="">Cadastrar Serviço</a></li>

                <li class="action-title">Gestão</li>
                <li class="action"><a href="">Listar Slides</a></li>
                <li class="action"><a href="">Listar Depoimentos</a></li>
                <li class="action"><a href="">Listar Serviços</a></li>

                <li class="action-title">Administração do painel</li>
                <li class="action"><a href="">Editar usuário</a></li>
                <li class="action"><a href="">Adicionar Usuário</a></li>            

                <li class="action-title">Configuração Geral</li>
                <li class="action"><a href="">Editar Site</a></li>
            </ul>
        </nav>
    </aside>

    <main class="control-panel">
        <div class="opacity"></div>

        <section class="section1">
            <h1>Painel de Controle - Website</h1>
            <div class="content">
                <div class="online-users">
                    <p class="title">Usuários Online</p>
                    <div class="data">0</div>
                </div>
                <div class="visits-total">
                    <p class="title">Total de Visitas</p>
                    <div class="data">0</div>
                </div>
                <div class="visits-today">
                    <p class="title">Visitas Hoje</p>
                    <div class="data">0</div>
                </div>
            </div>
        </section>

        <section class="section2">
            <h1>Usuários Online no Site</h1>
            <div class="content"></div>
        </section>

        <section class="section3">
            <h1>Usuários do Painel</h1>
            <div class="content"></div>
        </section>
    </main>

    <!-- scripts -->
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script> <!-- jQuery -->
    <script src="<?php echo INCLUDE_PATH_PANEL ?>js/panel.js"></script> <!-- main panel script -->
</body>
</html>
