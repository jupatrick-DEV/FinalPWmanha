<?php
$resultDados = new Conexao();
$dados = $resultDados->selecionaDados('SELECT * FROM artigo');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Solicitação de Validação de Artigos </h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">            
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tabela-produtos" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Cod</th>
                                    <th>Titulo</th>
                                    <th>Categoria</th>
                                    <th>Nome do Usuário</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($dados as $dado) {
                                    ?>
                                    <tr>
                                        <td><?php echo $dado ['id']; ?></td>
                                        <td><?php echo $dado ['titulo']; ?></td>
                                        <td><?php echo $dado ['categoria']; ?></td>
                                        <td><?php echo $dado ['nome']; ?></td>
                                        <td>
                                            <!--vizualiza-->
                                            <a href="?pg=validar-artigo&id=<?php echo $dado['id']; ?>" class="btn btn-success">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>




                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Cod</th>
                                    <th>Titulo</th>
                                    <th>Categoria</th>
                                    <th>Nome do Usuário</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>