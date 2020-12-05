              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                          <div class="card-header container">
                              <h2 class="m-auto">Nuevo estado</h2>
                          </div>

                          <div class="card-body w-100">
                              <form action="?controller=estado&method=save" method="POST">
                                  <div class="form-group">
                                      <label>nombre</label>
                                      <input type="text" name="esta_Nombre" class="form-control" placeholder="Ingrese el nombre">
                                  </div>
                                  <div class="form-group">
                                      <button class="btn btn-primary">Crear</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </section>
