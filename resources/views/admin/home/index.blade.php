{{-- @extends('layouts.principal')
@section('conteudo-principal')
@endsection --}}
<x-main>
    <section class="section">
        <div class="row">
                @forelse ($tourist_spots as $tourist_spot)
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                    @foreach ($images as $image)
                                        @if ($tourist_spot->id == $image->tourist_spots_id)
                                            <img class="responsive-image materialboxed" width="650" src="{{asset("storage/$image->url")}}">
                                        @endif
                                    @endforeach
                                <span class="card-title">{{$tourist_spot->name}}</span>
                            </div>
                            <div class="card-content">
                                <p>{{formatText($tourist_spot->description)}}</p>
                            </div>
                            <div class="card-action">
                                <a href="{{route('admin.home.show', [$tourist_spot->id])}}">+Detalhes</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>
                        <span class="center-align">Não há pontos turísticos cadastrados!</span>
                    </div>
                @endforelse
        </div>
    </section>
</x-main>
