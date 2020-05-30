<?php
    function dataHoje()
    {
        $dayWeek = array(0 => "Domingo", 1 => "Segunda-feira", 2 => "Terça-feira", 3 => "Quarta-feira", 4 => "Quinta-feira", 5 => "Sexta-feira", 6 => "Sábado");
        $month = array(1 => "Janeiro",2 => "Fevereiro",3 => "Março",4 => "Abril",5 => "Maio",6 => "Junho",7 => "Julho",8 => "Agosto",9 => "Setembro",10 => "Outubro",11 => "Novembro",12 => "Dezembro");

        $valor = $dayWeek[date('w')].", ".date('d')." de ".$month[date('n')]." de ".date('y');

        return $valor;
    }
?>