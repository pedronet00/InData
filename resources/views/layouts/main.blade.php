<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InData</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <link rel="stylesheet" href="/css/styles.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
      .msg{
        background-color: #D4EDDA;
        color: #155724;
        border: 1px solid #C3E6CB;
        width: 100%;
        margin-bottom: 0px;
        text-align: center;
        padding: 10px;
      }
    </style>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/" style="font-size: 32px;">InData</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            @auth
            
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projetos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/projects/list">Listar Projetos</a>
                        <a class="dropdown-item" href="/projects/create">Cadastrar Projeto</a>
                    </div> <!-- Adicionando a tag de fechamento -->
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Anotações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/notes/list">Listar Anotações</a>
                        <a class="dropdown-item" href="/notes/create">Cadastrar Anotação</a>
                    </div> <!-- Adicionando a tag de fechamento -->
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuários
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/user/list">Listar Usuários</a>
                        <a class="dropdown-item" href="user/register">Cadastrar Usuário</a>
                    </div> <!-- Adicionando a tag de fechamento -->
                  </li>

                  <li class="nav-item active">
                      <a class="nav-link" href="/">Mensagens</a>
                  </li>
                </ul>
                <?php 
                
                  $user = Auth::user();

                  $userName = $user->name;
                ?>
                <form id="logout-form" action="/logout" method="POST">
                @csrf
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $userName; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="nav-link" style="color: black;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="/logout">Sair</a>

                    </div> <!-- Adicionando a tag de fechamento -->
                  </li>
    </ul>
    </div>
                </form>


                  @endauth

                  @guest
                
                <div class="auth" style="display: flex;float: right;">
                  <a class="nav-link" href="/register">Registrar
                  <a class="nav-link" href="/login">Logar
                </div>

                @endguest
                

            </div>
        </nav>
    </header>

    
    
    <main class="container-fluid">
      <div class="row">
        @if(session('msg'))
          <p class="msg">{{session('msg')}}</p>
          
        @endif
        @yield('content')
      </div>
    </main>

    <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer text</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
          aliquam voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer text</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
          aliquam voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script>
            // Seleciona o elemento com a classe .msg
            const msgElement = document.querySelector('.msg');

            // Define a função para ocultar a mensagem após 3 segundos
            function ocultarMensagem() {
              msgElement.style.display = 'none';
            }

            // Aguarda 3 segundos (3000 milissegundos) e chama a função para ocultar a mensagem
            setTimeout(ocultarMensagem, 3000);
        </script>


</html>