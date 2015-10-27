<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileUploadMultiple
 *
 * @author alum
 */
class FileUploadMultiple {
    
    
    /*PERMITIR SUBIR UN ARCHIVO Y VARIOS ARCHIVOS*/
    private static function  transformar($files){
        $array = array();
        $numeroArchivos = count($files['name']);
        for($i =0; $i <$numeroArchivos; $i++){
            $array[$i] ["name"] = $files["name"][$i];
            $array[$i] ["type"] = $files["type"][$i];
            $array[$i] ["tmp_name"] = $files["tmp_name"][$i];
            $array[$i] ["error"] = $files["error"][$i];
            $array[$i] ["size"] = $files["size"][$i];
        }
        return $array;
    }
    
        private static function  trans($files){
            $array = array();
            foreach ($files as $indiceArchivo => $valorarray) {
                foreach ($valorarray as $numeroarchivo => $valor) {
                    $array[$numeroarchivo][$indiceArchivo] = $valor;
                }
            }
            return $array;
        }
        
        
    }
    
    

