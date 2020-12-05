              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">

                  <div class="card-body ">
                    <h3 class="card-title mb-5"><?php echo $_SESSION['user']->usua_correo ?></h3>

                     <table class="table">
                    <thead >
                      <tr>
                        <th>#</th>
                        <th>correo</th>
                        <th>roll</th>
                        <th>estado</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td><?php echo $_SESSION['user']->usua_correo ?></td>
                          <td><?php echo $_SESSION['user']->usua_roll ?></td>
                          <td><?php echo $_SESSION['user']->usua_estado ?></td>         
                        </tr>      
                    </tbody>
                  </table>
                </div>
              </section>
