    <p><strong>Foreach com vetor</strong></p>
<?php 
    $vetor1 = array(1, 2, 3, 4);
    foreach ($vetor1 as $valor) {
        echo "$valor";
    }
?>
    <p><strong>Foreach com chaves</strong></p>
<?php
    $var = ["uva" => 1, "abacate" => 2];
    foreach ($var as $chave => $var) {
        echo "A chave $chave corresponde ao valor $var <br>";
    }
?>