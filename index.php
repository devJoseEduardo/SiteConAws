<?php

if(isset($_POST['submit']))
{

include_once('config.php');    

$nome = $_POST['nome'];
$email = $_POST['email'];

/*$telefone = $_POST['telefone'];*/
$txtPrincipal = $_POST['txtPrincipal'];
                                             //Tabela //Colunas da tabela do banco 
$result = mysqli_query($conexao,"INSERT INTO Tabela(TabColuna1,Tabcoluna2,Tabcoluna3) 
VALUES('$nome','$email','$txtPrincipal')");

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ECHOES</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets\img\LOGOPNG.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Transtornos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Artigos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Equipe</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="banner">
            <video autoplay muted>
                <source src="assets\img\imageminicial.mp4" type="video/mp4">
            </video>

        </div>   

        <!-- Masthead-->
        
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sobre</h2>
                    <h3 class="section-subheading text-muted">A Psicologia da Saúde é uma especialidade psicológica bem recente, constituindo uma disciplina que visa melhor entender as questões relativas à saúde. Ela se preocupa com a compreensão pedagógica, científica e específica da Psicologia, sustentando o objetivo de instrumentalizá-la no desenvolvimento e na preservação da saúde, na profilaxia e na cura das enfermidades, na apuração das causas e na determinação precisa das doenças que acometem os pacientes, e na melhoria da qualidade das políticas de Saúde. <br> <br> O Echoes site tem como objetivo explorar a importância da Psicologia em Saúde como uma disciplina essencial para a compreensão e promoção do bem-estar e da qualidade de vida. Serão abordadas as principais contribuições da Psicologia em Saúde nos diferentes contextos da saúde, desde a prevenção até a reabilitação, considerando tanto a perspectiva individual quanto a coletiva.</h3>
                </div>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Transtornos</h2>
    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets\img\DEPRESSÃOIMG.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Depressão</div>
                       
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets\img\ANSIEDADEIMG.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ansiedade</div>
                     
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets\img\TOCIMG.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Transtorno Obsessivo Compulsivo</div>
                       
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets\img\BIPOLARimg.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Transtorno Bipolar</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets\img\ESTRESSEimg.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Transtorno de estresse pós traumático</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets\img\BURNOUTimg.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sindrome de Bounout</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Artigos</h2>
         
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets\img\about\artigo1.jpg " alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Auto Cuidado</h4>
                                <h4 class="subheading">07/11/2009</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">-----</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets\img\about\artigo2.jpg " alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Inteligência Emocional</h4>
                                <h4 class="subheading">11/09/2021</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">---------</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets\img\about\artigo3.jpg " alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> Motivação</h4>
                                <h4 class="subheading">16/03/2022</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">----------</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets\img\about\artigo4.jpg " alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Resiliência</h4>
                                <h4 class="subheading">15/06/2020</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">-------------</p></div>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Psicóloga</h2>
                    <h3 class="section-subheading text-muted">.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="c:\Users\jails\AppData\Local\Packages\5319275A.WhatsAppDesktop_cv1g1gvanyjgm\TempState\8C5B18CBDFD35320A10729D3AAF1343B\Imagem do WhatsApp de 2023-10-06 à(s) 14.18.00_689bcfc9.jpg" alt="..." />
                            <h4>Davyla Gomes</h4>
                            <p class="text-muted">Psicologa Clínica</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>
                <div class="row">
                    
            </div>
        </section>
        <!-- Clients-->
       
        <!--<section class="page-section" id="contact">--->
            <section class="page-" id="co">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Formulário | GN</title>
                <style>
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                       /* background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));*/
                
                       /* background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
                        background-color: #1e90ff;*/
                    
                    }
            
                    .box {
                        color: white;
                       /* position: absolute;*/
                        top: 50%;
                        left: 50%;
                       /* transform: translate(-50%, -50%);*/
                        background-color: rgba(0, 0, 0, 0.6);
                        padding: 15px;
                        border-radius: 15px;
                        width: 20;
                    }
            
                    fieldset {
                        border: 3px solid dodgerblue;
                    }
            
                    legend {
                        border: 1px solid dodgerblue;
                        padding: 10px;
                        text-align: center;
                        background-color: dodgerblue;
                        border-radius: 8px;
                    }
            
                    .inputBox {
                        position: relative;
                    }
            
                    .inputUser {
                        background: none;
                        border: none;
                        border-bottom: 1px solid white;
                        outline: none;
                        color: white;
                        font-size: 15px;
                        width: 100%;
                        letter-spacing: 2px;
            
                    }
            
                    .labelImput {
                        position: absolute;
            
                    }
            
                    #data_nascimento {
                        border: none;
                        padding: 8px;
                        border-radius: 10px;
                        outline: none;
                        font-size: 15px;
                    }
            
                    #submit {
                        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
                        width: 100%;
                        border: none;
                        padding: 15px;
                        color: white;
                        font-size: 15px;
                        cursor: pointer;
                        border-radius: 10px;
                    }
                    #submit:hover{
                        background-image: linear-gradient(to right,rgb(0,80,172),rgb(80,19,195));
                    }
                </style>
            </head>
            
            <body>
                <div class="box">
               <!-- <form action="formulario.php" method="POST">--->
                    <form action="index.php" method="POST">
                        <fieldset>
                            <legend> <b>Contato</b></legend>
                            <br>
                            <div class="imputBox">
                                <input type="text" name="nome" placeholder="Nome Completo" id="nome" class="inputUser" required>
                                <label for="nome" class="labelImput"></label><!-- Nome Completo -->
                            </div>
                            <br>
                            <div class="imputBox">
                                <input type="email" name="email" placeholder="Email" id="email" class="inputUser" required>
                                <label for="email" class="labelImput"></label><!-- Email -->
                            </div>
                           
                             <div class="imputBox">
                             
                             <br>
                                <input type="text" name="txtPrincipal" placeholder="Seu texto" id="txtPrincipal" class="inputUser" required>
                                <label for="txtPrincipal" class="labelImput">
                                
                                </label>
                                <br>
                           
                            <!-- Nome Completo -->
                            </div><!--
                            <br><br>
                            <div class="imputBox">
                                <input type="tel" name="telefone" placeholder="Telefone" id="telefone" class="inputUser" required>
                                <label for="telefone" class="labelImput"></label><!--Telefone-->
                           
                                </div>

                            
                            <!-- Nome  <p>Sexo:</p>
                            <input type="radio" id="feminino" name="genero" value="feminino" required>
                            <label for="feminino">Feminino</label>
                            <br>
                            <input type="radio" id="masculino" name="genero" value="masculino" required>
                            <label for="masculino">Masculino</label>
                            <br>
                            <input type="radio" id="outro" name="genero" value="outro" required>
                            <label for="outro">Outro</label>
                            <br><br>
            
            
                            <label for="data_nascimento"><b>Data de Nascimento</b></label>
                            <input type="date" name="data_nascimento" id="data_nascimento" required>
            -->
                            <!-- Nome  
            <br><br><br>
                            <div class="imputBox">
                                <input type="text" name="cidade" placeholder="Cidade" id="cidade" class="inputUser" required>
                                <label for="cidade" class="labelImput"></label>
                            </div>
                            <br><br>
                            <div class="imputBox">
                                <input type="text" name="estado" placeholder="Estado" id="estado" class="inputUser" required>
                                <label for="estado" class="labelImput"></label>
                            </div>
                            <br><br>
            
                            <div class="imputBox">
                                <input type="text" name="endereco" placeholder="Endereço" id="endereco" class="inputUser" required>
                                <label for="endereco" class="labelImput"></label>
                            </div>
                            <br><br>
                            -->
            
                            <input type="submit" name="submit" id="submit">
            
                        </fieldset>
                    </form>
                </div>
            </body>
            
            </html>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><b>Depressão</b></h2>
                                 
                                    <img class="img-fluid d-block" src="assets\img\DEPRESSÃOIMG.jpg" alt="..." />
                                    <p>É uma doença psiquiátrica crônica e recorrente que produz uma alteração do humor caracterizada por uma tristeza profunda, sem fim, associada a sentimentos de dor, amargura, desencanto, desesperança, baixa autoestima e culpa, assim como a distúrbios do sono e do apetite.
                                        É importante distinguir a tristeza patológica daquela transitória provocada por acontecimentos difíceis e desagradáveis, mas que são inerentes à vida de todas as pessoas, como a morte de um ente querido, a perda de emprego, os desencontros amorosos, os desentendimentos familiares, as dificuldades econômicas etc.

                                        estima-se que mais de 300 milhões de pessoas sofrem com a depressão (segundo dados do Pan American Health Organization).
                                        Os quadros variam de intensidade e duração e podem ser classificados em três diferentes graus: leves, moderados e graves. Além disso, ela também pode atingir crianças e adolescentes.
                                        
                                    <br> <br> <b>SINTOMAS DA DEPRESSÃO:</b>
<br>                                
                                     <br>
                                    <b>1. Humor Depressivo:</b> Sentimento persistente de tristeza, vazio ou desespero;
                                    <br>
                                    <b>2. Perda de Interesse ou Prazer:</b> Incapacidade de sentir prazer nas atividades que antes eram consideradas agradáveis;
                                    <br>
                                    <b>3. Fadiga:</b> Sensação de cansaço constante, mesmo após o descanso;<br>
                                    <b>4. Distúrbios do Sono:</b> Insônia ou excesso de sono (hipersonia); 
                                    <br>
                                    <b>5. Mudanças no Apetite ou Peso:</b> Pode levar a perda ou ganho de peso não intencional;
                                    <br>
                                    <b>6. Dificuldade de Concentração:</b> Dificuldade em focar, tomar decisões ou lembrar coisas;
                                    <br>
                                   <b>7. Sentimentos de Inutilidade ou Culpa:</b> Autoestima baixa e sentimento de culpa;
                                    <br>
                                    <b>8. Pensamentos Suicidas:</b> Ideias de morte ou desejo de morrer;
                                    <br>
                                    <br>
                                    <b>FORMAS DE PREVENÇÃO:</b>
                                    <br>
                                    <br>
                                    •	Ter uma dieta equilibrada;
                                    <br>
                                    
                                    •	Praticar atividade física regularmente;
                                    <br>
                                    
                                    •	Combater o estresse concedendo tempo na agenda para atividades prazerosas;
                                    <br>
                                    
                                    •	Evitar o consumo de álcool;
                                    <br>
                                    
                                    •	Não usar drogas ilícitas;
                                    <br>
                                    
                                    •	Diminuir as doses diárias de cafeína;
                                    <br>
                                    
                                    •	Rotina de sono regular;
                                    <br>
                                    
                                    •	Não interromper tratamento sem orientação médica.
                                    <br>
                          <br>          
                                    <b>TRATAMENTOS DA DEPRESSÃO:</b>
                                    <br>
                                    A Depressão é uma doença mental de elevada prevalência e é a mais associada ao suicídio, tende a ser crônica e recorrente, principalmente quando não é tratada. O tratamento é medicamentoso e psicoterápico. A escolha do antidepressivo é feita com base no subtipo da Depressão, nos antecedentes pessoais e familiares, na boa resposta a uma determinada classe de antidepressivos já utilizada, na presença de doenças clínicas e nas características dos antidepressivos.
                                    
                                    90-95% dos pacientes apresentam remissão total com o tratamento antidepressivo. É de fundamental importância a adesão ao tratamento, uma vez interrompido por conta próprio ou uso inadequado da medicação, pode aumentar significativamente o risco de cronificação. O tratamento pode ser realizado na Atenção Primária, nos Centros de Atenção Psicossocial (CAPS) e nos ambulatórios especializados.
                                    
                                    </p>
                                   
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Ansiedade</h2>
                                  
                                    <img class="img-fluid d-block mx-auto" src="assets\img\ANSIEDADEIMG.jpg" alt="..." />
                                    <p> O transtorno de ansiedade generalizada (TAG) é um distúrbio caracterizado pela “preocupação excessiva ou expectativa apreensiva”, persistente e de difícil controle, que perdura por seis meses no mínimo.
                                        O transtorno da ansiedade generalizada (TAG), segundo o manual de classificação de doenças mentais (DSM.IV), é um distúrbio caracterizado pela “preocupação excessiva ou expectativa apreensiva”, persistente e de difícil controle.
                                        É importante registrar também que, nesses casos, o nível de ansiedade é desproporcional aos acontecimentos geradores do transtorno, causa muito sofrimento e interfere na qualidade de vida e no desempenho familiar, social e profissional dos pacientes.
                                        O transtorno da ansiedade generalizada pode afetar pessoas de todas as idades, desde o nascimento até a velhice. Em geral, as mulheres são um pouco mais vulneráveis do que os homens.
                                        <br><br>
                                        <b>SINTOMAS DA ANSIEDADE:</b>
                                        <br>
                                        <br>
                                        <b>1.	Preocupação Excessiva:</b> Pensamentos incessantes sobre preocupações futuras, mesmo quando não há uma ameaça real.
                                        <br>
                                        
                                        <b>2.	Inquietação:</b> Sentimento de agitação, nervosismo e dificuldade em relaxar.
                                        <br>
                                        
                                        <b>3.	Tensão Muscular:</b> Contrair os músculos, especialmente na mandíbula, pescoço e ombros.
                                        <br>
                                        
                                        <b>4.	Sintomas Físicos:</b> Taquicardia, sudorese, tremores, dor de estômago, falta de ar e tontura.
                                        <br>
                                        
                                        <b>5.	Evitação:</b> Tentativas de evitar situações ou lugares que causem ansiedade.
                                        <br>
                                        
                                        <b>6.	Sintomas Cognitivos:</b> Dificuldade em se concentrar, medos irracionais, pensamentos catastróficos.
                                        <br>
                                        <br><br>
                                        <b>FORMAS DE PREVENÇÃO:</b>
                                        <br>
                                        •	Aprenda a meditar e se conectar consigo e com seu espiritual;
                                        •	Busque atividades físicas com as quais se identifique e crie uma rotina com elas;
                                        •	Treine sua respiração, inspire e expire profundamente;
                                        •	Programe e realize hobbies, distrações, passeios e viagens;
                                        •	Socialize dando preferência para os encontros pessoalmente;
                                        •	Organize e revise sua rotina, priorizando o autocuidado;
                                        •	Cuide e tenha experiências com animais e natureza;
                                        •	Priorize boas noites de sono e descanso;
                                        •	Pratique hábitos de autoconhecimento, como leitura e escrita.
                                        <br><br>
                                        
                                        <b>TRATAMENTOS DA ANSIEDADE:</b>
                                        <br><br>
                                        De maneira geral, o tratamento dos transtornos ansiosos leves (baixo impacto na vida da pessoa) engloba:
                                        <br>
                                        •	terapias cognitivo-comportamentais, como: técnicas de resolução de conflitos, meditação, psicologia positiva e terapia psicodinâmica;
                                        •	psicoterapia e psicanálise;
                                        •	prática de atividades físicas, pois liberam substâncias positivas (como a serotonina) que ajudam na regulação do organismo e causam prazer e relaxamento;
                                        •	alimentação balanceada, pois ajuda a suportar o estresse e a se recuperar mais facilmente de algumas doenças.
                                        <br><br>
                                        Quando a situação é um pouco mais grave e a pessoa já desenvolveu pânico, por exemplo, utilizam-se medicamentos antidepressivos. Geralmente, eles têm impacto positivo no tratamento da ansiedade. Ainda, são mantidos os atendimentos com psicoterapia e psicanálise.
                                        Independentemente de possuir ou não ansiedade, ou do nível da doença, a psicoterapia é indicada, pois serve para as pessoas se conhecerem mais e aprenderem a lidar melhor com suas emoções.
                                         </p>
                                 
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Transtorno Obsessivo Compulsivo</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets\img\TOCIMG.jpg" alt="..." />
                                    <p>O Transtorno Obsessivo-Compulsivo (TOC) é um transtorno de ansiedade caracterizado pela presença de obsessões e compulsões. Essas obsessões são pensamentos, imagens ou impulsos recorrentes e indesejados que causam ansiedade intensa e perturbadora. As compulsões são comportamentos repetitivos ou atos mentais que uma pessoa realiza em resposta às obsessões, com o objetivo de aliviar a ansiedade.
                                        Entende-se por obsessão pensamentos, ideias e imagens que invadem a pessoa insistentemente, sem que ela queira. Como um disco riscado que se põe a repetir sempre o mesmo ponto da gravação, eles ficam patinando dentro da cabeça e o único jeito para livrar-se deles por algum tempo é realizar o ritual próprio da compulsão, seguindo regras e etapas rígidas e pré-estabelecidas, que ajudam a aliviar a ansiedade. Alguns portadores dessa desordem acham que, se não agirem assim, algo terrível pode acontecer-lhes.
                                        <br><br>
                                        <b>Existem dois tipos de TOC:</b>
                                        <br><br>
                                        •	Transtorno obsessivo-compulsivo subclínico: as obsessões e rituais se repetem com frequência, mas não atrapalham a vida da pessoa;
                                        •	Transtorno obsessivo-compulsivo propriamente dito: as obsessões persistem até o exercício da compulsão que alivia a ansiedade.
                                        <br><br>
                                        
                                        <b>SINTOMAS DO TOC</b>
                                        <br><br>
                                        Obsessões Comuns:
                                        <br><br>
                                        <b>1.	Medo de Contaminação:</b> Preocupação persistente com germes, sujeira ou substâncias prejudiciais, levando a comportamentos de limpeza excessiva, como lavar as mãos várias vezes ao dia.
                                        <br>
                                        <b>2.	Pensamentos Intrusivos Agressivos:</b> Pensamentos perturbadores ou violentos sobre ferir a si mesmo ou aos outros, que são completamente indesejados e angustiantes.
                                        <br>
                                        <b>3.	Preocupação com Ordem e Simetria:</b> Necessidade extrema de que as coisas estejam organizadas de maneira perfeita e simétrica, levando a comportamentos repetitivos de arrumação.
                                        <br>
                                        <b>4.	Dúvidas Constantes:</b> Incapacidade de tomar decisões, pois a pessoa está constantemente preocupada em tomar a decisão errada ou causar danos.
                                        <br>    
                                        <b>5.	Obsessões Religiosas:</b> Pensamentos intrusivos relacionados a blasfêmia, pecado ou medo de estar fazendo algo moralmente errado.
                                        <br><br>
                                        Compulsões Comuns:
                                        <br><br>
                                        <b>1.	Lavagem Excessiva:</b> Realização repetitiva de rituais de limpeza, como lavar as mãos, tomar banho ou limpar objetos, como uma forma de aliviar o medo de contaminação.
                                        <br>
                                        <b>2.	Verificação:</b> Verificar repetidamente se portas estão trancadas, fogões estão desligados, aparelhos estão desligados etc., devido ao medo de causar danos acidentalmente.
                                        <br>
                                        <b>3.	Contagem e Organização:</b> Contar objetos ou realizar ações em um número específico, bem como organizar itens de maneira precisa.
                                        <br>
                                        <b>4.	Repetições Verbais e Mentais:</b> Repetir palavras ou frases em mente, fazer orações ou repetir certos números ou palavras.
                                        <br>
                                        <b>5.	Evitação:</b> Evitar situações, lugares ou objetos que desencadeiam obsessões e compulsões.
                                        <br>
                                        <b>6.	Compulsões Mentais:</b> Realizar atividades mentais, como rezar mentalmente, para neutralizar pensamentos obsessivos.
                                        <br><br>
                                        <b>FORMAS DE PREVENÇÃO:</b>
                                        <br><br>
                                        <b>1.	Educação:</b> Entender o TOC é o primeiro passo.<br>
                                        <b>2.	Terapia Cognitivo-Comportamental (TCC):</b> Pode ser usada preventivamente.<br>
                                        3.	Gerenciamento de estresse: Ajuda a evitar desencadear sintomas.<br>
                                        4.	Rotina saudável: Sono, alimentação e exercício regulares.<br>
                                        5.	Evitar substâncias desencadeadoras: Café e estimulantes.<br>
                                        6.	Apoio social: Ter amigos e familiares compreensivos.<br>
                                        7.	Medicamentos: Em casos graves, sob supervisão médica.<br>
                                        8.	Evitar gatilhos: Identificar e evitar situações desencadeadoras.<br>
                                        <br><br> 
                                        <b>TRATAMENTO DO TOC:</b>
                                        <br><br>
                                        <b>1.  Terapia Cognitivo-Comportamental (TCC):</b> Terapia focada em enfrentar obsessões e compulsões.<br>
                                        <b>2.	Medicamentos:</b> Como antidepressivos (ISRS ou IRSN) em casos graves.
                                        <b>3.	Terapia de grupo:</b> Participação em grupos de apoio.<br>
                                        <b>4.	Estilo de vida saudável:</b> Sono, exercícios e dieta equilibrados.<br>
                                        <b>5.	Evitar substâncias desencadeadoras:</b> Reduzir cafeína e estimulantes.<br>
                                        <b>6.	Acompanhamento médico:</b> Supervisão profissional é essencial.<br>
                                        <b>7.	Educação:</b> Conhecer o TOC e seus sintomas é fundamental.<br>
                                        <br><br>
                                        O tratamento varia conforme a gravidade, mas a busca por ajuda profissional é crucial.
                                        Muitas pessoas convivem com o transtorno obsessivo-compulsivo e não buscam ajuda, possivelmente por não compreenderem este quadro. Diante do primeiro sinal da doença, ou de qualquer outro problema emocional, o ideal é buscar orientação psicológica para atenuar o sofrimento e saber como lidar com a situação. Já os casos mais graves de TOC necessitam de intervenção medicamentosa para redução dos sintomas.
                                        <br><br>
                                        Portanto, se você experimenta, com frequência, alguns dos sintomas do transtorno obsessivo-compulsivo e tem dúvidas se o seu caso requer acompanhamento, não hesite em procurar ajuda profissional para compreender o seu quadro. A saúde mental é tão importante quanto a saúde física e são esses cuidados que garantem a sua qualidade de vida!
                                        
                                        </p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Transtorno Bipolar</h2>
                               
                                    <img class="img-fluid d-block mx-auto" src="assets\img\BIPOLARimg.jpg" alt="..." />
                                    <p>O Transtorno Bipolar, anteriormente conhecido como Transtorno Maníaco-Depressivo, é um transtorno mental complexo que afeta o humor e o funcionamento emocional de uma pessoa. 
                                        É caracterizado por oscilações extremas no humor, que incluem episódios de mania, hipomania e depressão.
                                        As flutuações de humor têm reflexos negativos sobre o comportamento e atitudes dos pacientes, e a reação que provocam é sempre desproporcional aos fatos que serviram de gatilho ou, até mesmo, independem deles.
                                        Em geral, essa perturbação do humor se manifesta tanto nos homens quanto nas mulheres, entre os 15 e os 25 anos, mas pode afetar também as crianças e pessoas mais velhas.
                                        De acordo com o DSM.IV e o CID-10 (manuais internacionais de classificação diagnóstica), o transtorno bipolar pode ser classificado nos seguintes tipos:
                                        <br><br>
                                        <b>Transtorno bipolar Tipo I</b>
                                        <br>
                                        O portador do distúrbio apresenta períodos de mania, que duram, no mínimo, sete dias, e fases de humor deprimido, que se estendem de duas semanas a vários meses.
                                        <br>
                                        <br>
                                        <b>Transtorno bipolar Tipo II </b>
                                        <br>
                                        Há uma alternância entre os episódios de depressão e os de hipomania (estado mais leve de euforia, excitação, otimismo e, às vezes, de agressividade), sem prejuízo maior para o comportamento e as atividades do portador.
                                
                                        <br>
                                        Transtorno bipolar não especificado ou misto
                                        <br>
                                        Os sintomas sugerem o diagnóstico de transtorno bipolar, mas não são suficientes nem em número nem no tempo de duração para classificar a doença em um dos dois tipos anteriores.
                                         <br><br>
                                        <b>Transtorno ciclotímico</b>
                                        <br>
                                        É o quadro mais leve do transtorno bipolar, marcado por oscilações crônicas do humor, que podem ocorrer até no mesmo dia. O paciente alterna sintomas de hipomania e de depressão leve que, muitas vezes, são entendidos como próprios de um temperamento instável ou irresponsável.
                                        
                                        <br><br>
                                        <b>SINTOMAS DO TOC:</b>
                                        <br><br>
                                        <b> Maníaca: </b>
                                        <br>
                                        <br>
                                       <b> 1.	Euforia:</b> Um estado de humor excessivamente elevado e expansivo, muitas vezes associado a uma sensação de poder ou grandeza.
                                        <br>
                                        <br>
                                       <b> 2.	Irritabilidade:</b> Um aumento acentuado na irritabilidade, que pode levar a conflitos interpessoais.
                                        <br>
                                        <br>
                                       <b> 3.	Comportamento Impulsivo:</b> Tomada de decisões impulsivas e arriscadas, como gastar dinheiro de forma excessiva, envolver-se em atividades sexuais de risco ou uso de drogas.
                                        <br>
                                        <br>
                                        <b>4.	Fala Rápida:</b> Aumento da velocidade de fala, tornando difícil acompanhar a conversa.
                                        <br>
                                        <br>
                                        <b>5.	Pensamento Acelerado:</b> Pensamentos acelerados e múltiplos em rápida sucessão.
                                        <br>
                                        <br>
                                        <b>6.	Insônia:</b> Dificuldade em dormir ou a necessidade reduzida de sono.
                                        <br>
                                        <br>
                                        <b>7.	Aumento da Energia:</b> Uma sensação de energia elevada, acompanhada de hiperatividade.
                                        <br>
                                        <br>
                                       <b> 8.	Falta de Julgamento:</b> Falta de reconhecimento das consequências de suas ações.
                                        <br>
                                        <br><br>
                                        <b>Fase Hipomaníaca:</b>
                                        <br>
                                        <br>
                                        <b>1.	Sintomas Semelhantes à Mania:</b> Os sintomas de hipomania são semelhantes aos da mania, mas menos intensos e não causam o mesmo grau de disfunção ou impacto nas atividades diárias.
                                        <br>
                                        <br>
                                        <b>2.	Comportamento Produtivo:</b> Algumas pessoas com hipomania podem ser mais produtivas em seu trabalho ou em suas atividades, mas ainda exibem um aumento de energia e criatividade.
                                        <br>
                                        <br><br>
                                        <b>Fase Depressiva:</b>
                                        <br>
                                        <br>
                                        <b>1.	Tristeza Profunda:</b> Sentimento de tristeza profunda e duradoura.
                                        <br>
                                        <br>
                                        <b>2.	Perda de Interesse ou Prazer:</b> Incapacidade de sentir prazer em atividades que antes eram consideradas agradáveis.
                                        <br>
                                        <br>
                                        <b>3.	Fadiga:</b> Sensação constante de cansaço e falta de energia.
                                        <br>
                                        <br>
                                       <b> 4.	Alterações no Sono:</b> Insônia ou excesso de sono (hipersonia).
                                        <br>
                                        <br>
                                        <b>5.	Alterações no Apetite:</b> Perda ou ganho de peso não intencional devido a mudanças no apetite.
                                        <br>
                                        <br>
                                        <b>6.	Sentimentos de Inutilidade ou Culpa:</b> Baixa autoestima e sentimento de culpa injustificados.
                                        <br>
                                        <br>
                                        <b>7.	Dificuldade de Concentração:</b> Dificuldade em se concentrar, tomar decisões ou lembrar coisas.
                                        <br>
                                        <br>
                                        <b>8.	Ideação Suicida:</b> Pensamentos de morte ou desejo de morrer.
                                        <br>
                                        <br><br>
                                        
                                        
                                        <b>FORMAS DE PREVENÇÃO:</b>
                                        <br>
                                        <br>
                                        <b>1.	Consciência Familiar:</b> Conheça o histórico familiar da doença.
                                        <br>
                                        <br>
                                       <b> 2.	Evitar Abuso de Substâncias:</b> Não abuse de álcool ou drogas.
                                        <br>
                                        <br>
                                        <b>3.	Gerenciamento do Estresse:</b> Aprenda a lidar com o estresse.
                                        <br>
                                        <br>
                                        <b>4.	Rotina e Sono Regular:</b> Mantenha uma rotina e sono regulares.
                                        <br>
                                        <br>
                                        <b>5.	Psicoterapia e Medicamentos:</b> Busque ajuda profissional se necessário.
                                        <br>
                                        <br>
                                        <b>6.	Educação e Acompanhamento Médico:</b> Fique informado e siga o tratamento recomendado.
                                        <br>
                                        <br><br>
                                       <b>TRATAMENTO DO TRASTORNO BIPOLAR:</b>
                                        <br>
                                        <b>1.	Medicamentos:</b> Uso de estabilizadores de humor e/ou antipsicóticos sob supervisão médica.
                                        <br>
                                        <br>
                                        <b>2.	Psicoterapia:</b> Terapia cognitivo-comportamental ou de ritmo social para gerenciar os sintomas.
                                        <br>
                                        <br>
                                        <b>3.	Estilo de Vida:</b> Manter rotinas regulares, evitar estresse, e adotar um estilo de vida saudável.
                                        <br>
                                        <br>
                                        <b>4.	Apoio Social:</b> Ter um sistema de apoio é importante.
                                        <br>
                                        <br>
                                        <b>5.	Evitar Substâncias:</b> Não abusar de álcool ou drogas.
                                        <br>
                                        <br>
                                        <b>6.	Acompanhamento Médico:</b> Consultar regularmente um profissional de saúde mental.
                                        <br>
                                        <br>
                                        <b>7.	Educação e Plano de Crise:</b> Educar-se sobre a condição e ter um plano de crise para emergências.
                                        <br>
                                        <br><br>
                                        O tratamento é contínuo e individualizado, buscando estabilizar o humor e melhorar a qualidade de vida.
                                        </p>
                                   
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Transtorno de Estresse pós traumático</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets\img\ESTRESSEimg.jpg" alt="..." />
                                    <p>O TEPT consiste em reações disfuncionais intensas e desagradáveis que têm início após um evento extremamente traumático.
                                        Eventos de risco à vida ou ferimentos graves podem causar angústia intensa e de longa duração.
                                        É possível que a pessoa afetada reviva o evento, tenha pesadelos frequentes e evite qualquer coisa que possa lembrá-la do evento.
                                        O tratamento pode incluir psicoterapia (terapia de apoio e de exposição) e antidepressivos
                                        <br><br>
                                        Muitas pessoas são afetadas de maneira duradoura quando algo terrível acontece. Em algumas, os efeitos são tão persistentes e graves que são debilitantes e representam um transtorno. Via de regra, os eventos mais propensos a causar TEPT são aqueles que invocam sentimentos de medo, desamparo ou horror. Combate, agressão sexual e desastres naturais ou provocados pelo homem são causas comuns do TEPT. No entanto, ele pode ser causado por qualquer experiência avassaladora e possivelmente fatal, como violência física ou um acidente de automóvel.
                                        <br><br>
                                        Esses eventos podem ser vivenciados diretamente (por exemplo, sofrer uma lesão grave ou ser ameaçado de morte) ou indiretamente (testemunhar outras pessoas sofrendo lesões graves, morrendo, ou serem ameaçadas de morte ou tomar conhecimento de eventos traumáticos que ocorreram com familiares ou amigos próximos). É possível que a pessoa tenha vivenciado um único evento traumático ou, como ocorre com frequência, vários eventos traumáticos.
                                        O transtorno de estresse pós-traumático afeta aproximadamente 9% das pessoas em algum momento de suas vidas, incluindo a infância (Transtornos de estresse agudo e pós-traumático em crianças e adolescentes). Aproximadamente 4% dos adultos sofrem desse transtorno anualmente.
                                        <br><br>
                                        SINTOMAS DO TEPT:
                                        <br>
                                        As pessoas com transtorno do estresse pós-traumático (TEPT) costumam apresentar sintomas de cada uma das quatro categorias a seguir:
                                        <br>
                                        Sintomas intrusivos (o evento invade os pensamentos de maneira repetida e incontrolável)
                                        Evitar qualquer coisa que as relembre do evento
                                        Efeitos negativos sobre o pensamento e o humor
                                        Alterações no estado de alerta e nas reações
                                        Sintomas de intrusão
                                        O evento traumático pode reaparecer repetidamente na forma de memórias indesejadas involuntárias ou pesadelos recorrentes. Algumas pessoas têm flashbacks, durante os quais elas revivem os eventos como se eles estivessem realmente acontecendo em vez de simplesmente se lembrarem deles.
                                        <br><br>
                                        É possível que a pessoa também tenha reações intensas a coisas que a relembrem do evento. Por exemplo, os sintomas de um veterano de guerra podem ser desencadeados por fogos de artifício, enquanto os de uma vítima de roubo à mão armada podem ser desencadeados quando ela vê uma arma de fogo em um filme.
                                        <br><br>
                                        TRATAMENTO DO TEPT:
                                        <br>
                                        Psicoterapia <br>
                                        Farmacoterapia <br>
                                        O tratamento de outros transtornos, como o uso de substâncias ou o transtorno depressivo maior
                                        <br><br>
                                        Psicoterapia <br>
                                        A psicoterapia é o principal tratamento para o transtorno do estresse pós-traumático (TEPT).
                                        <br><br>
                                        Aprender sobre o TEPT pode ser um passo inicial importante no tratamento. Os sintomas do TEPT podem causar confusão extrema e, frequentemente, é muito útil que as pessoas com TEPT e seus entes queridos entendam que ele pode incluir sintomas aparentemente não relacionados.
                                        <br><br>
                                        As técnicas de controle do estresse, como respiração e relaxamento, são importantes. Os exercícios que reduzem e controlam a ansiedade (por exemplo, ioga, meditação) podem aliviar os sintomas, além de preparar a pessoa para o tratamento que envolve a exposição estressante a memórias do trauma.
                                        <br><br>
                                        A principal corrente de pensamento favorece o uso de psicoterapia estruturada e focalizada, geralmente um tipo de terapia cognitivo-comportamental (TCC) denominado terapia de exposição que ajuda a apagar o medo deixado pelo evento traumático.
                                        <br><br>
                                        Farmacoterapia <br>
                                        Os antidepressivos são considerados o tratamento de primeira linha para o TEPT, mesmo para pessoas que não têm transtorno depressivo maior também. Os inibidores seletivos de recaptação da serotonina e outros antidepressivos, como, por exemplo, a mirtazapina e a venlafaxina, costumam ser recomendados com mais frequência.
                                        Para tratar a insônia e os pesadelos, às vezes o médico receita medicamentos, como a olanzapina e a quetiapina (também usadas como medicamentos antipsicóticos) ou a prazosina (também usada para tratar a hipertensão arterial). No entanto, esses medicamentos não tratam o TEPT propriamente dito.
                                        </p>
                                   
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Sindrome de Bounout</h2>
                               
                                    <img class="img-fluid d-block mx-auto" src="assets\img\BURNOUTimg.jpg" alt="..." />
                                    <p>Síndrome de Burnout ou Síndrome do Esgotamento Profissional é um disturbio emocional com sintomas de exaustão extrema, estresse e esgotamento físico resultante de situações de trabalho desgastante, que demandam muita competitividade ou responsabilidade.  A principal causa da doença é justamente o excesso de trabalho. Esta síndrome é comum em profissionais que atuam diariamente sob pressão e com responsabilidades constantes, como médicos, enfermeiros, professores, policiais, jornalistas, dentre outros.
<br><br>
                                        A Síndrome de Burnout também pode acontecer quando o profissional planeja ou é pautado para objetivos de trabalho muito difíceis, situações em que a pessoa possa achar, por algum motivo, não ter capacidades suficientes para os cumprir. Essa síndrome pode resultar em estado de depressão profunda e por isso é essencial procurar apoio profissional no surgimento dos primeiros sintomas.
            <br><br>                            
                                        A melhor forma de prevenir a Síndrome de Burnout são estratégicas que diminuam o estresse e a pressão no trabalho. Condutas saudáveis evitam o desenvolvimento da doença, assim como ajudam a tratar sinais e sintomas logo no início. 
    <br><br>                                    
                                        SINTOMAS DA SÍNDROME DE BURNOUT
<br>
Cansaço excessivo, físico e mental;
Dor de cabeça frequente;
Alterações no apetite;
Insônia;
Dificuldades de concentração;
Sentimentos de fracasso e insegurança;
Negatividade constante;
Sentimentos de derrota e desesperança;
Sentimentos de incompetência;
Alterações repentinas de humor;
Isolamento;
Fadiga.
Pressão alta.
Dores musculares.
Problemas gastrointestinais.
Alteração nos batimentos cardíacos.
<br><br>
Normalmente esses sintomas surgem de forma leve, mas tendem a piorar com o passar dos dias. Por essa razão, muitas pessoas acham que pode ser algo passageiro. Para evitar problemas mais sérios e complicações da doença, é fundamental buscar apoio profissional assim que notar qualquer sinal. Pode ser algo passageiro, como pode ser o início da Síndrome de Burnout. <br><br>
TRATAMENTO DA SÍNDROME DE BURNOUT:
<br>
O tratamento da Síndrome de Burnout é feito basicamente com psicoterapia, mas também pode envolver medicamentos (antidepressivos e/ou ansiolíticos). O tratamento normalmente surte efeito entre um e três meses, mas pode perdurar por mais tempo, conforme cada caso. Mudanças nas condições de trabalho e, principalmente, mudanças nos hábitos e estilos de vida.
<br><br>
A atividade física regular e os exercícios de relaxamento devem ser rotineiros, para aliviar o estresse e controlar os sintomas da doença.  Após diagnóstico médico, é fortemente recomendado que a pessoa tire férias e desenvolva atividades de lazer com pessoas próximas - amigos, familiares, cônjuges, etc


                                        </p>
                                   
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
