<x-layout>
    
<section class="container">

    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-12 text-center">
            <h1>Tutti gli articoli</h1>
        </div>
    </div>

    <div class="row">
    @foreach ($articles as $article)
    <div class='col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-3'>
<x-card
    :article="$article"
    title="{{ $article['title'] }}"
    content="{{ $article['content'] }}"
    image="{{ $article['image'] }}"
    idArticle="{{ $article['id'] }}"
>
</div>

</x-card>
</div>
@endforeach

    
</section>
</x-layout> 