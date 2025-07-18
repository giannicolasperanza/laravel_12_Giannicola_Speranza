<x-layout>
    <section class="container">
        <div class="row justify-content-center mt-5 text-center">
            <div class="col-12 col-md-6">
                <h1>{{ $article->title }}  </h1>
                <img src="{{Storage::url($article->image)}}" alt="immagine articolo" class="img-fluid">
                <p class="mt-3">{{ $article->content }}</p>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('articles.index') }}" class="btn btn-primary m-3">Torna indietro</a>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary m-3">Modifica</a>

                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-3">Elimina</button>
                    </form>

                    
                </div>
            </div>
        </div>


</x-layout>