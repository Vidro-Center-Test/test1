<?php
session_start();
include_once("data.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick-theme.css">
    <title>Vidrocenter</title>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   -->
</head>
</head>
<body>


    <header>
        <div class="header-cabecalho">
            <img src="data:image/png;base64,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" alt=""> 
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#article-orcamento">Orçamentos</a></li>
                <li><a href="">Nossos Produtos</a></li>
                <li><a href="#localizacao">Sobre Nós</a></li>
            </ul>
        </div>
        <div class="header-texto">
            <h1>Vidro Center</h1>
            <h2>A Vidro Center é uma vidraçaria localizada em Osvaldo Cruz - SP, ela entrega para seus clientes segurança, qualidade e preço acessivel.</h2>
        </div>

    </header>



    <main>


        <article class="article-orcamento" id="article-orcamento">
            <img src="" alt="" class="article-orcamento-fundo">
            <div class="texto-orcamento">
            <h1>Faça seu orçamento conosco</h1>
            <h2>Preencha seus dados e o que deseja para que possamos fazer o seu orçamento, sem compromisso</h2>
        </div>
        
    <div class="orcamento-preenchimento">

        <div class="dados-orcamento">

            <div class="orcamento-cards-dados">
                <img src="" alt=""> 
                <div>
                    <h1>Endereço</h1>
                    <h2>Rua Fernando Costa, Centro</h2>
                    <h2>Osvaldo Cruz - SP, 17700-000</h2>
                </div>
            </div>

            <div class="orcamento-cards-dados">
                <img src="" alt=""> 
                <div>
                    <h1>Telefone de contato</h1>
                    <h2>(18) 3528-6307</h2>
                    <h2>(18) 3528-6904</h2>
                </div>
            </div>

            <div class="orcamento-cards-dados">
                <img src="" alt=""> 
                <div>
                    <h1>Email</h1>
                    <h2>vidrocenter@email.com</h2>
                </div>
            </div>

        </div>

            <div class="recebe-orcamento">
                <h1>Orçamento</h1>
                <form action="data.php"method="POST" >
                    <input type="text" id="nome" placeholder="Nome completo"><br>
                    <input type="text" id="telefone" placeholder="Telefone para contato"><br>
                    <input type="text" id="email" placeholder="Email para contato"><br>
                    <input type="text" id="endereco" placeholder="Endereco"><br>
                    <input type="text" id="orcamento" placeholder="Descreva o orçamento"><br>
                <!-- <input type="submit" id="enviar-orcamento"> -->
                    <button>Enviar mensagem</button>

                </form>
            </div>
        </div>


        </article>

        <article class="feedbacks" id="feedbacks">
            <h1>''</h1>
           <div class="caixa-feedbacks"><label><</label> <h2>"Otimos profissionais, uma empresa com um bom atendimento e um otimo custo beneficio"</h2> <label>></label></div>
            <ul>
                <li><a href="" class="feedbacks-selecionado "></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
            <h3>-Emmanuel Silva</h3>
        </article>
        

        <!-- <article class="nossos-produtos">
            
            <h1>Nossos Produtos</h1>

            <div class="carrosel-produtos">


            <div class="produtos-imagens">
                <img src="Imagens/vidro1.jpg" alt=""> <label>Vidros Comuns</label>
            </div>


            <div class="produtos-imagens">
                <img src="Imagens/vidro2.jpg" alt=""> <label>Vidros Tempereados</label>
            </div>


            <div class="produtos-imagens">
                <img src="Imagens/vidro3.jfif" alt=""> <label>Molduras</label>
            </div>

            <div class="produtos-imagens">
                <img src="Imagens/vidro1.jpg" alt=""> <label>Vidros Comuns</label>
            </div>


            <div class="produtos-imagens">
                <img src="Imagens/vidro2.jpg" alt=""> <label>Vidros Tempereados</label>
            </div>


            <div class="produtos-imagens">
                <img src="Imagens/vidro3.jfif" alt=""> <label>Molduras</label>
            </div>  


             <ul>
                <li><a href="" class="feedbacks-selecionado "></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul> 
        </div>
        </article> -->

        <article class="empresas-clientes" id="empresas-clientes">
            <h1>Confiabilidade e Qualidade garantida</h1>
            <h2>Nossos clientes</h2>
            <div class="foto-empresas-clientes">
                <label><</label>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <label>></label>
            </div>
        </article>

        <!-- <article>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Imagens/vidro1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Imagens/vidro2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Imagens/vidro3.jfif" class="d-block w-100" alt="...">
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
        </article> -->


        <article class="localizacao" id="localizacao">
            <h1>Nossa localizção</h1>

            <a href=""></a>

            <button>Ver Localização</button>

        </article>

    </main>

    <footer>

        <div class="rodape">
            <img src="data:image/png;base64,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" alt="">
            <div class="rodape-texto">
                <h1>Endereço</h1>
                <label>Rua Fernando Costa, 465 Centro</label>
                <label>Osvaldo Cruz - SP, 17700-000</label>
                <label>(18)3528-6307</label>
                <label>(18)3528-6904</label>
            </div>
        </div>
        <h2>&reg;2023 Vidro Center. Todos os direitos reservados</h2>
    </footer>


    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="slick-1.8.1/slick/slick.js"></script>
    <script>
        $('.carrosel-produtos').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 3
});
    </script> -->
</body>
</html>