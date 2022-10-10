@extends('layouts.principal')

@section('conteudo-principal')
<section class="section">
    <form action="{{route('admin.representatives.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="header col s12">
                <h2 class="center-align">Cadastro de Representantes</h2>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" />
                <label for="name">Nome:</label>
                @error('name')
                    <span class="red-text text-accent-4"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="email" name="email" id="email" />
                <label for="email">Email:</label>
                @error('email')
                    <span class="red-text text-accent-4"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <select name="cities_id" id="">
                    <option value="" disabled selected>Selecione uma cidade</option>
                    @foreach ($cities as $citie)
                    <option value="{{$citie->id}}">{{$citie->name}}</option>
                    @endforeach
                </select>
                <label for="cities_id">Cidade:</label>
            </div>
        </div>

        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{route('admin.home.index')}}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Cadastrar
            </button>
        </div>
    </form>
</section>
@endsection
