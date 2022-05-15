@extends('layouts.principal')

@section('conteudo-principal')
<section class="section">
    <form action="{{route('admin.tourist_spots.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="header col s12">
                <h2 class="center-align">Cadastro de Pontos Turísticos</h2>
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
                <textarea name="description" id="description" class="materialize-textarea"></textarea>
                <label for="description">Descrição:</label>
                @error('description')
                    <span class="red-text text-accent-4"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea name="important_informations" id="important_informations" class="materialize-textarea"></textarea>
                <label for="important_informations">Informações importantes:</label>
                @error('important_informations')
                    <span class="red-text text-accent-4"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="time" name="timetable" id="timetable" />
                <label for="name">Horário:</label>
                @error('timetable')
                    <span class="red-text text-accent-4"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label class="col s12">
                <input type="checkbox" name="paid" id="paid" value='1' />
                <span>Pago</span>
                @error('paid')
                    <span class="red-text text-accent-4"><small>{{$message}}</small></span>
                @enderror
            </label>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="number" name="value" id="value" />
                <label for="value">Valor:</label>
                @error('value')
                    <span class="red-text text-accent-4"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        <div class="row" style="margin-bottom: 35px;">
            <div class="col s12" style="margin-bottom: 15px;">
                <label for="categories">Categoria:</label>
            </div>
            @foreach ($categories as $category)
            <span class="col s2">
                <label style="margin-right: 30px">
                    <input type="radio" name="categories" id="categories" class="with-gap" value="{{$category->id}}" />
                    <span>{{$category->name}}</span>
                </label>
            </span>
            @endforeach
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

        <div class="row">
            <div class="input-field col s12 file-field ">
                <div class="btn">
                    <span>Selecione uma image</span>
                    <input type="file" name="image" id="image"/>
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate"/>
                </div>
            </div>
        </div>

        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{route('admin.home.index')}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Cadastrar
            </button>
        </div>
    </form>
</section>
@endsection
