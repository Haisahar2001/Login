<?php

namespace App\Tools;

use FPDF;

class PDF extends FPDF
{
// Cargar los datos
    public function loadData($array, $array_keys)
    {
        $data = [];

        foreach ($array as $item) {
            $items = [];
            foreach ($array_keys as $key) {
                $items[] = $item->$key;
            }
            $data[] = $items;
        }

        return $data;
    }

    public function loadDataEstudiante($array){
        $data = [];

        foreach ($array as $item) {
            $data[] = [$item->nombre, $item->apellido, $item->cedula, $item->ministerio->nombre_m];
        }

        return $data;
    }

    public function loadDataEscuela($array){
        $data = [];

        foreach ($array as $item) {
            $data[] = [$item->nombre, $item->tema];
        }

        return $data;
    }

    public function loadDataZona($array){
        $data = [];

        foreach ($array as $item) {
            $data[] = [$item->zona_nombre];
        }

        return $data;
    }

    public function loadDataPago($array){
        $data = [];

        foreach ($array as $item) {
            $data[] = [$item->fecha_pago, $item->numero_referencia, $item->pago_total];
        }

        return $data;
    }


// Tabla simple
    public function basicTable($header, $data)
    {
        // Cabecera
        foreach ($header as $col)
            $this->Cell(40, 7, $col, 1);
        $this->Ln();
        // Datos
        foreach ($data as $row) {
            foreach ($row as $col)
                $this->Cell(40, 6, $col, 1);
            $this->Ln();
        }
    }

}

?>