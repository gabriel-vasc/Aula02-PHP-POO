<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author gabri
 */
class Caneta {
    
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Erro! Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    
    function tampar() {
        
        $this->tampada = true;
        
    }
    
    function destampar() {
        
        $this->tampada = false;
        
    }
    
}
