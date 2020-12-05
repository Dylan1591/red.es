              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarLider; ?> ;" href="?controller=programacion&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Programacion</a>
                    <h3 class="card-title mb-5">Programacion </h3>

                     <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" style="width: 100%; ">
                        <thead class="thead-dark text-center">
                        <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Hora de inicio</th>
                        <th>Hora final</th>
                        <th>Actividad</th>
                        <th>Lider</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php foreach($programaciones as $programacion) : ?>
                        <tr>
                          <td style="background-color: white;" ><?php echo $programacion->id_programacion ?></td>
                          <td style="background-color: white;" ><?php echo $programacion->prog_fecha ?></td>
                          <td style="background-color: white;" ><?php echo $programacion->prog_horaInicio ?></td>
                          <td style="background-color: white;" ><?php echo $programacion->prog_horaFinal ?></td>
                          <td style="background-color: white;" ><?php echo $programacion->actividad ?></td>
                          <td style="background-color: white;" ><?php echo $programacion->lide_nombre ?> <?php echo $programacion->lide_apellido ?></td>
                          <td style="background-color: white;" ><?php echo $programacion->estado ?></td> 
                          <td style="background-color: white;" >

                           <a style="display: <?php echo $ocultarLider; ?> ;" href="?controller=programacion&method=edit&id_programacion=<?php echo $programacion->id_programacion?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a>   
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
