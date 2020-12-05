        <!-- Cuerpo  -->
        <!-- Latest minified bootstrap css -->

              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body " >
                    <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=estudiante&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Estudiante</a>
                    <h3 class="card-title mb-5">Estudiante </h3>
                      <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table  table-hover " >
                        <thead class="thead-dark  text-center" >
                          <tr  >
                        <th >#</th>
                        <th>Horas Sociales</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Numero identifiacion</th>
                        <th>Fecha de nacimiento</th>
                        <th>Celular</th>
                        <th>Nombre acudiente</th>
                        <th>Celular acudiente</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Grado</th>
                        <th>Certificado</th>
                        <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          <?php foreach($estudiantes as $estudiante) : ?>
                        <tr>
                          <td style="background-color: white;"  ><?php echo $estudiante->id_estudiante ?></td>
                          <td style="background-color: white;" class="text-center"> <a  href="?controller=hora&method=hora&id_estudiante=<?php echo $estudiante->id_estudiante?>"><i class=" btn bg-primary mdi mdi-book-open-page-variant" ></i></a></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_nombre ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_apellido ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_identificacion ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_nacimiento ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_celular ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_nombreAcudiente ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_celularAcudiente ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estu_correo ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->usuario ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->grado ?></td>
                          <td style="background-color: white;"><?php echo $estudiante->estado ?></td>
                          <td style="background-color: white;" class="text-center">
                           
                            <a style="display: <?php echo $ocultarLider_instructor; ?> ;"  href="?controller=estudiante&method=edit&id_estudiante=<?php echo $estudiante->id_estudiante?>" ><i class=" btn bg-primary mdi mdi-border-color " ></i></a>
                          </td>             
                        </tr>
                      <?php endforeach ?>     
                        </tbody>
                      </table>
                    </div>

                    </div>

                  </div>  

                </div>  

                </section>
               