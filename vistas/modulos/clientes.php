<?php

//if($_SESSION["perfil"] == "Especial"){
//
//  echo '<script>
//
//    window.location = "inicio";
//
//  </script>';
//
//  return;
//
//}

?>

<!--<div class="content-wrapper">-->

<!--  <section class="content-header">-->
<!--    -->
<!--    <h1>-->
<!--        LECCIONES APRENDIDAS-->
<!--    -->
<!--    </h1>-->
<!---->
<!--    <ol class="breadcrumb">-->
<!--      -->
<!--      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>-->
<!--      -->
<!--      <li class="active">Lecciones Aprendidas</li>-->
<!--    -->
<!--    </ol>-->
<!---->
<!--  </section>-->
<!---->
<!--  <section class="content">-->
<!---->
<!--    <div class="box">-->
<!---->
<!--      <div class="box-header with-border">-->
<!--  -->
<!--        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">-->
<!--          -->
<!--          Agregar Lección-->
<!---->
<!--        </button>-->
<!---->
<!--      </div>-->
<!---->
<!--      <div class="box-body">-->
<!--        -->
<!--       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">-->
<!--         -->
<!--        <thead>-->
<!--         -->
<!--         <tr>-->
<!--           -->
<!--           <th style="width:10px">#</th>-->
<!--           <th>Nombre</th>-->
<!--           <th>Documento ID</th>-->
<!--           <th>Email</th>-->
<!--           <th>Teléfono</th>-->
<!--           <th>Dirección</th>-->
<!--           <th>Fecha nacimiento</th> -->
<!--           <th>Total compras</th>-->
<!--           <th>Última compra</th>-->
<!--           <th>Ingreso al sistema</th>-->
<!--           <th>Acciones</th>-->
<!---->
<!--         </tr> -->
<!---->
<!--        </thead>-->
<!---->
<!--        <tbody>-->
<!---->
<!--        --><?php
//
//          $item = null;
//          $valor = null;
//
//          $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
//
//          foreach ($clientes as $key => $value) {
//
//
//            echo '<tr>
//
//                    <td>'.($key+1).'</td>
//
//                    <td>'.$value["nombre"].'</td>
//
//                    <td>'.$value["documento"].'</td>
//
//                    <td>'.$value["email"].'</td>
//
//                    <td>'.$value["telefono"].'</td>
//
//                    <td>'.$value["direccion"].'</td>
//
//                    <td>'.$value["fecha_nacimiento"].'</td>
//
//                    <td>'.$value["compras"].'</td>
//
//                    <td>'.$value["ultima_compra"].'</td>
//
//                    <td>'.$value["fecha"].'</td>
//
//                    <td>
//
//                      <div class="btn-group">
//
//                        <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';
//
//                      if($_SESSION["perfil"] == "Administrador"){
//
//                          echo '<button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>';
//
//                      }
//
//                      echo '</div>
//
//                    </td>
//
//                  </tr>';
//
//            }
//
//        ?>
<!--   -->
<!--        </tbody>-->
<!---->
<!--       </table>-->
<!---->
<!--      </div>-->
<!---->
<!--    </div>-->
<!---->
<!--  </section>-->
<!---->
<!--</div>-->
<!---->
<!--<!--=====================================-->
<!--MODAL AGREGAR CLIENTE-->
<!--======================================-->-->
<!---->
<!--<div id="modalAgregarCliente" class="modal fade" role="dialog">-->
<!--  -->
<!--  <div class="modal-dialog">-->
<!---->
<!--    <div class="modal-content">-->
<!---->
<!--      <form role="form" method="post">-->
<!---->
<!--        <!--=====================================-->
<!--        CABEZA DEL MODAL-->
<!--        ======================================-->-->
<!---->
<!--        <div class="modal-header" style="background:#3c8dbc; color:white">-->
<!---->
<!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!---->
<!--          <h4 class="modal-title">Agregar cliente</h4>-->
<!---->
<!--        </div>-->
<!---->
<!--        <!--=====================================-->
<!--        CUERPO DEL MODAL-->
<!--        ======================================-->-->
<!---->
<!--        <div class="modal-body">-->
<!---->
<!--          <div class="box-body">-->
<!---->
<!--            <!-- ENTRADA PARA EL NOMBRE -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA EL DOCUMENTO ID -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-key"></i></span> -->
<!---->
<!--                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA EL EMAIL -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> -->
<!---->
<!--                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA EL TELÉFONO -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-phone"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA LA DIRECCIÓN -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!--  -->
<!--          </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <!--=====================================-->
<!--        PIE DEL MODAL-->
<!--        ======================================-->-->
<!---->
<!--        <div class="modal-footer">-->
<!---->
<!--          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>-->
<!---->
<!--          <button type="submit" class="btn btn-primary">Guardar cliente</button>-->
<!---->
<!--        </div>-->
<!---->
<!--      </form>-->
<!---->
<!--      --><?php
//
//        $crearCliente = new ControladorClientes();
//        $crearCliente -> ctrCrearCliente();
//
//      ?>
<!---->
<!--    </div>-->
<!---->
<!--  </div>-->
<!---->
<!--</div>-->
<!---->
<!--<!--=====================================-->
<!--MODAL EDITAR CLIENTE-->
<!--======================================-->-->
<!---->
<!--<div id="modalEditarCliente" class="modal fade" role="dialog">-->
<!--  -->
<!--  <div class="modal-dialog">-->
<!---->
<!--    <div class="modal-content">-->
<!---->
<!--      <form role="form" method="post">-->
<!---->
<!--        <!--=====================================-->
<!--        CABEZA DEL MODAL-->
<!--        ======================================-->-->
<!---->
<!--        <div class="modal-header" style="background:#3c8dbc; color:white">-->
<!---->
<!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!---->
<!--          <h4 class="modal-title">Editar cliente</h4>-->
<!---->
<!--        </div>-->
<!---->
<!--        <!--=====================================-->
<!--        CUERPO DEL MODAL-->
<!--        ======================================-->-->
<!---->
<!--        <div class="modal-body">-->
<!---->
<!--          <div class="box-body">-->
<!---->
<!--            <!-- ENTRADA PARA EL NOMBRE -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>-->
<!--                <input type="hidden" id="idCliente" name="idCliente">-->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA EL DOCUMENTO ID -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-key"></i></span> -->
<!---->
<!--                <input type="number" min="0" class="form-control input-lg" name="editarDocumentoId" id="editarDocumentoId" required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA EL EMAIL -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> -->
<!---->
<!--                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA EL TELÉFONO -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-phone"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--            <!-- ENTRADA PARA LA DIRECCIÓN -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion"  required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!---->
<!--             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->-->
<!--            -->
<!--            <div class="form-group">-->
<!--              -->
<!--              <div class="input-group">-->
<!--              -->
<!--                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> -->
<!---->
<!--                <input type="text" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento"  data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>-->
<!---->
<!--              </div>-->
<!---->
<!--            </div>-->
<!--  -->
<!--          </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <!--=====================================-->
<!--        PIE DEL MODAL-->
<!--        ======================================-->-->
<!---->
<!--        <div class="modal-footer">-->
<!---->
<!--          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>-->
<!---->
<!--          <button type="submit" class="btn btn-primary">Guardar cambios</button>-->
<!---->
<!--        </div>-->
<!---->
<!--      </form>-->
<!---->
<!--      --><?php
//
//        $editarCliente = new ControladorClientes();
//        $editarCliente -> ctrEditarCliente();
//
//      ?>
<!---->
<!--    -->
<!---->
<!--    </div>-->
<!---->
<!--  </div>-->
<!---->
<!--</div>-->
<!---->
<?php
//
//  $eliminarCliente = new ControladorClientes();
//  $eliminarCliente -> ctrEliminarCliente();
//
//?>
<!---->


<div class="content-wrapper">

<div class="container box">
    <h4 align="center">BASE DE CONOCIMIENTOS</h4>
    <h4 align="center">HELPACT</h4>
    <div class="table-responsive">
        <div align="left">
            <button type="button"  id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg center-block">AGREGAR LECCION APRENDIDA</button>
<!--            <button type="button"  id="add_buttontr" data-toggle="modal" data-target="#userModal3" class="btn btn-info btn-lg center-block">AGREGAR CATEGORIAS</button>-->
        </div>
        <br/>
        <table id="user_data" class="table table-hover table-bordered table-striped" width="100%">
            <thead>
            <tr>

                <th width="2%"></th>
                <th width="1%">#</th>
                <th width="1%">DEPARTAMENTO</th>
                <th width="2%">ANALISTA</th>
                <th width="1%">TECNOLOGIA</th>
                <th width="8%">RESUMEN</th>
                <!--							<th width="3%">#GES</th>-->
                <th width="1%">ARCHIVO</th>
                <th width="1%">FECHA_INGRESO</th>
                <!--							<th width="5%">FECHA_ATENCION</th>-->
                <th width="1%"></th>
                <th width="1%"></th>
            </tr>
            </thead>
        </table>

    </div>
</div>
</body>
</html>


<!-------------------------------------------------------------------------->
<!-------------------------------------------------------------------------->
<!---INGRESO DE TK---------------------------------------------------------->
<!-------------------------------------------------------------------------->
<!-------------------------------------------------------------------------->

<div id="userModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <form method="post" id="user_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">AGREGAR LECCION</h4>
                </div>

                <div class="modal-body">
                    <table>
                        <tr>
                            <th><label>DEPARTAMENTO</label></th>
                            <th><label>ANALISTA</label></th>
                            <th><label>TECNOLOGIA</label></th>
                        </tr>

                        <tr>
                            <th>
                                <div class="contenedor-columna">

                                    <select class="combobox input-large form-control" name="first_name" id="first_name">
                                        <option value="" selected="selected">Seleccionar</option>


                                        <?php

                                        header('Content-Type: text/html; charset=UTF-8');
                                        $conexion=mysql_connect("localhost","root","") or
                                        die("Problemas en la conexion");
                                        mysql_select_db("crudemo",$conexion) or
                                        die("Problemas en la selección de la base de datos");
                                        mysql_query ("SET NAMES 'utf8'");
                                        $clavebuscadah=mysql_query("select provincia from provincia",$conexion) or
                                        die("Problemas en el select:".mysql_error());
                                        while($row = mysql_fetch_array($clavebuscadah))
                                        {
                                            echo'<OPTION VALUE="'.$row['provincia'].'">'.$row['provincia'].'</OPTION>';
                                        }

                                        ?>
                                    </select>

                                </div>

                            </th>

                            <th>
                                <div class="contenedor-columna">

                                    <select class="combobox input-large form-control" name="last_name" id="last_name">
                                        <option value="" selected="selected">Seleccionar</option>


                                        <?php

                                        header('Content-Type: text/html; charset=UTF-8');
                                        $conexion=mysql_connect("localhost","root","") or
                                        die("Problemas en la conexion");
                                        mysql_select_db("crudemo",$conexion) or
                                        die("Problemas en la selección de la base de datos");
                                        mysql_query ("SET NAMES 'utf8'");
                                        $clavebuscadah=mysql_query("select area from area",$conexion) or
                                        die("Problemas en el select:".mysql_error());
                                        while($row = mysql_fetch_array($clavebuscadah))
                                        {
                                            echo'<OPTION VALUE="'.$row['area'].'">'.$row['area'].'</OPTION>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </th>

                            <th>

                                <div class="contenedor-columna">

                                    <select class="combobox input-large form-control" name="tipo_trabajo" id="tipo_trabajo">
                                        <option value="" selected="selected">Seleccionar</option>


                                        <?php

                                        header('Content-Type: text/html; charset=UTF-8');
                                        $conexion=mysql_connect("localhost","root","") or
                                        die("Problemas en la conexion");
                                        mysql_select_db("crudemo",$conexion) or
                                        die("Problemas en la selección de la base de datos");
                                        mysql_query ("SET NAMES 'utf8'");
                                        $clavebuscadah=mysql_query("select trabajo , trabajoview , numerotrabajo
								 from trabajos",$conexion) or
                                        die("Problemas en el select:".mysql_error());
                                        while($row = mysql_fetch_array($clavebuscadah))
                                        {
                                            echo'<OPTION VALUE="'.$row['numerotrabajo'].'">'.$row['trabajoview'].'</OPTION>';
                                        }



                                        ?>


                                    </select>

                                </div>

                            </th>

                        </tr>

                    </table>

                    <label>RESUMEN</label>
                    <div class="contenedor-columna">

                        <textarea rows="2" cols="90" name="responsable"  id="responsable"></textarea>

                    </div>


                    <br/>

                    <label>INGRESAR OBSERVACION </label>
                    <br>	<br />
                    <!-- 	 <textarea rows="6" cols="50" name="observacion"  id="observacion"></textarea>-->

                    <textarea cols="80" id="observacion" name="observacion" rows="10"> </textarea>

                    <br>	<br />


                    <label></label>
                    <input type="file" name="user_image" id="user_image" />
                    <span id="user_uploaded_image"></span>
                </div>


                <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="operation" id="operation" />

                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!--AGREGAR TRABAJOS NUEVOS ----------------------------------------------->
<!-------------------------------------------------------------------------->

<div id="userModal3" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form3" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-titletr">AGREGAR TRABOS NUEVOS</h4>
                </div>

                <div class="modal-body">



                    <br></br>
                    <label>TRABAJO</label>
                    <input type="text" name="first_name" id="first_nametr" class="form-control"/>
                    <br></br>



                    <label>NUMERO ASIGNADO</label>
                    <input type="number" name="last_name" id="last_nametr" class="form-control" />
                    <br><br/>




                    <input type="hidden" name="operation" id="operationtr" />

                    <input type="submit" name="action" id="actiontr" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                </div>
            </div>
        </form>
    </div>
</div>






<!-------------------------------------------------------------------------->
<!-------------------------------------------------------------------------->
<!---ACTUALIZAR------------------------------------------------------------->

<div id="userModal2" class="modal fade"   data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <form method="post" id="user_form2" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title2" align="center">Add User</h4>

                </div>
                <div class="modal-body">


                    <table class="table table-responsive">
                        <tr>
                            <p id="demo" align="center"></>
                        </tr>

                        <tr>
                            <th>
                                <label>PROVINCIA</label>
                                <input type="text" name="first_name" id="uno" class="" size="25px" readonly="readonly"/>





                                <!-- <select name="first_name"   id="first_name2" >
                                  <option value="EL ORO">EL ORO</option>
                                  <option value="saab">Saab</option>
                                  <option value="opel">Opel</option>
                                  <option value="audi">Audi</option>
                                </select> -->


                                <select name="first_name"   id="first_name2" >

                                    <?php

                                    header('Content-Type: text/html; charset=UTF-8');
                                    $conexion=mysql_connect("localhost","root","") or
                                    die("Problemas en la conexion");
                                    mysql_select_db("crudemo",$conexion) or
                                    die("Problemas en la selección de la base de datos");
                                    mysql_query ("SET NAMES 'utf8'");
                                    $clavebuscadah=mysql_query("select provincia from provincia",$conexion) or
                                    die("Problemas en el select:".mysql_error());
                                    while($row = mysql_fetch_array($clavebuscadah))
                                    {
                                        echo'<OPTION VALUE="'.$row['provincia'].'">'.$row['provincia'].'</OPTION>';
                                    }

                                    ?>


                                </select>

                                <!--<input type="text" name="first_name" id="first_name2" class="form-control" /> -->


                            </th>

                            <th>


                                <label>ANALISTA</label>

                                <input type="text" name="last_name" id="dos" size="20px"  readonly="readonly"/>

                                <select name="last_name"   id="last_name2" >

                                    <?php

                                    header('Content-Type: text/html; charset=UTF-8');
                                    $conexion=mysql_connect("localhost","root","") or
                                    die("Problemas en la conexion");
                                    mysql_select_db("crudemo",$conexion) or
                                    die("Problemas en la selección de la base de datos");
                                    mysql_query ("SET NAMES 'utf8'");
                                    $clavebuscadah=mysql_query("select area from area",$conexion) or
                                    die("Problemas en el select:".mysql_error());
                                    while($row = mysql_fetch_array($clavebuscadah))
                                    {
                                        echo'<OPTION VALUE="'.$row['area'].'">'.$row['area'].'</OPTION>';
                                    }

                                    ?>


                                </select>

                            </th>

                        <tr>
                            <th>


                                <label>TECNOLOGIA</label>

                                <!-- <input type="number" name="trabajo" id="trabajo2"  /> -->


                                <input type="text" name="trabajo" id="cuatro" size="15px"  readonly="readonly"/>

                                <select name="trabajo"   id="trabajo2" >

                                    <?php

                                    header('Content-Type: text/html; charset=UTF-8');
                                    $conexion=mysql_connect("localhost","root","") or
                                    die("Problemas en la conexion");
                                    mysql_select_db("crudemo",$conexion) or
                                    die("Problemas en la selección de la base de datos");
                                    mysql_query ("SET NAMES 'utf8'");
                                    $clavebuscadah=mysql_query("select trabajo , trabajoview , numerotrabajo
						 from trabajos",$conexion) or
                                    die("Problemas en el select:".mysql_error());
                                    while($row = mysql_fetch_array($clavebuscadah))
                                    {
                                        echo'<OPTION VALUE="'.$row['numerotrabajo'].'">'.$row['trabajoview'].'</OPTION>';
                                    }



                                    ?>


                                </select>

                            </th>



                            <th>

                                <label>RESUMEN</label>
                                <br>

                                <textarea rows="2" cols="50" name="responsable"  id="responsable2"> </textarea>
                                <!--			<input type="text" name="responsable" id="tres" size="35px"  readonly="readonly"/>-->
                                <!---->
                                <!---->
                                <!--								<select name="responsable"   id="responsable2" >-->
                                <!---->
                                <!---->
                                <!--			--><?php
                                //
                                //				header('Content-Type: text/html; charset=UTF-8');
                                //				$conexion=mysql_connect("localhost","root","") or
                                //				die("Problemas en la conexion");
                                //				mysql_select_db("crudemo",$conexion) or
                                //				die("Problemas en la selección de la base de datos");
                                //				mysql_query ("SET NAMES 'utf8'");
                                //				$clavebuscadah=mysql_query("select ingenieros from nomina",$conexion) or
                                //				die("Problemas en el select:".mysql_error());
                                //				while($row = mysql_fetch_array($clavebuscadah))
                                //				{
                                //					echo'<OPTION VALUE="'.$row['ingenieros'].'">'.$row['ingenieros'].'</OPTION>';
                                //				}
                                //
                                //			?>
                                <!--			</select>-->

                            </th>
                        </tr>


                        <!--<tr>-->
                        <!--	<th colspan="2">-->
                        <!---->
                        <!--		<label>NUMERO DE GESTIONES </label>-->
                        <!--						<input type="number" name="gestiones" id="gestiones2"  />-->
                        <!--	</th>-->
                        <!--</tr>-->


                        <tr>
                            <td colspan="2">
                                <label>INGRESAR OBSERVACION</label>
                                <textarea rows="10" cols="40" name="observacion"  id="observacion2"> </textarea>

                                <!-- <input type="text" name="observacion" id="observacion"  /> -->
                            </th>

                            </td>
                        </tr>
                        <tr>

                            <th>
                                <label>ULTIMA ACTUALIZACION</label>

                                <input type="datetime"  name="fecha_fin" id="fecha_fin2" class="form-control" readonly="readonly"/>
                                <!--
                                                    <select class="selectpicker" name="last_name" id="last_name">
                                                      <option>Mustard</option>
                                                      <option>Ketchup</option>
                                                      <option>Relish</option>
                                                    </select>
                                                    <br><br/>
                                -->
                                <br><br/>
                            </th>

                            <th>

                                <label>INGRESAR ARCHIVO</label>
                                <input type="file" name="user_image" id="user_image2" />
                                <span id="user_uploaded_image2"></span>
                </div>

                </th>

                </tr>

                <tr>

                    <th colspan="2">
                        <div class="modal-footer">
                            <input type="hidden" name="user_id" id="user_id2" />
                            <input type="hidden" name="operation" id="operation2" />

                            <input type="submit" name="action" id="action2" class="btn btn-info btn-sm" value="Add" />
                            <button type="button"  class="btn btn-default"  id = "btnCancelar" data-dismiss="modal">CANCELAR</button>
                    </th>
                </tr>




                </table>



            </div>
    </div>
    </form>
</div>
</div>
</div>
<script>
    // initSample();
    CKEDITOR.replace('observacion');
    //CKEDITOR.replace('observacion2'); // ADD THIS

</script>

