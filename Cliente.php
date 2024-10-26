<?php
    namespace PHP\Modelo;

    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    Class Cliente extends Pessoa{
        protected float $precototal;



        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, float $precoTotal
        )
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->precoTotal = $precoTotal;            
        }//Fim do Construtor

        //Métodos Gets e Set
        public function __get(string $nome):mixed{
            return $this->nome;
        }//fim do get

        public function __set(string $nomeVariavel, string $novoDado):void
        {
            $this->nomeVariavel = $novoDado;
        }//Fim do Método set 

        public function imprimir():string
        {
            return parent::imprimir().
                "<br>Prelo Total:".$this->precoTotal;
            
        }//fim do imprimir
    
    }//Fim da classe 
?>