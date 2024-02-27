<?php

// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.
trait LogErro {
    public function registrarLogErro($mensagem) {
        echo "Erro: $mensagem </br>";
    }
}

trait LogInfo {
    public function registrarLogInfo($mensagem) {
        echo "Informação: $mensagem";
    }
}

class Registro {
    use LogErro, LogInfo;

    public function demonstrar() {
        $this->registrarLogErro("ERRO");
        $this->registrarLogInfo("IMPORTANTE");
    }
}

$registro = new Registro();
$registro->demonstrar();
?>
