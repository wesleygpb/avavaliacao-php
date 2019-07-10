<?php

/**
 * Essa classe possui o metodo getQtdeNotas ele não está completo e cabe a você concluí-lo de acordo com os requisitos.
 */
class Troco
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     * @param float $reais
     * @return array
     */
    public function getQtdeNotas(float $reais): array
    {
        $notas_qtd = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.01" => 0,
        ];
		    {   $value;
        $key;
        $nDisp = $this->Disp;
        $valorTotal = 0;
        $notas_qtd = array( "100" => 0,
                            "50" => 0,
                            "20" => 0,
                            "10" => 0,
                            "5" => 0,
                            "2" => 0,
                            "1" => 0,
                            "0.5" => 0,
                            "0.25" => 0,
                            "0.1" => 0,
                            "0.01" => 0);
        if ($reais == 100) {
            $notas_qtd["100"] = 1;
        }
        if($reais <= 0)
           return $notas_qtd;
        foreach ($notas_qtd as $key => $value)
        {
            while ($valorTotal <= $reais)
            {
                 if (round($valorTotal + $key, 2) <= round($reais, 2) && ($nDisp[$key] > 0 || $nDisp[$key] == INF))
                 {
                     $valorTotal += $key;
                     $notas_qtd[$key] ++;
                     If($nDisp[$key] != INF)
                         $nDisp[$key] --;
                 }
                 else
                 {
                     break;
                 }
              }
         }
        return $notas_qtd;
         If(round($valorTotal, 2) != round($reais, 2))
         {
             // Cria o erro.
             throw new RuntimeException("Atencao: Notas insuficientes");
         }
         return $notas_qtd;
    }
}
?>
