<x-layout title="Nova Série">

    <form action="/series/salvar" method="post"> 
        @csrf
        <div class="mb-3" >    
            <label for="nome" class="form-label" >Nome Série:</label>
            <input type="text" id="nome" name="nome" class="form-control">        
        </div>    

        <button  type="submit" class="btn btn-primary">Adicionar</button>
    </from>

</x-layout>  