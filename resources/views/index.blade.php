@extends('templates.template')

@section('content')
    <br>
    <h1 class="text-center">CRUD</h1><hr>

    <div class="col-8 m-auto mt-3 mb-4">              
        <a href="{{url('events/create')}}" class="btn btn-outline-dark" role="button">
          Cadastrar                    
        </a>                     
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table table-hover caption-top text-center">
          <caption>Lista de eventos</caption>
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Organizador(a)</th>
                <th scope="col">Valor</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($event as $events)
              @php
                  //relacionamento para buscar o usuario
                  $user = $events->find($events->id)->relUsers;
              @endphp
              <tr>
                <th scope="row">{{$events->id}}</th>
                <td>{{$events->title}}</td>
                <td>{{$user->name}}</td>
                <td>R$ {{$events->value}}</td>
                <td>                  
                  <a href="{{url("events/$events->id")}}" 
                    class="btn btn-success btn-sm" role="button">
                    Visualizar                    
                  </a>
                  <a href="{{url("events/$events->id/edit")}}" class="btn btn-primary btn-sm" role="button">
                    Editar                    
                  </a>
                  <a href="{{url("events/$events->id")}}" class="btn btn-danger btn-sm js-del" role="button">
                    Deletar                    
                  </a>
                </td>
              </tr>
            @endforeach             
            </tbody>
          </table>

          {{$event->links()}}                          
    </div>
@endsection