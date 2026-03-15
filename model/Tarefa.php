<?php

namespace OrganizacaoTarefas\model;

class Tarefa
{
  private string $tarefa;
  private string $prioridade;
  private string $prazo;
  private string $lembrete;

  public function __construct(
    string $tarefa,
    string $prioridade,
    string $prazo,
    string $lembrete
  ) {


    $this->tarefa       = $tarefa;
    $this->prioridade  = $prioridade;
    $this->prazo       = $prazo;
    $this->lembrete    = $lembrete;
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

    return  "<br>Tarefa: " .$this->tarefa.
      "<br>Prioridade: " .$this->prioridade.
      "<br>Prazo: " .$this->prazo.
      "<br>Lembrete: " .$this->lembrete;
  }
}
?>