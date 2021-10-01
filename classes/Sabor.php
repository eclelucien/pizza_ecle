<?php
    class Sabor{

        // atributos
        private $codigo;
        private $nome;
        private $ingredientes;
        private $nomeImagem;

        // métodos
        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($cod){
            $this->codigo = $cod;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
        }

        public function getIngredientes(){
            return $this->ingredientes;
        }

        public function setIngredientes($ingredientes){
            $this->ingredientes = filter_var($ingredientes, FILTER_SANITIZE_STRING);
        }

        public function getNomeImagem(){
            return $this->nomeImagem;
        }

        public function setNomeImagem($nomeImagem){
            $this->nomeImagem = $nomeImagem;
        } 
        
        public function validate(){
            $erros = array();
            if(empty($this->getNome()))
                $erros[] = "É necessário informar um nome";
            if(empty($this->getIngredientes()))
                $erros[] = "É necessário informar a lista de ingredientes";
            if(empty($this->getNomeImagem()))
                $erros[] = "É necessário selecionar uma imagem";  
            return $erros;                                  
        }
    }
?>