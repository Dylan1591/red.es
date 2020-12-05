
<!--selectpicker -->


    <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h3 class="card-title">Nuevo estudiante</h3>
                    <form action="?controller=estudiante&method=save" method="post" onsubmit="return validarEstu();">
                      <h4 class="card-description"> Informacíon personal </h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_nombre" id="estu_nombre" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellido</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_apellido" id="estu_apellido" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero de identificacion</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="estu_identificacion" id="estu_identificacion" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha de nacimiento</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" name="estu_nacimiento" type="date" id="estu_nacimiento" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero de celular</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_celular" id="estu_celular" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correo</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" name="estu_correo" id="estu_correo" />
                            </div>
                          </div>
                        </div>

                      </div>
                      <h4 class="card-description"> Acudiente </h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre acudiente</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="estu_nombreAcudiente" id="estu_nombreAcudiente" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Celular del acudiente</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="estu_celularAcudiente" id="estu_celularAcudiente" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row" >
                            <label class="col-sm-3 col-form-label">Usuario</label>
                            <div class="col-sm-9" >
                            <select name="id_usuario" id="id_usuario" class="custom-select searchbox"  >
                              <option selected >Seleccione...</option>
                                <?php foreach ($usuarios as $usuario) {
                                    ?>
                                      <option value="<?php echo $usuario->id_usuario ?>"><?php echo $usuario->usua_correo ?></option>
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
                            <label class="col-sm-3 col-form-label">Grado</label>
                            <div class="col-sm-9">
                              <select name="id_grado" class="form-control " id="id_grado" >
                                <?php foreach ($grados as $grado) {
                                    ?>
                                      <option value="<?php echo $grado->id_grado ?>"><?php echo $grado->grad_nombre ?></option>
                                    <?php                                       
                                  }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                    </div>
                            <div class="form-group">
                                <button  class="btn btn-primary float-right">Crear</button>
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


