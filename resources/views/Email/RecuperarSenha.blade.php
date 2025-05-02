<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/1-ebf92cfd.ico" type="image/x-icon">
    <title>Recuperando a Senha</title>
    <link rel="stylesheet" href="{{ asset('Recriar_senha.css') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body onload="fadeIn()">
    <div class="conteiner">
        <form action="Recriar_senha.php" method="POST">
            <div class="text">
                <h2 class="recu">Recuperar a senha</h2><br><br><br>
                <input type="password" name="nova_senha" id="nova_senh" required
                    placeholder="Senha"
                    maxlength="40" oninput="senhaValidate()"/>
                <br> <span class="span_required senhasp"> A senha precisa ter no mínimo 6 caracteres</span> <br>
                <input type="password" name="nova_senha_conf" id="nova_senha_con" required
                    placeholder="Confirme a senha"
                    maxlength="40" maxlength="40" oninput="senhaValidate()"/>
                <br><span class="span_required senha2sp"> As senhas não coincidem</span> <br>
            </div>
            <div class="botao">
                <button class="form-botao" type="submit" name="Enviar">Enviar</button>
            </div>
            <div class="olhoAberto">
                <i class="bi bi-eye-fill" id="bt-senha" onclick="OlhoAberto()"></i>
            </div>
            <div class="olhoFechado">
                <i class="bi bi-eye-fill" id="b-senha" onclick="OlhoFechado()"></i>
            </div>
        </form>
    </div>
    <img class="img-backgrund" src="./assets/paisagem-magenta-da-fantasia-da-natureza.jpg" alt="img">
    <script src="Recriar_senha.js"></script>
</body>

</html>