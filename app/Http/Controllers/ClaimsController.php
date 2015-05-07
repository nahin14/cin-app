<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Claim;
use App\ClaimType;
use App\Client;
use App\ClientType;
use App\Solicitor;
use App\Status;
use App\User;
use Request;
use Input;

/**
* @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
*/

class ClaimsController extends Controller {

    /**
     * @var Claim
     */
    private $claim;

    public function __construct(Claim $claim)
    {
        $this->middleware('auth');
        $this->claim = $claim;
    }

    /**
     * return claims index page with list of all claims
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $claims = $this->claim->get();
        return view('claims.index', compact('claims'));
    }

    /**
     * return individual claim in claims show view, with data
     * @param Claim $claim
     * @return \Illuminate\View\View
     */
    public function show(Claim $claim)
    {
        return view('claims.show', compact('claim'));
    }

    /**
     * return individual claim in claims edit form, with data
     * @param Claim $claim
     * @return \Illuminate\View\View
     */
    public function edit(Claim $claim)
    {
        $claim_types = ClaimType::lists('claimTypeName', 'id');
        $statuses = Status::lists('statusName', 'id');
        $clients = Client::lists('slug', 'id');
        $client_types = ClientType::lists('clientTypeName', 'id');
        $users = User::lists('name', 'id');
        $solicitors = Solicitor::lists('slug', 'id');
        return view('claims.edit', compact('claim', 'claim_types', 'statuses', 'clients', 'client_types', 'users', 'solicitors'));
    }

    /**
     * get data form edit edit form and update the claim
     * @param Claim $claim
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Claim $claim)
    {
        $input = array_except(Input::all(), '_method');
        $claim->update($input);
        return redirect('claims');
    }

    /**
     * return a create claim view
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $claim_types = ClaimType::lists('claimTypeName', 'id');
        $statuses = Status::lists('statusName', 'id');
        $clients = Client::lists('slug', 'id');
        $client_types = ClientType::lists('clientTypeName', 'id');
        $users = User::lists('name', 'id');
        $solicitors = Solicitor::lists('slug', 'id');
        return view('claims.create', compact('claim', 'claim_types', 'statuses', 'clients', 'client_types', 'users', 'solicitors'));
    }

    /**
     * store the new claim
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $input = Request::all();

        Claim::create($input);

        return redirect('claims');
    }

}
