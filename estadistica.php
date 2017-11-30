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
        $database->query('select carrera, turno, COUNT(*) AS "num" from datos GROUP BY carrera, turno');
        
        $rows = $database->resultset();
        
  ?>
    <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafico de Carreras por turnos</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                    <div id="pie" style="height:450px;"></div>

                  </div>
                </div>
              </div>

<div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ESTADISTICA <small>2018</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Datos estadisticos de carreras por turno y sexo.
                    </p>
                    <table id="datatable-buttons2" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <tr>
                          <th>CARRERA</th>
                          
                          <th>F</th>
                          <th>M</th>
                          <th>TOTAL</th>                      
                        </tr>
                        </tr>
                      </thead>


                      <tbody>
                      <tr>
                        <td><strong  class="blue">TURNO: MATUTINO</strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      
                        <?php 
                    $database->query('select carrera ,  count(if(SEXO="FEMENINO",SEXO,NULL)) AS m, COUNT(IF(SEXO="MASCULINO",SEXO,NULL)) AS v , COUNT(SEXO) AS total  FROM DATOS where turno="MATUTINO" GROUP BY CARRERA, TURNO ORDER BY TURNO');
                    $smm=0;
                    $smv=0;
                    $smt=0;
                    $re = $database->resultset();
                    foreach ($re as $va) {
           
                       echo "<tr>
                          <td>".$va['carrera']."</td>
                           <td>".$va['m']."</td>
                           <td>".$va['v']."</td>
                           <td>".$va['total']."</td>
                           
                        </tr>";
                        $smm=$smm+$va['m'];
                        $smv=$smv+$va['v'];
                        $smt=$smt+$va['total'];
                    }
                   
                        echo "<tr>
                        <td><strong class='green' style='float:right;'>Subtotal:</strong></td>
                        <td>".$smm."</td>
                        <td>".$smv."</td>
                        <td>".$smt."</td>
                      </tr>
                        
                        ";
                        
                        
                    ?>
                    <tr>
                        <td><strong  class="blue">TURNO: VESPERTINO</strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                     
                        <?php 
                    $database->query('select carrera ,  count(if(SEXO="FEMENINO",SEXO,NULL)) AS m, COUNT(IF(SEXO="MASCULINO",SEXO,NULL)) AS v , COUNT(SEXO) AS total  FROM DATOS where turno="VESPERTINO" GROUP BY CARRERA, TURNO ORDER BY TURNO');
        
                    $re = $database->resultset();
                    $svm=0;
                    $svv=0;
                    $svt=0;
                    foreach ($re as $va) {
           
                       echo "<tr>
                          <td>".$va['carrera']."</td>
                           <td>".$va['m']."</td>
                           <td>".$va['v']."</td>
                           <td>".$va['total']."</td>
                           
                        </tr>";
                       $svm=$svm+$va['m'];
                       $svv=$svv+$va['v'];
                       $svt=$svt+$va['total'];
                    }
                        echo "<tr>
                        <td><strong class='green' style='float:right;'>Subtotal:</strong></td>
                        <td>".$svm."</td>
                        <td>".$svv."</td>
                        <td>".$svt."</td>
                      </tr>
                        
                        ";
                        $tm=$smm+$svm;
                        $tv=$smv+$svv;
                        $tt=$smt+$svt;

                        echo " <tr ><strong >
                        <td><strong style='float:right;'>Total:</strong></td>
                        <td ><strong >".$tm."</strong></td>
                        <td><strong >".$tv."</strong></td>
                        <td><strong >".$tt."</strong></td>
                        
                      </tr>";
                    ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Aspirantes <small>2018</small></h2>
                    
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
                          <th>1er Nombre</th>
                          <th>2do Nombre</th>
                          <th>1er Apellido</th>
                          <th>2do Apellido</th>
                          <th>Cédula</th>
                          <th>Sexo</th>
                          <th>Carrera</th>
                          <th>Turno</th>
                          <th>Celular</th>
                          <th>Edad</th>
                          <th>Pendiente</th>
                          <th>Estudia</th>
                          <th>Fecha de Inscripción</th>                          
                        </tr>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                    $database->query('select * from datos');
        
                    $r = $database->resultset();
                    foreach ($r as $v) {
           
                       echo "<tr>
                          <td>".$v['idpm']."</td>
                          <td>".$v['nombre1']."</td>
                           <td>".$v['nombre2']."</td>
                           <td>".$v['apellido1']."</td>
                           <td>".$v['apellido2']."</td>
                           <td>".$v['cedula']."</td>
                           <td>".$v['sexo']."</td>
                            <td>".$v['carrera']."</td>
                          <td>".$v['turno']."</td>
                          <td>".$v['celular']."</td>
                          <td>".$v['edad']."</td>
                          <td>".$v['documentos']."</td>
                          <td>".$v['lugar_estudio']."</td>
                          <td>".$v['fechainscrip']."</td>
                        </tr>";
                       
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

    <script type="text/javascript">

        function init_echarts() {
            if( typeof (echarts) === 'undefined'){ return; }
                console.log('init_echarts');
                
                var colorPalette = [
        '#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
        '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
        '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
        '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
    ];


    var theme = {
        color: colorPalette,

        title: {
            textStyle: {
                fontWeight: 'normal',
                color: '#008acd'
            }
        },

        visualMap: {
            itemWidth: 15,
            color: ['#5ab1ef','#e0ffff']
        },

        toolbox: {
            iconStyle: {
                normal: {
                    borderColor: colorPalette[0]
                }
            }
        },

        tooltip: {
            backgroundColor: 'rgba(50,50,50,0.5)',
            axisPointer : {
                type : 'line',
                lineStyle : {
                    color: '#008acd'
                },
                crossStyle: {
                    color: '#008acd'
                },
                shadowStyle : {
                    color: 'rgba(200,200,200,0.2)'
                }
            }
        },

        dataZoom: {
            dataBackgroundColor: '#efefff',
            fillerColor: 'rgba(182,162,222,0.2)',
            handleColor: '#008acd'
        },

        grid: {
            borderColor: '#eee'
        },

        categoryAxis: {
            axisLine: {
                lineStyle: {
                    color: '#008acd'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },

        valueAxis: {
            axisLine: {
                lineStyle: {
                    color: '#008acd'
                }
            },
            splitArea : {
                show : true,
                areaStyle : {
                    color: ['rgba(250,250,250,0.1)','rgba(200,200,200,0.1)']
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },

        timeline : {
            lineStyle : {
                color : '#008acd'
            },
            controlStyle : {
                normal : { color : '#008acd'},
                emphasis : { color : '#008acd'}
            },
            symbol : 'emptyCircle',
            symbolSize : 3
        },

        line: {
            smooth : true,
            symbol: 'emptyCircle',
            symbolSize: 3
        },

        candlestick: {
            itemStyle: {
                normal: {
                    color: '#d87a80',
                    color0: '#2ec7c9',
                    lineStyle: {
                        color: '#d87a80',
                        color0: '#2ec7c9'
                    }
                }
            }
        },

        scatter: {
            symbol: 'circle',
            symbolSize: 4
        },

        map: {
            label: {
                normal: {
                    textStyle: {
                        color: '#d87a80'
                    }
                }
            },
            itemStyle: {
                normal: {
                    borderColor: '#eee',
                    areaColor: '#ddd'
                },
                emphasis: {
                    areaColor: '#fe994e'
                }
            }
        },

        graph: {
            color: colorPalette
        },

        gauge : {
            axisLine: {
                lineStyle: {
                    color: [[0.2, '#2ec7c9'],[0.8, '#5ab1ef'],[1, '#d87a80']],
                    width: 10
                }
            },
            axisTick: {
                splitNumber: 10,
                length :15,
                lineStyle: {
                    color: 'auto'
                }
            },
            splitLine: {
                length :22,
                lineStyle: {
                    color: 'auto'
                }
            },
            pointer : {
                width : 5
            }
        }
    };
        
        if ($('#pie').length ){ 
              
              var echartPieCollapse = echarts.init(document.getElementById('pie'), theme);
              
              echartPieCollapse.setOption({
                tooltip: {
                  trigger: 'item',
                  formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                  x: 'center',
                  y: 'bottom',
                  
                  data: [<?php 
                    foreach ($rows as $value) {
           
                        $carrera = $value['carrera'];
                        
                         echo "'".$carrera."', ";
                       
                    }
                  ?>]
                  
                },
                toolbox: {
                  show: true,
                  feature: {
                     mark : {show: true},
                      
                    magicType: {
                      show: true,
                      type: ['pie', 'funnel']
                    },
                    restore: {
                      show: true,
                      title: "Restaurar"
                    },
                    saveAsImage: {
                      show: true,
                      title: "Guardar imagen"
                    }
                  }
                },
                calculable: true,
                series: [{
                  name: 'Carrera',
                  type: 'pie',
                  radius: [35, 120],
                  center: ['45%', 180],
                  roseType: 'area',
                  x: '50%',
                  max: 40,
                  sort: 'ascending',

                  data: [
                  
                  <?php 
                    foreach ($rows as $value) {
           
                        $carrera = $value['carrera'];
                        $turno   = $value['turno'];
                        $num = $value['num'];
                        echo "{
                    value: ".$num.",
                    name: '".$carrera."-".$turno."'
                  }, ";
                       
                    }
                  
                  
                  
              
                  ?>
                  ]
                }]
              });

            }


        }

        $(document).ready(function() {
                
        init_echarts();
       
                
    });

    </script>

</body>

</html>