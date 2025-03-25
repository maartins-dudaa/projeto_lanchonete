<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
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
        return view('livewire.cliente.edit');

        
    }

    public function mount($id = null)
{
    if ($id) {
        $cliente = Cliente::find($id);
        
        if ($cliente) {
            $this->clienteId = $cliente->id;
            $this->nome = $cliente->nome;
            $this->endereco = $cliente->endereco;
            $this->telefone = $cliente->telefone;
            $this->CPF = $cliente->CPF;
            $this->email = $cliente->email;
            $this->password = $cliente->password;
        }
    }
}
    public function salvar(){
        $cliente = Cliente::find($this->clienteId);
        $cliente->nome = $this->nome;
        $cliente->endereco = $this->endereco;
        $cliente->telefone = $this->telefone;
        $cliente->CPF = $this->CPF;
        $cliente->email = $this->email;
        $cliente->password = $this->password;
        
        $cliente->save(); 

        session()->flash('success', 'cliente atualizado');
    }
}
