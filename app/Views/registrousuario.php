

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro Usuario</h1>
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
                  <label>NOMBRE</label>
                                  
                 <input type="text" name="nombre" id="nombre" class="form-control" maxlength="20" placeholder="Ingrese nombre" /> <max 30
                            characters a-z A-Z></td>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  
                      <label>CEDULA</label>
                  
                   <input type="tel"  class="form-control"  placeholder="Ingrese  cedula" name="cedula"  id="cedula"  pattern="[0-9]{7,8}" required/>
                             
         
      
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                        <label>APELLIDOS</label>
                                        
                <input type="text" class="form-control" name="apellido" id="apellido" maxlength="30" placeholder="Ingrese apellido" /> <max 40
                                  characters a-z A-Z>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                        <label>TELEFONO</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" data-inputmask='"mask": "(9999) 999-9999"' data-mask></td>
                          <max 11
                          characters 0-9>
                        </div>
                      </div>
                  
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                           
                                <label>DIRECCION</label>
                
                <td><input type="text"class="form-control" name="direccin" id="direccion"  maxlength="30" placeholder="ingrese lider direccion" /> <max 30
                    characters a-z A-Z></tr>
                              </div>
                              <!-- /.form-group -->
                              <div class="form-group">
                                
                              </div>
                              
                            
                              <div class="form-group">
                                <label>LIDER DE MINISTERIO</label>
                              
                <input type="text" class="form-control"  name="lider del ministerio" id="lider del ministerio" placeholder="Enter lider del ministerio" /> <max 30
                    characters a-z A-Z>
                              
                                
                              
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /.col -->
                
                     
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Email</label>
                            <td><input type="email"  name="email" id="email"class="form-control" name="" id="" placeholder="Enter email address"></td>
                          </div>
                                          <!-- /.form group -->
                                          
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>FECHA DE NACIMIENTO:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" name="fecha nac" id="fecha nac" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  
                        </div>
                    </div>
                </div>

            
              <!-- /.form group -->
                        </div>
                      <!-- /.col -->
                    
                           <!-- /.row -->
                           <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                               
                                    <label>LIDER DEL GRUPO</label>
                    
                    <td><input type="text"class="form-control"  name="lidr grupo" id="lider grupo" placeholder="ingrese lider del grupo" /> <max 30
                        characters a-z A-Z></tr>
                                  </div>
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                    
                                  </div>
                                  
                                
                                  <div class="form-group">
                                    <label>TURNO</label>
                      
                                    <input type="text" class="form-control" name="turno" id="turno" placeholder="ingrese turno" /> <max 30
                                        characters a-z A-Z>
                                  
                                    
                                  
                                </div>
                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>NOMBRE DEL MINISTERIO </label>
        
                            <input type="text" class="form-control" name="nombre ministerio" id="nombre ministerio" placeholder="ingrese nombre del ministerio" /> <max 30
                                characters a-z A-Z>
                        
                                    </div>
                                    <div class="form-group">
                                      <label>PASTOR</label>
                      
                      <td><input type="text" class="form-control" name="pastor" id="pastor" placeholder="ingrese pastor" /> <max 30
                          characters a-z A-Z></tr>
 <!-- /.form group -->
</div>
                      
<!-- /.col -->
</div>
<!-- /.row -->
                                     <!-- Date -->
                <div class="form-group">
                  <label>FECHA DE INGRESO:</label>
                    <div id="current_date">
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
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
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



