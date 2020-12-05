              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">

                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarEstudiante; ?> ;" href="?controller=hora&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Registro de horas</a>
                    <h3 class="card-title mb-5">Registro de Horas </h3>
                   <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" style="width: 100%; ">
                        <thead class="thead-dark text-center">
                      <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Horas registradas</th>
                        <th>Estudiante</th>
                        <th>Actividad</th>
                        <th>Lider</th>
                        <th>Acciones</th>
                      </tr>
                        </thead>
                        <tbody class="text-center">

                        <?php foreach($hora as $hora) : ?>
                        <tr>
                          <td style="background-color: white;" ><?php echo $hora->id_hora ?></td>
                          <td style="background-color: white;" ><?php echo $hora->hora_fecha ?></td>
                          <td style="background-color: white;" ><?php echo $hora->hora ?></td>
                          <td style="background-color: white;" ><?php echo $hora->estu_nombre ?> <?php echo $hora->estu_apellido ?></td>
                          <td style="background-color: white;" ><?php echo $hora->actividad ?></td>
                          <td style="background-color: white;" ><?php echo $hora->usua_correo ?></td>
                          <td style="background-color: white;" >

                            <a style="display: <?php echo $ocultarEstudiante; ?> ;" href="?controller=hora&method=edit&id_hora=<?php echo $hora->id_hora?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a>  
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
            