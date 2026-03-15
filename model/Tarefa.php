<?php

namespace OrganizacaoTarefas\model;

class Tarefa
{
  private string $tarefa;
  private string $prioridade;
  private string $prazo;
  private string $lembrete;
  private int $usuarioCodigo;
  private bool $concluida;

  public function __construct(
    string $tarefa,
    string $prioridade,
    string $prazo,
    string $lembrete,
    int $usuarioCodigo,
  ) {


    $this->tarefa        = $tarefa;
    $this->prioridade    = $prioridade;
    $this->prazo         = $prazo;
    $this->lembrete      = $lembrete;
    $this->usuarioCodigo = $usuarioCodigo;
    $this->concluida = false;
  }

  public function __get(string $dado): mixed
  {
    return $this->$dado;
  }

  public function __set(string $variavel, string $novoDado): void
  {
    $this->$variavel = $novoDado;
  }

  public function imprimir(): string
  {
    $status = $this->concluida ? "Concluída" : "Pendente";

    $corPrazo = "black";

    if($this->prioridade == "alto") {
      $corPrazo = "red";
    }
    else if($this->prioridade == "medio") {
      $corPrazo = "yellow";
    }else {
      $corPrazo = "green";
    }


    return "<br><strong>Tarefa:</strong> ".$this->tarefa.
       "<br><strong>Prioridade:</strong> <span style ='color:$corPrazo'>".$this->prioridade."</span>".
       "<br><strong>Prazo:</strong> ".$this->prazo.
       "<br><strong>Lembrete:</strong> ".$this->lembrete.
       "<br><strong>Usuário:</strong> ".$this->usuarioCodigo.
       "<br><strong>Status:</strong> ".$status;
  }
}
?>