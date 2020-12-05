              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Nuevo grados</h4>
                    <form action="?controller=grado&method=save" method="post">
                      <p class="card-description"> Informacíon </p>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="grad_nombre" />
                            </div>
                          </div>
                        </div>

                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Horas totales</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="grad_horasTotales" />
                            </div>
                          </div>
                        </div>

                      </div>
                               
                                  <div class="form-group">
                                      <button class="btn btn-primary">Crear</button>
                                  </div>
                                   </div>
                                    
                              </form>
                          </div>
                      </div>
                 
                  </section>