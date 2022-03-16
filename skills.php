<?php include 'header.php'; ?>
<?php include 'conexion.php'; ?>

<section id="pantalla_dividida">

    <?php include 'izq.php'; ?>
 
    <?php
        $conexion = new conexion();
        $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
        //$proyectos= $conexion->consultar("SELECT proyectos.id, proyectos.nombre, proyectos.direccionWeb, proyectos.descripcion, usuarios.usuario, proyectos.codigoContra  FROM usuarios INNER JOIN proyectos ON proyectos.usuario = usuarios.id_usuarios");
        //$codigoscontras= $conexion->consultar("SELECT * FROM `codigoscontra`");
        //$usuarios= $conexion->consultar("SELECT * FROM `usuarios`");
        #$usuariocompleto= $conexion->consultar("SELECT `usuarios`.`usuario` FROM `usuarios` INNER JOIN `proyectos` ON `proyectos`.`usuario` = `usuarios`.`id_usuarios`");
        #comprobamos que la info este en forma de arreglo
        #print_r($resultado);
    ?>

    <div class="derecha">
        <div style="background-color: rgb(47, 93, 146); text-align:center;">
            <br>
            <h2 style="color:whitesmoke"><strong>Skills</strong></h2>
        </div>
        <hr>  
        <div class="d-flex justify-content-center">
                <div class="m-2">
                    <br>
                    <div class="col-sm-8" style="text-align:center">
                        <div class="card-header">
                            <h3 style="text-align:center">Programing Languages</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="icontable">Icon</th>
                                            <th>Languages</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="icontable"><img class="icontech" src="./icons/javascript.svg"></td> 
                                            <td>JavaScript</td>
                                        </tr>
                                        <tr>
                                            <td class="icontable"><img class="icontech" src="./icons/python.png"></td> 
                                            <td>Python</td>
                                        </tr>
                                        <tr>
                                            <td class="icontable"><img class="icontech" src="./icons/php.svg"></td> 
                                            <td>PHP</td>
                                        </tr>
                                        <tr>
                                            <td class="icontable"><img class="icontech" src="./icons/c.svg"></td> 
                                            <td>C#</td>
                                        </tr>
                                        <tr>
                                            <td class="icontable"><img class="icontech" src="./icons/sql.png"></td> 
                                            <td>SQL</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
        
            <div class="m-2">
                <br>
                <div class="col-sm-8" style="text-align:center">
                    <div class="card-header">
                        <h3 style="text-align:center">Markup & Layout Languages</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="icontable">Icon</th>
                                        <th>Languages</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/html5.svg"></td> 
                                        <td>HTML</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/css3.svg"></td> 
                                        <td>CSS</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/bootstrap.svg"></td> 
                                        <td>Bootstrap</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-2">
                <br>
                <div class="col-sm-10" style="text-align:center">
                    <div class="card-header">
                        <h3 style="text-align:center">Technology Stacks</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="icontable">Icon</th>
                                        <th>Languages</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/laravel.png"></td> 
                                        <td>Laravel</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/nodejs.svg"></td> 
                                        <td>NodeJS</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/net.png"></td> 
                                        <td>.NET</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/git.svg"></td> 
                                        <td>GIT</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/github.svg"></td> 
                                        <td>GITHUB</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/mysql.svg"></td> 
                                        <td>MySQL</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/mongodb.svg"></td> 
                                        <td>MongoDB</td>
                                    </tr>
                                    <tr>
                                        <td class="icontable"><img class="icontech" src="./icons/npm.svg"></td> 
                                        <td>NPM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>     

    </div>

</section>

<?php include 'footer.php'; ?>