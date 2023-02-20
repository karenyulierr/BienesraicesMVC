<?php

namespace Model;

class Vendedor extends ActiveRecord {

    protected static $tabla = 'vendedores';
    protected static $columnasDB = [ 'id', 'nombre', 'apellido', 'telefono' ];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct( $args = [] ) {
        $this->id = $args[ 'id' ] ?? null;
        $this->nombre = $args[ 'nombre' ] ?? '';
        $this->apellido = $args[ 'apellido' ] ?? '';
        $this->telefono = $args[ 'telefono' ] ?? '';
    }

    public function validar() {

        //Validaciones
        if ( !$this->nombre ) {
            self::$errores[] = 'El nombre es obligatorio';
        }
        //Validaciones
        if ( !$this->apellido ) {
            self::$errores[] = 'El Apellido es obligatorio';
        }
        //Validaciones
        if ( !$this->telefono ) {
            self::$errores[] = 'El Teléfono es obligatorio';
        }
        //Validaciones
        if ( !preg_match( '/[0-9]{10}/', $this->telefono ) ) {
            self::$errores[] = 'Formato no válido';
        }
        return self::$errores;
    }
}