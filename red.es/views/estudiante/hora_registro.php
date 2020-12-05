              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">

                  <div class="card-body" >
                    <div class="card text-white  mb-3 float-right " style="max-width: 18rem; background-color: #D9E4E8;">                  
   
                      <?php 
                       foreach ($cert as $cer) {

                        if ($cer->id_estado == 4) {
                           ?><a class="btn btn-outline-success" href="?controller=hora&method=certificado&id_estudiante=<?php echo $cer->id_estudiante?>"><i class="mdi mdi-certificate"> Certificado</i></a>
                          <?php 
                       } else { 
                           foreach ($grad as $grad) {
                           foreach ($Cole as $coleg){
                               if ($coleg->hora_sum==$grad->grad_horasTotales) {
                                  ?> <button onclick="document.getElementById('alert').innerHTML = 'Comuniquese con el administrador para su pronta certificacion';" class="btn btn-outline-warning">Certificacion disponible</button><?php
                               } else {
                            ?>
                                <button onclick="document.getElementById('alert').innerHTML = 'Complete sus horas de servicio social y comuniquese con el administrador para su certificacion';" class="btn btn-outline-warning">No Certificado</i></button>
                   <?php } }}} } ?>
     
                      <div class="card-header float-left mb-2 "  >Horas totales</div>
                      <div class="card-body">
                        <h3 class="card-text text-center "   ><?php foreach ($Cole as $Col) :?><?php echo $Col->hora_sum?></h3><?php endforeach ?>
                      </div>
                    </div>
                    <h3 class="card-title mb-3 p-3 card-header text-center">Registro de Horas </h3>

                    <h3 class="mb-5"><?php foreach ($EsN as $EsN) :?><?php echo $EsN->estu_nombre?>  <?php echo $EsN->estu_apellido ?></h3><?php endforeach ?></h3>
                  <p class="text-danger " id="alert"></p>
                      <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table  table-hover " >
                        <thead class="thead-dark  text-center" >
                      <tr>
                        <th>Fecha</th>
                        <th>Horas registradas</th>
                        <th>Actividad</th>
                        <th>Usuario que registro</th>
                        <th >Acciones</th>
                       </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php foreach($data as $data) : ?>
                        <tr>
                          <td style="background-color: white;" ><?php echo $data->hora_fecha ?></td>
                          <td style="background-color: white;" ><?php echo $data->hora ?></td>
                          <td style="background-color: white;" ><?php echo $data->actividad?> </td>
                          <td style="background-color: white;" ><?php echo $data->usua_correo?> </td>
                          <td style="background-color: white;" >
                          <a style="display: <?php echo $ocultarEstudiante; ?> ;" href="?controller=hora&method=edit&id_hora=<?php echo $data->id_hora?>" ><i class="btn-xs btn bg-primary mdi mdi-border-color " ></i></a> </td>
           
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
           