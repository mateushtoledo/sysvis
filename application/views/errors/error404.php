<html>
    <head>
        <?php $this->load->view("template/header", ["title" => "Página não encontrada"]); ?>
    </head>
    <body>
        <div style="padding: 5%">
            <div class="text-center">
                <img src="<?= base_url("assets/img/danger.png"); ?>" />
                <h2>Página não encontrada!</h2>
                <label>Clique no botão abaixo para voltar à página inicial do sistema.</label>
                <div style="margin-top: 30px">
                    <a href="home" class="btn btn-danger btn-lg"><i class="fa fa-home"></i>&nbsp;Retornar</a>
                </div>
            </div>
        </div>
        <?php $this->load->view("template/footer", ["title" => "Página não encontrada"]); ?>
    </body>
</html>