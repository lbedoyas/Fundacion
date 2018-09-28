<?php
include('header.php');
?>
<section>
    <br>
    <h3 style="text-align: center;">Formulario de inscripcion</h3>
    <br>
    <ol>
        Importante:
        <li>Para saber si usted y su grupo familiar pueden acceder al programa</li>
        <li>Lea cuidadosamente el formulario antes de llenarlo. Diligéncielo a 
            mano en letra imprenta. </li>
        <li>Este formulario es gratuito y puede ser fotocopiado para su distribución. </li>   
        <li>No se aceptan intermediarios ni tramitadores. La persona interesada debe presentar 
            directamente su solicitud.</li>    
    </ol>
    <form method="POST" action="Formulario_cocinaTuFuturo.php">
  <div class="form-group">
      <label>Fecha de inscripcion: <?php echo " " . date("Y/m/d") . "<br>";?></label>
      <br>
      <h5>Datos del postulante</h5>
      <div class="row">
          <div class="col">
                <label>Nombre</label>
                <input type="text" class="form-control" placeholder="Ingrese su nombre, por favor" name="nombre_HTML">
          </div>
          <div class="col">
                <label>Apellido</label>
                <input type="text" class="form-control" placeholder="Ingrese su apellido, por favor" name="apellido_HTML">
          </div>
        </div>
        <div class="row">
            <div class="col">
                  <label>Numero de Identificacion:</label>
                  <input type="text" class="form-control" name="id_HTML">
            </div>
            <div class="col">
                    <label>Expedida en:</label>
                    <input type="text" class="form-control" name="expedido_HTML">      
            </div>
        </div>
        <div class="row">
                <div class="col">
                      <label>Fecha de nacimiento:</label>
                      <input type="text" class="form-control" name="nacimiento_HTML">
                </div>
                <div class="col">
                        <label>Edad:</label>
                        <input type="text" class="form-control" name="edad_HTML">      
                </div>
            </div>
  
    </div>
    <div class="row">
            <div class="col">
                    <div class="form-group">
                            <label>Estado civil</label>
                            <select class="form-control" name="estadoCivil_HTML">
                              <option>Casado</option>
                              <option>Soltero</option>
                              <option>Union libre</option>
                              <option>Separado</option>
                              <option>Viudo</option>
                            </select>
                          </div>
            </div>
            <div class="col">
                    <div class="form-group">
                            <label>Convive con su pareja</label>
                            <select class="form-control" name="conPareja_HTML">
                              <option>Si</option>
                              <option>No</option>
                            </select>
                    </div>
            </div>   
            </div>
            <div class="row">
                    <div class="col">
                          <label>Ciudad:</label>
                          <input type="text" class="form-control" name="ciudad_HTML">
                    </div>
                    <div class="col">
                            <label>Departamento:</label>
                            <input type="text" class="form-control" name="departamento_HTML">      
                    </div>
                </div>
                <div class="row">
                        <div class="col">
                              <label>Direccion:</label>
                              <input type="text" class="form-control" name="direccion_HTML">
                        </div>
                        <div class="col">
                                <label>Barrio:</label>
                                <input type="text" class="form-control" name="barrio_HTML">      
                        </div>
                    </div>
                    <div class="row">
                            <div class="col">
                                  <label>Numero Telefonico:</label>
                                  <input type="number" class="form-control" name="num_tel_HTML">
                            </div>
                            <div class="col">
                                    <label>Celular:</label>
                                    <input type="number" class="form-control" name="celular_HTML">      
                            </div>
                        </div>
                        <div class="row">
                                <div class="col">
                                        <div class="form-group">
                                                <label>Pertenece alguna etnia</label>
                                                <select class="form-control" name="etnia_HTML">
                                                  <option>Mestizos</option>
                                                  <option>AfroColombianos</option>
                                                  <option>Indigena</option>
                                                  <option>Otro</option>
                                                </select>
                                        </div>

                                </div>
                                <div class="col">
                                        <label>Cual etnia:</label>
                                        <input type="text" class="form-control" name="nom_etnia_HTML">      
                                </div>
                            </div>

                    <h4>Conformacion y condicion socioeconomica del hogar</h4>
                    <div class="row">
                            <div class="col">
                                    <div class="form-group">
                                            <label>Cual es su rol dentro del hogar</label>
                                            <select class="form-control" name="Rol_HTML">
                                              <option>Jefe de hogar</option>
                                              <option>Pareja</option>
                                              <option>Hijo</option>
                                              <option>Nieto</option>
                                              <option>Otro</option>
                                            </select>
                                    </div>

                            </div>
                            <div class="col">
                                    <label>Cual:</label>
                                    <input type="text" class="form-control" name="nom_rol_HTML">      
                            </div>
                            <div class="col">
                                    <label>Numero de hijos:</label>
                                    <input type="number" class="form-control" name="nhijos_HTML">      
                            </div>
                        </div>
                        <div class="row">
                                <div class="col">
                                      <label>Cuantas personas dependen economicamente de usted:</label>
                                      <input type="number" class="form-control" name="ndepPersonas_HTML">
                                </div>
                                <div class="col">
                                        <label>Cuales?:</label>
                                        <input type="text" class="form-control" name="nomdepPersonas_HTML">      
                                </div>
                            </div>
                            <br>
                            <h5 style="width: 100%; text-align: center;">Cuantas personas conforman su nucleo familiar</h5>
                            <div class="row">
                                    <div class="col col-md-12">
                                          <label>Nombre & Apellidos</label>
                                          <input type="number" class="form-control" name="nom_apell1_HTML">
                                    </div>
                                    <div class="col">
                                            <label>Edad:</label>
                                            <input type="number" class="form-control" name="edad1_HTML">      
                                    </div>
                                    <div class="col">
                                            <label>Parentesco:</label>
                                            <input type="text" class="form-control" name="parentesco1_HTML">      
                                    </div>
                                    <div class="col">
                                            <label>Sexo:</label>
                                            <input type="text" class="form-control" name="sexo1_HTML">      
                                    </div>
                                    <div class="col">
                                            <label>Documento ID:</label>
                                            <input type="number" class="form-control" name="id1_HTML">      
                                    </div>
                                    <div class="col">
                                            <label>Ocupacion:</label>
                                            <input type="text" class="form-control" name="ocupacion1_HTML">      
                                    </div>
                                    <div class="col">
                                            <label>Discapacidad:</label>
                                            <select class="form-control" name="discapacidad1_HTML">
                                                    <option>Si</option>
                                                    <option>No</option>
                                                  </select>    
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <div class="row">
                                        <div class="col col-md-12">
                                              <label>Nombre & Apellidos</label>
                                              <input type="number" class="form-control" name="nom_apell2_HTML">
                                        </div>
                                        <div class="col">
                                                <label>Edad:</label>
                                                <input type="number" class="form-control" name="edad2_HTML">      
                                        </div>
                                        <div class="col">
                                                <label>Parentesco:</label>
                                                <input type="text" class="form-control" name="parentesco2_HTML">      
                                        </div>
                                        <div class="col">
                                                <label>Sexo:</label>
                                                <input type="text" class="form-control" name="sexo2_HTML">      
                                        </div>
                                        <div class="col">
                                                <label>Documento ID:</label>
                                                <input type="number" class="form-control" name="id2_HTML">      
                                        </div>
                                        <div class="col">
                                                <label>Ocupacion:</label>
                                                <input type="text" class="form-control" name="ocupacion2_HTML">      
                                        </div>
                                        <div class="col">
                                                <label>Discapacidad:</label>
                                                <select class="form-control" name="discapacidad2_HTML">
                                                        <option>Si</option>
                                                        <option>No</option>
                                                      </select>    
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="row">
                                            <div class="col col-md-12">
                                                  <label>Nombre & Apellidos</label>
                                                  <input type="number" class="form-control" name="nom_apell3_HTML">
                                            </div>
                                            <div class="col">
                                                    <label>Edad:</label>
                                                    <input type="number" class="form-control" name="edad3_HTML">      
                                            </div>
                                            <div class="col">
                                                    <label>Parentesco:</label>
                                                    <input type="text" class="form-control" name="parentesco3_HTML">      
                                            </div>
                                            <div class="col">
                                                    <label>Sexo:</label>
                                                    <input type="text" class="form-control" name="sexo3_HTML">      
                                            </div>
                                            <div class="col">
                                                    <label>Documento ID:</label>
                                                    <input type="number" class="form-control" name="id3_HTML">      
                                            </div>
                                            <div class="col">
                                                    <label>Ocupacion:</label>
                                                    <input type="text" class="form-control" name="ocupacion3_HTML">      
                                            </div>
                                            <div class="col">
                                                    <label>Discapacidad:</label>
                                                    <select class="form-control" name="discapacidad3_HTML">
                                                            <option>Si</option>
                                                            <option>No</option>
                                                          </select>    
                                            </div>
                                        </div>
                                        <hr>
                                <div class="row">
                                        <div class="col col-md-12">
                                              <label>Si algun miembro de su familia tiene alguna discapacidad mencione cual:</label>
                                              <input type="text" class="form-control" name="Descrip_discapacidad_HTML">
                                        </div>
                                        <div class="col">
                                                <label>Ocupacion Laboral:</label>
                                                <input type="text" class="form-control" name="ocupacion_lab_HTML">      
                                        </div>
                                        <div class="col">
                                                <label>Horario Laboral:</label>
                                                <input type="text" class="form-control" name="horario_lab_HTML">      
                                        </div>
                                        <div class="col">
                                                <label>Ingresos Mensuales:</label>
                                                <input type="number" class="form-control" name="ing_mensuales_HTML">      
                                        </div>
                                    </div>
                                    <h5>Caracteristicas de vivienda</h5>
                                    <div class="row">
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label>Tipo de vivienda:</label>
                                                            <select class="form-control" name="tipo_vivi_HTML">
                                                              <option>Casa</option>
                                                              <option>Apartamento</option>
                                                              <option>Pieza</option>
                                                              <option>Inquilinato</option>
                                                            </select>
                                                    </div>
                
                                            </div>
                                            <div class="col">
                                                    <label>Estrato socioEconomico:</label>
                                                    <select class="form-control" name="Est_socio_HTML">
                                                            <option>Estrato 1</option>
                                                            <option>Estrato 2</option>
                                                            <option>Estrato 3</option>
                                                          </select>    
                                            </div>
                                            <div class="col">
                                                    <label>La vivienda es:</label>
                                                    <select class="form-control" name="vivienda_HTML">
                                                            <option>Propia</option>
                                                            <option>Familiar</option>
                                                            <option>En arriendo</option>
                                                          </select>        
                                            </div>
                                            <div class="col">
                                                    <label>Valor de arriendo:</label>
                                                    <input type="number" class="form-control" name="var_arriendo_HTML">      
                                            </div>
                                        </div>
                                        <div class="col col-md-12">
                                                <label>Cuantas habitaciones tiene la vivienda:</label>
                                                <select class="form-control" name="hab_vivienda_HTML">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                      </select>        
                                        </div>
                                        <br>
                                        <h6>La vivienda cuenta con los servicios basicos</h6>
                                        <div class="row">
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label>Agua:</label>
                                                            <select class="form-control" name="agua_HTML">
                                                              <option>Si</option>
                                                              <option>No</option>
                                                            </select>
                                                    </div>
                
                                            </div>
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label>Energia Electrica:</label>
                                                            <select class="form-control" name="electrica_HTML">
                                                              <option>Si</option>
                                                              <option>No</option>
                                                            </select>
                                                    </div>
                
                                            </div>
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label>Gas:</label>
                                                            <select class="form-control" name="gas_HTML">
                                                              <option>Si</option>
                                                              <option>No</option>
                                                            </select>
                                                    </div>
                
                                            </div>
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label>Acueducto:</label>
                                                            <select class="form-control" name="acueducto_HTML">
                                                              <option>Si</option>
                                                              <option>No</option>
                                                            </select>
                                                    </div>
                
                                            </div>
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label>Telefono:</label>
                                                            <select class="form-control" name="tel_HTML">
                                                              <option>Si</option>
                                                              <option>No</option>
                                                            </select>
                                                    </div>
                
                                            </div>
                                            <div class="col">
                                                    <div class="form-group">
                                                            <label>Aseo:</label>
                                                            <select class="form-control" name="aseo_HTML">
                                                              <option>Si</option>
                                                              <option>No</option>
                                                            </select>
                                                    </div>
                
                                            </div>
                                        </div>

                                        <h5>Discapacidad y salud</h5>
                                        <div class="row">
                                                <div class="col">
                                                        <div class="form-group">
                                                                <label>Tiene alguna discpacidad:</label>
                                                                <select class="form-control" name="Q_discapacidad_HTML">
                                                                  <option>Si</option>
                                                                  <option>No</option>
                                                                </select>
                                                        </div>
                    
                                                </div>
                                                <div class="col">
                                                        <label>Tipo de discapacidad:</label>
                                                        <select class="form-control" name="Tipo_discapacidad_HTML">
                                                                <option>Visual</option>
                                                                <option>Auditiva</option>
                                                                <option>Cognitiva</option>
                                                                <option>Motora</option>
                                                              </select>    
                                                </div>
                                                <div class="col">
                                                        <label>Regimen de Salud:</label>
                                                        <select class="form-control" name="Reg_salud_HTML">
                                                                <option>R. Subsidiado</option>
                                                                <option>R. Contributivo</option>
                                                                <option>Ninguno</option>
                                                              </select>        
                                                </div>
                                                <div class="col">
                                                        <label>Nombre de la EPS:</label>
                                                        <input type="text" class="form-control" name="nom_EPS_HTML">      
                                                </div>
                                                <br>
                                                <br>
                </div>
                 <!--Fin div formulario-->
            </div>
        </div>
</div>
<br>
<div style="width: 100%; text-align: center;"> 
     <button type="submit" class="btn btn-primary" name="boton">Enviar</button>
</div>
</form>

 <?php

if(isset($_POST['boton']))
{
    include '../Conexion/conexion.php';
    require_once('../Config/Validacion.php');
    $Fecha = date("Y/m/d");
    $nombre_PHP = $_POST['nombre_HTML'];
    $apellido_PHP = $_POST['apellido_HTML'];
    $id_PHP = $_POST['id_HTML'];
    $expedido_PHP = $_POST['expedido_HTML'];
    $nacimiento_PHP = $_POST['nacimiento_HTML'];
    $edad_PHP = $_POST['edad_HTML'];
    $estadoCivil_PHP = $_POST['estadoCivil_HTML'];
    $conPareja_PHP = $_POST['conPareja_HTML'];
    $ciudad_PHP = $_POST['ciudad_HTML'];
    $departamento = $_POST['departamento_HTML'];
    $direccion_PHP = $_POST['direccion_HTML'];
    $barrio_PHP = $_POST['barrio_HTML'];
    $num_tel_PHP = $_POST['num_tel_HTML'];
    $celular_PHP = $_POST['celular_HTML'];
    $etnia_PHP = $_POST['etnia_HTML'];
    $nom_etnia_PHP = $_POST['nom_etnia_HTML'];
    $Rol_PHP = $_POST['Rol_HTML'];
    $nom_rol_PHP = $_POST['nom_rol_HTML'];
    $nhijos_PHP = $_POST['nhijos_HTML'];
    $ndepPersonas_PHP = $_POST['ndepPersonas_HTML'];
    $nomdepPersonas_PHP = $_POST['nomdepPersonas_HTML'];
    $nom_apell1_PHP = $_POST['nom_apell1_HTML'];
    $edad1_PHP = $_POST['edad1_HTML'];
    $parentesco1_PHP = $_POST['parentesco1_HTML'];
    $sexo1_PHP = $_POST['sexo1_HTML'];
    $id1_PHP = $_POST['id1_HTML'];
    $ocupacion1_PHP = $_POST['ocupacion1_HTML'];
    $discapacidad1_PHP = $_POST['discapacidad1_HTML'];
    $nom_apell2_PHP = $_POST['nom_apell2_HTML'];
    $edad2_PHP = $_POST['edad2_HTML'];
    
    $sexo2_PHP = $_POST['sexo2_HTML'];
    $id2_PHP = $_POST['id2_HTML'];
    $ocupacion2_PHP = $_POST['ocupacion2_HTML'];
    $discapacidad2_PHP = $_POST['discapacidad2_HTML'];
    $nom_apell3_PHP = $_POST['nom_apell3_HTML'];
    $edad3_PHP = $_POST['edad3_HTML'];
    $parentesco3 = $_POST['parentesco3_HTML'];
    $sexo3_PHP = $_POST['sexo3_HTML'];
    $id3_PHP = $_POST['id3_HTML'];
    $ocupacion3_PHP = $_POST['ocupacion3_HTML'];
    $discapacidad3_PHP = $_POST['discapacidad3_HTML'];
    $Descrip_discapacidad_PHP = $_POST['Descrip_discapacidad_HTML'];
    $ocupacion_lab_PHP = $_POST['ocupacion_lab_HTML'];
    $horario_lab_PHP = $_POST['horario_lab_HTML'];
    $ing_mensuales_PHP = $_POST['ing_mensuales_HTML'];
    $tipo_vivi_PHP = $_POST['tipo_vivi_HTML'];
    $Est_socio_PHP = $_POST['Est_socio_HTML'];
    $vivienda_PHP = $_POST['vivienda_HTML'];
    $var_arriendo_PHP = $_POST['var_arriendo_HTML'];
    $hab_vivienda_PHP = $_POST['hab_vivienda_HTML'];
    $agua_PHP = $_POST['agua_HTML'];
    $electrica_PHP = $_POST['electrica_HTML'];
    $gas_PHP = $_POST['gas_HTML'];
    $acueducto_PHP = $_POST['acueducto_HTML'];
    $tel_PHP = $_POST['tel_HTML'];
    $aseo_PHP = $_POST['aseo_HTML'];
    $Q_discapacidad_PHP = $_POST['Q_discapacidad_HTML'];
    $Tipo_discapacidad_PHP = $_POST['Tipo_discapacidad_HTML'];
    $Reg_salud_PHP = $_POST['Reg_salud_HTML'];
    $nom_EPS_PHP = $_POST['nom_EPS_HTML'];
    

    $conn->query("INSERT INTO contactanos (nombre,apellido,email,motivo,dependencia,descripcion) VALUES ('$nombre','$apellido','$correo','$motivo','$dependencia','$descripcion')");
    mysqli_close($conn);

    echo "<script> alert('Informacion Adicionada a la base de datos');</script>";
}

?>




</section>
<?php
    include ('Footer.php');
?>