<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Endereco</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->nome }}</td>
                            <td>{{ $t->endereco }}</td>
                            <td>{{ $t->telefone }}</td>
                            <td>{{ $t->CPF }}</td>
                            <td>{{ $t->email }}</td>
                            <td>{{ $t->password }}</td>
                            <td><a href="{{route('cliente.edit', ['id' => $t->id])}}" class="btn btn-info btn-sm">Editar</a></td>
                            
                           
                            

                        </tr>
                        
                            
                    @endforeach
                    
                    
                </tbody>
            </table>



        </div>
    </div>







</div>
