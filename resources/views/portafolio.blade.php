@extends('layout')

@section('title' , 'portafolio')


@section('content')

<h1>portafolio</h1>

  <ul>

 
      
          @forelse ($portafolio as $portafolioitem)
          <li>{{  $portafolioitem['title']}} <pre>{{$loop->first ? 'es el primero' : ''}}</pre></li>
          <li>{{  $portafolioitem['title']}} <pre>{{$loop->last ? 'es el ultimo' : ''}}</pre></li>
             <li>{{  $portafolioitem['title']}} <pre>{{ var_dump($loop) }}</pre></li>
          
             @empty

             <li>no hay productos a mostrar</li>

          @endforelse
     
  </ul>
  
@endsection