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
                    Focada em aliviar tensões musculares acumuladas na região dorsal. 
                    Melhora a circulação, reduz dores e proporciona profundo relaxamento.
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
                    Indicada para aliviar rigidez e desconfortos causados por estresse ou 
                    má postura. Ajuda a soltar a musculatura e aumentar a mobilidade.
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
                    Técnica suave que estimula a circulação facial, reduz inchaço, 
                    promove relaxamento e pode melhorar o aspecto da pele.
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
                    Trabalha pontos de tensão e estimula a circulação. 
                    Proporciona alívio imediato do cansaço e sensação de leveza.
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
                    Indicada para reduzir inchaço, melhorar o retorno venoso e 
                    aliviar dores musculares após esforço ou longos períodos em pé.
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
                    Auxilia na melhora do funcionamento intestinal, redução de inchaço e 
                    relaxamento da musculatura abdominal, promovendo bem-estar geral.
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