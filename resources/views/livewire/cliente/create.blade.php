<div>
    <div class="mt-5">
        <div class="card">
            <h5 class="card-header">Cadastro de Clientes</h5>
            <div class="card-body">
                <form wire:submit.prevent="store">

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Fulano de town" wire:model.lazy="nome"
                         wire:model.lazy="nome">
                        
                    </div>

                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="string" class="form-control" id="endereco" name="endereco" placeholder="Ex.: Rua X N°0-00" wire:model.lazy="endereco"
                        >
                    </div>
    
                    <div class="mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="string" name="telefone" id="telefone" class="form-control" wire:model.defer="telefone"  
                        placeholder="(00) 00000-0000" >
                    </div>

                    <div class="mb-3">
                        <label for="CPF">CPF</label>
                        <input type="integer" name="CPF" id="CPF" class="form-control" wire:model.defer="CPF" >
                    </div>

                    
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" wire:model.defer="email"
                        placeholder="example@gmail.com">
                    </div>

                    
                    <div class="mb-3">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" wire:model.defer="password"
                       >
                    </div>

            
    

                   
    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
