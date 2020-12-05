
              <section class="section">

                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">

                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarEstudiante; ?> ;" href="?controller=actividad&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Actividad </a>
                    <h3 class="card-title mb-5">Actividades</h3>
                    <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" >
                        <thead class="thead-dark text-center" >
                          <tr>
                        <th scope="col" >#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col"> Estado</th>
                        <th scope="col" >Opciones</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php foreach($actividades as $actividad) : ?>
                        <tr>
                          <td scope="row" style="background-color: white;"><?php echo $actividad->id_actividad ?></td>
                          <td style="background-color: white;"><?php echo $actividad->acti_nombre ?></td>
                          <td style="background-color: white;"><?php echo $actividad->acti_descripcion ?></td>
                          <td style="background-color: white;"><?php echo $actividad->esta_Nombre ?></td>
                          <td style="background-color: white;">

                            <a style="display: <?php echo $ocultarEstudiante; ?> ;"  href="?controller=actividad&method=edit&id_actividad=<?php echo $actividad->id_actividad?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a>  
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
               
