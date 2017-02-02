@extends('layout')
        
@section('content')

  
    @foreach($categories as $category)

    <p class=" btn btn-block btn-danger">
             {{ $category->name }}
             <span class="badge">{{count($category->books) }}</span>
             
  </p>

  <ul>
      @foreach($category->books as $book)
      <li><strong>Titulo: {{ $book->title }}</strong><br>
          <strong>Contenido:</strong> {{ $book->description }}</li><br>
      @endforeach
  </ul>
  
  
  @endforeach
  
  @endsection