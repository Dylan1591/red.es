            <section class="row mt-5">
              <div class="col-12 grid-margin" >
                <div class="card" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Cambiar contraseña</h4>
                    <form action="?controller=usuario&method=update" method="post">
                    <input type="hidden" name="id_usuario" value="<?php echo $data[0]->id_usuario ?>">
                      <div class="row">
                       
          


                           <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nueva contraseña:</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="usua_clave"  required/>
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
