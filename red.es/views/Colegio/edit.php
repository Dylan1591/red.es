              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar colegio</h4>
                    <form action="?controller=colegio&method=update" method="post">
                    <input type="hidden" name="id_colegio" value="<?php echo $data[0]->id_colegio ?>">
                      <p class="card-description text-center"> Informacíon </p>

                  <div class="row">

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="cole_nombre" value="<?php echo $data[0]->cole_nombre?>" required/>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Celular</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="cole_celular" value="<?php echo $data[0]->cole_celular?>" required/>
                            </div>
                          </div>
                        

                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Direccion</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" name="cole_direccion" value="<?php echo $data[0]->cole_direccion?>" required/>
                            </div>
                          </div>
                                 <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">estado</label>
                            <div class="col-sm-9">
                              <select name="esta_id" class="form-control">
                                 <?php foreach ($estados as $estado) {
                                  if ( $estado->esta_id == $data[0]->esta_id) {
                                    ?>
                                      <option selected value="<?php echo  $estado->esta_id ?> "><?php echo  $estado->esta_Nombre ?></option>
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

                        <div class="form-group">
                          <button class="btn btn-primary">Actualizar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
