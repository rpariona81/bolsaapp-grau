<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
                <!--https://stackoverflow.com/questions/18842946/refresh-form-page-after-submitting-the-form-->
                <?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'needs-validation', 'onsubmit' => 'window.location.reload()')); ?>
                <!--< ?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'needs-validation')); ?>-->
                <div class="row pt-3">
                    <div class="col-md-5 col-lg-5">
                        <h1 class="text-dark">Postulaciones</h1>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="form-inline">

                            <!--<select class="form-control" id="career_id" name="career_id" va aria-label="Default select example">
                                    <option value="">Todos los programas</option>
                                    < !--<option value="1">Arquitectura de Plataformas y Servicios de Tecnologías de la Información</option>
                                    <option value="2">Enfermería Técnica</option>
                                    <option value="3">Diseño de Modas</option>
                                    <option value="4">Gastronomía</option>
                                    <option value="5">Mecatrónica Automotriz</option>-->
                            <!--<option value="1" <?= $selectValue == 1 ? ' selected="selected"' : ''; ?>>Arquitectura de Plataformas y Servicios de Tecnologías de la Información</option>
                                    <option value="2" <?= $selectValue == 2 ? ' selected="selected"' : ''; ?>>Enfermería Técnica</option>
                                    <option value="3" <?= $selectValue == 3 ? ' selected="selected"' : ''; ?>>Diseño de Modas</option>
                                    <option value="4" <?= $selectValue == 4 ? ' selected="selected"' : ''; ?>>Gastronomía</option>
                                    <option value="5" <?= $selectValue == 5 ? ' selected="selected"' : ''; ?>>Mecatrónica Automotriz</option>
                                    <option value="6" <?= $selectValue == 6 ? ' selected="selected"' : ''; ?>>Cosmetología</option>
                                </select>-->
                            <?= form_dropdown('career_id', $career, $selectValue, 'class="form-control" id="career_id"'); ?>
                            &nbsp;
                            <div class="input-group">
                                <button class="btn btn-primary pull-right font-weight-medium px-4 mb-0" type="submit">
                                    <!--<i class="ti-search"></i>-->
                                    <i class="fa fa-search"></i>&nbsp;Filtrar por programa
                                    <!--<i class="fa fa-filter"></i>-->
                                </button>
                                &nbsp;
                                <a class="btn btn-danger" href="<?= base_url('/admin/postulaciones') ?>">Limpiar filtro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <div class="card-body">
                <div class="table-responsive p-0">
                    <!--<table id="datatablesSimple" name="datatablesSimple" class="table display nowrap table-hover table-bordered mb-0 border-top text-sm" style="width:100%">-->
                    <table id="datatablesSimple" name="datatablesSimple" class="table table-striped thead-warning w-100 dataTable nowrap no-footer">
                        <thead>
                            <tr>
                                <th class="text-dark">Cod Postulación</th>
                                <th class="text-dark">Cod Oferta</th>
                                <th class="text-dark">Programa de estudios</th>
                                <th class="text-dark">Convocatoria</th>
                                <th class="text-dark">Tipo</th>
                                <th class="text-dark">F. publicación</th>
                                <th class="text-dark">F. vigencia</th>
                                <th class="text-dark">Postulante</th>
                                <th class="text-dark">Condición</th>
                                <th class="text-dark">F. Postulación</th>
                                <th class="text-dark">Última actualización</th>
                                <th class="text-dark">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $item) : ?>
                                <tr class="align-middle">
                                    <td class="align-middle"><?= str_pad($item->id, 7, '0', STR_PAD_LEFT); ?></td>
                                    <td class="align-middle"><?= str_pad($item->offer_id, 6, '0', STR_PAD_LEFT); ?></td>
                                    <td class="align-middle"><?= $item->career_title ?></td>
                                    <td class="align-middle"><?= $item->title ?></td>
                                    <td class="align-middle"><?= $item->type_offer ?></td>
                                    <td class="align-middle"><?= date_format($item->date_publish, 'd/m/Y') ?></td>
                                    <td class="align-middle"><?= date_format($item->date_vigency, 'd/m/Y') ?></td>
                                    <td class="align-middle"><?= $item->name . ' ' . $item->paternal_surname . ' ' . $item->maternal_surname ?></td>
                                    <td class="align-middle"><?= $item->graduated ?></td>
                                    <td class="align-middle"><?= date_format($item->date_postulation, 'd/m/Y') ?></td>
                                    <td class="align-middle"><?= $item->updated_at ?></td>
                                    <td class="align-middle">
                                        <?php
                                        if ($item->status) {
                                            echo '<span class="btn bg-success border text-dark">' . $item->flag . '</span>';
                                        } else {
                                            echo '<span class="btn bg-danger border text-dark">' . $item->flag . '</span>';
                                        }
                                        ?>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Descargar CV" target="_blank" download="<?= $item->filecv; ?>" href="<?= base_url('/uploads/filescv/' . $item->filecv); ?>">
                                                <i class="fa fa-file-pdf" title="<?= $item->filecv ?>"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <?php
                                            if ($item->status) {
                                                //echo 'funciona';
                                                //$attributes = array('name' => 'admincontroller/desactivaPostulacion','id' => 'desactivaPostulacion', 'method' =>'POST');
                                                echo form_open("admincontroller/desactivaPostulacion"); //form open
                                                //echo '<form action="'.$action_form.'" method="POST">';
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<input type="hidden" id="career_id" name="career_id" value="' . $item->career_id . '">';
                                                //echo '<button type="submit" name="submit" class="btn '.$icon_form.' btn-sm display-inline" data-toggle="tooltip" value="' . $item->status . '" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-danger btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                                echo form_close();
                                            } else {
                                                //echo 'no funciona';
                                                //$attributes = array('name' => 'admincontroller/activaPostulacion','id' => 'activaPostulacion', 'method' =>'POST');
                                                echo form_open("admincontroller/activaPostulacion"); //form open
                                                //echo '<form action="admincontroller/activaPostulacion" method="POST">';
                                                echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                                echo '<input type="hidden" id="career_id" name="career_id" value="' . $item->career_id . '">';
                                                echo '<button type="submit" name="submit" class="btn btn-outline-primary btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye"></i></button>';
                                                //echo '</form>';
                                                echo form_close();
                                            }
                                            ?>
                                            &nbsp;&nbsp;
                                            <a class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="<?= base_url('/admin/postulacion/' . $item->id) ?>"><i class="fa fa-edit"></i></a>
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

<!--<script>
    /*$(function() {
        $('#FRM_DATOS').on('submit', function(e) {
            e.preventDefault();
            setTimeout(function() {
                window.location.reload();
            }, 0);
            $()
            this.submit();
        });
    });*/
</script>-->