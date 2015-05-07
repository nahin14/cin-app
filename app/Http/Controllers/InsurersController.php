<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Insurer;
use Request;
use Input;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class InsurersController extends Controller {

    /**
     * @var Insurer
     */
    private $insurer;

    /**
     * check for authorization
     * @param Insurer $insurer
     */
    public function __construct(Insurer $insurer)
    {
        $this->middleware('auth');
        $this->insurer = $insurer;
    }

    /**
     * return insurers index page with list of all insurers
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $insurers = $this->insurer->get();
        return view('insurers.index', compact('insurers'));
    }

    /**
     * return individual insurer
     * @param Insurer $insurer
     * @return \Illuminate\View\View
     */
    public function show(Insurer $insurer)
    {
        return view('insurers.show', compact('insurer'));
    }

    /**
     * return edit insurer page
     * @param Insurer $insurer
     * @return \Illuminate\View\View
     */
    public function edit(Insurer $insurer)
    {
        return view('insurers.edit', compact('insurer'));
    }

    /**
     * update xisting data in databse
     * @param Insurer $insurer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Insurer $insurer)
    {
        $input = array_except(Input::all(), '_method');
        $insurer->update($input);
        return redirect('insurers');
    }

    /**
     * return view with create form
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('insurers.create');
    }

    /**
     * store the newly created insurer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $input = Request::all();

        Insurer::create($input);

        return redirect('insurers');
    }

}
