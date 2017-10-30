<?php

include 'Viaje.php';

namespace TpFinal;

class Boleto
{
    protected $tipos_boleto = [
        'Normal',
        'Plus',
        'Medio',
        'Bicicleta',
    ];

    protected $tipo, $saldo, $id, $linea;

    public function __construct($tipo, $saldo, $id, $linea)
    {
        $this->tipo = $tipos_boleto;
        if(in_array($tipo, $this->tipos_boleto) == false) {
            throw new Exception("No es un tipo de boleto valido.");
        }
        $this->saldo = $saldo;
        $this->id = $id;
        $this->linea = $linea;
    }

    public function transbordo(Transporte $transporte) {
        if (date() > date('Y-m-d H:i:s', strtotime('monday this week', 06:00:00)) && date() < date('Y-m-d H:i:s', strtotime('friday this week'), 22:00:00) || date() > date('Y-m-d H:i:s', strtotime('saturday this week', 06:00:00)) && date() < date('Y-m-d H:i:s', strtotime('saturday this week', 14:00:00))) {
            $flag = ($this->get_fecha_y_hora() + 3600) <= time() && $this->linea != $linea) ? true : false;
            return $flag;
        } elseif (date() > date('Y-m-d H:i:s', strtotime('saturday this week', 14:00:00)) && date() < date('Y-m-d H:i:s', strtotime('saturday this week'), 22:00:00) || date() > date('Y-m-d H:i:s', strtotime('sunday this week', 06:00:00)) && date() < date('Y-m-d H:i:s', strtotime('sunday this week', 22:00:00))){
                $flag = ($this->get_fecha_y_hora() + 5400) <= time() && $this->linea != $linea) ? true : false;
                return $flag;
        } elseif (date() > date('Y-m-d H:i:s', strtotime(22:00:00)) && date() < date('Y-m-d H:i:s', strtotime(06:00:00))) {
                $flag = ($this->get_fecha_y_hora() + 5400) <= time() && $this->linea != $linea) ? true : false;
                return $flag;
        }
    }

    public function descontar_o_plus() {
        if (2 >= $this->viajes_plus ) {
            $this->saldo -= $monto;
            if ( 0 > $this->saldo_acual ) {
                $this->viajes_plus++;
            }
            return true;
        } else {
            return false;
        }
    }

    public function get_boleto($tipo) {
        print("\n" . $this->get_fecha_y_hora() . "\n" . $this->tipo . "\n" . $this->saldo . "\n" . $this->id . "\n" $this->linea);
    }
}