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
                   <div class="row">
                   <div class="col-lg-6">
                     <div class="input-group">

                       <span class="input-group-addon">

                         <input type="checkbox" aria-label="..." name="ids[]" value="{{ $book->id }}">

                       </span>
                         <input type="text" class="form-control" aria-label="..." value="{{ $book->title }}">
                     </div><!-- /input-group -->

                   </div><!-- /.col-lg-6 -->

                 </div><!-- /.row -->
                    @endforeach     
                              <br>
                              <input type="submit" value="Enviar" class="btn btn-info">
             
        </form>
        </div>
        
       
         
   



@endsection