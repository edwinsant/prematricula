<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Estadistica | Pre-Matrícula 2018</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body>
<?php 
        // Include database class
        include 'clases/conectar.class.php';

            
        $database = new Database();
       
        
  ?>
    <div class="row">
                

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>CONFIRMACIÓN DE ASISTENCIA A EXAMEN FASE I<small>2018</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Se muestra la base de datos de todos los aspirantes.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <tr>
                          <th>#Prem</th>
                          <th>NOMBRE COMPLETO</th>
                          <th>Cédula</th>
                          <th>Sexo</th>
                          <th>Carrera</th>
                          <th>Turno</th>
                          <th>Pendiente</th>
                          <th>Estudia</th>
                          <th>Examen</th>
                          <th>Asistencia</th>                          
                        </tr>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                    $database->query('select * from datos');
        
                    $r = $database->resultset();
                    foreach ($r as $v) {
                      if($v['asiste']==0){
                       echo "<tr>
                          <td>".$v['idpm']."</td>
                          <td>".$v['nombre1']." ".$v['nombre2']." ".$v['apellido1']." ".$v['apellido2']."</td>
                           <td>".$v['cedula']."</td>
                           <td>".$v['sexo']."</td>
                            <td>".$v['carrera']."</td>
                          <td>".$v['turno']."</td>
                          <td>".$v['documentos']."</td>
                          <td>".$v['lugar_estudio']."</td>
                          
                          
                          ";
                          if($v['idpm']<300){
                              echo "<td> Martes, 28 noviembre de 2017 10:30 AM</td>";
                          }else{
                            echo "<td> Martes, 28 noviembre de 2017 1:30 PM</td>";
                          }
                        if($v['asiste']==1){
                            echo "<td><div><span class='label label-success'><strong>CONFIRMADO</strong></span></div>
                            <a href='clases/update.class.php?x=".$v['idpm']."&n=0' class='btn btn-danger'/>REVERTIR</a> </td></tr>";
                        }else{
                            echo "<td><div><span class='label label-danger'><strong>SIN CONFIRMAR</strong></span></div>
                            <a href='clases/update.class.php?x=".$v['idpm']."&n=1' class='btn btn-success'/>Confirmar</a> </td></form> </tr>";
                        }
                       
                      }
                    }
                        
                    ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>PROTAGONISTAS CONFIRMADOS<small>2018</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Se muestra la base de datos de todos los aspirantes.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <tr>
                          <th>#Prem</th>
                          <th>NOMBRE COMPLETO</th>
                          <th>Cédula</th>
                          <th>Sexo</th>
                          <th>Carrera</th>
                          <th>Turno</th>
                          <th>Pendiente</th>
                          <th>Estudia</th>
                          <th>Examen</th>
                          <th>Asistencia</th>                          
                        </tr>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                    $database->query('select * from datos');
        
                    $r = $database->resultset();
                    foreach ($r as $v) {
                      if($v['asiste']==1){
                       echo "<tr>
                          <td>".$v['idpm']."</td>
                          <td>".$v['nombre1']." ".$v['nombre2']." ".$v['apellido1']." ".$v['apellido2']."</td>
                           <td>".$v['cedula']."</td>
                           <td>".$v['sexo']."</td>
                            <td>".$v['carrera']."</td>
                          <td>".$v['turno']."</td>
                          <td>".$v['documentos']."</td>
                          <td>".$v['lugar_estudio']."</td>
                          
                          
                          ";
                          if($v['idpm']<300){
                              echo "<td> Martes, 28 noviembre de 2017 10:30 AM</td>";
                          }else{
                            echo "<td> Martes, 28 noviembre de 2017 1:30 PM</td>";
                          }
                        if($v['asiste']==1){
                            echo "<td><div><span class='label label-success'><strong>CONFIRMADO</strong></span></div>
                            <a href='clases/update.class.php?x=".$v['idpm']."&n=0' class='btn btn-danger'/>REVERTIR</a> </td></tr>";
                        }else{
                            echo "<td><div><span class='label label-danger'><strong>SIN CONFIRMAR</strong></span></div>
                            <a href='clases/update.class.php?x=".$v['idpm']."&n=1' class='btn btn-success'/>Confirmar</a> </td></form> </tr>";
                        }
                      }
                       
                    }
                        
                    ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



              
                </div>

    

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- ECharts -->
    <script src="vendors/echarts/dist/echarts.min.js"></script>
    <script src="vendors/echarts/map/js/world.js"></script>
      <!-- iCheck -->
      <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

       
</body>

</html>