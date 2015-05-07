<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class UsersController extends Controller {

    /**
     * check for authorization
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }


    /**
     * return view with all users
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = $this->user->get();

        return view('users.index', compact('users'));
    }


    /**
     * return view with one user
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {

        $user = $this->user->whereSlug($slug)->first();
        $role = Role::lists('slug', 'id');
        return view('users.show', compact('user', 'role'));
    }

    /**
     * return edit view
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function edit($slug)
    {
        $user = $this->user->whereSlug($slug)->first();
        $role = Role::lists('slug', 'id');
        return view('users.edit', compact('user', 'role'));
    }


    /**
     * update user
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($slug, Request $request)
    {
        $user = $this->user->whereSlug($slug)->first();

        $user->name = $request->get('name');

        $user->slug = $request->get('slug');

        $user->email = $request->get('email');

        $user->roleID = $request->get('roleID');

        $user->save();

        return redirect('users');
    }

}
