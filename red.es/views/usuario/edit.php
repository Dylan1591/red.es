              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar usuario</h4>
                    <form action="?controller=usuario&method=update" method="post">
                    <input type="hidden" name="id_usuario" value="<?php echo $data[0]->id_usuario ?>">
                      <p class="card-description text-center"> Informacíon personal </p>
                      <div class="row">
                       
                     
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correo</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="usua_correo" value="<?php echo $data[0]->usua_correo ?>" required/>
                            </div>
                          </div>
                        </div>


                           <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">clave</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="usua_clave" value="<?php echo $data[0]->usua_clave?>" required/>
                            </div>
                          </div>
                        </div>

                      </div>



                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">estado</label>
                            <div class="col-sm-9">
                              <select name="esta_id" class="form-control">
                                 <?php foreach ($estados as $estado) {
                                  if ( $estado->esta_id == $data[0]->esta_id) {
                                    ?>
                                      <option selected value="<?php echo  $estado->esta_id ?>"><?php echo  $estado->esta_Nombre ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo  $estado->esta_id ?>"><?php echo  $estado->esta_Nombre  ?></option>
                                    <?php  
                                  }
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
                            <label class="col-sm-3 col-form-label">Roll</label>
                            <div class="col-sm-9">
                              <select name="id_roll" class="form-control">
                                <?php foreach ($rolles as $roll) {
                                  if ($roll->id_roll == $data[0]->id_roll) {
                                    ?>
                                      <option selected value="<?php echo $roll->id_roll ?>"><?php echo $roll->roll_nombre ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo $roll->id_roll ?>"><?php echo $roll->roll_nombre  ?></option>
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
