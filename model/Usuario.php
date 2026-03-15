<?php 
  namespace OrganizacaoTarefas\model;


  class Usuario {


    private int $codigo;
    private string $nome;
    private string $email;
    private string $senha;



    public function __construct( int $codigo,
                                string $nome,
                                string $email,
                                string $senha) {

            $this->codigo = $codigo;
            $this->nome   = $nome;
            $this->email  = $email;
            $this->senha  = $senha;
     }

     public function __get(string $dado): mixed {
      return $this->$dado;
     }

     public function __set(string $variavel, string $novoDado): void {
      $this->$variavel = $novoDado;
     }

     public function verificarSenha(string $senhaDigitada): bool {
      return $senhaDigitada === $this->senha;
}

     public function imprimir(): string {
        return "<br><strong>Código:</strong> ".$this->codigo.
               "<br><strong>Nome:</strong> ".$this->nome.
               "<br><strong>E-mail:</strong> ".$this->email.
               "<br><strong>Senha:</strong> ".$this->senha;
     }

     
  }

?>