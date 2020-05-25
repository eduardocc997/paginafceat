<?php
    function crearBanner($nombre, $rutaFoto){
        //Hacer que el banner sea dinamico con los datos que trae de la bd
        echo '
        <style>
        .fondo{
            background-image: url('.$rutaFoto.');
            background-color: rgba(0, 0, 0, .2);
            background-blend-mode: soft-light;
        }
        </style>
        <div class="encabezado2 h1 fondo">
            <h1>'.$nombre.'</h1>
        </div>
        ';
    }
?>