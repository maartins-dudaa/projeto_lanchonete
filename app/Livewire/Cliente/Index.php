<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Index extends Component
{
   public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $CPF;
    public $email;
    public $password;
    public function render()
    {

       
       $clientes = Cliente::all();
       
       $clientes = Cliente::all();
       return view('livewire.cliente.index', compact('clientes'));
       

    }

    public function abrirModalVizualizar(){
      
        $clientes = Cliente::find($this->clienteId);



        if($clientes){
            $this->nome = $clientes->nome;
            $this->endereco = $clientes->endereco;
            $this->telefone = $clientes->telefone;
            $this->CPF = $clientes->CPF;
            $this->email = $clientes->email;
            $this->password = $clientes->password;
        }
    }
}
