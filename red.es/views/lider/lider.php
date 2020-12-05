              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">

                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarLider_instructor; ?> ;"  href="?controller=lider&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Lider</a>
                    <h3 class="card-title mb-5">Registro de lideres </h3>

                     <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" style="width: 100%; ">
                        <thead class="thead-dark text-center">
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Identificacion</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Usuario</th> 
                        <th>Opciones</th>
                      </tr>
                        </thead>
                        <tbody class="text-center">
                      <?php foreach($lideres as $lider) : ?>
                        <tr>
                          <td style="background-color: white;" ><?php echo $lider->id_lider ?></td>
                          <td style="background-color: white;" ><?php echo $lider->lide_nombre ?></td>
                          <td style="background-color: white;" ><?php echo $lider->lide_apellido ?></td>
                          <td style="background-color: white;" ><?php echo $lider->lide_identificacion ?></td>
                          <td style="background-color: white;" ><?php echo $lider->lide_celular ?></td>
                          <td style="background-color: white;" ><?php echo $lider->lide_correo ?></td>
                          <td style="background-color: white;" ><?php echo $lider->usuario ?></td>
                          <td style="background-color: white;">

                            <a style="display: <?php echo $ocultarInstructor; ?> ;" href="?controller=lider&method=edit&id_lider=<?php echo $lider->id_lider?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a>  
                          </td>             
                        </tr>
                      <?php endforeach ?>     
                        </tbody>
                      </table>
                    </div>
                    </div>
                  </div>                          
                </div>
              </div>
             </section>
              