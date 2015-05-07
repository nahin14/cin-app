<?php namespace App\Http\Controllers;

use App\Claim;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use App\Status;
use App\User;
use Request;
use Validator;
use Input;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class TasksController extends Controller {

    /**
     * @var Task
     */
    private $task;


    /**
     * check authorization
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->middleware('auth');
        $this->task = $task;
    }


    /**
     * return view with list of all tasks
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tasks = $this->task->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * return view with individual task
     * @param Task $task
     * @return \Illuminate\View\View
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * return edit view
     * @param Task $task
     * @return \Illuminate\View\View
     */
    public function edit(Task $task)
    {
        $statuses = Status::lists('statusName', 'id');
        $claims = Claim::lists('slug', 'id');
        $users = User::lists('slug', 'id');
        return view('tasks.edit', compact('task', 'statuses', 'claims', 'users'));
    }


    /**
     * update tasks
     * @param Task $task
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Task $task)
    {
        $input = array_except(Input::all(), '_method');
        $task->update($input);
        return redirect('tasks');
    }

    /**
     * return create view
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $statuses = Status::lists('statusName', 'id');
        $claims = Claim::lists('slug', 'id');
        $users = User::lists('slug', 'id');
        return view('tasks.create', compact('statuses', 'claims', 'users'));
    }

    /**
     * store task
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $input = Request::all();

        Task::create($input);

        return redirect('tasks');

    }

}
