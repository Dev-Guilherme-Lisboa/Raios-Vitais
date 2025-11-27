<head>
        <link rel="stylesheet" href="style.css">
</head>
<header class="navbar">
        <div class="titulo">
            <img src="img/Logo.png" alt="Logo Raios Vitais" class="logo">
            <h2 class="slogan">
                Centro de Estética Corporal e Facial <br> 
                Raios Vitais
            </h2>
            <h2 class="sloganDois slogan slogan-hide">
                Raios Vitais
            </h2>
        </div>
        <nav>
            <ul class="burg burg-hide">
                <li></li>
                <li></li>
                <li></li>
            </ul>

            <?php

                $url = $_SERVER['REQUEST_URI'];
                
            if ($url != '/vitais/clientes.php'){

                echo "<ul class='menu menu-hide'>
                <li><a href='#bem_vindo'>Inicio</a></li>
                <li><a href='#servicos'>Serviços</a></li>
                <li><a href='#funcionarios'>Funcionarios</a></li>
                <li><a href='#contato'>Contato</a></li>
                <li><a href='galeria.html'>Galeria</a></li>
                </ul>";

            } else{
                echo "<ul class='menu menu-hide'>
                <li><a href='http://localhost/vitais/index.php#bem_vindo'>Inicio</a></li>
                <li><a href='http://localhost/vitais/index.php#servicos'>Serviços</a></li>
                <li><a href='http://localhost/vitais/index.php#funcionarios'>Funcionarios</a></li>
                <li><a href='http://localhost/vitais/index.php#contato'>Contato</a></li>
                <li><a href='galeria.html'>Galeria</a></li>
                </ul>'";
            }
            ?>

            <!-- <li class="hide"><a href="login.html">Fazer agendamento</a></li> -->
            
        </nav>
        
    </header>
    <!-- Navbar -->
    
            <ul class="menu-dropdown dropdown-hide">
                <li><a href="#bem_vindo">Inicio</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#funcionarios">Funcionarios</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <!-- <li"><a href="login.html">Fazer agendamento</a></li> -->
            </ul>