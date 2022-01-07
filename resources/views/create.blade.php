@extends('templates.template')

@section('content')
    <br>    
    <h1 class="text-center">
      @if(isset($event)) 
        Editar
      @else 
        Cadastrar 
      @endif
    </h1><hr>   

    <div class="col-8 m-auto">

      @if(isset($errors) && count($errors)>0)
        <div class="alert alert-danger align-items-center" role="alert">          
            @foreach ($errors->all() as $erro)
            <div class="mb-2">
              {{$erro}}
            </div>                          
            @endforeach      
        </div>
      @endif     

      @if(isset($event))
        <form class="form" action="{{url("events/$event->id")}}" name="formEdit" id="formEdit" 
        method="post">
          @method('PUT')
      @else 
        <form class="form" action="{{url("events")}}" name="formCad" id="formCad" 
        method="post">
      @endif
      
        @csrf
        <input class="form-control mb-3" type="text" name="title" id="title" 
        placeholder="Título" value="{{$event->title ?? ''}}">
        <select class="form-select mb-3" name="id_user" id="id_user">
          <option value="{{$event->relUsers->id ?? ''}}">{{$event->relUsers->name ?? 'Organizador(a)'}}</option>
          @foreach ($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
        <input class="form-control mb-3" type="text" name="local" id="local" 
        placeholder="Local" value="{{$event->local ?? ''}}">
        <input class="form-control mb-3" type="text" name="value" id="value" 
        placeholder="Valor" value="{{$event->value ?? ''}}">
        <label for="info">Informações do evento</label>
        <textarea class="form-control mb-3" name="info" id="info" cols="10" 
        rows="3" value="{{$event->id ?? ''}}">{{$event->info ?? ''}}</textarea>
        <input class="btn btn-primary" type="submit" 
        value="@if(isset($event)) Atualizar @else Cadastrar @endif">
      </form>
    </div>
@endsection