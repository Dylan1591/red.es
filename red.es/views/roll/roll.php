              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
          <h1 class="p-3 mb-2 bg-info text-white text-center">Roles</h1>
            </section>
              <section class="col-md-12">
                   <div class="container-fluid" style="overflow-x:auto; width: 100%;">
                      <table id="myTable" class="table table-striped table-hover talbe-lg" style="width: 100%; ">
                        <thead class="thead-dark text-center">
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($roll as $roll) : ?>
                        <tr>
                          <td style="background-color: white;" ><?php echo $roll->id_roll ?></td>
                          <td style="background-color: white;" ><?php echo $roll->roll_nombre ?></td>
            
                        </tr>
                      <?php endforeach ?>       
                    </tbody>
                  </table>
                </div>
        </section>

