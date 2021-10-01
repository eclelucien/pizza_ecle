<?php
    require_once "Conexao.php";
   // require_once "Cliente.php";

    class ClienteDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function autenticar($email, $senha){
            try{
                $query = $this->conexao->prepare("select * from cliente where email=:email");
                $query->bindParam(":email", $email);
                $query->execute();
                $registro = $query->fetch(PDO::FETCH_ASSOC); // retornamos como array associativo
                if($query->rowCount() == 1 && password_verify($senha, $registro['senha'])) // sucesso
                    return $registro;
                else
                    return false;    
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }                 


        // demais metodos...

    }

?>   