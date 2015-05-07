<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use App\Vehicle;
use App\VehicleType;
use Request;
use Input;


/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class VehiclesController extends Controller {

    /**
     * @var Vehicle
     */
    private $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->middleware('auth');
        $this->vehicle = $vehicle;
    }

    /** return vehicle index view
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $vehicles = $this->vehicle->get();
        return view('vehicles.index', compact('vehicles'));
    }


    /** return show view with vehicle
     * @param Vehicle $vehicle
     * @return \Illuminate\View\View
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }


    /**
     * return edit view
     * @param Vehicle $vehicle
     * @return \Illuminate\View\View
     */
    public function edit(Vehicle $vehicle)
    {
        $vehicle_types = VehicleType::lists('vehicleTypeName', 'id');
        $clients = Client::lists('slug', 'id');
        return view('vehicles.edit', compact('vehicle', 'vehicle_types', 'clients'));
    }


    /**
     * update vehicle
     * @param Vehicle $vehicle
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Vehicle $vehicle)
    {
        $input = array_except(Input::all(), '_method');
        $vehicle->update($input);
        return redirect('vehicles');
    }

    /**
     * return create view
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $clients = Client::lists('slug', 'id');
        $vehicle_types = VehicleType::lists('vehicleTypeName', 'id');
        return view('vehicles.create', compact('clients', 'vehicle_types'));
    }

    /**
     * store vehicle
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $input = Request::all();

        Vehicle::create($input);

        return redirect('vehicles');
    }

}
