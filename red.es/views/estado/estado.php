              <section class="section">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="background-color: #fff">

                  <div class="card-body ">
                    <a style="display: <?php echo $ocultarE_l_I; ?> ;" href="?controller=estado&method=new" class="btn btn-primary btn-lg hidden-sm-down float-right mt-2"><i class="mdi mdi-plus"></i> Estado</a>
                    <h3 class="card-title mb-5">Estados </h3>

                  <table class="table " id="fresh-table">
                    <thead >
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($estados as $estado) : ?>
                        <tr>
                          <td style="background-color: white;"><?php echo $estado->id_estado ?></td>
                          <td style="background-color: white;"><?php echo $estado->esta_Nombre ?></td>
                          <td style="background-color: white;">

                            
                          </td>             
                        </tr>
                      <?php endforeach ?>       
                    </tbody>
                  </table>
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
