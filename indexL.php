<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="Chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&sect;Hariston Macedo (HNM)&sect;</title>
    <link rel="sorcut icon" href="img/LetraH2.jpg" style="width: 16px; height: 16px;">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <link rel="stylesheet" href="css/styleIndex.css">

</head>
<body>
    <header>
        <label><a href="index.html">
            <span>H</span>ariston <span>N</span>unes <span>M</span>acedo
        </a></label>

        <ul>
            <li><a href="#contatos"><span>C</span>ontatos & <span>R</span>edes <span>S</span>ociais</a></li>
            <div class="muroMenu"></div>
            <li><a href="https://github.com/HaristonNuMacedo" target="_blank"><span>G</span>itHub</a></li>
        </ul>
    </header>

    <section class="sessao01">
        <div class="parte01">
            <div class="tituloS1">
                <label>Desenvolvedor de Web-sites</label>
                <span>Linguagens: PHP e JavaScript.</span>
                <img src="img/Criacao-de-Websites.png" class="web">
            </div>

            <div class="parte02">
                <span></span> <span></span>
                <img src="img/IMG_20211210_093924172.jpg" class="minhaFoto">
            </div>

            <div class="parte03">

                <article class="c-carousel c-carousel--simple">
                <div class="c-carousel__slides js-carousel--simple">
                    <article class="c-carousel__slide">
                        <h3>Sobre mim</h3>
                    </article>
                    <article class="c-carousel__slide">
                        <h3>Minha Educação</h3>
                    </article>
                    <article class="c-carousel__slide">
                        <h3>Vida Profissional</h3>
                    </article>
                </div>

                <button class="js-carousel--simple-prev" aria-label="Anterior">«</button>
                <button class="js-carousel--simple-next" aria-label="Próximo">»</button>
                <div class="js-carousel--simple-dots" role="tablist"></div>
                </article>
            </div>
        </div> 

        <div id="modal-controlador" class="modal-container">
            <div class="modal">
                <button class="fechar">x</button>
                <img src="img/IMG_20211210_093924172.jpg" class="minhaFotoModal">
            </div>
        </div>

        <script src="js/abrirImagem.js"></script>
    </section>

    <section class="sessao02" id="contatos">
        <div class="tituloS2">
            <label><span>C</span>ontatos e <span>R</span>edes <span>S</span>ocias</label>
        </div>

        <div class="contatos">
            <div>
                <label>Email: <span>haristonmacedo2001@gmail.com</span></label>
                <label><a href="pdf/Currículo_Hariston Macedo.pdf" target="_blank">Currículo</a> do proprietário</label>
            </div>
        </div>

        <div class="redes">
            <div class="facebook">
                <div class="icone"><img src="img/faceIcon.png"></div>
                <a href="#"><div class="facebookTexto">
                    Facebook | Hariston
                </div></a>
            </div>

            <div class="instagram">
                <div class="icone"><img src="img/instaIcon.png"></div>
                <a href="#"><div class="instagramTexto">
                    Instagram | Hariston
                </div></a>
            </div>

            <div class="git">
                <div class="icone"><img src="img/git.png"></div>
                <a href="#"><div class="gitTexto">
                    GitHub | HaristonNuMacedo
                </div></a>
            </div>
        </div>
    </section>

    <footer>
        <ul>
            <li><a>Central de Tecnologia</a></li>
            <div class="muroMenu2"></div>
            <li><a>Hariston Nunes Macedo</a></li>
        </ul>
    </footer>

    

    <div class="ThemeColor"></div>

    <div id="modal-controlador2" class="modal-container2">
        <div class="modal2">
            <button class="fechar2">x</button>
            <?php 
            date_default_timezone_set('America/Sao_Paulo');
            $hora_atual = date('H:i');
            
            if($hora_atual < '12:00') {
                echo '<div class="R01"><label id="divResultado">Olá, bom dia! Seja bem vindo a minha página</label></div>';
            } else if($hora_atual < '18:00') {
                echo '<div class="R01"><label id="divResultado">Olá, boa tarde! Seja bem vindo a minha página</label></div>';
            } else if($hora_atual >= '18:00') {
                echo '<div class="R01"><label id="divResultado">Olá, boa noite! Seja bem vindo a minha página</label></div>';
            }
            
            ?>
            <div class="R01"><label class="msg02">Você pode mudar o tema do site escolhendo entre Dark/Light</label></div>
            
            <button class="colors" id="btnColor" data-color="#333" data-color2="#fff" data-color3="#fff">Dark</button>
            <button class="colors" id="btnColor" data-color="#fff" data-color2="#000">Light</button> 
        </div>
        <script src="js/abrirImagem.js"></script>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/colorTheme.js"></script>

</body>
</html>