<?php
    class SuperHeroi {
        private $id;
        private $nome;
        private $poderEspecial;
        private $energia;
        private $forca;
        private $origem;

        public function __construct($id,$nome,$poderEspecial,$energia,$forca,$origem) {
            $this->id = $id;
            $this->nome = $nome;
            $this->poderEspecial = $poderEspecial;
            $this->energia = $energia;
            $this->forca = $forca;
            $this->origem = $origem;
        }

        public function aumentarEnergia($RA){
            $this->setEnergia($this->getEnergia() * $RA);
        }

        public function calcularPoderMedio() {
            return (($this->getEnergia() + $this->getForca())/2);
        }

        function getId() {
            return $this->id;
        }
    
        function setId($id) {
            $this->id = $id;
        }

        function getNome() {
            return $this->nome;
        }
    
        function setNome($nome) {
            $this->nome = $nome;
        }

        function getPoderEspecial() {
            return $this->poderEspecial;
        }
    
        function setPoderEspecial($poderEspecial) {
            $this->poderEspecial = $poderEspecial;
        }

        function getEnergia() {
            return $this->energia;
        }
    
        function setEnergia($energia) {
            $this->energia = $energia;
        }

        function getForca() {
            return $this->forca;
        }
    
        function setForca($forca) {
            $this->forca = $forca;
        }

        function getOrigem() {
            return $this->origem;
        }
    
        function setOrigem($origem) {
            $this->origem = $origem;
        }
    }

    $HeroiUm = new SuperHeroi (0, "Harry Potter", "Magia", 100, 1000, "Hogwarts");
    $HeroiDois = new SuperHeroi (1, "Goku", "Kamehameha", 100000, 1000000, "Escola Tartaruga");
    $HeroiTres = new SuperHeroi (2, "Homem Aranha", "Teia", 100, 2000, "Nova Iorque");
    $HeroiQuatro = new SuperHeroi (3, "Homem de Ferro", "Armaduras", 1000, 50000, "Nova Iorque");

    echo $HeroiUm->getNome() . " tem um poder medio de " . $HeroiUm->calcularPoderMedio();
    $HeroiUm->aumentarEnergia(117116519);
    echo "<br>";
    echo $HeroiUm->getNome() . " tem " . $HeroiUm->getEnergia() . " de energia";
    echo "<br>";
    echo $HeroiUm->getNome() . " tem um poder medio de " . $HeroiUm->calcularPoderMedio();
    echo "<br><br>";
    echo $HeroiDois->getNome() . " tem um poder medio de " . $HeroiDois->calcularPoderMedio();
    $HeroiDois->aumentarEnergia(117116519);
    echo "<br>";
    echo $HeroiDois->getNome() . " tem " . $HeroiDois->getEnergia() . " de energia";
    echo "<br>";
    echo $HeroiDois->getNome() . " tem um poder medio de " . $HeroiDois->calcularPoderMedio();
    echo "<br><br>";
    echo $HeroiTres->getNome() . " tem um poder medio de " . $HeroiTres->calcularPoderMedio();
    $HeroiTres->aumentarEnergia(117116519);
    echo "<br>";
    echo $HeroiTres->getNome() . " tem " . $HeroiTres->getEnergia() . " de energia";
    echo "<br>";
    echo $HeroiTres->getNome() . " tem um poder medio de " . $HeroiTres->calcularPoderMedio();
    echo "<br><br>";
    echo $HeroiQuatro->getNome() . " tem um poder medio de " . $HeroiQuatro->calcularPoderMedio();
    $HeroiQuatro->aumentarEnergia(117116519);
    echo "<br>";
    echo $HeroiQuatro->getNome() . " tem " . $HeroiQuatro->getEnergia() . " de energia";
    echo "<br>";
    echo $HeroiQuatro->getNome() . " tem um poder medio de " . $HeroiQuatro->calcularPoderMedio();
?>