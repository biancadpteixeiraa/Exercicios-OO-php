<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.
class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setTitulo($novoTitulo) {
        $this->titulo = $novoTitulo;
    }

    public function setAutor($novoAutor) {
        $this->autor = $novoAutor;
    }
}

$livro = new Livro("UI e UX", "GIL DO VIGOR");

echo "Título: " . $livro->getTitulo() . "<br>";
echo "Autor: " . $livro->getAutor() . "<br>";

$livro->setTitulo("CAMPO REAL");
$livro->setAutor("EDSON AYRES");

echo "<br>Depois de alterar:<br>";
echo "Título: " . $livro->getTitulo() . "<br>";
echo "Autor: " . $livro->getAutor() . "<br>";
?>