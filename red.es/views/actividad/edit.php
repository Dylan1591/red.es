
              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar actividad</h4>
                    <form action="?controller=actividad&method=update" method="post"  onsubmit="return validarActi();">
                    <input type="hidden" name="id_actividad" value="<?php echo $data[0]->id_actividad ?>">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="acti_nombre" value="<?php echo $data[0]->acti_nombre?>" id="acti_nombre"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Descripcion</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="acti_descripcion"  value="<?php echo $data[0]->acti_descripcion ?>" id="acti_descripcion" />
                            </div>
                          </div>
                        </div>
                      </div>
                        </div clas="row">
                        <div class="col-md-6" style="display: <?php echo $ocultarE_l_I; ?> ;">
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
                        </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right ">Actualizar</button>
                            </div>
                             <samp class="text-warning" id="alert"></spam>
                      </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

                  </section>
