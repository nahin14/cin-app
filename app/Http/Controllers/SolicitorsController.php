<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Solicitor;
use Request;
use Input;



/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class SolicitorsController extends Controller {

    /**
     * @var Solicitor
     */
    private $solicitor;

    /**
     * check for authorization
     * @param Solicitor $solicitor
     */
    public function __construct(Solicitor $solicitor)
    {
        $this->middleware('auth');
        $this->solicitor = $solicitor;
    }

    /**
     * return view with list of all solicitors
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $solicitors = $this->solicitor->get();
        return view('solicitors.index', compact('solicitors'));
    }

    /**
     * return view with individual solicitor
     * @param Solicitor $solicitor
     * @return \Illuminate\View\View
     */
    public function show(Solicitor $solicitor)
    {
        return view('solicitors.show', compact('solicitor'));
    }

    /**return view with edit page
     * @param Solicitor $solicitor
     * @return \Illuminate\View\View
     */
    public function edit(Solicitor $solicitor)
    {
        return view('solicitors.edit', compact('solicitor'));
    }

    /**
     * update solicitor
     * @param Solicitor $solicitor
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Solicitor $solicitor)
    {
        $input = array_except(Input::all(), '_method');
        $solicitor->update($input);
        return redirect('solicitors');
    }

    /**
     * return create solicitor page
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('solicitors.create');
    }

    /**
     * store solicitor
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $input = Request::all();

        Solicitor::create($input);

        return redirect('solicitors');
    }

}
