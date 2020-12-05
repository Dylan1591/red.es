              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">

                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=grado&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Grado</a>
                    <h3 class="card-title mb-5">Grados </h3>
                   <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" style="width: 100%; ">
                        <thead class="thead-dark text-center">
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Horas Totales</th>
                        <th>Acciones</th>

                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php foreach($grado as $grado) : ?>
                        <tr>
                          <td style="background-color: white;"><?php echo $grado->id_grado ?></td>
                          <td style="background-color: white;"><?php echo $grado->grad_nombre ?></td>
                          <td style="background-color: white;"><?php echo $grado->grad_horasTotales ?></td>
                          <td style="background-color: white;">

                            <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=grado&method=edit&id_grado=<?php echo $grado->id_grado?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a>  
                          </td>             
                        </tr>
                      <?php endforeach ?>       
                    </tbody>
                  </table>
                   </div>
                </section>
                