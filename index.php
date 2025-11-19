<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raios Vitais</title>
</head>
<body>
    <?php 
    include('header.php');
    ?>
    <main>  
        <div class="bem_vindo" id="bem_vindo">
            <h1>Bem-vindo ao Raios Vitais</h1>
            <p>Seu portal de informações sobre saúde e bem-estar.</p>
        </div>
        <!-- Serviços -->

        <h2 class="titulo_servicos" id="servicos">Serviços</h2>
        <div class="serviços">
            <section class="Cards">
                <img src="img/Massagem_costas.jpg" alt="Massagem nas costas">
                <h3>Massagem nas costas</h3>
                <p>
                    Massagem nas costas com direito a soco na costela!
                    bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla
                </p>
                <a href="#">
                    <button>Ver mais</button>
                </a>
                <a href="#">
                    <button class="hide">Fazer agendamento</button>
                </a>
            </section>
            <section class="Cards">
                <img src="img/Massagem_pescoco.jpg" alt="Massagem no pescoço">
                <h3>Massagem no pescoço</h3>
                <p class="descricao-bas">
                    Massagem no pescoço com direito a mata leão!
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                </p>
                <p class="descricao-comp desc-hide">
                    Massagem no pescoço com direito a mata leão!
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla
                </p>

                <a href="#">
                    <button>Ver mais</button>
                </a>
                <a href="#">
                    <button class="hide">Fazer agendamento</button>
                </a>
                
            </section>
            <section class="Cards">
                <img src="img/Massagem_rosto.jpeg" alt="Massagem no rosto">
                <h3>Massagem no rosto</h3>
                <p>
                    Massagem no rosto com direito a quebra queixo!
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                </p>
                <a href="#">
                    <button>Ver mais</button>
                </a>
                <a href="#">
                    <button class="hide">Fazer agendamento</button>
                </a>
            </section>

            <section class="Cards">
                <img src="img/Massagem_pes.jpeg" alt="Massagem nos pés">
                <h3>Massagem nos pés</h3>
                <p>
                    Massagem nas pés com direito a cócegas!
                    bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla
                </p>
                <a href="#">
                    <button>Ver mais</button>
                </a>
                <a href="#">
                    <button class="hide">Fazer agendamento</button>
                </a>
            </section>
            <section class="Cards">
                <img src="img/Massagem_pernas.jpg" alt="Massagem nas pernas">
                <h3>Massagem nas pernas</h3>
                <p>
                    Massagem nas costas com direito a chave de pernas!
                    bla bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla
                </p>
                <a href="#">
                    <button>Ver mais</button>
                </a>
                <a href="#">
                    <button class="hide">Fazer agendamento</button>
                </a>
            </section>
            <section class="Cards">
                <img src="img/Massagem_abdomen.jpg" alt="Massagem no abdômen">
                <h3>Massagem no abdômen</h3>
                <p>
                    Massagem no abdômen com direito a acupuntura!
                    bla bla bla bla bla bla bla bla bla bla bla
                    bla bla bla bla bla bla bla bla bla bla bla
                </p>
                <a href="#">
                    <button>Ver mais</button>
                </a>
                <a href="#">
                    <button class="hide">Fazer agendamento</button>
                </a>
            </section>
            
        </div>
        <button class="Esconder">MostrarMais</button>
        <button class="Esconder hide">Esconder</button>
    </main> 
    <!-- Funcionarios -->
    <div class="funcionarios" id="funcionarios">
        <h2 class="titulo_funcionarios">Funcionários</h2>
        <article>
            <img src="img/Fernanda.jpg" alt="Fernanda">
            <div class="info_funcionario">
                <h3>Fernanda</h3>
                <p>Fernanda é uma pedóloga experiente, especializada em cuidados com os pés. Ela se destaca por sua atenção à saúde, conforto e bem-estar dos clientes, oferecendo tratamentos que unem técnica e sensibilidade.</p>
            </div>
        </article>
        <article>
            <img src="img/Alice.jpg" alt="Alice">
            <div class="info_funcionario">
                <h3>Alice</h3>
                <p>Alice é uma esteticista dedicada, apaixonada por realçar a beleza e a autoestima das pessoas. Atua com diversos procedimentos faciais e corporais, sempre prezando por qualidade e resultados visíveis.</p>
            </div>
        </article>
        <article>
            <img src="img/Debora.jpg" alt="Débora">
            <div class="info_funcionario">
                <h3>Débora</h3>
                <p>Débora é uma massagista competente e acolhedora, especialista em promover relaxamento e aliviar tensões musculares. Suas massagens combinam técnica e empatia, proporcionando bem-estar físico e mental.</p>
            </div>
        </article>
    </div>
    <!-- Footer -->
    <footer id="contato">
        <div class="contato">
            <a href="#" class="whats"></a>
            <a href="#" class="facebook"></a>
            <a href="#" class="insta"></a>
        </div>
        <div class="localizacao">
            <p>Endereço: Rua da Saúde, 123, Cidade, Estado</p>
            <p>Telefone: (11) 1234-5678</p>
            <p>Email: raiosvitais@gmail.com</p>
        </div>
        <p>&copy; 2024 Raios Vitais. Todos os direitos reservados.</p>
    </footer>
    <script src="js/java.js" defer></script>
</body>
</html>