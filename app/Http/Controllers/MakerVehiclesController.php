<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Maker;
use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\CreateVehicleRequest;


class MakerVehiclesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        $maker = Maker::find($id);
        if (!$maker) {
            return response()->json(['message' => 'this Maker does not exit ', 'code' => 404], 404);
        }
        return response()->json(['data' => $maker->vehicles], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateVehicleRequest $request,$makerId)
    {
        $Maker = Maker::find($makerId);
        if (!$Maker) {
            return response()->json(['message' => 'this Maker does not exit ', 'code' => 404], 404);
        }
        $values=$request->all();
        $Maker->vehicles()->create($values);
        return response()->json(['message' => ' insert '], 201);

//        $Vehicle=Vehicle::create($values);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, $vehicleId)
    {
        $maker = Maker::find($id);
        if (!$maker) {
            return response()->json(['message' => 'this Maker does not exit ', 'code' => 404], 404);
        }
        $vehicles = $maker->vehicles->find($vehicleId);
        if (!$vehicles) {
            return response()->json(['message' => 'this vehicle does not exit ', 'code' => 404], 404);
        }
        return response()->json(['data' => $vehicles], 200);
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
    public function update($id)
    {
        //
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
