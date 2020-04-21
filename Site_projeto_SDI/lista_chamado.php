<?php
require_once "cabecalho.php";

require_once "class/ChamadoClasse.php";

$lista = new ChamadoClasse();
$listaAtualizada = $lista->visualizar($_SESSION['id']);

//print_r($listaAtualizada);
?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mt-4 mb-1 ">
                <div>
                    <p>Bem vindo, <?php echo $_SESSION['nome'] ?>!! esses são os chamados atribuido a sua fila</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
<!---->
                <div class="row">

                    <table class="table text-center table-hover text-white table-bordered"
                        style="background-color: #6fa7de;">
                        <thead class="">
                            <tr class=" bg-primary  ">
                                <th class="border-top-0 border-left-0 border-bottom-0 border-right border-dark"><input type="text" class="form-control text-dark"
                                        placeholder="Número Do Chamado" disabled></th>
                                <th class="border-top-0 border-bottom-0 border-right border-dark"><input type="text" class="form-control" placeholder="E-mail" disabled>
                                </th>
                                <th class="border-top-0 border-bottom-0 border-right border-dark"><input type="text" class="form-control" placeholder="Descrição" disabled>
                                </th>
                                <th class=""><input type="text" class="form-control" placeholder="Status do Chamado" disabled>
                                </th>
                                <th><input type="text" class="form-control" placeholder="Editar" disabled></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listaAtualizada as $lista): ?>
                            <tr>
                                <td><a href="">M09123</a></td>
                                <td><?php print $lista['email_usuario'] ?></td>
                                <td><?php print substr($lista['descricao_chamado'],0,30) ?></td>
                                <td><?php print $lista['nome_status'] ?></td>
                                <td><a href="editar_chamado.php?id=<?php print $lista['id_chamado']; ?>">Editar</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>






    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>