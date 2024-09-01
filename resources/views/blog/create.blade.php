<x-layout>

   <x-page-title title="Aggiungi articolo" />

    <x-form-errors />

    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titolo articolo">
                </div>

            </div>

            <div class="form-group">
                <label for="title">Contenuto</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Testo articolo"></textarea>
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
                    <input type="text" class="form-control" name="url" id="url" placeholder="Url articolo">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <input type="submit" value="Aggiungi" class="btn btn-primary">
            </div>
        </div>
    </form>
</x-layout>