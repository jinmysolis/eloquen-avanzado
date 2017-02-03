@extends('layout')
        
@section('content')

  
    @foreach($categories as $category)

    <p class=" btn btn-block btn-danger">
             {{ $category->name }}
             <span class="badge">{{count($category->books) }}</span>
             
  </p>

  <ul>
      @foreach($category->books as $book)
      <li><strong><h2>Titulo: {{ $book->title }}</h2></strong>
          <strong><h4>Contenido:</h4></strong> {{ $book->description }}<br><h5> Estado: {{ $book->status }}</h5> </li><br>
      @endforeach
  </ul>
  
  
  @endforeach
  
  @endsection