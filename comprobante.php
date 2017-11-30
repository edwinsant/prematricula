<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comprobante de Pre Matrícula | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="build/css/custom.min.css" rel="stylesheet">
   <style type="text/css" media="print">
        
.impre {
    display:none;
} 
   </style>
    
  </head>

  <body >
  <?php 
        // Include database class
        include 'clases/conectar.class.php';

        if (isset($_GET["id"])) {
                   # code...
                $id = $_GET["id"];
               }       
        $database = new Database();
        $database->query('SELECT * FROM datos WHERE idpm = :idpm');
        $database->bind(':idpm', $id);
        $rows = $database->resultset();
        foreach ($rows as $value) {
            # code...
            $num = $id;
            $carrera = $value['carrera'];
            $cedula = $value['cedula'];
            $sexo = $value['sexo'];
            $nombre = $value['nombre1']." ".$value['nombre2']." ".$value['apellido1']." ".$value['apellido2'];
            $departamento = $value['departamento'];
            $turno = $value['turno'];
            $fecha = $value['fechainscrip'];
        }
  ?>
         
                <div class="row">
                    
                         <div class="x_panel">
                            <div class="x_title">
                            <div class="form-group">
                            
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    
                                     <img src="img/logo.png" width="100px"  class="pull-right" >
                                     
                                     <div class="">
                                     <img src="img/logo2.png" width="200px" class="pull-left" style="margin-right: 40px" >
                                     <!-- Escuela Nacional de Hotelería <br> 
                                     Método de Matrícula del Protagonista <br>
                                     Hoja de Pre-Matrícula -->
                                     </div>
                                 </div>
                                 
                                 <div class="clearfix"></div>

                            </div>
                                 
                            </div>
                            <div class="x_content">
                                 <section class="content invoice">
                                    <div class="row">
                                        <div class="col-xs-12 invoice-header">
                                             <h2>
                                                 Comprobante de Pre-Matrícula
                                                <small class="pull-right">Fecha de Inscripción: <?php echo $fecha; ?></small>
                                            </h2>
                                             <h2 class="pull-right">Pre-Matrícula: #00<?php echo $num; ?>
                                            </h2>
                                        </div>
                                           
                                        <div class="row invoice-info">

                        <div class="col-sm-3 invoice-col">
                         
                          <address style="font-size: 12px">
                                      Nombres y Apellidos:    <strong >  <?php echo $nombre;?></strong>
                                          <br>Cédula: <strong>  <?php echo $cedula;?></strong>
                                          <br> Departamento/Municipio:
                                          <strong> <?php echo $departamento;?></strong>
                                          
                                          <br>Sexo: <strong> <?php echo $sexo;?></strong>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col" style="border-left: 1px solid gray">
                          
                          <address style="font-size: 12px">
                                     Carrera Técnica a Aplicar: <strong><?php echo $carrera;?></strong>
                                          <br>Turno:  <strong><?php echo $turno;?></strong>
                                           <br>Horario: <strong> <?php 
                                        if ($turno=="MATUTINO") {
                                            # code...
                                            echo '7:00 AM - 4:00 PM';
                                        } else {
                                            # code...
                                            echo '12:00 MD- 6:30 PM';
                                        }
                                        
                                          ?></strong> 
                                          
                                      </address>
                        </div>
                        <!-- /.col -->
                        
                        <!-- /.col -->
                      </div>
                        <div class="row invoice-info">
                            <div class="col-sm-12">
                               <p style="border: 1px solid gray"> <strong>Fecha de Examen - Fase I: <?php if ($num<=300) {
                                    # code...
                                    echo "Martes 28 de Noviembre del 2017 Hora: 10:30 AM";                                    
                                } else {
                                    if ($num<=600) {
                                        # code...
                                        echo "Martes 28 de Noviembre del 2017 Hora: 1:30 PM"; 
                                    } else {
                                        # code...
                                        echo "Miercoles 29 de Noviembre del 2017 Hora: 10:30 AM"; 
                                    }
                                    
                                    # code...
                                }
                                ?></strong>
                                , el examen se realizará en el <strong> Auditorio del Instituto Manuel Olivares.</strong>
                                 Este examen tiene Una Duración Aproximada de 60 Minutos. <strong>SE RUEGA PUNTUALIDAD, NO HABRÁ REPROGRAMACIÓN.</strong>
                                 Este documento no garantiza una beca dentro de la escuela.
                                </p>
                                <!-- <img src="img/map.png" width="40%" class="center"> -->
                                <div style="border: 1px solid gray; font-size: 10px;">
                                 <p > 
                                    <strong>Proceso de Prueba Actitudinal:</strong><br>
                                    La escuela Nacional de Hotelería como pare de la Red de Centros de formación del INATEC, tiene como parte de sus politicas brindar un servicio de Educación Técnica Gratuita
                                    y de Calidad según los recursos y capacidades de las instalaciones del centro, motivo por el cuál el número de aspirantes es limitado por orden de merito.

                                    <!-- Como parte de las Politicas del INATEC y la Escuela Nacional de Hotelería impartir Educación Técnica Gratuita; sin embargo, 
                                    valga mencionar que se ofrece un numero limitado debido a la capacidades de los espacios en las instalaciones del Centro y no poder dar
                                    abasto a la alta demanada de aspirantes.  -->

                                    <ul>
                                    <li>
                                        <strong>Examen Actitudinal - Fase I: </strong>Se aplica un examen actitudinal para conocer tu vocación para desempeñar la profesión de la carrera que elijas.                                        
                                    </li>
                                    <li>
                                        <strong>Resultados de Fase I: </strong> Se publicará en la Pagina WEB, Facebook y Murales en la Escuala el listado oficial de los aspirantes con las actitudes 
                                        mas aproximadas a las profesión de la carrera a la que aplicó. Posteriormente ser matriculados en las fechas determinas por la Escuela. A excepción de las carreras que realizaran un segundo examen.                  
                                    </li>
                                    <li>
                                        <strong>Examen - Fase II: </strong> Se aplica este examen para medir las destrezas al resolver problemas matemáticos básicos (artimética), Seguir patrones o secuencias, conocimiento lógico y conocer rasgos temperamentales.
                                    </li>
                                    <li>
                                        <strong>Resultados de Fase II: </strong> Se publicará en la Pagina WEB, Facebook y Murales en la Escuala el listado oficial de los aspirantes con las actitudes mas aproximadas a las profesión de la carrera a la que aplicó. Posteriormente ser matriculados en las fechas determinas por la Escuela.                   
                                    </li>
                                    <li>
                                        <strong>Matricula: </strong> Se llena la hoja de matrícula y se entrega la documentación requerida en Fotocopia legibles para la creación de los expedientes para iniciar una formación gratuita y de calidad en la Escuela.     
                                    </li>
                                                                        <li>
                                        <strong>Uniforme: </strong> Es de estricto cumplimiento el uniforme diario y de ambiente didáctico, conocelos consultando nuestras redes sociales y murales informativos por cada carrera técnica.     
                                    </li>
                                    </ul>
                                    <strong>Me doy por enterado que durante el desarrollo de mi carrera técnica inscrita me encuento sujeto al cambio de turno y horarios para un mejor desarrollo de capacidades profesionales. </strong>
                                </p>
                                </div>
                            </div>
                        </div>

                                   </div>
                                   <footer>
                                   <p><i style="font-size: 8px">* Este Documento NO Requiere Firma Ni Sello. Es Autorizado por el Dto. de Registro</i></p>
          <!-- <div class="pull-right">
             TECNOLOGICO NACIONAL DE HOTELERIA Y TURISMO 2017-2018
          </div>
          <div class="clearfix"></div> -->
        </footer>
                                    <!-- this row will not appear when printing -->
                      <div class="row no-print impre">
                        <div class="col-xs-12">
                          <button class="btn btn-default impre no-print" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          <button class="btn btn-primary impre" onclick="window.location='index.php'"><i class="fa fa-pencil"></i> Nuevo</button>
                        </div>

                        </div>
                      </div>
                                 </section>
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

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js" ></script>
  </body >

</html >