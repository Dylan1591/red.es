              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=usuario&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Usuario</a>
                    <h3 class="card-title mb-5">usuarios </h3>
                  <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" style="width: 100%; ">
                        <thead class="thead-dark text-center">
                      <tr>
                        <th>#</th>
                        <th>correo</th>
                        <th>roll</th>
                        <th>estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php foreach($usuarios as $usuario) : ?>
                        <tr>
                          <td style="background-color: white;" ><?php echo $usuario->id_usuario ?></td>
                          <td style="background-color: white;" ><?php echo $usuario->usua_correo ?></td>
                          <td style="background-color: white;" ><?php echo $usuario->roll ?></td>
                          <td style="background-color: white;" ><?php echo $usuario->estado ?></td>
                          <td style="background-color: white;">

                            <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=usuario&method=edit&id_usuario=<?php echo $usuario->id_usuario?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a>  
                          </td>             
                        </tr>
                      <?php endforeach ?>       
                    </tbody>
                  </table>
                </div>
                </div>
              </section>
