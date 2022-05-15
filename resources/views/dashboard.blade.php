<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @can('tourist')
                        <a class="text-blue-500 hover:text-blue-800" href="{{route('admin.home.index')}}">Vizualizar pontos turísticos.</a>
                    @elsecan('representative')
                        <a class="text-blue-500 hover:text-blue-800" href="{{route('admin.tourist_spots.create')}}">Ir para cadastro de pontos turísticos.</a>
                    @elsecan('admin')
                        <a class="text-blue-500 hover:text-blue-800" href="{{route('admin.representatives.index')}}">Ir para cadastro de Representantes.</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
