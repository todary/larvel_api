<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Maker;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMakerRequest;
use Illuminate\Support\Facades\App;

class MakerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $makers = Maker::all();
        return response()->json(['data' => $makers], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateMakerRequest $request)
    {
        $values=$request->only(['name','phone']);
        Maker::create($values);
        return response()->json(['message'=>' Maker Add ','code'=>201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $maker = Maker::find($id);
        if (!$maker) {
            return response()->json(['message' => 'this Maker does not exit ', 'code' => 404], 404);
        }
        return response()->json(['data' => $maker], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(CreateMakerRequest $request,$id)
    {
        $maker=Maker::find($id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
