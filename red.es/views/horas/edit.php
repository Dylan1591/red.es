              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar Registro horas</h4>
                    <form action="?controller=hora&method=update" method="post" onsubmit="return validarHora()">
                    <input type="hidden" name="id_hora" value="<?php echo $data[0]->id_hora ?>">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha</label>
                            <div class="col-sm-9">
                              <input type="date" name="hora_fecha" class="form-control" value="<?php echo $data[0]->hora_fecha?>" id="hora_fecha">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hora registradas</label>
                            <div class="col-sm-9">
                              <input type="number" name="hora" class="form-control" value="<?php echo $data[0]->hora ?>" id="hora">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">                
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estudiante</label>
                            <div class="col-sm-9">
                              <select name="id_estudiante" class="form-control searchbox">
                                <?php foreach ($estudiantes as $estudiante) {
                                  if ($estudiante->id_estudiante == $data[0]->id_estudiante) {
                                    ?>
                                      <option selected value="<?php echo $estudiante->id_estudiante ?>"><?php echo $estudiante->estu_nombre ?> <?php echo $estudiante->estu_apellido ?> (<?php echo $estudiante->grado ?>)</option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo $estudiante->id_estudiante ?>"><?php echo $estudiante->estu_nombre  ?> <?php echo $estudiante->estu_apellido ?> (<?php echo $estudiante->grado ?>)</option>
                                    <?php  
                                  }
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Actividad</label>
                            <div class="col-sm-9">
                              <select name="id_actividad" class="form-control searchbox">
                                <?php foreach ($actividades as $actividad) {
                                  if ($actividad->id_actividad == $data[0]->id_actividad) {
                                    ?>
                                      <option selected value="<?php echo $actividad->id_actividad ?>"><?php echo $actividad->acti_nombre ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo $actividad->id_actividad ?>"><?php echo $actividad->acti_nombre  ?></option>
                                    <?php  
                                  }
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div>
                          </div clas="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lider</label>
                            <div class="col-sm-9">
                              <select name="id_usuario" class="form-control searchbox">
                                <?php foreach ($usuarios as $usuario) {
                                  if ($usuario->id_usuario == $data[0]->id_usuario) {
                                    ?>
                                      <option selected value="<?php echo $usuario->id_usuario ?>"><?php echo $usuario->usua_correo ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo $usuario->id_usuario ?>"><?php echo $usuario->usua_correo  ?></option>
                                    <?php  
                                  }
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>

                      </div>
                    
                    
                        </div clas="row">
                            <div class="form-group">
                                <button class="btn btn-primary float-right ">Actualizar</button>
                            </div>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <script type="text/javascript">
              $('.searchbox').select2();
            </script>
