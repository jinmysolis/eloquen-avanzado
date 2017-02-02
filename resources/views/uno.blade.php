@extends('layout')
        
@section('content')

  @foreach($categories as $category)
  <p>
             {{ $category->name }}
            ( {{count($category->books)  }})
  </p>
  
  <ul>
      @foreach($category->books as $book)
      <li><strong>Titulo: {{ $book->title }}</strong><br>
          <strong>Contenido:</strong> {{ $book->description }}</li><br>
      @endforeach
  </ul>
  
  
  @endforeach
  
  @endsection