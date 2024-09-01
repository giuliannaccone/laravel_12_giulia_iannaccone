<x-layout>

   <x-page-title title="Modifica articolo" />

    <x-form-errors />

    <form action="{{ route('blog.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titolo articolo" value="{{ $post->title }}">
                </div>

            </div>

            <div class="form-group">
                <label for="title">Contenuto</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Testo articolo">
                  {{ $post->content }}
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>

            <div class="col-xs-6">
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" name="url" id="url" placeholder="Url articolo" value="{{ $post->url}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <input type="submit" value="Aggiorna" class="btn btn-primary">
            </div>
        </div>
    </form>
</x-layout>