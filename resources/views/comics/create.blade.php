@extends('layouts.app')

@section('title', 'Create a New Comic')

@section('content')
<section class="py-5 details">
    <div class="container d-flex flex-column pt-5">
        <h1>Create a New Comic</h1>
        
        <form action="{{ route('comics.store') }}" method="POST" >
          

        
        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" id="thumb" placeholder="Immagine" name="thumb">
          </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Titolo" name="title">
          </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Prezzo" name="price">
          </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Serie" name="series">
          </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date</label>
            <input type="date" class="form-control" id="sale_date" placeholder="Data di vendita" name="sale_date">
          </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Tipo" name="type">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control"  id="description" rows="3" placeholder="Descrivi il fumetto" name="description"></textarea>
          </div>

<input type="submit" value="Invia">         


       </form>

     </div>
</section>
@endsection