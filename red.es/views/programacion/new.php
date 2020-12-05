              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Nueva programacion</h4>
                    <form action="?controller=programacion&method=save" method="post" onsubmit="return validarProgra();">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha</label>
                            <div class="col-sm-9">
                               <input type="date" name="prog_fecha" class="form-control" placeholder="Ingrese la fecha" id="prog_fecha">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hora de inicio</label>
                            <div class="col-sm-9">
                              <input type="time" name="prog_horaInicio" class="form-control" id="prog_horaInicio" >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hora final</label>
                            <div class="col-sm-9">
                              <input type="time" name="prog_horaFinal" class="form-control" id="prog_horaFinal">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Actividad</label>
                            <div class="col-sm-9">
                              <select name="id_actividad" class="form-control searchbox" >
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
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Lider</label>
                            <div class="col-sm-9">
                              <select name="id_lider" class="form-control searchbox" >
                                <?php foreach ($lideres as $lider) {
                                    ?>
                                      <option value="<?php echo $lider->id_lider ?>"><?php echo $lider->lide_nombre ?> <?php echo $lider->lide_apellido ?></option>
                                    <?php                                       
                                  }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                      <button class="btn btn-primary">Crear</button>
                        </div>
                          </div>
                        </div>
                      </div>

                    
               <samp class="text-warning" id="alert"></spam>
                              </form>
                          </div>
                      </div>
                  </section>
                              <script type="text/javascript">
              $('.searchbox').select2();
            </script>