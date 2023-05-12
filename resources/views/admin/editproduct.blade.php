@extends('layouts._layouts')

@section('content')

<div class="container">
    
    <form style="padding: 10px" action="{{ URL('editproductpost') }}" method="post" enctype="multipart/form-data">
        
        {{-- any error --}}
        <div class="section-block mt-5">
          {{-- any error --}}
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
        @endif
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <h2>Créer un produit</h2>
        </div>
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="libelle"
                id="key" value="{{$product->libelle}}" placeholder="Un libelle">
        </div>
        
        
        <div class="form-group">
            <input class="form-control" type="text" name="prix"
                id="key" value="{{$product->prix}}" placeholder="Prix">
        </div>
        <div class="form-group">
            <div class="form-label-group">
              <select name="category" class="custom-select" id="fls1">
                <option value=""> Choisir... </option>
                @foreach ($category as $item)
                 
                <option value="{{$item->category}}" {{ $item->category === $product->category ? 'selected' : '' }}> {{$item->category}} </option>
                @endforeach
              </select> <label for="fls1">Categorie</label>
            </div>
          </div>
          <div class="form-group">
            <label for="tf3">Image</label>
            <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="tf3"> <label class="custom-file-label" for="tf3">Choisir un fichier</label>
            </div>
          </div>
          <div class="form-group">
            <textarea name="description"  id="mytextarea">{{$product->description}}</textarea>
          </div>
        
    
        <button class="btn btn-primary">Enregister</button>
    </form>
</div>
@endsection