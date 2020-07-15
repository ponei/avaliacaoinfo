<?php
if (isset($_GET['atividade'])) { //se param de atividade existe
    $atividadeNum = $_GET['atividade']; //pega numero da ativ
    if (is_numeric($atividadeNum)) { //se param é numero
        if (isset($_GET['texto'])) { //se param de texto existir
            $atividadeTexto = $_GET['texto']; //pega param de texto
            if (is_numeric($atividadeTexto)) { //se param é numero
                switch ($atividadeNum) {
                    case 3:
                        if (isset($_GET['valor'])) { //se param de valor existir
                            $atividadeValor = $_GET['valor']; //pega param de valor
                            if (is_numeric($atividadeValor)) { //se param é numero
                                if ($atividadeTexto >= 1 && $atividadeTexto <= 4) { //min=1 e 4=max
                                    echo "preço normal: R$" .  $atividadeValor;
                                    echo "<br><br>";
                                    echo "novo preço: R$";
                                    switch ($atividadeTexto) {
                                        case 1:
                                            echo  ($atividadeValor * 0.85);
                                            echo "<br>razao: a vista em dinheiro ou cheque (-15%)";
                                            break;
                                        case 2:
                                            echo  ($atividadeValor * 0.9);
                                            echo "<br>razao: a vista no cartao de credito (-10%)";
                                            break;
                                        case 3:
                                            echo  ($atividadeValor);
                                            echo "<br>razao: duas vezes (sem juros)";
                                            break;
                                        case 4:
                                            echo  ($atividadeValor * 1.1);
                                            echo "<br>razao: tres vezes (juros de 10%)";
                                            break;
                                    }
                                }
                                
                            }
                        }

                        break;
                    case 4:
                        echo "tabuada do " . $atividadeTexto;
                        echo "<br><br>";
                        for ($i = 1; 10 >= $i; $i++) {
                            echo $atividadeTexto . "x" . $i . " -> " . ($atividadeTexto * $i);
                            echo "<br>";
                        }
                        break;
                }
            }
        }
    }
}
