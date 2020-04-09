<h2>Clientes</h2>
<a href="{{route('clientes.create')}}"> Novo cliente </a>
<ol>
    @foreach($clientes as $c)
        <li>
            {{ $c['nome'] }} |
            <a href="{{route('clientes.edit',$c['id'])}}">Editar</a>
        </li>
    @endforeach
</ol>
