<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('ico/1-ebf92cfd.ico') }}" type="image/x-icon">
    <title>Email</title>
    <link rel="stylesheet" href="{{ asset('css/Email/Email.css') }}" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />


</head>
<body onload="fadeIn()">
    <div class="conteiner">
        <div class="texto">

            <h2>Insira <strong class="destaque">Login</strong> e o <strong class="destaque">E-mail</strong> <br>para recuperar a senha</h2>

        </div>

        <form class="conteiner1" action="{{ route('email-store') }}" method="POST" >@csrf
            <div class="text1">
                <input class="box-text" type="text" name="usuario" required
                     placeholder="Login"
                    maxlength="25" value="{{ old('usuario') }}" > <br>
                <input class="box-text" type="text" name="email" required
                    placeholder="E-mail"
                    maxlength="40" value="{{ old('email') }}"><br>
            </div>
            <div class="pbotao">
                <button class="botao" type="submit" name="send">Enviar</button>
            </div>
            <a class="voltarLogin" href="{{ route('login-index') }}">Voltar para o login</a>
            @if (session('loginError'))
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="loginErrorToast" class="toast align-items-center text-white bg-danger border-0" 
             role="alert" 
             aria-live="assertive" 
             aria-atomic="true" 
             data-bs-delay="3000" 
             data-bs-autohide="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('loginError') }} 
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
@endif            
    </div>
    </form>

    <img class="img" src="{{ asset('assets/paisagem-de-formacoes-rochosas-naturais.jpg') }}" alt="img">

    <script src="{{ asset('js/email/email.js') }}" ></script>
</body>

</html>