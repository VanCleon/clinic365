<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-users"></i>
        </div>
        <div class="header-title">
            <h1>Lista de Pacientes</h1>
            <small>Gestión y búsqueda de pacientes registrados</small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('admin/Dashboard')?>"><i class="pe-7s-home"></i> Inicio</a></li>
                <li class="active">Lista de Pacientes</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
               <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="btn-group"> 
                            <a class="btn btn-success" href="<?php echo base_url('admin/Patient_controller')?>"> 
                                <i class="fa fa-plus"></i> Nuevo Paciente 
                            </a>  
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="patientTable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr style="background-color: #f4f7fa;">
                                        <th class="text-center">Foto</th>
                                        <th>Cédula</th>
                                        <th>Nombre Completo</th>
                                        <th class="text-center">Sexo</th>
                                        <th class="text-center">Edad</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php if (!empty($patient_list)) { ?>
                                       <?php foreach ($patient_list as $value) { ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php if(!empty($value->picture)){ ?>
                                                    <img src="<?php echo base_url().$value->picture; ?>" class="img-circle" width="40" height="40" style="border: 1px solid #ddd;">
                                                <?php } else { ?>
                                                    <img src="<?php echo base_url('assets/images/patient.png'); ?>" class="img-circle" width="40" height="40">
                                                <?php } ?>
                                            </td>
                                            <td><b><?php echo $value->patient_id; ?></b></td>
                                            <td><?php echo $value->given_name; ?></td>
                                            <td class="text-center">
                                                <?php echo ($value->sex == 'Male') ? '<span class="label label-info">M</span>' : '<span class="label label-warning" style="background-color: #f39c12;">F</span>'; ?>
                                            </td>
                                            <td class="text-center"><?php echo $value->age; ?> años</td>
                                            <td><?php echo $value->phone; ?></td>
                                            <td><small><?php echo substr($value->address, 0, 30); ?><?php echo (strlen($value->address) > 30) ? '...' : ''; ?></small></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url("admin/Patient_controller/patient_info/$value->patient_id") ?>" class="btn btn-primary btn-xs" title="Ver Perfil"><i class="fa fa-eye"></i></a>
                                                    <a href="<?php echo base_url("admin/Patient_controller/edit_patient/$value->patient_id") ?>" class="btn btn-info btn-xs" title="Editar"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url("admin/Patient_controller/delete_patient/$value->patient_id") ?>" class="btn btn-danger btn-xs" title="Eliminar" onclick="return confirm('¿Está seguro de eliminar este paciente?')"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('#patientTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            },
            "order": [[ 2, "asc" ]] // Ordenar por nombre por defecto
        });
    });
</script>