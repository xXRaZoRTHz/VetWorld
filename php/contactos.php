<?php 
        require 'Languages/init.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Oliveira, Lucas Lacerda e Tasmini Satar">
    <meta name="description" content="Clínica Veterinária Online">
    <!-- se quiserem adicionar mais keywords, fiquem a vontade -->
    <meta name="keywords" content="clínica veterinária,clínica veterinária em Lisboa,veterinário em Lisboa, atendimento veterinário, consulta veterinária, saúde animal, cuidados com animais, veterinário, vacinação de pets, emergência veterinária, cirurgia veterinária, hospital veterinário, clínica veterinária perto de mim, exames laboratoriais para pets, veterinário especializado, pet shop, cuidados com cães e gatos, exames veterinários, clínica para pets, saúde de cães e gatos, veterinário 24h, atendimento de emergência para animais, consultas veterinárias para cães e gatos">

    <meta name="robots" content="follow">
    <title>VetWorld</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../javascript/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../javascript/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="sticky-top">
        <?php
        if (isset($_SESSION['username'])) {
                                $username = htmlspecialchars($_SESSION['username']);
                            } else {
                                $username = $lang['login'];
                            }?>
            <section>
                <div class="d-flex justify-content-between align-items-center pt-3 container position-top">
                    <!-- Navbar -->
                    <div class="d-flex justify-content-center">
                        <nav class="navbar navbar-expand-lg">
                            <div class="text-center navbar-brand me-5">
                                 <a href="index.php">
                                <img src="../img/principais/logo.png" class="img-fluid" style="max-height: 100px; min-height: 75px;" alt="<?php echo $lang['logop']; ?>">
                                </a>
                            <h1 class="text-white border-text">Vet<span class="titulo">World</span></h1>
                            </div>
                            <!-- Botão de menu hamburguer-->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Menu de navegação -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav gap-5">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php"><?php echo $lang['home']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="servicos.php"><?php echo $lang['servicos']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="agendar.php"><?php echo $lang['agende']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contactos.php"><?php echo $lang['contactos']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="faq.php"><?php echo $lang['faq']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="btn-group" role="group">
                                            <button type="button" id="dropdownMenuButton" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="../img/principais/pt.png" alt="<?php echo $lang['ptp']; ?>" style="width: 30px; height: 20px;">
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item me-1" href="index.php?lang=en">
                                                <img src="../img/principais/us.png" alt="<?php echo $lang['usp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['in']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="index.php?lang=es">
                                                <img src="../img/principais/es.png" alt="<?php echo $lang['esp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['es']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="index.php?lang=pt">
                                                <img src="../img/principais/pt.png" alt="<?php echo $lang['ptp']; ?>" style="width: 30px; height: 20px;"> <?php echo $lang['pt']; ?>
                                            </a></li>
                                    </ul>
                                        </div>
                                    </li>
                                </ul>
                                        
                            </div>
                        </nav>
                    </div>
                <!-- Carrinho e Login -->
                    <div class="d-flex gap-4">
                        <div class="text-center">
                            <a href="carrinho.php">
                                <img src="../img/principais/shopping-cart.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['carp']; ?>">
                            </a>
                            <p class="mt-2 "><?php echo $lang['carrinho']; ?></p>
                        </div>
                        <div class="text-center">
                            <?php if (isset($_SESSION['username'])) {?>
                                <a href="perfiluser.php">
                                <img src="../img/principais/user.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['logp']; ?>">
                            </a>
                            <?php } else { ?>
                                <a href="login.php">
                                <img src="../img/principais/user.png" class="img-fluid" style="max-width: 50px;" alt="<?php echo $lang['logp']; ?>">
                            </a>
                            <?php }; ?>
                            
                            <p class="mt-2"><?=$username; ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        
    <main class="h-auto">
        <section>
            <div class="seccao container">
                <h2><?php echo $lang['contactos']; ?></h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-5">
                    <div class="servbox mx-auto img-fluid">
                        <h5><?php echo $lang['tel']; ?> 987 675 456</h5>
                        <h5><?php echo $lang['email']; ?> geral.vetworld@gmail.com</h5>
                        <h5><?php echo $lang['endereco']; ?> Rua das Rosas, Nº 125, Loja 2 1200-345 Lisboa, Portugal</h5>
                    </div>
                </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="img-fluid mb-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3113.327785456777!2d-9.153204785460298!3d38.71028275097347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRua%20das%20Rosas%2C%20N%C2%BA%20125%2C%20Loja%202%201200-345%20Lisboa%2C%20Portugal!5e0!3m2!1spt-PT!2spt!4v1735214179828!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
            </div>
        </section>
        <!-- Botão do TOP -->
        <button id="backToTop" class="btn btn-primary position-fixed" style="bottom: 20px; right: 20px;" >
            <i class="fa-solid fa-circle-arrow-up"></i>
        </button>
    </main>
    <footer class="pt-2 " >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h5 class="textcolor"><?php echo $lang['info']; ?></h5>
                    <nav class="nav flex-column ">
                        <div>
                            <a class="nav-link textcolor" href="sobrenos.php"><?php echo $lang['sobrenos']; ?></a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="faq.php"><?php echo $lang['faq']; ?></a>
                        </div>
                        <div>
                            <a class="nav-link textcolor" href="reembolso.php"><?php echo $lang['cancelamento']; ?></a>
                        </div>
                        <div class="mt-2 mb-3">
                            <a class="ms-3" href="https://www.livroreclamacoes.pt/Inicio/"><img class="img-fluid livroimg" src="../img/principais/livro.png" alt="<?php echo $lang['livrop']; ?>"></a>
                        </div>
                    </nav>   
                </div>
                <div class="col-md-6 col-sm-12 text-md-end">
                    <h5 class="mx-md-5 textcolor"><?php echo $lang['metodos']; ?></h5>
                    <img class="mt-4 img-fluid" src="../img/principais/metodos.png" alt="ç<?php echo $lang['metodosp']; ?>">
                </div>
            </div>
        </div>
        <div class="text-center pb-2 text-white">
            <p><?php echo $lang['direitos']; ?></p>
        </div>
    </footer>
</body>
</html>
<!-- para as bandeiras do header-->
<script>
    document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function (event) {
        const selectedFlag = event.target.querySelector('img').src;
        const mainButton = document.getElementById('dropdownMenuButton').querySelector('img');
        mainButton.src = selectedFlag;
    });
    });
</script>
<!-- para o botão top -->
<script>
    window.addEventListener("scroll", function () {
        const button = document.getElementById("backToTop");
        if (window.scrollY > 200) {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    });
    document.getElementById("backToTop").addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>