  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
 
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"> USUARIO MODIFICAR </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              
              
            </div>
          </div>

<form method="post" name="register">
<section class="content">
<div class="container-fluid">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">

                    <label>NOMBRE</label>

                    <input type="text" class="form-control" maxlength="20" placeholder="Ingrese nombre" name="nombre" required value="<?= $user->nombre; ?>"/>

                </div>

                <div class="form-group">

                    <label>CEDULA</label>

                    <input type="text" class="form-control" placeholder="Ingrese cedula" name="cedula" required value="<?= $user->cedula; ?>" />

                </div>

            </div>


            <div class="col-md-6">

                <div class="form-group">

                    <label>APELLIDOS</label>

                    <input type="text" class="form-control" maxlength="30" placeholder="Ingrese apellido" name="apellido" required value="<?= $user->apellido; ?>"/>

                </div>

                <div class="form-group">

                    <label>EMAIL</label>

                    <input type="email" class="form-control" name="email" placeholder="Ingrese email" required value="<?= $user->email; ?>">

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">

                    <label>USUARIO</label>

                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required value="<?= $user->usuario; ?>"/>

                </div>



            </div>
            <div class="col-md-6">





            </div>
           
            
                
            <button type="submit" class="btn btn-primary col start">
                <i class="fas fa-upload"></i>
                <span>GUARDAR</span>
            </button>
            </div>



</div> 
</div>
</div>
            </section>

        </form>
</div>

