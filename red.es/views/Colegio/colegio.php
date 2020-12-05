              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=colegio&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Colegio</a>
                    <h3 class="card-title mb-5">colegio </h3>
                    <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" style="width: 100%; ">
                        <thead class="thead-dark text-center">
                      <tr>
                        <th>#</th>
                        <th>Colegio</th>
                        <th>Celular</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th >Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php foreach($colegio as $colegio) : ?>
                        <tr>
                          <td style="background-color: white;"><?php echo $colegio->id_colegio ?></td>
                          <td style="background-color: white;"><?php echo $colegio->cole_nombre ?></td>
                          <td style="background-color: white;"><?php echo $colegio->cole_celular ?></td>
                          <td style="background-color: white;"><?php echo $colegio->cole_direccion ?></td>
                          <td style="background-color: white;"><?php echo $colegio->estado ?></td>
                          <td style="background-color: white;">

                            <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=colegio&method=edit&id_colegio=<?php echo $colegio->id_colegio?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a>  
                          </td>             
                        </tr>
                      <?php endforeach ?>       
                    </tbody>
                  </table>
                </div>
                </section>
        