<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            .container {
                padding-left: 10%;
                padding-right: 10%;
                font-family: sans-serif;
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Olá <?= $user ?>,</h3>
            <p>
                Bem vindo ao Php Igniter, é um prazer tê-lo conosco!
            </p>
            <p>
                Por favor, clique no link a seguir para liberar sua conta e iniciar o uso do sistema. Após clicar no link, sua conta estará ativada e basta
                fazer login com seu e-mail cadastral e sua senha de acesso.
            <div>
                <a href="http://localhost/base/ativar-conta?key=<?= $key ?>" target="_blank">Clique aqui para ativar sua conta</a>
            </div>
            </p>
            <p>
                Atenciosamente, <b>equipe b2ml</b>.
            </p>
            <br/>
            <small>
                Este e-mail foi enviado automaticamente pelo projeto Php Igniter. Favor, não responda.
            </small>
        </div>
    </body>
</html>