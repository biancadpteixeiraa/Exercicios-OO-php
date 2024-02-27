<?php 
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Veiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }
}
class Carro extends Veiculo {
    private $tipo;

    public function __construct($marca, $modelo, $tipo) {
        parent::__construct($marca, $modelo);
        $this->tipo = $tipo;
    }

    public function exibirInformacoesEspecificas() {
        return "Tipo: {$this->tipo}";
    }
}
class Moto extends Veiculo {
    private $cilindradas; 

    public function __construct($marca, $modelo, $cilindradas) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function exibirInformacoesEspecificas() {
        return "Cilindradas: {$this->cilindradas}";
    }
}

$carro = new Carro("Fiat", "Uno", "Vermelho");
$moto = new Moto("Honda", "biz", "branca");

echo "Carro: " . $carro->exibirInformacoes() . "<br>";
echo "Carro: " . $carro->exibirInformacoesEspecificas() . "<br>";

echo "Moto: " . $moto->exibirInformacoes() . "<br>";
echo "Moto: " . $moto->exibirInformacoesEspecificas() . "<br>";

?>