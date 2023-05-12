@extends('layouts._layouts')

@section('content')

<div class="container">
    
    <form style="padding: 10px" action="{{ URL('bkinfos') }}" method="post">
        <div class="section-block mt-5">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <h2>Créer un produit</h2>
        </div>
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="libelle"
                id="key" placeholder="Un libelle">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description"
                id="key" placeholder="Description">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="prix"
                id="key" placeholder="Prix">
        </div>
        <div class="form-group">
            <div class="form-label-group">
              <select class="custom-select" id="fls1" required="">
                <option value=""> Choisir... </option>
                <option> Categories 1 </option>
              </select> <label for="fls1">Categorie</label>
            </div>
          </div>
          <div class="form-group">
            <label for="tf3">Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="tf3"> <label class="custom-file-label" for="tf3">Choisir un fichier</label>
            </div>
          </div>
        
    
        <button class="btn btn-primary">Enregister</button>
    </form>
</div>
@endsection