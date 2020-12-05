              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Nuevo usuarios</h4>
                    <form action="?controller=usuario&method=save" method="post">
                      <p class="card-description"> Informacíon personal </p>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Correo</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" name="usua_correo" />
                            </div>
                          </div>
                        </div>

                       <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contraseña</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="usua_clave" />
                            </div>
                          </div>
                        </div>
                       </div>

                        <div class="row">
                          <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Roll</label>
                            <div class="col-sm-9">
                              <select name="id_roll" class="form-control">
                                <?php foreach ($rolles as $roll) {
                                    ?>
                                      <option value="<?php echo $roll->id_roll ?>"><?php echo $roll->roll_nombre ?></option>
                                    <?php                                       
                                  }
                            ?>
                            </select>
                            </div>
                          </div>
                        </div>
                      </div>

                        
     
                    
                        <div class="form-group">
                            <button class="btn btn-primary">Crear</button>
                        </div>
                      </form>
                    </div>
                </div>
            </section>
