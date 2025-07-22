<x-layout>
    <h1> Crea un nuovo tag</h1>



    <form action="{{ route('tags.submit') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome del tag">
        <button type="submit">Crea</button>
    </form>

    @foreach ($tags as $tag)

        <p>{{ $tag->name }} 
            
        <form action="{{ route('tags.destroy', $tag->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>
    
    
    </p>
    
    @endforeach
</x-layout>