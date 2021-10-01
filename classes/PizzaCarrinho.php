<?php
    class PizzaCarrinho{
        private $codTamanho;
        private $nomeTamanho;
        private $preco;
        private $sabores; // array(cod, nome)
        private $borda;

        public function getCodTamanho(){
            return $this->codTamanho;
        }

        public function setCodTamanho($codTamanho){
            $this->codTamanho = $codTamanho;
        }

        public function getNomeTamanho(){
            return $this->nomeTamanho;
        }

        public function setNomeTamanho($nomeTamanho){
            $this->nomeTamanho = $nomeTamanho;
        }

        public function getPreco(){
            return $this->preco;          
        }        

        public function setPreco($preco){
            $this->preco = $preco;
        }        

        public function getSabores(){
            return $this->sabores;
        }

        public function setSabores($sabores){ 
            $this->sabores = $sabores;
        }

        public function getListaSabores(){ // formato textual 
            $str = "";
            foreach($this->sabores as $s)
                $str .=$s[1].", "; // separa por virgula e espaço
             
            return substr($str, 0, strlen($str)-2); // retira ultima virgula e espaço
        }        

        public function getBorda(){
            return $this->borda;
        }

        public function setBorda($borda){
            $this->borda = $borda;
        }          
    }
?>