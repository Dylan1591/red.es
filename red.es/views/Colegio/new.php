              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Nuevo Colegio</h4>
                    <form action="?controller=colegio&method=save" method="post" onsubmit="return validarCole();">
                      

                      <div class="row">

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="cole_nombre" id="cole_nombre" />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Celular</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="cole_celular" id="cole_celular" />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Direccion</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="cole_direccion" id="cole_direccion" />
                            </div>
                          </div>
                        </div>
                              
                      </div>

                                  <div class="form-group">
                                      <button class="btn btn-primary">Crear</button>
                                  </div>
                                  
                                  <samp class="text-warning" id="alert"></spam>

                              </form>
                          </div>
                      </div>
                  </section>
