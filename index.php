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
              <figcaption class="figure-caption">Conhe??a tudo sobre BULLY.</figcaption>
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
                        Bully ?? um jogo eletr??nico de a????o-aventura desenvolvido pela Rockstar Vancouver e publicado
                        pela Rockstar Games.
                        Foi lan??ado em 17 de outubro de 2006 para PlayStation 2.
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
                                A hist??ria acompanha Jimmy Hopkins, um adolescente que foi expulso de todas as escolas
                                por que passou.
                                Deixado ?? pr??pria sorte ap??s a m??e abandon??-lo em Bullworth para curtir a sua quinta lua
                                de mel, Jimmy tem um ano escolar inteiro pela frente,
                                enquanto trabalha para conseguir subir na escala social dessa institui????o decadente onde
                                supostamente o ensino ?? o foco,
                                defendendo o que ele pensa ser correto e indo para cima dos mentirosos, trapaceiros e
                                pretensiosos que s??o os membros mais populares do corpo estudantil.

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
                                Shawn lee, criador da trilha sonora ?? um m??sico norte-americano que hoje vive em Londres
                                tamb??m
                                foi o respons??vel por trilhas de outros games como The Getaway e Tales From The
                                Borderlands,
                                e tem uma vida ativa como m??sico. Na trilha de Bully ?? poss??vel ouvir uma s??rie de sons
                                criados de forma bastante org??nica,
                                respons??veis por moldar os ambientes da Bullworth Academy, escola onde tudo acontece.
                                Com linhas de baixo, viol??es, guitarras e batidas, a nostalgia est?? garantida para quem
                                se acostumou a jogar com Jimmy.
                                Voc?? pode ouvir agora mesmo:
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
                                Rockstar Games, Inc. ?? uma produtora e publicadora de jogos eletr??nicos fundada em 1994.
                                Conhecida por ter criado grandes nomes dos jogos eletr??nicos,
                                a Rockstar ?? criadora das famosas s??ries Grand Theft Auto, Red Dead, Midnigth Club,
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
                                O jogo ?? composto por 6 cap??tulos sendo eles:
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
                                Um truque no <strong>dodgeball</strong>, bem conhecido entre os jogadores ?? ser mortal
                                no minigame de queimada ???
                                Quando os advers??rios tiverem a bola durante uma partida, rapidamente pressione abra a
                                tela de ajuda.
                                Dessa forma, mesmo depois de atingidos, os jogadores da sua equipe n??o sofrer??o dano.
                                </br>
                                <strong> Ganhe dinheiro extra</strong>> ??? Segure L1 e pressione tri??ngulo, quadrado,
                                c??rculo e X.
                                </br>
                                <strong>Ganhe muni????o infinita</strong>> ??? Segure o L1 e pressione cima, baixo, cima e
                                baixo.
                                </br>
                                <strong>Desbloqueie todas as armas</strong>> ??? Segure L1 e pressione cima, cima, cima e
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
                                O <strong>Bully 2</strong> ?? um sonho para todo f?? mas, nem tudo acaba do jeito que
                                queremos. Pode haver possibilidade continua????o da saga por??m n??o crie muitas
                                expectativas.
                                Voc?? pode se informar no link ao lado:
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
                        Conhe??a todo o mapa de Bully agora!!!
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
                                A escola est?? localizada na regi??o da Nova Inglaterra dos Estados Unidos. 
                                A escola ?? um projeto neog??tico e se assemelha ao Fettes College, em Edimburgo. 
                                De acordo com Jimmy Hopkins, tem a reputa????o de ser uma das escolas mais dif??ceis e piores do pa??s.
                                A escola ?? composta por nove edif??cios principais: o dormit??rio dos meninos, o dormit??rio das meninas, o edif??cio principal, a biblioteca, a oficina de autom??veis, Harrington House, o gin??sio, o Jocks Clubhouse e o Observat??rio. 
                                Existem outros edif??cios, mas eles n??o t??m um papel importante no jogo.

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
                                Blue Skies Industrial Park ?? localizado a sudeste da cidade de Bullworth. 
                                Com exce????o de um pequeno bairro residencial, ?? dominada por f??bricas e armaz??ns. 
                                M??quinas industriais pesadas como tratores podem ser visto perambulando pelas ruas. 
                                H?? tamb??m um cais que ocupa grande parte dessa regi??o.
                                A popula????o dessa parte da cidade ?? composta quase que completamente por fam??lias de baixa renda,a ??rea residencial possui um grande n??mero de trailers e casas em p??ssimas condi????es. 
                                Estudantes de Bullworth raramente aparecem por l??, ?? a regi??o onde moram o intregantes da fac????o dos Townies.
                                O Asylum est?? a sudoeste de Blue Skies, e ?? considerada o seu pr??prio bairro, em vez de uma parte da Blue Skies.


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
                                Tem v??rias lojas e estabelecimentos e um bairro repleto de pr??dios residenciais na regi??o nordeste. 
                                Tem tamb??m uma zona industrial na parte sul, perto de Blue Skies. 
                                Os Greasers s??o constantementes vistos por aqui, eles apostam corridas por toda essa regi??o, gritando e perturbando os moradores. 
                                Townies tamb??m s??o vistos l?? freq??entemente, embora geralmente individualmente e n??o em grupos. 
                                Combates entre Greasers e Townies s??o bastante comuns.
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
                                N??o tem muito mais que uma ??rea residencial e alguns edif??cios de apartamentos. 
                                A maioria da ??rea ?? ocupada por pequenas empresas. 
                                ?? habitada por fam??lias de classe m??dia e classe m??dia alta, ?? relativamente limpa, com exce????o de alguns becos sujos.
                                A cidade ?? freq??entada principalmente por Nerds , Greasers , e Townies. ?? a menor regi??o de Bullworth.
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
                                Old Bullworth Vale ?? uma ??rea comercial e residencial, est?? localizada na parte noroeste da cidade de Bullworth. 
                                Ela ?? constru??da ao lado de uma grande colina. 
                                Na base da colina h?? v??rias pequenas empresas e um grande centro comercial ao ar livre. 
                                H?? tamb??m uma ??rea residencial onde os Preppies e suas fam??lias ricas vivem, voc?? pode encontrar grandes casar??es com enormes jardins. Essa ?? a ??nica parte da cidade com uma praia, onde fica o farol do Preppries, existem tamb??m algumas ilhas e um n??vio afundado. 
                                H?? tamb??m o Carnival, frequentado por quase todos os jovens de Bullworth.

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <strong>
                                    Atra????es do Parque de Divers??es
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                O Parque de Divers??es de Bullworth est?? localizado em Old Bullworth Vale (visitado no in??cio do segundo cap??tulo) e s?? estar?? aberto de noite. 
                                O parque est?? repleto de v??rios mini-games e outra atra????es para a sua divers??o (al??m do campeonato de Go-Kart). 
                                Abaixo est?? uma lista de tudo o que voc?? pode fazer no parque:
                                Nota: Se voc?? completar todas as aulas de Artes voc?? vai ganhar o dobro de tiquetes.

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
                        O jogo Bully ?? composto por v??rios personagens, na lista ao lado voc?? vai ver os mais relevantes
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
                                Jimmy tem 15 anos e ?? menor em altura do que a maioria dos alunos, mas ?? razoavelmente
                                atarracado.
                                Ele tem sardas nas bochechas e usa um brinco de ouro na orelha esquerda. Ele tamb??m tem
                                um corte de cabelo ruivo e olhos castanhos.
                                No in??cio do jogo, ele veste uma jaqueta marrom por cima de uma camiseta branca, com
                                cal??a jeans desbotada e t??nis branco.
                                Seu uniforme escolar consiste em um colete azul Bullworth sobre uma camisa branca com
                                cal??a escolar c??qui.

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
                                Gary tem uma reputa????o muito ruim entre os outros alunos e at?? mesmo os funcion??rios da
                                escola.
                                Ele ?? descrito por Algie como um sociopata, Pinky afirma que gosta de torturar pessoas.
                                Gary admite que sofre de ADD, e tamb??m mostra tra??os de narcisismo e paran??ia, muitas
                                vezes imaginando que est?? no comando de um grande imp??rio.


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
                                L??, ele foi descrito como um "cara normal" que gostava de assistir TV e jogar videogame,
                                mas tamb??m admitiu gostar de arte.
                                Ele alegou ter a pontua????o m??xima na m??quina de arcade Future Racer no dormit??rio dos
                                meninos,
                                embora no momento em que Bully foi lan??ado, Future Street Racer n??o tinha um recurso de
                                pontua????o alta.
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
                                Crabblesnitch acredita que "consertar" crian??as problem??ticas ?? sua voca????o na vida.
                                Ele ?? hip??crita, pomposo e condescendente com os alunos, e mant??m extensos registros
                                permanentes de todos os seus maus comportamentos, menores e maiores.
                                No entanto, ele ?? alheio a alguns dos acontecimentos na escola.
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
                                Zoe ?? nativa da cidade de Bullworth. Ela mora na maior casa do Blue Skies Industrial
                                Park, um outrora agrad??vel de dois andares com uma varanda na frente.
                                Muito pouco se sabe sobre sua vida dom??stica, embora ela aparentemente tenha um
                                relacionamento turbulento com sua m??e e discuta com ela com frequ??ncia.
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
                                Russell, devido ao seu tamanho enorme e for??a incr??vel, ?? o aluno mais temido do campus.
                                Ele pode ??s vezes intimidar e atacar os Prefeitos e outras autoridades.
                                No entanto, ele ainda pode ser preso como qualquer outro aluno.
                                ?? poss??vel que sua imensa for??a seja a raz??o pela qual os Jocks, Preppies e Greasers n??o
                                se incomodam com os Bullies, pois eles n??o s??o p??reo para ele, e ele ?? conhecido por
                                intimid??-los.

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
                                Johnny ?? conhecido em toda a escola por seu temperamento quente, talento natural com
                                bicicletas e sua devo????o irremedi??vel a Lola, apesar de sua infidelidade.
                                Ele tamb??m est?? muito preocupado com sua imagem, referindo-se a si mesmo como "O Rei por
                                aqui", e ?? paran??ico com as pessoas que n??o o levam a s??rio e riem dele pelas costas.
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
                                Mandy ?? a l??der do Esquadr??o de L??deres de Torcida da escola, e a auto-proclamada e
                                reconhecida abelha rainha da escola em geral.
                                Ela namora Ted e se considera a garota mais popular e mais bonita da escola.
                                Ela ?? condescendente e desagrad??vel com pessoas que n??o s??o socialmente proeminentes o
                                suficiente para seu gosto.
                                Sup??e-se durante a Discri????o Assegurada que Mandy e Ted se separaram.
                                Por baixo disso, no entanto, ela ?? insegura, mesmo admitindo isso em um ponto.

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
                                Devido a apenas algumas apari????es em cutscenes e o fato de ele n??o comparecer a
                                Bullworth, Edgar ?? um dos personagens mais remotos e misteriosos do jogo.
                                A ??nica coisa conhecida sobre seu passado ?? que seus pais n??o podiam mand??-lo para a
                                Bullworth Academy, e ele se ressentiu da escola desde ent??o.


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
                                Pinky ?? atraente, mas muito mimado.
                                Ela se v?? como uma princesa e exige ser tratada como uma.
                                Ela ?? a ??nica garota no grupo dos Preppies e, como os outros Preps, ?? hostil e
                                condescendente com as pessoas que considera abaixo de sua classe social.
                                Ao contr??rio da maioria dos outros, no entanto, ela tem um leve fasc??nio pela vida dos
                                menos abastados.
                                Ela sente que eles s??o mais "reais" e reclama que n??o tem permiss??o para socializar com
                                pessoas fora da faixa de impostos de seu pai.
                                Ela vai namorar garotos de uma classe social mais baixa e tamb??m doa roupas velhas para
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
                                Earnest ?? o l??der dos Nerds e governa seu grupo com m??o de ferro.
                                Ele ?? simultaneamente inteligente e arrogante.
                                Ele tamb??m tem uma mente suja, com Jimmy pegando ele murmurando fantasias para si mesmo
                                em uma ocasi??o.
                                Ele est?? regularmente na posse de revistas sujas que, de acordo com seu di??logo, ele ??s
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
                                Ted raramente ?? visto sem Damon, e ele tamb??m namora Mandy.
                                Ele ?? o quarterback estrela do time de futebol Bullworth Bullhorns, bem como o capit??o
                                da equipe.
                                Seu n??mero de equipe ?? 0 (n??o deve ser confundido com o n??mero 00 de Bo).

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
                                Beatrice ?? constantemente intimidada verbalmente por alguns dos alunos do sexo masculino
                                e feminino, especialmente Mandy.
                                Mandy se recusa a permitir que Beatrice entre no time de l??deres de torcida, ao qual
                                Beatrice retalia, recusando-se a permitir que Mandy obtenha ajuda com seus trabalhos de
                                classe dos grupos de estudo que os Nerds administram.
                                Ela considera Bucky um bom amigo.
                                Troy menciona um boato de que Beatrice ?? "uma vagabunda que bate nos meninos Nerd".

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
                                Derby, que se pronuncia "Darby" como a cidade inglesa, ?? o mais 'sangue azul' de toda a
                                camarilha dos Preppies.
                                Sua fam??lia j?? ?? um dos principais benfeitores da escola, e a casa da fraternidade dos
                                Preppies ?? at?? chamada de "Harrington House".
                                Embora n??o se saiba muito sobre sua vida familiar, pode-se deduzir que eles est??o
                                envolvidos no neg??cio do petr??leo.


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