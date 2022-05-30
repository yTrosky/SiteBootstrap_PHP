<html>
    <head>
    <title>Links<?php echo $_GET['op']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
        
    </head>
    <body>
    <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img src="img/wow.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Bully
          </a>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg Navbar-dark bg-dark">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Mais
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php?op=2">Game Info</a>
                  <a class="dropdown-item" href="index.php?op=3">Lugares</a>
                  <a class="dropdown-item" href="index.php?op=4">Personagens</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <?php if(!isset($_GET['op'])) { ?>

      <div class="row">
      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/download.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Bully-Capa.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Bully-capa-890x466.jpg" alt="Third slide">
            </div>
            <div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col">
              &nbsp;
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col">
            <figure class="figure">
              <img src="img/rockstar.jpg" class="rounded float-start" alt="...">
              <figcaption class="figure-caption">Conheça tudo sobre BULLY.</figcaption>
          </div>

          <div class="col"style="text-align:center">
            <figure class="figure">
            <img src="img/oi.png" class="rounded mx-auto d-block" alt="...">
            <figcaption class="figure-caption text-center">Aprenda todos os truques.</figcaption>
          </div>
          <div class="col"style="text-align: right">
            <figure class="figure">
              <img src="img/logooooo.jpeg" class="rounded float-end" alt="...">
              <figcaption class="figure-caption text-end">Saiba todos os personagens.</figcaption>
          </div>
    </div>
    </div>
    <?php }else{ ?>  
                  <?php if($_GET['op'] == 2) { ?>

        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <figure class="figure">
                    <img class="d block w-100" src="img/bully-1200x900.png" class="rounded float-start" alt="...">
                    &nbsp;

                    <h3>
                        Bully game
                    </h3>
                    <p>
                        Bully é um jogo eletrônico de ação-aventura desenvolvido pela Rockstar Vancouver e publicado
                        pela Rockstar Games.
                        Foi lançado em 17 de outubro de 2006 para PlayStation 2.
                    </p>
            </div>
            <div class="col">
                <h3>
                    Game info:
                </h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>
                                    Game description
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                A história acompanha Jimmy Hopkins, um adolescente que foi expulso de todas as escolas
                                por que passou.
                                Deixado à própria sorte após a mãe abandoná-lo em Bullworth para curtir a sua quinta lua
                                de mel, Jimmy tem um ano escolar inteiro pela frente,
                                enquanto trabalha para conseguir subir na escala social dessa instituição decadente onde
                                supostamente o ensino é o foco,
                                defendendo o que ele pensa ser correto e indo para cima dos mentirosos, trapaceiros e
                                pretensiosos que são os membros mais populares do corpo estudantil.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>
                                    Soundtrack
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Shawn lee, criador da trilha sonora é um músico norte-americano que hoje vive em Londres
                                também
                                foi o responsável por trilhas de outros games como The Getaway e Tales From The
                                Borderlands,
                                e tem uma vida ativa como músico. Na trilha de Bully é possível ouvir uma série de sons
                                criados de forma bastante orgânica,
                                responsáveis por moldar os ambientes da Bullworth Academy, escola onde tudo acontece.
                                Com linhas de baixo, violões, guitarras e batidas, a nostalgia está garantida para quem
                                se acostumou a jogar com Jimmy.
                                Você pode ouvir agora mesmo:
                                <a target="_blank" href="https://www.youtube.com/watch?v=appJZrqNYPg">Clique aqui </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>
                                    Developer
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Rockstar Games, Inc. é uma produtora e publicadora de jogos eletrônicos fundada em 1994.
                                Conhecida por ter criado grandes nomes dos jogos eletrônicos,
                                a Rockstar é criadora das famosas séries Grand Theft Auto, Red Dead, Midnigth Club,
                                Bully, Max Payne e Manhunt
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>
                                    Chapters
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O jogo é composto por 6 capítulos sendo eles:
                                </br>
                                <strong>Chapter I</strong>: Making New Friends and Enemies
                                </br>
                                <strong>Chapter II</strong>: Rich Kid Blues
                                </br>
                                <strong>Chapter III</strong>: Love Makes The World Go Around
                                </br>
                                <strong>Chapter IV</strong>: A Health Mind In a Health Body, And Other Lies
                                </br>
                                <strong>Chapter V</strong>: The Fall and Rise of Jimmy Hopkins, Aged 15
                                </br>
                                <strong>Chapter VI</strong>: Endless Summer
                                </br>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>
                                    Truques
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Um truque no <strong>dodgeball</strong>, bem conhecido entre os jogadores é ser mortal
                                no minigame de queimada –
                                Quando os adversários tiverem a bola durante uma partida, rapidamente pressione abra a
                                tela de ajuda.
                                Dessa forma, mesmo depois de atingidos, os jogadores da sua equipe não sofrerão dano.
                                </br>
                                <strong> Ganhe dinheiro extra</strong>> – Segure L1 e pressione triângulo, quadrado,
                                círculo e X.
                                </br>
                                <strong>Ganhe munição infinita</strong>> – Segure o L1 e pressione cima, baixo, cima e
                                baixo.
                                </br>
                                <strong>Desbloqueie todas as armas</strong>> – Segure L1 e pressione cima, cima, cima e
                                cima.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <strong>
                                    Bully 2
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O <strong>Bully 2</strong> é um sonho para todo fã mas, nem tudo acaba do jeito que
                                queremos. Pode haver possibilidade continuação da saga porém não crie muitas
                                expectativas.
                                Você pode se informar no link ao lado:
                                <a target="_blank"
                                    href="https://www.terra.com.br/gameon/bully-2-era-mesmo-real-mas-foi-cancelado-por-problemas-internos,a89425c9f79c0dc212b05c86bff2074bjti7560e.php">Clique
                                    aqui </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
                    <?php } else if($_GET['op'] == 3) { ?>
                      <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <figure class="figure">
                    <img class="d block w-100" src="img/map.jpg" class="rounded float-start" alt="...">
                    &nbsp;

                    <h3>
                        Lugares
                    </h3>
                    <p>
                        Conheça todo o mapa de Bully agora!!!
                    </p>
            </div>
            <div class="col">
                <h2>
                    Mais influentes:
                </h2>

                &nbsp;

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>
                                    Bullworth Academy
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                A escola está localizada na região da Nova Inglaterra dos Estados Unidos. 
                                A escola é um projeto neogótico e se assemelha ao Fettes College, em Edimburgo. 
                                De acordo com Jimmy Hopkins, tem a reputação de ser uma das escolas mais difíceis e piores do país.
                                A escola é composta por nove edifícios principais: o dormitório dos meninos, o dormitório das meninas, o edifício principal, a biblioteca, a oficina de automóveis, Harrington House, o ginásio, o Jocks Clubhouse e o Observatório. 
                                Existem outros edifícios, mas eles não têm um papel importante no jogo.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>
                                    Blue Skies Industrial Park
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Blue Skies Industrial Park é localizado a sudeste da cidade de Bullworth. 
                                Com exceção de um pequeno bairro residencial, é dominada por fábricas e armazéns. 
                                Máquinas industriais pesadas como tratores podem ser visto perambulando pelas ruas. 
                                Há também um cais que ocupa grande parte dessa região.
                                A população dessa parte da cidade é composta quase que completamente por famílias de baixa renda,a área residencial possui um grande número de trailers e casas em péssimas condições. 
                                Estudantes de Bullworth raramente aparecem por lá, é a região onde moram o intregantes da facção dos Townies.
                                O Asylum está a sudoeste de Blue Skies, e é considerada o seu próprio bairro, em vez de uma parte da Blue Skies.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>
                                    New Coventry
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                New Coventry se assemelha a um bairro de Nova York. 
                                Tem várias lojas e estabelecimentos e um bairro repleto de prédios residenciais na região nordeste. 
                                Tem também uma zona industrial na parte sul, perto de Blue Skies. 
                                Os Greasers são constantementes vistos por aqui, eles apostam corridas por toda essa região, gritando e perturbando os moradores. 
                                Townies também são vistos lá freqüentemente, embora geralmente individualmente e não em grupos. 
                                Combates entre Greasers e Townies são bastante comuns.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>
                                    Bullworth Town
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Bullworth Town fica ao norte da Bullworth Academy, entre Old Bullworth Vale e New Coventry. 
                                Não tem muito mais que uma área residencial e alguns edifícios de apartamentos. 
                                A maioria da área é ocupada por pequenas empresas. 
                                É habitada por famílias de classe média e classe média alta, é relativamente limpa, com exceção de alguns becos sujos.
                                A cidade é freqüentada principalmente por Nerds , Greasers , e Townies. É a menor região de Bullworth.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>
                                    Old Bullworth Vale
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Old Bullworth Vale é uma área comercial e residencial, está localizada na parte noroeste da cidade de Bullworth. 
                                Ela é construída ao lado de uma grande colina. 
                                Na base da colina há várias pequenas empresas e um grande centro comercial ao ar livre. 
                                Há também uma área residencial onde os Preppies e suas famílias ricas vivem, você pode encontrar grandes casarões com enormes jardins. Essa é a única parte da cidade com uma praia, onde fica o farol do Preppries, existem também algumas ilhas e um návio afundado. 
                                Há também o Carnival, frequentado por quase todos os jovens de Bullworth.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <strong>
                                    Atrações do Parque de Diversões
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O Parque de Diversões de Bullworth está localizado em Old Bullworth Vale (visitado no início do segundo capítulo) e só estará aberto de noite. 
                                O parque está repleto de vários mini-games e outra atrações para a sua diversão (além do campeonato de Go-Kart). 
                                Abaixo está uma lista de tudo o que você pode fazer no parque:
                                Nota: Se você completar todas as aulas de Artes você vai ganhar o dobro de tiquetes.

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
                      <?php } else{ ?>
                        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <figure class="figure">
                    <img class="d block w-100" src="img/bully-1200x900.png" class="rounded float-start" alt="...">
                    &nbsp;

                    <h3>
                        Personagens
                    </h3>
                    <p>
                        O jogo Bully é composto por vários personagens, na lista ao lado você vai ver os mais relevantes
                        do jogo.
                    </p>
            </div>
            <div class="col">
                <h2>
                    Mais influentes:
                </h2>

                &nbsp;

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>
                                    Jimmy Hopkins
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Jimmy tem 15 anos e é menor em altura do que a maioria dos alunos, mas é razoavelmente
                                atarracado.
                                Ele tem sardas nas bochechas e usa um brinco de ouro na orelha esquerda. Ele também tem
                                um corte de cabelo ruivo e olhos castanhos.
                                No início do jogo, ele veste uma jaqueta marrom por cima de uma camiseta branca, com
                                calça jeans desbotada e tênis branco.
                                Seu uniforme escolar consiste em um colete azul Bullworth sobre uma camisa branca com
                                calça escolar cáqui.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>
                                    Garry Smith
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Gary tem uma reputação muito ruim entre os outros alunos e até mesmo os funcionários da
                                escola.
                                Ele é descrito por Algie como um sociopata, Pinky afirma que gosta de torturar pessoas.
                                Gary admite que sofre de ADD, e também mostra traços de narcisismo e paranóia, muitas
                                vezes imaginando que está no comando de um grande império.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>
                                    Pete Kowalski
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pete foi um dos 7 alunos perfilados no Facebook Bullworth.
                                Lá, ele foi descrito como um "cara normal" que gostava de assistir TV e jogar videogame,
                                mas também admitiu gostar de arte.
                                Ele alegou ter a pontuação máxima na máquina de arcade Future Racer no dormitório dos
                                meninos,
                                embora no momento em que Bully foi lançado, Future Street Racer não tinha um recurso de
                                pontuação alta.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>
                                    Dr. Crabblesnitch
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Crabblesnitch acredita que "consertar" crianças problemáticas é sua vocação na vida.
                                Ele é hipócrita, pomposo e condescendente com os alunos, e mantém extensos registros
                                permanentes de todos os seus maus comportamentos, menores e maiores.
                                No entanto, ele é alheio a alguns dos acontecimentos na escola.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>
                                    Zoe Taylor
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Zoe é nativa da cidade de Bullworth. Ela mora na maior casa do Blue Skies Industrial
                                Park, um outrora agradável de dois andares com uma varanda na frente.
                                Muito pouco se sabe sobre sua vida doméstica, embora ela aparentemente tenha um
                                relacionamento turbulento com sua mãe e discuta com ela com frequência.
                                Nada se sabe sobre seu pai. Ela frequentou a Bullworth Academy, mas foi expulsa depois
                                de reclamar de ter sido assediada sexualmente pelo Sr. Burton um ano antes de Jimmy
                                chegar.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <strong>
                                    Russell Northrop
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Russell, devido ao seu tamanho enorme e força incrível, é o aluno mais temido do campus.
                                Ele pode às vezes intimidar e atacar os Prefeitos e outras autoridades.
                                No entanto, ele ainda pode ser preso como qualquer outro aluno.
                                É possível que sua imensa força seja a razão pela qual os Jocks, Preppies e Greasers não
                                se incomodam com os Bullies, pois eles não são páreo para ele, e ele é conhecido por
                                intimidá-los.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <strong>
                                    Johnny Vincent
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Johnny é conhecido em toda a escola por seu temperamento quente, talento natural com
                                bicicletas e sua devoção irremediável a Lola, apesar de sua infidelidade.
                                Ele também está muito preocupado com sua imagem, referindo-se a si mesmo como "O Rei por
                                aqui", e é paranóico com as pessoas que não o levam a sério e riem dele pelas costas.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <strong>
                                    Mandy Wiles
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Mandy é a líder do Esquadrão de Líderes de Torcida da escola, e a auto-proclamada e
                                reconhecida abelha rainha da escola em geral.
                                Ela namora Ted e se considera a garota mais popular e mais bonita da escola.
                                Ela é condescendente e desagradável com pessoas que não são socialmente proeminentes o
                                suficiente para seu gosto.
                                Supõe-se durante a Discrição Assegurada que Mandy e Ted se separaram.
                                Por baixo disso, no entanto, ela é insegura, mesmo admitindo isso em um ponto.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <strong>
                                    Edgar Munsen
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Devido a apenas algumas aparições em cutscenes e o fato de ele não comparecer a
                                Bullworth, Edgar é um dos personagens mais remotos e misteriosos do jogo.
                                A única coisa conhecida sobre seu passado é que seus pais não podiam mandá-lo para a
                                Bullworth Academy, e ele se ressentiu da escola desde então.


                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <strong>
                                    Pinky Gauthier
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pinky é atraente, mas muito mimado.
                                Ela se vê como uma princesa e exige ser tratada como uma.
                                Ela é a única garota no grupo dos Preppies e, como os outros Preps, é hostil e
                                condescendente com as pessoas que considera abaixo de sua classe social.
                                Ao contrário da maioria dos outros, no entanto, ela tem um leve fascínio pela vida dos
                                menos abastados.
                                Ela sente que eles são mais "reais" e reclama que não tem permissão para socializar com
                                pessoas fora da faixa de impostos de seu pai.
                                Ela vai namorar garotos de uma classe social mais baixa e também doa roupas velhas para
                                os menos afortunados.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                <strong>
                                    Earnest Jones
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Earnest é o líder dos Nerds e governa seu grupo com mão de ferro.
                                Ele é simultaneamente inteligente e arrogante.
                                Ele também tem uma mente suja, com Jimmy pegando ele murmurando fantasias para si mesmo
                                em uma ocasião.
                                Ele está regularmente na posse de revistas sujas que, de acordo com seu diálogo, ele às
                                vezes empresta e tem dificuldade em recuperar.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                <strong>
                                    Ted Thompson
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ted raramente é visto sem Damon, e ele também namora Mandy.
                                Ele é o quarterback estrela do time de futebol Bullworth Bullhorns, bem como o capitão
                                da equipe.
                                Seu número de equipe é 0 (não deve ser confundido com o número 00 de Bo).

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                aria-controls="collapseThirteen">
                                <strong>
                                    Beatrice Trudeau
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Beatrice é constantemente intimidada verbalmente por alguns dos alunos do sexo masculino
                                e feminino, especialmente Mandy.
                                Mandy se recusa a permitir que Beatrice entre no time de líderes de torcida, ao qual
                                Beatrice retalia, recusando-se a permitir que Mandy obtenha ajuda com seus trabalhos de
                                classe dos grupos de estudo que os Nerds administram.
                                Ela considera Bucky um bom amigo.
                                Troy menciona um boato de que Beatrice é "uma vagabunda que bate nos meninos Nerd".

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFourteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFourteen" aria-expanded="false"
                                aria-controls="collapseFourteen">
                                <strong>
                                    Derby Harrington
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Derby, que se pronuncia "Darby" como a cidade inglesa, é o mais 'sangue azul' de toda a
                                camarilha dos Preppies.
                                Sua família já é um dos principais benfeitores da escola, e a casa da fraternidade dos
                                Preppies é até chamada de "Harrington House".
                                Embora não se saiba muito sobre sua vida familiar, pode-se deduzir que eles estão
                                envolvidos no negócio do petróleo.


                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
                        <?php } ?>
            <?php } ?>

        </body>
        </html>  