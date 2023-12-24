<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/style.css" media="all">
</head>

<body>
    <!---- <audio preload="auto" autoplay loop> ---->
    <!----    <source src="videoplayback.m4a" type="audio/mp4"> ---->
    <!----  </audio>  ---->


    <header>
        <div id='login'>
            <h1>
                <?php echo 'Bem-vindo, ' . $_SESSION['usuario']; ?>
            </h1>

            <div class='tooltip'>
                <a href="../request/login.php">
                    <i class="material-icons">
                        meeting_room
                    </i>
                </a>
                <div class='tooltip-text'>
                    Sair
                </div>
            </div>
        </div>

    </header>
    <nav>
        <a href="#">Home</a>
        <a href="workout">Treino</a>
        <a href="login">Login</a>
        <a href="#">Contato</a>
    </nav>



    <main>
        <section>

            <p>Em nosso site, estamos comprometidos em proporcionar uma experiência única e personalizada para
                ajudar
                você a atingir seus objetivos de condicionamento físico</p>
            <section>
                <ul>
                    <li>Criar treinos</li>
                    <li>Relatórios semanais de desempenho</li>
                    <li>Login</li>
                    <li>Compartilhas conquistas</li>

                </ul>
            </section>
            <h2 class="title">Cadastro e Perfil Personalizado</h2>

            <article>
                <p>No <strong>GymUP</strong>, oferecemos um processo de cadastro intuitivo, permitindo que você crie
                    e
                    acesse seu perfil personalizado. Isso proporciona uma experiência única, adaptada às suas metas
                    individuais de condicionamento físico.</p>

                <p>
                <div class="citacao">
                    <blockquote>Que desgraça é para o homem envelhecer sem nunca ver a beleza e
                        força
                        que o seu corpo é capaz!"
                        Sócrates </blockquote>
                    </p>
                </div>
                <h2 class="title">Crie Seus Próprios Treinos</h2>
                <p>Colocamos nas suas mãos o poder de criar treinos personalizados. Escolha entre uma variedade de
                    exercícios, defina séries, repetições e personalize seu treino de acordo com suas necessidades
                    específicas.</p>
                <h2 class="title">Registro Detalhado de Treinamentos</h2>
                <p>Registre cada detalhe do seu treino, desde a escolha dos exercícios até os pesos utilizados.
                    Mantenha
                    um
                    histórico detalhado para acompanhar o seu progresso ao longo do tempo.</p>
                <h2 class="title">Relatórios de Desempenho Visuais</h2>
                <p>Nossa plataforma gera relatórios de desempenho visualmente atraentes com base nos seus dados de
                    treinamento. Gráficos e estatísticas fornecem uma visão clara do seu progresso e áreas que podem
                    ser
                    aprimoradas.</p>
                <h2 class="title">Dicas Personalizadas para Melhoria</h2>
                <p>Com base nos seus dados de treinamento, fornecemos dicas personalizadas para aprimorar seus
                    treinos.
                    Seja
                    ajustando a intensidade, sugerindo novos exercícios ou adaptando sua rotina, estamos aqui para
                    ajudar
                    você a alcançar seu potencial máximo.</p>
                <aside>
                    <p>Conforme dados do Instituto Brasileiro de Geografia e Estatística (IBGE), cerca de 47% dos
                        brasileiros são sedentários. Já entre os jovens o número é maior e ainda mais alarmante: 84%.
                    </p>
                </aside>
                <h2 class="title">Compartilhe Suas Conquistas</h2>
                <p>Celebre suas conquistas compartilhando seus marcos e progressos com outros usuários ou nas redes
                    sociais.
                    Crie uma comunidade de apoio e motivação.</p>
                <h2 class="title">Segurança dos Dados</h2>
                <p>Sua privacidade é nossa prioridade. Implementamos medidas rigorosas para garantir a segurança dos
                    seus
                    dados pessoais e de desempenho físico.</p>
                <h2 class="title">Feedback Constante</h2>
                <p>Valorizamos sua opinião. Oferecemos um sistema de feedback para que você possa compartilhar suas
                    experiências, sugestões e contribuir para a melhoria contínua da nossa plataforma.</p>
            </article>
        </section>
        <div class="div-flex">

            <aside style="background-color: rgba(0, 0, 0, 0.514);">
                <p>
                    No <strong>GymUP</strong>, acreditamos que a jornada para um estilo de vida mais saudável é única
                    para
                    cada pessoa. Estamos aqui para fornecer as ferramentas e o suporte necessários para tornar sua
                    jornada
                    de condicionamento físico uma experiência gratificante e bem-sucedida. Junte-se a nós e transforme
                    sua
                    visão em realidade!
                </p>
                <div class="imagem">
                    <img style="margin: auto;" src="imagems/frente.png" alt="Musculos em um Corpo Humano">
                </div>
            </aside>
        </div>

    </main>


    <footer>
        <p>Site desenvolvido por <a class='externo ' href="https://github.com/gustavocristovam" target="_blank">Gustavo
                Cristovam</a></p>
    </footer>

</html>