<?php

namespace bloquesParametro\tipoVinculacion\funcion;


include_once('Redireccionador.php');

class FormProcessor {
    
    var $miConfigurador;
    var $lenguaje;
    var $miFormulario;
    var $miSql;
    var $conexion;
    
    function __construct($lenguaje, $sql) {
        
        $this->miConfigurador = \Configurador::singleton ();
        $this->miConfigurador->fabricaConexiones->setRecursoDB ( 'principal' );
        $this->lenguaje = $lenguaje;
        $this->miSql = $sql;
    
    }
    
    function procesarFormulario() {    

        //Aquí va la lógica de procesamiento
      if(isset($_REQUEST['naturaleza1'])){
                    switch($_REQUEST ['naturaleza1']){
                           case 1 :
					$_REQUEST ['naturaleza1']='Temporal';
			   break;
                       
                           case 2 :
					$_REQUEST ['naturaleza1']='Indefinido';
			   break;
                    }
                }
                
                  $datos = array(
            'nombre' => $_REQUEST ['nombre'],
           
            'descripcion' => $_REQUEST ['descripcion'],
            
            'naturaleza' => $_REQUEST ['naturaleza1'],
          
           
        );
                  
        
       $conexion = 'estructura';
        $primerRecursoDB = $this->miConfigurador->fabricaConexiones->getRecursoDB ($conexion );
   $atributos ['cadena_sql'] = $this->miSql->getCadenaSql("registrarTipoVinculacion", $datos);

    $resultado=   $primerRecursoDB->ejecutarAcceso( $atributos ['cadena_sql'], "busqueda", $datos, "registrarTipoVinculacion");
   
        
                $arrayLeyes = explode(",", $_REQUEST['leyRegistros']);
        $count = 0;
        
        while($count < count($arrayLeyes)){
        	
        	$datosLeyesConcepto = array(
        			'id_ley' => $arrayLeyes[$count],
        			'tipo_vinculacion' => $resultado[0][0]
        	);
        	
        	$atributos ['cadena_sql'] = $this->miSql->getCadenaSql("insertarLeyesTipoVinculacion",$datosLeyesConcepto);
        	
                $resultado1=$primerRecursoDB->ejecutarAcceso($atributos ['cadena_sql'], "acceso");//********************************
        	
 
        	$count++;
        
        }
        
  $arrayRubros = explode(",", $_REQUEST['rubrosRegistros']);
        $count = 0;
        
        while($count < count($arrayLeyes)){
        	
        	$datosLeyesConcepto = array(
        			'id_rubro' => $arrayLeyes[$count],
        			'tipo_vinculacion' => $resultado[0][0]
        	);
        	
        	$atributos ['cadena_sql'] = $this->miSql->getCadenaSql("insertarRubrosTipoVinculacion",$datosLeyesConcepto);
        	
                $resultado2=$primerRecursoDB->ejecutarAcceso($atributos ['cadena_sql'], "acceso");//********************************
        	
 
        	$count++;
        
        }
        
       
   if (!empty($resultado)&&!empty($resultado1)&&!empty($resultado2)) {
            Redireccionador::redireccionar('inserto');
            exit();
        } else {
           Redireccionador::redireccionar('noInserto');
            exit();
        }
        
        //Al final se ejecuta la redirección la cual pasará el control a otra página
        
       // Redireccionador::redireccionar('opcion1');
      
    	        
    }
    
    function resetForm(){
        foreach($_REQUEST as $clave=>$valor){
             
            if($clave !='pagina' && $clave!='development' && $clave !='jquery' &&$clave !='tiempo'){
                unset($_REQUEST[$clave]);
            }
        }
    }
    
}

$miProcesador = new FormProcessor ( $this->lenguaje, $this->sql );

$resultado= $miProcesador->procesarFormulario ();

