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
        
    <!--
        <h3 class="pp">Portfolio</h3>
        <img class="icontech" src="./icons/icons8-html-5.svg">
        <img class="icontech" src="./icons/icons8-css3.svg">
        <img class="icontech" src="./icons/icons8-javascript.svg">
        <img class="icontech" src="./icons/bootstrap-logo.svg">
        <img class="icontech" src="./icons/icons8-php-logo.svg">
        <img class="icontech" src="./icons/icons8-mysql-logo.svg">
        <img class="icontech" src="./icons/icons8-visual-studio.svg">
        <img class="icontech" src="./icons/logo-net.png">
        <img class="icontech" src="./icons/logo-c.svg">
        <img class="icontech" src="./icons/logo-json.png">
    -->
        <div style="background-color: rgb(47, 93, 146); text-align:center;">
            <br>
            <h2 style="color:whitesmoke"><strong>Portfolio</strong></h2>
        </div>
        <hr>
        <div class="row" style="margin: 0.1rem;">
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!--<th>ID</th>-->
                            <th>Proyecto</th>
                            <!--<th>Imagen</th>-->
                            <th>Descripcion</th>
                            <th id="link">Link</th>
                            <th>Tecnologias</th>
                            <th>Repositorio</th>
                        </tr>
                    </thead>

                    <tbody>

                            <tr>
                                <!--<td scope="row"><?php echo $proyecto['id'];?></td>-->
                                <td>Usuarios y Contraseñas</td>
                                <td>Registro de usuarios y contrasenas de las diferentes paginas webs.</td>
                                <td><a class="linka" href="http://usuariosycontrasenas.rf.gd/" target="_blank" >http://usuariosycontrasenas.rf.gd/</a></td>
                                <td style="text-align:center">
                                    <img class="icontech" src="./icons/html5.svg">
                                    <img class="icontech" src="./icons/javascript.svg">
                                    <img class="icontech" src="./icons/css3.svg">
                                    <img class="icontech" src="./icons/bootstrap.svg">
                                    <img class="icontech" src="./icons/php.svg">
                                    <img class="icontech" src="./icons/mysql.svg">
                                </td>
                                <td style="text-align:center"><a class="linka" href="https://github.com/Xavier333/usuariosycontrasenas" target="_blank"><i class="fa fa-github fa-2x m-2"></i></a></td>
                            </tr>
                            
                            <tr>
                                <!--<td scope="row"><?php echo $proyecto['id'];?></td>-->
                                <td>Fundacion Kuña-Aty</td>
                                <td>Web de la Fundacion Kuña-Aty.</td>
                                <td><a class="linka" href="	http://fundacionkunaaty.rf.gd/" target="_blank" >http://fundacionkunaaty.rf.gd/</a></td>
                                <td style="text-align:center">
                                    <img class="icontech" src="./icons/html5.svg">
                                    <img class="icontech" src="./icons/javascript.svg">
                                    <img class="icontech" src="./icons/css3.svg">
                                    <img class="icontech" src="./icons/bootstrap.svg">
                                </td>
                                <td style="text-align:center"><a class="linka" href="https://github.com/Xavier333/usuariosycontrasenas" target="_blank"><i class="fa fa-github fa-2x m-2"></i></a></td>
                            </tr>

                            
                        <?php #leemos proyectos 1 por 1 
                        #foreach($proyectos as $proyecto){ ?>
                        <!--
                            <tr>
                                <td scope="row"><?php echo $proyecto['id'];?></td>
                                <td><?php echo $proyecto['proyecto'];?></td>
                                <td><?php echo $proyecto['descripcion'];?></td>
                                <td><a class="linka" href="<?php echo $proyecto['link'];?>" target="_blank" ><?php echo $proyecto['link'];?></a></td>
                                <td> <img width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="">  </td>
                                <td style="text-align:center"><?php echo $proyecto['tecnologias'];?></td>
                                <td style="text-align:center"><a class="linka" href="<?php echo $proyecto['repositorio'];?>" target="_blank"><i class="fa fa-github fa-2x m-2" ></i></a></td>
                                <td><a name="editar" id="editar" class="btn btn-primary" href="./editar.php?editar=<?php echo $proyecto['id'];?>">Editar</a></td>
                                <td><a name="eliminar" id="eliminar" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'];?>">Eliminar</a></td>
                            </tr>
                        -->
                        <?php #cerramos la llave del foreach
                        #} ?>
                        
                    </tbody>
            </table>
        </div>    
    </div>

</section>

<?php include 'footer.php'; ?>