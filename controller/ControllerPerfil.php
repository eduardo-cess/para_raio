<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author carlos
 */
class ControllerPerfil {

    public static function security() {
        session_start();
        if (!isset($_SESSION['idPerfil']))
            echo "<script>alert('Acesso Indevido.'); window.history.back();</script>";
    }
    
        public static function securityPerfil($idPerfil) {
        session_start();
        if (!isset($_SESSION['idPerfil']) || $_SESSION['idPerfil'] != $idPerfil)
            echo "<script>alert('Acesso Indevido.'); window.history.back();</script>";
    }

}
