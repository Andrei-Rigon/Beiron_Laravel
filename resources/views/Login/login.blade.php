<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Beiron</title>
  <link rel="shortcut icon" href="{{ asset('ico/1-ebf92cfd.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/login/Login.css') }}">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body onload="fadeIn()">
  <div class="conteiner">
    <form class="form">
      <div class="titulo">
        <strong class="DestaqueTitulo">
          <h1>
            L O G I N
          </h1>
        </strong>
      </div>
      <div class="box1">
        <input class="box-text" type="text" name="login" id="nome" required placeholder="Usuário" maxlength="25"><br>
        <input class="box-text" type="password" name="senha" id="senha1" required placeholder="Senha" maxlength="25">
      </div>

      <div class="botao1">
        <button class="form-botao" id="bt-voltar" type="submit" name="Entrar">Entrar</button>
      </div>

      <div class="">
        <a class="link-cadastre-se" onclick="location.href='cadastrar'">Cadastre-se</a>
      </div>

      <div class="">
        <a class="link-Esqueceu-sua-senha" href="EMAIL.php">Esqueceu sua senha?</a>
      </div>
      <img class="icone mago" src="{{ asset('assets/mago24px.png') }}" alt="img" />
      <div class="icone ie">
        <i class="bi bi-eye-fill" id="icone" onclick="OlhoAberto()"></i>
      </div>

    </form>
  </div>
  <video class="video-background" autoplay muted loop id="video-background">
    <source
      src="{{ asset('video/a_first_person_view_video_of_someone_walking_near_the_ground_in_the_hall_of_the_starting_frame__when_07c889.mp4') }}"
      type="video/mp4" />
  </video>

  <script src="{{ asset('js/Login/Login.js') }}"></script>
</body>

</html>