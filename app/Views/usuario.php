  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>USUARIO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">formulario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <form method="post" name="test">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Perfil </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
             
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NOMBRES</label>
                                  <tr>
                        <td><input type="text" class="form-control" maxlength="20" placeholder="Ingrese nombre" name="nombre" id="nombre"  /> <max 30
                        characters a-z A-Z></td>
                    </div>
                    
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>CEDULA</label>
                        <input type="text"  class="form-control"  placeholder="Ingrese  cedula" name="cedula" id="cedula" />
                    </div>
                </div>

                
                <!-- /.col -->
                <div class="col-md-6">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>APELLIDOS</label>         
                        <input type="text" class="form-control" maxlength="30" placeholder="Ingrese apellido" name="apellido" id="apellido" /> <max 40 
                        characters a-z A-Z>
                    </div>

                    <div class="form-group">
                            <label>Email</label>
                            <td><input type="email" class="form-control" name="email" id="email" placeholder="Enter email address"></td>
                    </div>

                </div>
                    <!-- /.form-group -->
            </div>
                      <!-- /.col -->
            <div class="row">
                <div class="col-md-6">

                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>USUARIO</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask name="usuario" id="usuario" placeholder="Ingrese el usuario"></td> <max 11
                          characters 0-9>
                    </div>

                    <div class="form-group">
                        <label>Rol</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask name="rol_id" id="rol_id" placeholder="Ingrese el Rol"></td> <max 11
                          characters 0-9>
                    </div>
                </div>
                <!-- /.col -->
                
                     
              <div class="col-md-6">

                <!-- /.form group -->
                  <div class="form-group">
                        <label>CLAVE</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask name="clave" id="clave" placeholder="Ingrese la clave"></td> <max 11
                          characters 0-9>
                  </div>

                  <div class="form-group">
                        <label>Descripción</label>
                        <input type="textarea" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask name="descripcion" id="descripcion" placeholder="Ingrese la clave"></td> <max 11
                          characters 0-9>
                  </div>

              </div>

          
              <!-- /.form group -->
            </div>

<!-- /.row -->
                                     <!-- Date -->
                <div class="form-group">
                  <label>FECHA DE INGRESO:</label>
                    <div id="current_date"></p>
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = day + "/" + month + "/" + year;
</script>
                        
                    
              
             
          
        
          

              
           
            <div class="row">
    
                     
                     
                       
                        </div>
                        
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <div class="card-body">
            <div id="actions" class="row">
              <div class="col-lg-6">
                <div class="btn-group w-100">
                  
                  <button type="submit" class="btn btn-primary col start">
                    <i class="fas fa-upload"></i>
                    <span>GUARDAR</span>
                  </button>
                  <button type="reset" class="btn btn-warning col cancel">
                    <i class="fas fa-times-circle"></i>
                    <span>LIMPIAR</span>
                  </button>
                </div>
              </div>
          <!-- /.card-body -->
          
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      </form>

  </div>
  <!-- /.content-wrapper -->
