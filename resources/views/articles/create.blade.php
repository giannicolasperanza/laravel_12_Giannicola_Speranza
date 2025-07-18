<x-layout>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 text-center">
                <h1>Crea un nuovo articolo</h1>
            </div>
        </div>







        <form
        action="{{ route('articles.submit') }}"
        method="POST"
        enctype="multipart/form-data"
        class='justify-content-center'
        >
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="Inserisci il titolo dell'articolo">
        <div id="emailHelp" class="form-text">Inserisci il titolo dell'articolo</div>
      </div>
    
      <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea class="form-control" id="content" name="content" aria-describedby="Inserisci il contenuto dell'articolo"></textarea>
        <div id="emailHelp" class="form-text">Inserisci il contenuto dell'articolo</div>
      </div>
    
      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="file" class="form-control" id="image" name="image" aria-describedby="Inserisci l'immagine dell'articolo">
        <div id="emailHelp" class="form-text">Inserisci l'immagine dell'articolo</div>
      </div>
    
        
    
      
      
      <button type="submit" class="btn btn-primary">Inserisci il tuo articolo</button>
    
    </form>
    </div>


</x-layout>