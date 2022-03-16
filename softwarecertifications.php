<?php include 'header.php'; ?>
<?php include 'conexion.php'; ?>

<section id="pantalla_dividida">

    <?php include 'izq.php'; ?>
 
    <?php
        $conexion = new conexion();
        $proyectos= $conexion->consultar("SELECT * FROM `certificados`");
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
            <h2 style="color:whitesmoke"><strong>Software Certifications</strong></h2>
        </div>
        <hr>  
        <div class="row" style="margin: 0.1rem;">
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!--<th>ID</th>-->
                            <th>Titulo</th>
                            <!--<th>Imagen</th>-->
                            <th>Instituto</th>
                            <th>Descripcion</th>
                            <th id="link">Link</th>
                            <th>Estado</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td style="text-align:center">Full-Stack PHP</td>
                            <td style="text-align:center">Programa Codo a Codo - BA</td>
                            <td style="text-align:center">Fullstack con PHP (CAC 4.0)</td>
                            <td ><a class="linka" href="https://agenciadeaprendizaje.bue.edu.ar/curso/php-cac-4-0/" target="_blank" >https://agenciadeaprendizaje.bue.edu.ar/curso/php-cac-4-0/</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>

                        <tr>
                            <td style="text-align:center">Full-Stack - Desarrollo Web (JavaScript/Node JS)</td>
                            <td style="text-align:center">Programa Codo a Codo - BA</td>
                            <td style="text-align:center">Con este curso vas a potenciar tus conocimientos ya que es ideal para quienes tienen algun conocimiento o experiencia en desarrollo de sitios web (como egresados de Aprender Programando) y deseen complementarlo con el detras de escenas de un sitio. Incorporar conocimientos del lenguaje JavaScript y del entorno Node.Js.</td>
                            <td ><a class="linka" href="https://agenciadeaprendizaje.bue.edu.ar/curso/desarrollo-web-cac-4-0/" target="_blank" >https://agenciadeaprendizaje.bue.edu.ar/curso/desarrollo-web-cac-4-0/</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>

                        <tr>
                            <td style="text-align:center">Programación .NET C#</td>
                            <td style="text-align:center">UTN</td>
                            <td style="text-align:center">Curso que tiene por finalidad brindar una base sólida para diseñar y programar una solución en .NET iniciando desde un nivel básico, hasta alcanzar el desarrollo de una aplicación</td>
                            <td ><a class="linka" href="https://site.elearning-total.com/course/informatica-y-tecnologia-29/programacion-26/programacion-net-1/?com=et" target="_blank" >https://site.elearning-total.com/course/informatica-y-tecnologia-29/programacion-26/programacion-net-1/?com=et</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>

                        <tr>
                            <td style="text-align:center">Desarrollo de aplicaciones C#.NET.</td>
                            <td style="text-align:center">ComIT</td>
                            <td style="text-align:center">Curso sobre desarrollo de proyectos en .NET.</td>
                            <td ><a class="linka" href="https://www.comunidadit.org/estudiantes" target="_blank" >https://www.comunidadit.org/estudiantes</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>

                        <tr>
                            <td style="text-align:center">Introduccion a Base de Datos y SQL.</td>
                            <td style="text-align:center">Educacion IT</td>
                            <td style="text-align:center">Fundamentos de las Bases de Datos. Instalar y trabajar con MySQL. Lenguaje SQL. Estructuras de consulta. Operadores, cláusulas y sentencias. Manipulación de datos. Registros y agrupamientos. Construir un modelo de Base de Datos. Tópicos avanzados. Integridad referencial.</td>
                            <td ><a class="linka" href="https://www.educacionit.com/curso-de-introduccion-sql" target="_blank" >https://www.educacionit.com/curso-de-introduccion-sql</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>
                        
                        <tr>
                            <td style="text-align:center">Autocad 2D & 3D.</td>
                            <td style="text-align:center">INET - Instituto Nacional de Educación Tecnológica</td>
                            <td style="text-align:center">Diseño y desarrollo de planos 2D y 3D.</td>
                            <td ><a class="linka" href="http://www.inet.edu.ar/" target="_blank" >http://www.inet.edu.ar/</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>

                        <tr>
                            <td style="text-align:center">3D Studio Max - Avanzado.</td>
                            <td style="text-align:center">Escuela DaVinci</td>
                            <td style="text-align:center">Software de modelado y renderización 3D para la visualización del diseño, juegos y animación.</td>
                            <td ><a class="linka" href="https://www.davinci.edu.ar/" target="_blank" >https://www.davinci.edu.ar/</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>

                        <tr>
                            <td style="text-align:center">After Effects 6.5 - Avanzado.</td>
                            <td style="text-align:center">Escuela DaVinci</td>
                            <td style="text-align:center">After Effects es el software profesional de Adobe para efectos visuales, composición y motion graphics en general. Utilizado en el proceso de postproducción para cine y televisión, After Effects permite crear animaciones, VFX, corregir colores, ajustar la imagen y servir como sistema de edición no lineal.</td>
                            <td ><a class="linka" href="https://www.davinci.edu.ar/cursos/adultos/motion-graphics-publicitario" target="_blank" >https://www.davinci.edu.ar/cursos/adultos/motion-graphics-publicitario</a></td>
                            <td style="text-align:center">Completo</td>
                        </tr>                        
                        
                        <?php #leemos proyectos 1 por 1
                        #foreach($proyectos as $proyecto){ ?>
                        <!--
                            <tr>
                                <td scope="row"><?php echo $proyecto['id'];?></td>
                                <td style="text-align:center"><?php echo $proyecto['titulo'];?></td>
                                <td style="text-align:center"><?php echo $proyecto['instituto'];?></td>
                                <td ><?php echo $proyecto['descripcion'];?></td>
                                <td ><a class="linka" href="<?php echo $proyecto['link'];?>" target="_blank" ><?php echo $proyecto['link'];?></a></td>
                                <td> <img width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="">  </td>
                                <td ><?php echo $proyecto['estado'];?></td>
                                <td><a href="<?php echo $proyecto['repositorio'];?>" target="_blank"><i class="fa fa-github fa-2x m-2" ></i></a></td>
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