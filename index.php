
<!DOCTYPE html>
<html lang="es">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Formulario de Pre Matrícula</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="vendors/normalize-css/normalize.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="" role="">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>Formulario <small>Pre Matrícula 2018</small></h2>
                  <div class="clearfix"></div>
                  </div>
                    <div class="x_content">
                    <br />
                    <form id="demo-form" action="clases/guardar.class.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="row"> 
                      <div class="form-group">
                       
                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label " for="apellido1">Primer Apellido <span class="required red">*</span>
                        </label>
                          <input type="text" name="apellido1" id="apellido1" required="required" class="form-control col-md-4 col-xs-6">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label" for="apellido2">Segundo Apellido 
                        </label>
                          <input type="text" id="apellido2" name="apellido2" class="form-control col-md-4 col-xs-6">
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label" for="nombre1">Primer Nombre <span class="required red">*</span>
                        </label>
                          <input type="text" id="nombre1" name="nombre1" required="required" class="form-control col-md-4 col-xs-6">
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label" for="nombre2">Segundo Nombre
                        </label>
                          <input type="text" id="nombre2" name="nombre2" class="form-control col-md-4 col-xs-6">
                        </div>
                       
                       
                        
                      </div>
                      <hr>
                      <div class="form-group">
                       
                                                
                        <div class="col-md-3 col-sm-6 col-xs-12">
                        <label class="control-label">Cédula</label>
                          <input  id="idperson" name="idperson" class="form-control" data-inputmask="'mask': '999-999999-9999A'" type="text">
                          
                        </div>
                   

                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label" for="edad">Edad
                        </label>
                          <input type="text" id="edad" name="edad" class="form-control col-md-4 col-xs-6" required="required"><span class="required red">*</span>
                        </label>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label" for="tel">Correo 
                        </label>
                          <input type="email" id="tel" name="tel"  class="form-control col-md-4 col-xs-6">
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label" for="cel">Celular
                        </label>
                          <input type="text" id="cel" name="cel" class="form-control col-md-4 col-xs-6">
                        </div>
                       
                       
                        
                      </div>
                      

                      <hr>
                      <div class="form-group">

                        <div class="col-md-2 col-sm-6 col-xs-12">
                        <label class=" ">Sexo:</label>
                          <p>
                        M:
                        <input type="radio" class="flat" name="sexo" id="sexoM" value="MASCULINO" checked="" required /> F:
                        <input type="radio" class="flat" name="sexo" id="sexoF" value="FEMENINO" />
                      </p>
                        </div>

                         <div class="col-md-3 col-sm-6 col-xs-12">
                         <label class="control-label" for="depar">Departamento/Municipio
                        </label>
                          <input type="text" id="depar" name="depar" class="form-control col-md-4 col-xs-6">
                        </div>
                       
                        
                        </div>
                      

                       <hr>
                      <div class="form-group">
                        
                      
                       
                          <div class="col-md-2 col-sm-12 col-xs-12">
                         <label class=" ">Estudia Actualmente?</label>
                          <p>
                        SI
                        <input type="radio" class="flat" name="study" id="studySI" value="SI" /> NO
                        <input type="radio" class="flat" name="study" id="StudyNO" value="NO" checked="" required />
                      </p>
                        </div>
                      

                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <label for="lugar" class="control-label ">Donde?</label>
                          <input id="lugar" name="lugar" class="form-control" type="text" name="lugar">
                        </div>
                      </div>

                      <div class="form-group">
                        
                      </div>
                       <hr>
                      <div class="form-group">
                        
                        <div id="carrera" class="col-md-4 col-sm-6 col-xs-12">
                        <label class="">Carrera Técnica:</label>
                          <select name="carrera" class="form-control">
                            <option>TG-Cocina y Gastromía</option>
                            <option>TG-Pastelería y Panadería</option>
                            <option>TG-Servicio de Restaurante, Bar y Cafetería</option>
                            <option>TE-Atención al Cliente y Recepción Hotelera</option>
                            <option>TE-Dirección de Alimentos y Bebida en Hotelería</option>
                            <option>TE-Guía de Turistas</option>
                          </select>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <label class="">Turno:</label>
                          <p>
                        Matutino
                        <input type="radio" class="flat" name="turno" id="turnoM" value="MATUTINO" checked="" required /> Vespertino
                        <input type="radio" class="flat" name="turno" id="turnoV" value="VESPERTINO" />
                      </p>
                        </div>
                      </div>
                       
                       <hr>
                      <div class="form-group">

                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <label class=" ">Tipo de Pre Matrícula:</label>
                          <p>
                        Nuevo Ingreso
                        <input type="radio" class="flat" name="pm" id="nuevo" value="NUEVO INGRESO" checked="" required /> Egresado de Otra Carrera
                        <input type="radio" class="flat" name="pm" id="egresado" value="EGRESADO DE OTRA CARRERA" />
                      </p>
                        </div>

                       
                        
                        </div>
                       <hr>

                       <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">DOCUMETOS PENDIENTES:
                         
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                           
                              <input name="doc[]" type="checkbox" class="flat"  value="CEDULA"> Cédula
                            </div>
                          <div class="checkbox">
                         
                              <input name="doc[]" type="checkbox" class="flat" value="CERTIFICADO DE NOTA/ DIPLOMA"> Certificado de Nota/Diploma
                            </div>
                          <div class="checkbox">
                              <input name="doc[]" type="checkbox" class="flat" value="NINGUNO"> NINGUNO
                            
                          </div>
                          
                          
                        </div>
                      </div>
                        <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success btn-lg col-md-6 col-sm-6 col-xs-12">Guardar</button>
                        </div>
                      </div>
                      </div>

                      </form>

                    </div>
                </div>
            </div>
            </div>

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
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>

<script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    
</body>
</html>