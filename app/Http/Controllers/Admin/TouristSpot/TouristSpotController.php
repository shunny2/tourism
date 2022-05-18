<?php

namespace App\Http\Controllers\Admin\TouristSpot;

use App\Http\Controllers\Controller;
use App\Http\Requests\TouristSpotRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Image;
use App\Models\TouristSpot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TouristSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/distritos')->json();
        // dd($response);
        $cities = City::all();
        // $cities = $response;
        $categories = Category::all();

        return view('admin.tourist_spot.form', compact('cities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TouristSpotRequest $request)
    {
        // dd($request->image);
        // dd($request->paid);
        //Garante as inserções de forma correta no banco de dados.
        DB::beginTransaction();

        //Atribuição de requisição em massa ($fillable).
        $tourist = TouristSpot::create($request->all());

        //Verifica se na requisição tem um campo de categorias
        if ($request->has('categories')) {
            //Associando o ponto as categorias e inserindo
            $tourist->categories()->sync($request->categories); //sync e attach recebe um array de id's
        }

        if($request->hasFile('image')) {
            //Checar se não houve erro no upload da imagem.
            if($request->image->isValid()) {
                //Armazenando o arquivo no disco publico. Retorna caminho(url) do arquivo.
                $urlImage = $request->image->store("tourist_spots/$tourist->id", 'public');
                // $urlImage = $request->image->hashName("tourist_spots/$tourist->id");

                //Redimensionar a imagem.
                // $img = Image::make($request->image)->fit(1280, 850);

                //Salvar imagem redimensionada no disco.
                //Storage::disk('public')->put($urlImage, $img->encode());

                $image = new Image();
                $image->url = $urlImage;
                $image->tourist_spots_id = $tourist->id;
                $image->save();
            }
        }

        DB::Commit();

        //Guarda a seção em forma de flash (exclui depois de usar)
        $request->session()->flash('sucesso', "Ponto turístico $request->nome incluído com sucesso!");

        return redirect()->route('admin.home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
