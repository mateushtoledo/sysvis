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
                Você está recebendo essa mensagem devido a uma solicitação de recuperação de senha em sua conta. Caso você não tenha criado essa solicitação, certifique-se de guardar esse email e atualizar suas informações pessoais no sistema.
            </p>
            <p>
                Se a solicitação foi gerada por você, clique sobre o link abaixo para redefinir sua senha. Nos desculpe pelo transtorno.
            <div>
                <a href="http://localhost/base/redefinir-senha?key=<?= $key ?>" target="_blank">Clique aqui para recuperar sua senha</a>
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