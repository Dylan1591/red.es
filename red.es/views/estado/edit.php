              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                    <div class="card-header">
                      <h2 class="m-auto">Editar estado</h2>
                    </div>

                    <div class="card-body w-100">
                      <form action="?controller=estado&method=update" method="post">

                        <input type="hidden" name="id_estado" value="<?php echo $data[0]->id_estado?>">

                        <div class="form-group">
                          <label>Nombre</label>
                          <input type="text" name="esta_Nombre" class="form-control" placeholder="Ingrese el nombre del el estado" value="<?php echo $data[0]->esta_Nombre?>" required>
                        </div>

                        <div class="form-group">
                          <button class="btn btn-primary">Actualizar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
                