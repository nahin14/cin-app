<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use App\Insurer;
use App\InsuranceType;
use Request;
use Input;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class ClientsController extends Controller {

    /**
     * @var Client
     */
    private $client;

    /** check for authorization
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->middleware('auth');
        $this->client = $client;
    }

    /** return clients index page with list of all clients
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $clients = $this->client->get();
        return view('clients.index', compact('clients'));
    }

    /**
     * return client show page with individual client
     * @param Client $client
     * @return \Illuminate\View\View
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * return edit client page with updated data
     * @param Client $client
     * @return \Illuminate\View\View
     */
    public function edit(Client $client)
    {
        $insurance_types = InsuranceType::lists('insuranceTypeName', 'id');
        $insurers = Insurer::lists('slug', 'id');
        return view('clients.edit', compact('client', 'insurance_types', 'insurers'));
    }

    /**
     * update the edited client
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Client $client)
    {
        $input = array_except(Input::all(), '_method');
        $client->update($input);
        return redirect('clients');
    }

    /**
     * return create page with data
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $insurance_types = InsuranceType::lists('insuranceTypeName', 'id');
        $insurers = Insurer::lists('slug', 'id');
        return view('clients.create', compact('client', 'insurance_types', 'insurers'));
    }

    /**
     * store the newly created client
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $input = Request::all();

        Client::create($input);

        return redirect('clients');
    }

}
