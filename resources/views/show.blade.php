@extends('templates.template')

@section('content')
    <br>
    <h1 class="text-center">Visualizar</h1><hr>   

    <div class="col-8 m-auto">
      @php
          $user = $event->find($event->id)->relUsers;
      @endphp
      Título: {{$event->title}} <br>
      Local: {{$event->local}} <br>
      Organizador(a): {{$user->name}} <br>
      Contato do Organizador(a): {{$user->email}} <br>
      Valor: R$ {{$event->value}} <br>
      Informação: {{$event->info}} <br>
    </div>
@endsection