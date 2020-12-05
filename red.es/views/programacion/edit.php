              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar programacion</h4>
                    <form action="?controller=programacion&method=update" method="post">
                    <input type="hidden" name="id_programacion" value="<?php echo $data[0]->id_programacion?>">
                      <p class="card-description text-center"> Informacíon  </p>
                      <div class="row">
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="prog_fecha" value="<?php echo $data[0]->prog_fecha?>" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Ahora inicio</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="prog_horaInicio" value="<?php echo $data[0]->prog_horaInicio ?>" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hora final</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="prog_horaFinal" value="<?php echo $data[0]->prog_horaFinal ?>" required/>
                            </div>
                          </div>
                        </div>
                       

                      </div>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Actividades</label>
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
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estado</label>
                            <div class="col-sm-9">
                              <select name="id_estado" class="form-control">
                                 <?php foreach ($estados as $estado) {
                                  if ( $estado->id_estado == $data[0]->id_estado) {
                                    ?>
                                      <option selected value="<?php echo  $estado->id_estado ?>"><?php echo  $estado->esta_Nombre ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo  $estado->id_estado ?>"><?php echo  $estado->esta_Nombre  ?></option>
                                    <?php  
                                  }
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>

                  
                        </div clas="row">
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lider</label>
                            <div class="col-sm-9">
                             <select name="id_lider" class="form-control searchbox">
                                <?php foreach ($lideres as $lider) {
                                  if ($lider->id_lider == $data[0]->id_lider) {
                                    ?>
                                      <option selected value="<?php echo $lider->id_lider ?>"><?php echo $lider->lide_nombre ?> <?php echo $lider->lide_apellido ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo $lider->id_lider ?>"><?php echo $lider->lide_nombre ?> <?php echo $lider->lide_apellido ?></option>
                                    <?php  
                                  }
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-primary float-right ">Actualizar</button>
                            </div>
                      </div>
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
