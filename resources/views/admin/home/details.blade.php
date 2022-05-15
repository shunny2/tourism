@extends('layouts.principal')

@section('conteudo-principal')
    @foreach ($images as $image)
        <div class="parallax-container">
            <div class="parallax"><img src="{{asset("storage/$image->url")}}"></div>
        </div>
    @endforeach
    <div class="section white">
        <div class="row container">
            <h2 class="header">
                {{$tourist_spots->name}}
            </h2>
            <p class="grey-text text-darken-3 lighten-3">
                {{$tourist_spots->description}}
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                Informações adicionais:
                {{$tourist_spots->important_informations}}
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                Horário de funcionamento:
                {{$tourist_spots->timetable}}.
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                Lugar Pago:
                @if ($tourist_spots->paid == '1')
                    Sim.
                @else
                    Não.
                @endif
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                Valor de
                @if ($tourist_spots->paid == '1')
                    R${{$tourist_spots->value}}.
                @else
                    R$0.00.
                @endif
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                Categorias:
                @foreach ($categories as $categorie)
                    {{$categorie->name}}.
                @endforeach
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                Cidade de {{$cities->name}}.
            </p>
        </div>
    </div>
    @foreach ($images as $image)
        <div class="parallax-container">
            <div class="parallax"><img src="{{asset("storage/$image->url")}}"></div>
        </div>
    @endforeach
@endsection
