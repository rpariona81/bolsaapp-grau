<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card border shadow-xs mb-4">

            <div class="card-header border-bottom pb-0">

                <div class="row pt-3">
                    <div class="col-md-5 col-lg-5">
                        <h1 class="text-dark">Programas de estudios</h1>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="input-group">
                            <a class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro" href="<?= base_url('/admin/newprograma') ?>">Nuevo programa&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?= my_validation_errors(validation_errors()); ?>
            <p class='mt-1 alert' style='color:red'> <?= $this->session->flashdata('flashError') ?> </p>
            <div class="card-body">
                <div class="table-responsive p-0">
                    <!--<table id="datatablesSimple" name="datatablesSimple" class="table display nowrap table-hover table-bordered mb-0 border-top text-sm" style="width:100%">-->
                    <table id="datatablesSimple" name="datatablesSimple" class="table table-striped thead-secondary w-100 dataTable nowrap no-footer">
                        <thead>
                            <tr>
                                <th>Cod Programa</th>
                                <th>Programa de estudios</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <tr>
                                    <td class="align-middle"><?= str_pad($item->id, 5, '0', STR_PAD_LEFT); ?></td>
                                    <td class="align-middle"><?= $item->career_title ?></td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-warning btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Editar" href="<?= base_url('/admin/programa/' . $item->id) ?>"><i class="fa fa-edit"></i></a>
                                            &nbsp;&nbsp;<?= form_open('admincontroller/eliminaPrograma', array('class' => 'form-horizontal')); ?>
                                            <input type="hidden" id="id_career" name="id_career" value="<?= $item->id ?>">
                                            <button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-trash"></i></button>
                                            <?= form_close(); ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>