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
    <link rel="stylesheet" href="../css/login.css">
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
                                        <li><a class="dropdown-item me-1" href="#?lang=en">
                                                <img src="../img/principais/us.png" alt="<?php echo $lang['usp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['in']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="#?lang=es">
                                                <img src="../img/principais/es.png" alt="<?php echo $lang['esp']; ?>" style="width: 30px; height: 20px;"><?php echo $lang['es']; ?> 
                                            </a></li>
                                        <li><a class="dropdown-item" href="#?lang=fr">
                                                <img src="../img/principais/Flag_of_France.png" alt="<?php echo $lang['frp']; ?>" style="width: 30px; height: 20px;"> <?php echo $lang['fr']; ?>
                                            </a></li>
                                        <li><a class="dropdown-item" href="#?lang=pt">
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

<!-- Para quem for mexer estilizar aqui, para checar tudo e aparecer uma msg verde positiva dq td deu certo, é só add uma div com a vlasse valid-feedback dentro da div q ta o input q queiras, o contrário é a msma coisa só q com o invalid-feedback-->
    <main>
        <form class="row g-3 needs-validation" novalidate form id="form_registo" method="POST" action="Sys/validacao.php">
            <div class="col-md-4">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" name="ctx_nome" id="nome" required maxlength="50">
              <div class="valid-feedback">
                Válido!
              </div>
            </div>
            <div class="col-md-4">
              <label for="email" class="form-label">Email</label>
              <div class="input-group has-validation">
                <input type="email" class="form-control" name="ctx_email" id="email" aria-describedby="inputGroupPrepend" required maxlength="50">
                <div class="invalid-feedback">
                  Por favor, selecione um email válido!.
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="tel" class="form-label">Telefone</label>
              <input type="tel" class="form-control" name="ctx_tel" id="tel" required maxlength="9">
              <div class="invalid-feedback">
                Por favor, selecione um telefone válido!.
              </div>
            </div>
            <div class="col-md-3">
              <label for="pass" class="form-label">Password</label>
              <input type="password" class="form-control" name="ctx_pass" id="pass" required maxlength="50" minlength="8">
              <div class="invalid-feedback">
                A senha deve conter 8 digitos e pelo menos uma letra maiúscula, um número e um símbolo!
              </div>
            </div>
            <div class="col-md-3">
                <label class="form-label">Confirmar a Password</label>
                <input type="password" class="form-control" name="ctx_repass" required maxlength="50" minlength="8">
                <div class="invalid-feedback">
                  A senha não coincide com a digitada primeiramente!
                </div>
              </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Aceitar os termos e condições. <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Leia aqui</a>
                </label>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Termos e condições</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <p><?php echo $lang['agradecimento']; ?></p>
                            <h3><?php echo $lang['aceitacao_termos']; ?></h3>
                            <p><?php echo $lang['aceitacao_termos_detalhe']; ?></p>
                            <h3><?php echo $lang['elegibilidade_registo']; ?></h3>
                            <p><?php echo $lang['elegibilidade_registo_1']; ?></p>
                            <p><?php echo $lang['elegibilidade_registo_2']; ?></p>
                            <h3><?php echo $lang['uso_permitido']; ?></h3>
                            <p><?php echo $lang['uso_permitido_detalhe']; ?></p>
                            <p><?php echo $lang['uso_permitido_1']; ?></p>
                            <p><?php echo $lang['uso_permitido_2']; ?></p>
                            <h3><?php echo $lang['dados_pessoais']; ?></h3>
                            <p><?php echo $lang['dados_pessoais_1']; ?></p>
                            <p><?php echo $lang['dados_pessoais_2']; ?></p>
                            <p><?php echo $lang['dados_pessoais_3']; ?></p>
                            <h3><?php echo $lang['responsabilidade_utilizador']; ?></h3>
                            <p><?php echo $lang['responsabilidade_utilizador_1']; ?></p>
                            <p><?php echo $lang['responsabilidade_utilizador_2']; ?></p>
                            <h3><?php echo $lang['servicos_disponiveis']; ?></h3>
                            <p><?php echo $lang['servicos_disponiveis_1']; ?></p>
                            <p><?php echo $lang['servicos_disponiveis_2']; ?></p>
                            <p><?php echo $lang['servicos_disponiveis_3']; ?></p>
                            <p><?php echo $lang['servicos_disponiveis_4']; ?></p>
                            <h3><?php echo $lang['direitos_clinica']; ?></h3>
                            <p><?php echo $lang['direitos_clinica_1']; ?></p>
                            <p><?php echo $lang['direitos_clinica_2']; ?></p>
                            <p><?php echo $lang['direitos_clinica_3']; ?></p>
                            <h3><?php echo $lang['limitacao_responsabilidade']; ?></h3>
                            <p><?php echo $lang['limitacao_responsabilidade_1']; ?></p>
                            <p><?php echo $lang['limitacao_responsabilidade_2']; ?></p>
                            <h3><?php echo $lang['alteracoes_termos']; ?></h3>
                            <p><?php echo $lang['alteracoes_termos_detalhe']; ?></p>
                            <h3><?php echo $lang['resolucao_disputas']; ?></h3>
                            <p><?php echo $lang['resolucao_disputas_detalhe']; ?></p>
                            <h3><?php echo $lang['contato']; ?></h3>
                            <p><?php echo $lang['contato_email']; ?></p>
                            <p><?php echo $lang['contato_telefone']; ?></p>
                            <p><?php echo $lang['contato_endereco']; ?></p>
                            <p><?php echo $lang['aceito_texto']; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invalid-feedback">
                  Você deve aceitar antes de se registar.
                </div>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary botao" onclick="validaNIF()" name="btn_regista" type="submit">Registar</button>
            </div>
        </form>
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
<!-- Validar o NIF -->
<script>
function validaNIF($nif, $ignoreFirst=true) {
	//Limpamos eventuais espaços a mais
	$nif=trim($nif);
	//Verificamos se é numérico e tem comprimento 9
	if (!is_numeric($nif) || strlen($nif)!=9) {
		return false;
	} else {
		$nifSplit=str_split($nif);
		//O primeiro digíto tem de ser 1, 2, 3, 5, 6, 8 ou 9
		//Ou não, se optarmos por ignorar esta "regra"
		if (
			in_array($nifSplit[0], array(1, 2, 3, 5, 6, 8, 9))
			||
			$ignoreFirst
		) {
			//Calculamos o dígito de controlo
			$checkDigit=0;
			for($i=0; $i<8; $i++) {
				$checkDigit+=$nifSplit[$i]*(10-$i-1);
			}
			$checkDigit=11-($checkDigit % 11);
			//Se der 10 então o dígito de controlo tem de ser 0
			if($checkDigit>=10) $checkDigit=0;
			//Comparamos com o último dígito
			if ($checkDigit==$nifSplit[8]) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}
</script>
<script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
<!-- termos e condições -->
<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
})
</script>
<!-- botão do top -->
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
