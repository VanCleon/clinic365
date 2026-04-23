<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-wheelchair"></i>
        </div>
        <div class="header-title">
            <h1>Añadir Nuevo Paciente</h1>
            <small>Registro de datos del paciente</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Inicio</a></li>
                <li><a href="#">Pacientes</a></li>
                <li class="active">Añadir Paciente</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="btn-group"> 
                            <a class="btn btn-primary" href="<?php echo base_url('admin/Patient_controller/patient_list')?>"> <i class="fa fa-list"></i> Lista de Pacientes</a>  
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php echo form_open_multipart('admin/Patient_controller/save_patient'); ?>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend style="color: #0072ff;">Datos Personales</legend>

                                        <div class="form-group">
                                            <label>Documento de Identidad <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <select class="form-control" id="doc_type" style="width: 75px; padding: 6px;">
                                                        <option value="V-">V-</option>
                                                        <option value="E-">E-</option>
                                                        <option value="J-">J-</option>
                                                        <option value="P-">P-</option>
                                                    </select>
                                                </div>
                                                <input type="number" class="form-control" id="doc_number" required placeholder="Ej: 12345678">
                                                <input type="hidden" name="patient_id" id="patient_id">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Nombres y Apellidos <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" required placeholder="Nombres y Apellidos completos">
                                        </div>

                                        <div class="form-group">
                                            <label>Sexo <span class="text-danger">*</span></label>
                                            <select name="sex" class="form-control" required>
                                                <option value="">Seleccione...</option>
                                                <option value="Male">Masculino</option>
                                                <option value="Female">Femenino</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha de Nacimiento <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="birth_date" id="birth_date" required>
                                            <input type="hidden" name="age" id="age">
                                            <small class="text-muted">Edad calculada: <b id="display_age">0</b> años</small>
                                        </div>

                                        <div class="form-group">
                                            <label>Tipo de Sangre</label>
                                            <select name="blood_group" class="form-control">
                                                <option value="">Seleccionar...</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>

                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <legend style="color: #0072ff;">Datos de Contacto</legend>

                                        <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input type="email" class="form-control" name="email" placeholder="ejemplo@correo.com">
                                        </div>

                                        <div class="form-group">
                                            <label>Número de Teléfono <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="phone" required placeholder="Ej: 0414-1234567">
                                        </div>

                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <textarea name="address" class="form-control" rows="3" placeholder="Dirección de residencia..."></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Foto de Perfil</label>
                                            <input type="file" name="picture">
                                        </div>

                                    </fieldset>
                                </div>
                            </div>
                            
                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend style="color: #ff3333;">Contacto de Emergencia</legend>
                                        
                                        <div class="form-group">
                                            <label>Cédula del Contacto</label>
                                            <input type="text" class="form-control" name="em_document" placeholder="V-12345678">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombres y Apellidos</label>
                                            <input type="text" class="form-control" name="em_name" placeholder="Nombre completo">
                                        </div>
                                        <div class="form-group">
                                            <label>Número de Teléfono</label>
                                            <input type="text" class="form-control" name="em_phone" placeholder="04xx-1234567">
                                        </div>
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <textarea class="form-control" name="em_address" rows="2" placeholder="Dirección del contacto..."></textarea>
                                        </div>

                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <legend style="color: #0072ff;">Información Médica Adicional</legend>
                                        <div class="form-group">
                                            <label>Antecedentes / Observaciones</label>
                                            <textarea name="history" class="form-control" rows="11" id="sommernote" placeholder="Alergias, enfermedades previas, etc..."></textarea>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="panel-footer text-right">
                                <button type="reset" class="btn btn-default">Restablecer</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar Paciente</button>
                            </div>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // 1. Unir el Select (V,E) con la cédula en tiempo real para guardar en BD
        var docType = document.getElementById('doc_type');
        var docNum = document.getElementById('doc_number');
        var patientIdHidden = document.getElementById('patient_id');

        function updateDocument() {
            patientIdHidden.value = docType.value + docNum.value;
        }
        if(docType && docNum) {
            docType.addEventListener('change', updateDocument);
            docNum.addEventListener('input', updateDocument);
        }

        // 2. Calcular la edad en base a la fecha de nacimiento
        var birthDateInput = document.getElementById('birth_date');
        var ageHiddenInput = document.getElementById('age');
        var ageDisplay = document.getElementById('display_age');

        if(birthDateInput) {
            birthDateInput.addEventListener('change', function() {
                var birthDate = new Date(this.value);
                if (!isNaN(birthDate)) {
                    var today = new Date();
                    var age = today.getFullYear() - birthDate.getFullYear();
                    var m = today.getMonth() - birthDate.getMonth();
                    
                    // Si aún no ha pasado el mes o el día del cumpleaños de este año, restamos 1
                    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }
                    
                    ageHiddenInput.value = age;
                    ageDisplay.innerText = age;
                }
            });
        }
    });
</script>