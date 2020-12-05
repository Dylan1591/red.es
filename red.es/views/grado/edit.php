              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">
                  <div class="card-body">
                    <h4 class="card-title">Editar grados</h4>
                    <form action="?controller=grado&method=update" method="post">
                    <input type="hidden" name="id_grado" value="<?php echo $data[0]->id_grado ?>">
                      <p class="card-description text-center"> Informacíon personal </p>

                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="grad_nombre" value="<?php echo $data[0]->grad_nombre?>" required/>
                            </div>
                          </div>
                        </div>
                       
                        

                        <div class="col-md-5">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Horas requeridas</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="grad_horasTotales" value="<?php echo $data[0]->grad_horasTotales?>" required/>
                            </div>
                          </div>
                        </div>
                     </div>
                     

                        <div class="form-group">
                          <button class="btn btn-primary">Actualizar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
                 <script type="text/javascript">
                  var $table = $('#fresh-table')


                  $(function () {
                    $table.bootstrapTable({
                      classes: 'table table-hover table-striped',
                      toolbar: '.toolbar',
                      search: true,
                      showRefresh: true,
                      showToggle: false,
                      showColumns: true,
                      pagination: true,
                      striped: true,
                      sortable: true,
                      pageSize: 8,
                      pageList: [8, 10, 25, 50, 100],

                      formatShowingRows: function (pageFrom, pageTo, totalRows) {
                        return ''
                      },
                      formatRecordsPerPage: function (pageNumber) {
                        return pageNumber + ' Paginas visibles'
                      }
                    })
                  })
                </script>
