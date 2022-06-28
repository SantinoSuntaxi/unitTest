<div class="content-wrapper">



    <section class="content">

        <div class="box">

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                    <thead>

                    <tr>


                        <th>Nombre</th>
                        <th>#Ingresos</th>
                        <th>Foto</th>
                        <th>Último login</th>


                    </tr>

                    </thead>

                    <tbody>

                    <?php

                    $item = null;
                    $valor = null;

                    $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                    foreach ($usuarios as $key => $value){

                        echo ' <tr>
                  
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["ingresousuario"].'</td>';

                        if($value["foto"] != ""){

                            echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

                        }else{

                            echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>';

                        }

                        echo '<td>'.$value["ultimo_login"].'</td>
                  <td>

        

                  </td>

                </tr>';
                    }


                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>

