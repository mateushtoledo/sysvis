<!DOCTYPE html>
<html>
    <head>
        <!--Carregar scripts do cabecalho-->
        <?php $this->load->view("template/header"); ?>
        <style>
            .fa-folder {
                color: #d39e00;
            }
        </style>
    </head>
    <body>
        <!--Conteudo da pagina-->
        <div class="container">
            <h2>Informações básicas:</h2>
            <br/>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th>
                                        Item
                                    </th>
                                    <th scope="col">
                                        Versão
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a class="system-link" target="_blank" href="https://www.codeigniter.com/">Framework Code Igniter</a></td>
                                    <td><span>3.0</span></td>
                                </tr>
                                <tr>
                                    <td><a class="system-link" target="_blank" href="https://fontawesome.com/">Font Awesome Icons</a></td>
                                    <td><span>5.2.0</span></td>
                                </tr>
                                <tr>
                                    <td><a class="system-link" target="_blank" href="https://linearicons.com/">Linear Icons</a></td>
                                    <td><span>1.0.0</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="system-link" target="_blank" href="https://getbootstrap.com/">Bootstrap</a>
                                    </td>
                                    <td><span>4.1.3</span></td>
                                </tr>
                                <tr>
                                    <td><a class="system-link" target="_blank" href="https://notifyjs.jpillora.com/">Notify js</a></td>
                                    <td><span>--</span></td>
                                </tr>
                                <tr>
                                    <td><a class="system-link" target="_blank" href="https://jquery.com/">JQuery</a></td>
                                    <td><span>2.2.4</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="alert alert-dark">
                        <h4>Estrutura</h4>
                        <div class="text-justify">
                            <ul style="list-style: none">
                                <li>
                                    <i class="fa fa-folder"></i> Application (Aqui fica o código)
                                    <ul style="list-style: none">
                                        <li><i class="fa fa-folder"></i> Config (Arquivos de configuração do framework)</li>
                                        <li><i class="fa fa-folder"></i> Controllers (Controladores da aplicação - MV<b>C</b>)</li>
                                        <li><i class="fa fa-folder"></i> Models (Modelos da aplicação - <b>M</b>VC)</li>
                                        <li><i class="fa fa-folder"></i> Views (Páginas da aplicação - M<b>V</b>C)</li>
                                    </ul>
                                </li>
                                <li>
                                    <i class="fa fa-folder"></i> Assets (Aqui ficam as imagens, CSS, JS)
                                </li>
                                <li>
                                    <i class="fa fa-folder"></i> System (Código do framework)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Importar scripts no fim de pagina -->			
        <?php $this->load->view("template/footer"); ?>	
    </body>
</html>
