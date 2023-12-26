<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
                <!-- <div class="d-sm-flex align-items-center"> -->
                <?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'form-horizontal', 'onsubmit' => 'window.location.reload()')); ?>

                <div class="row pt-3">
                    <div class="col-md-5 col-lg-5">
                        <h1 class="text-dark">Convocatorias</h1>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="form-inline">
                            <?= form_dropdown('career_id', $career, $selectValue, 'class="form-control" id="career_id"'); ?>
                            &nbsp;
                            <div class="input-group">
                                <button class="btn btn-primary pull-right font-weight-medium mb-0" type="submit">
                                    <!--<i class="ti-search"></i>-->
                                    <i class="fa fa-search"></i>&nbsp;Filtrar por programa
                                    <!--<i class="fa fa-filter"></i>-->
                                </button>

                                &nbsp;
                                <a class="btn btn-danger" href="<?= base_url('/admin/convocatorias') ?>">Limpiar filtro</a>

                                &nbsp;
                                <a class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro" href="<?= base_url('/admin/newconvocatoria') ?>">Nueva convocatoria&nbsp;&nbsp;<i class="fa fa-plus"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <div class="card-body">
                <div class="table-responsive p-0">
                    <!--<table id="datatablesSimple" name="datatablesSimple" class="table display nowrap table-hover table-bordered mb-0 border-top text-sm" style="width:100%">-->
                    <table id="datatablesSimple" name="datatablesSimple" class="table table-striped thead-secondary w-100 dataTable nowrap no-footer">
                        <thead class="table-dark">
                            <tr>
                                <th>Cod Oferta</th>
                                <th>Programa de estudios</th>
                                <th>Empleador/Empresa</th>
                                <th>Convocatoria</th>
                                <th>Tipo</th>
                                <th># vacantes</th>
                                <th>F. publicación</th>
                                <th>F. vigencia</th>
                                <th>Condición</th>
                                <th># postulantes</th>
                                <th>Última actualización</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <?php
                                if ($item->vigency == 0) {
                                    echo '<tr class="align-middle">';
                                } else {
                                    echo '<tr class="table-success align-middle">';
                                } ?>
                                <td class="align-middle"><?= str_pad($item->id, 6, '0', STR_PAD_LEFT); ?></td>
                                <td class="align-middle"><?= $item->career_title ?></td>
                                <td class="align-middle"><?= $item->employer ?></td>
                                <td class="align-middle"><?= $item->title ?></td>
                                <td class="align-middle"><?= $item->type_offer ?></td>
                                <td class="align-middle"><?= $item->vacancy_numbers ?></td>
                                <td class="align-middle">
                                    <?php
                                    if ($item->date_publish) {
                                        echo date_format($item->date_publish, 'd/m/Y');
                                    } else {
                                    } ?>
                                </td>
                                <td class="align-middle"><?= date_format($item->date_vigency, 'd/m/Y') ?></td>
                                <!--<td>< ?= $item->expired ?></td>-->
                                <?php
                                if ($item->vigency == 0) {
                                    echo '<td class="align-middle"><span class="btn bg-danger border text-white">' . $item->expired . '</span></td>';
                                } else {
                                    echo '<td class="align-middle"><span class="btn bg-success border text-white">' . $item->expired . '</span></td>';
                                } ?>
                                <td class="align-middle">
                                    <?php
                                    if ($item->cant_postulantes) {
                                        echo '<div><a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Ver postulantes" href="' . base_url() . 'admin/convocados/' . $item->id . '">' . $item->cant_postulantes . '&nbsp;&nbsp;<i class="fa fa-users"></i></a></div>';
                                    } else {
                                        echo '0';
                                    }
                                    ?>
                                </td>
                                <td class="align-middle"><?= $item->updated_at ?></td>
                                <td class="align-middle">
                                    <?php
                                    if ($item->status) {
                                        echo '<span class="btn bg-info border text-dark">' . $item->flag . '</span>';
                                    } else {
                                        echo '<span class="btn bg-danger border text-dark">' . $item->flag . '</span>';
                                    }
                                    ?>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <?php
                                        if ($item->status) {
                                            echo form_open('admincontroller/desactivaConvocatoria');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                            echo form_close();
                                        } else {
                                            echo form_open('admincontroller/activaConvocatoria');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" name="submit" class="btn btn-outline-primary btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye"></i></button>';
                                            echo form_close();
                                        }
                                        ?>
                                        &nbsp;&nbsp;
                                        <a class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="<?= base_url('/admin/convocatoria/' . $item->id) ?>"><i class="fa fa-edit"></i></a>
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