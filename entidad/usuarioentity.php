<?php
// REPRESENTACION DE LAS TABLAS DE LAS BD'S PARA USARLAS COMO OBJETOS
 class UsuarioE{

        private	$idusuario;
        private	$idpersona;
        private	$usuario;
        private $idrol;
        private $password;
        private $pregunta;
        private $respuesta;
        private $fechaalta;
        private $fechavigencia;
	private $estado;
	
	function __construct($a, $b, $c, $d, $e,$f,$g,$h,$i,$j){
		$this->idusuario=$a;
		$this->idpersona=$b;
                $this->idrol=$c;
		$this->usuario=$d;              
		$this->password=$e;
                $this->pregunta=$f;
                $this->respuesta=$g;
                $this->fechaalta=$h;
                $this->fechavigencia=$i;
		$this->estado=$j;
                
	}
    //get es para retornar	
	function getidusuario() {return $this->idusuario;}
	function getidpersona() {return $this->idtrabajador;}
        function getrol() {return $this->idrol;}
	function getusuario() {return $this->usuario;}
	function getpassword() {return $this->password;}
	function getestado() {return $this->estado;}
        function getfechaalta() {return $this->fechaalta;}
	
	//set es para modificar el valor almacenado	
	function setidusuario($val) {$this->idusuario=$val;}
	function setidpersona($val) {$this->idpersona=$val;}
        function setrol($val) {$this->idrol=$val;}
	function setusuario($val) {$this->usuario=$val;}
	function setpassword($val) {$this->password=$val;}
	function setestado($val) {$this->estado=$val;}
	function setfechaalta($val) {$this->fechaalta=$val;}
}

        ?>