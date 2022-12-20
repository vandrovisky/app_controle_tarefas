<?php

namespace App\Mail;

use App\Models\Tarefa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovaTarefaMial extends Mailable
{
    use Queueable, SerializesModels;
    public $tarefa;
    public $data_limite;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Tarefa $tarefa)
    {
        $this->tarefa = $tarefa->tarefa;
        $this->data_limite =date ('d/m/Y', strtotime($tarefa->data_limite));
        $this->url = '`http://localhost:8080/tarefa/'.$tarefa->id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.nova-tarefa')->subject('Nova Tarefa Criada');
    }
}
