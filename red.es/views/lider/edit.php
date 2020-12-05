              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar lider</h4>
                    <form action="?controller=lider&method=update" method="post">
                    <input type="hidden" name="id_lider" value="<?php echo $data[0]->id_lider ?>">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" name="lide_nombre" class="form-control" value="<?php echo $data[0]->lide_nombre ?>" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Apellido</label>
                            <div class="col-sm-9">
                              <input type="text" name="lide_apellido" class="form-control" value="<?php echo $data[0]->lide_apellido ?>" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Identificacion</label>
                            <div class="col-sm-9">
                               <input type="number" name="lide_identificacion" class="form-control" value="<?php echo $data[0]->lide_identificacion ?>" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Celular</label>
                            <div class="col-sm-9">
                             <input type="number" name="lide_celular" class="form-control" value="<?php echo $data[0]->lide_celular ?>" required>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correo</label>
                            <div class="col-sm-9">
                             <input type="email" name="lide_correo" class="form-control" value="<?php echo $data[0]->lide_correo ?>" required>
                            </div>
                          </div>
                        </div>
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

