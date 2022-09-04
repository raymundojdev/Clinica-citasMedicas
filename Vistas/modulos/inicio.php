<div class="content-wrapper">
    <!-- Content Header (Page header) -->    

    <!-- Main content -->
    <section class="content">

      <div class="box down" style="background-color: #3C8DBC; color: white; position: relative; top:20px; height: 100px;" >
          
          <center><h1 style="position: relative; top: 10px;">Inicio</h1></center>
        </div>
        <br>
      <!-- Default box -->
      <div class="box"  >

        
        <?php

        $inicio = new InicioC();
        $inicio -> MostrarInicioC();


        if($_SESSION["rol"] == "Administrador"){

          echo '
              <div class="box-footer">

               <a href="inicio-editar">
                 <button class="btn btn-success btn-lg">Editar</button>
               </a>

              </div>';

        }


        ?>       
        
        <!-- /.box-footer-->
   
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>