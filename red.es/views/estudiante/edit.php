              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar estudiante</h4>
                    <form action="?controller=estudiante&method=update" method="post" onsubmit="return validarEstu();">
                    <input type="hidden" name="id_estudiante" value="<?php echo $data[0]->id_estudiante ?>">
                      <p class="card-description text-center"> Informacíon personal </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_nombre" value="<?php echo $data[0]->estu_nombre?>" id="estu_nombre"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellido</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_apellido" value="<?php echo $data[0]->estu_apellido ?>" id="estu_apellido" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero de identificacion</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_identificacion" value="<?php echo $data[0]->estu_identificacion ?>" id="estu_identificacion"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de nacimiento</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" name="estu_nacimiento" type="date" value="<?php echo $data[0]->estu_nacimiento ?>" id="estu_nacimiento"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero de celular</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_celular"  value="<?php echo $data[0]->estu_celular ?>" id="estu_celular" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correo</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" name="estu_correo" value="<?php echo $data[0]->estu_correo ?>" id="estu_correo"/>
                            </div>
                          </div>
                        </div>

                      </div>
                    
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Usuario</label>
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



                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Grado</label>
                            <div class="col-sm-9">
                              <select name="id_grado" class="form-control">
                                <?php foreach ($grados as $grado) {
                                  if ($grado->id_grado == $data[0]->id_grado) {
                                    ?>
                                      <option selected value="<?php echo $grado->id_grado ?>"><?php echo $grado->grad_nombre ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo $grado->id_grado ?>"><?php echo $grado->grad_nombre  ?></option>
                                    <?php  
                                  }
                                }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                        </div>
                        <p class="card-description text-center"> Acudiente </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre acudiente</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_nombreAcudiente" value="<?php echo $data[0]->estu_nombreAcudiente ?>" id="estu_nombreAcudiente" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Celular del acudiente</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_celularAcudiente" value="<?php echo $data[0]->estu_celularAcudiente?>" id="estu_celularAcudiente"/>
                            </div>
                          </div>
                        </div>
      </div>
                        <p class="card-description text-center">Certificacion </p>

                      <div class="col-md-6" style="display: <?php echo $ocultarE_l_I; ?> ;">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estado del certificado</label>
                            <div class="col-sm-9">
                              <select name="id_estado" class="form-control">
                                <?php foreach ($estados as $estado) {
                                  if ($estado->id_estado == $data[0]->id_estado) {
                                    ?>
                                      <option selected value="<?php echo $estado->id_estado ?>"><?php echo $estado->esta_Nombre ?></option>
                                    <?php                                       
                                } else {
                                  ?>
                                    <option value="<?php echo $estado->id_estado ?>"><?php echo $estado->esta_Nombre  ?></option>
                                    <?php  
                                  }
                                }
                            ?>
                              </select>
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
            <script type="text/javascript">
              $('.searchbox').select2();
            </script>
