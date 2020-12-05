              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Nueva Actividad</h4>
                    <form action="?controller=actividad&method=save" method="post" onsubmit="return validarActi();">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="acti_nombre" id="acti_nombre"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Descripcion</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="acti_descripcion" id="acti_descripcion" />
                            </div>
                          </div>
                        </div>
                      </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right " >Crear</button>
                            </div>
                            <samp class="text-warning" id="alert"></spam>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </section>
