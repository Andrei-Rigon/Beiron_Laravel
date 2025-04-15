<!DOCTYPE html>
 <html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastre-se - Beiron</title>
  <link rel="shortcut icon" href="<?php echo e(asset('ico/1-ebf92cfd.ico')); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo e(asset('css/Cadastrar/Cadastrar.css')); ?>" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body onload="fadeIn()">
  <main class="ComeCadastre-se">
    <form
      class="ComeCadastre-se__Ajustes"
      id="form"
      action="<?php echo e(route('cadastrar-store')); ?>"
      method="post"> 
      <?php echo csrf_field(); ?>
      <div class="ComeCadastre-se__Ajustes__Forma for">
        <div class="PosTitulo">
          <h2 class="BeleDescriçao fort">Seja bem-vindo(a),</h2>
          <h2 class="ave">aventureiro(a)!</h2>
          <h2 class="cade">Cadastre-se e comece</h2>
          <h2 class="sua">sua aventura.</h2>
        </div>

        <div class="ComrCadastre-se_Preencher">
          <label for="login"></label>
          <input
            class="login place"
            type="text"
            id="Nome"
            name="LOGIN"
            required
            placeholder="Login"
            maxlength="35"
            oninput="loginValidate()"
            value=<?php echo e(old("LOGIN")); ?> >
          <span class="span_required loginsp">Nome deve ter no mínimo 3 caracteres</span>
        </div>

        <div class="ComrCadastre-se_Preencher">
          <label for="email"></label>
          <input
            class="Email place"
            type="email"
            id="email"
            name="EMAIL"
            required
            placeholder="E-mail"
            maxlength="50"
            oninput="emailValidate()" />
          <span class="span_required emailsp">Coloque um e-mail válido</span>
        </div>

        <div class="ComrCadastre-se_Preencher">
          <label for="senha"></label>
          <input
            class="Senha place"
            type="password"
            id="senha"
            name="SENHA"
            required
            placeholder="Senha"
            maxlength="25"
            oninput="senhaValidate()" />
          <span class="span_required senhasp">A senha precisa ter no mínimo 6 caracteres</span>
        </div>

        <div class="ComrCadastre-se_Preencher">
          <label for="Senha2"></label>
          <input
            class="Senha2 place"
            type="password"
            id="Confirme-a-senha"
            name="ConfirmarSenha"
            required
            placeholder="Confirme a senha"
            maxlength="25"
            oninput="senhaValidate()" />
          <span class="span_required senha2sp">As senhas não coincidem</span>
        </div>

        <div class="PosBotao">
          <button class="Botao" name="Cadastrar" type="submit" id="bt-voltar" onclick="return senhaValidate()">Cadastrar</button>
        </div>
        <?php if(session('loginError')): ?>
                                <div class="alert alert-danger text-center">
                                    <?php echo e(session('loginError')); ?>

                                </div>
                            <?php endif; ?>
      </div>
    </form>
    <div class="img_forma">
      <img
        class="imagem"
        src=" <?php echo e(asset('assets/pergaminho 5.png')); ?>"
        alt="img"
        type="imagem" />
    </div> 
    <div class="iconemago">
      <img src=" <?php echo e(asset('assets/mago24px.png')); ?> " alt="img" />
    </div>
    <div class="iconelivro">
      <img src=" <?php echo e(asset('assets/livro-de-feiticos.png')); ?> " alt="img" />
    </div>
    <div class="olhoAberto">
      <i class="bi bi-eye-fill" id="bt-senha" onclick="OlhoAberto()"></i>
    </div>
    <div class="olhoFechado">
      <i class="bi bi-eye-fill" id="b-senha" onclick="OlhoFechado()"></i>
    </div>

    <video class="video-background" autoplay muted loop id="video-background">
    <source
      src="<?php echo e(asset('video/Vídeo do WhatsApp de 2024-09-15 à(s) 21.43.13_51dfb058.mp4')); ?>"
      type="video/mp4" />
    </video>
    <script src="<?php echo e(asset('js/Cadastrar/Cadastrar.js')); ?>"></script>
    <a class="voltar-Login" onclick="location.href='login'">Voltar para o login!</a>
  </main>

</body>

</html><?php /**PATH C:\xampp\htdocs\Beiron_Laravel\resources\views/Cadastrar/Cadastrar.blade.php ENDPATH**/ ?>