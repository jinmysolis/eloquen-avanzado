@extends('layout')
        
  @section('content')


  <p class="btn btn-block btn-info">
            {{ count($books) }}
            Registros
        </p><br>
        
        <div class="text-justify">
        <form action="{{url('destroy')}}" method="post">
            {!! csrf_field() !!}
            {!! method_field('delete') !!}
            
             @foreach($books as $book)
           <input  type="radio" name="ids[]" value="{{ $book->id }}">---{{ $book->title }}<br><br>
             @endforeach
             
             
        
             <br>
             <input type="submit" value="Enviar" class="btn btn-info">
             
        </form>
        </div>
        
       
         
   



@endsection