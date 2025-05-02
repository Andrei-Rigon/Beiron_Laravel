<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Beiron</title>
  <link rel="shortcut icon" href="<?php echo e(asset('ico/1-ebf92cfd.ico')); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo e(asset('css/login/Login.css')); ?>">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body onload="fadeIn()">
  <div class="conteiner">
    <form class="form" action="<?php echo e(route('login-store')); ?>" method="POST"><?php echo csrf_field(); ?>
      <div class="titulo">
        <strong class="DestaqueTitulo">
          <h1>
            L O G I N
          </h1>
        </strong>
      </div>
      <div class="box1">
        <input class="box-text" type="text" name="LOGIN" id="nome" required placeholder="Usuário" maxlength="25"  value=<?php echo e(old("LOGIN")); ?> ><br>
        <input class="box-text" type="password" name="SENHA" id="senha1" required placeholder="Senha" maxlength="25">
      </div>
 
      <div class="botao1">
        <button class="form-botao" id="bt-voltar" type="submit" name="Entrar">Entrar</button>
      </div>


      <div class="">
        <a class="link-cadastre-se" onclick="location.href='cadastrar'">Cadastre-se</a>
      </div>

      <div class="">
        <a class="link-Esqueceu-sua-senha" href="email">Esqueceu sua senha?</a>
      </div>
      <img class="icone mago" src="<?php echo e(asset('assets/mago24px.png')); ?>" alt="img" />
      <div class="icone ie">
        <i class="bi bi-eye-fill" id="icone" onclick="OlhoAberto()"></i>
      </div>
      <?php if(session('loginError')): ?>
    <div class="position-fixed bottom-0 end-0 p-3 a" style="z-index: 11">
        <div id="loginErrorToast" class="toast align-items-center text-white bg-danger border-0" 
             role="alert" 
             aria-live="assertive" 
             aria-atomic="true"
             data-bs-delay="3000" 
             data-bs-autohide="true">
            <div class="d-flex">
                <div class="toast-body">
                   <?php echo e(session('loginError')); ?>   
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script>
        const toastEl = document.getElementById('loginErrorToast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    </script>
<?php endif; ?>
    </form>
  </div>
  <video class="video-background" autoplay muted loop id="video-background">
    <source
      src="<?php echo e(asset('video/a_first_person_view_video_of_someone_walking_near_the_ground_in_the_hall_of_the_starting_frame__when_07c889.mp4')); ?>"
      type="video/mp4" />
  </video>

  <script src="<?php echo e(asset('js/Login/Login.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\Beiron_Laravel\resources\views/Login/login.blade.php ENDPATH**/ ?>