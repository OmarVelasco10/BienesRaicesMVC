<?php
namespace Model;

class Propiedad extends ActiveRecord {
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id','titulo','precio','imagenes','descripcion','habitaciones','wc','estacionamiento','creado','vendedorId'];
    
    public $id;
    public $titulo;
    public $precio;
    public $imagenes;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    public function __construct( $args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagenes = $args['imagenes'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args['vendedorId'] ?? '';
    }

    public function validar() {
        
        if(!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }

        if(!$this->precio) {
           self::$errores[] = "El precio es Obligatorio";
        }

        if(strlen($this->descripcion) < 50) {
            self::$errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$this->habitaciones) {
            self::$errores[] = "El Número de habitaciones es Obligatorio";
        }

        if(!$this->wc) {
            self::$errores[] = "El Número de baños es Obligatorio";
        }

        if(!$this->estacionamiento) {
            self::$errores[] = "El Número de lugares de estacionamiento es Obligatorio";
        }

        if(!$this->vendedorId) {
            self::$errores[] = "Elige un vendedor";
        }

        if(!$this->imagenes) {
            self::$errores[] = "La imagen es obligatoria";
        }
        
        return self::$errores;
    }
   
}