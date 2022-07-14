<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pedido Recebido</title>
     <link rel="stylesheet" href="css/estilo.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
     <header>
          <!--Barra de Navegação-->
          <nav class="navbar navbar-dark bg-dark">
               <!-- Navbar Conteudo -->
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">
                        <img src="img/_Korina_Snacks_Restaurante_Comida__Vermelho_Amarelo_Preto__Logo_Marca-removebg-preview.png" alt="" width="100" height="100" class="d-inline-block align-text-top">
                      </a>

                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Quem Somos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
             </nav>
     </header>
     <main>
          <h2>Novo Pedido Feito</h2>
          <!--SCRIPT PHP-->
          <?php
           class Pedido{//Atributos
               public $nome;
               public $end;
               public $tel;
               public $pedido;
          public function recebePedido(){
               $this->nome = $_POST['nome'];
               $this->end = $_POST['end'];
               $this->tel = $_POST['tel'];
               $this->pedido = $_POST['pedido'];
               //Imprimindo Pedidos
               echo("<li>"."Nome do Ciente: ".$this->nome."</li>");
               echo("<li>"."Endereço: ".$this->end."</li>");
               echo("<li>"."Telefone: ".$this->tel."</li>");
               echo("<li>"."Pedido: ".$this->pedido."</li>");
          }
           }
           $obj=new Pedido;
           $obj-> recebePedido();
          ?>
     </main>
     <footer>
          <!--Rodapé-->
          &copy;QI Lanches.
     </footer>
</body>
</html>