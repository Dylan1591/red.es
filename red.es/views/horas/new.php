              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Nuevo Registro de hora</h4>
                    <form action="?controller=hora&method=save" method="post" onsubmit="return validarHora()"/>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha</label>
                            <div class="col-sm-9">
                               <input type="date" name="hora_fecha" class="form-control"  id="hora_fecha">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Horas registradas</label>
                            <div class="col-sm-9">
                              <input type="number" name="hora" class="form-control" id="hora">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">                     
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estudiante</label>
                            <div class="col-sm-9">
                              <select name="id_estudiante" class="form-control searchbox " >
                                <?php foreach ($estudiantes as $estudiante) {
                                    ?>
                                      <option value="<?php echo $estudiante->id_estudiante ?>"><?php echo $estudiante->estu_nombre  ?> <?php echo $estudiante->estu_apellido ?> (<?php echo $estudiante->grado ?>)</option>
                                    <?php                                       
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                   
                      </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Actividad</label>
                            <div class="col-sm-9">
                              <select name="id_actividad"class="form-control searchbox">
                                <?php foreach ($actividades as $actividad) {
                                    ?>
                                      <option value="<?php echo $actividad->id_actividad ?>"><?php echo $actividad->acti_nombre ?></option>
                                    <?php                                       
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                        </div>

                            <div class="form-group">
                                <button class="btn btn-primary float-right ">Crear</button>
                            </div>
                          
                      </div>
                         <samp class="text-warning" id="alert"></spam>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </section>
            <script type="text/javascript">
              $('.searchbox').select2();
            </script>

