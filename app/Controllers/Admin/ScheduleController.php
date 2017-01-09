<?php 

/**
 * app/Controllers/Admin/ScheduleController.php
 *
 * Resourceful controller for schedules.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Admin;

use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use CtrlServer\Models\Schedule;
use CtrlServer\Requests\CreateScheduleRequest;
use CtrlServer\Requests\UpdateScheduleRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the Schedule.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Schedules');

        $data['fields']   = Schedule::grid();
        $data['rules']    = encode(Schedule::$validationRules);
        $data['messages'] = encode(Schedule::$validationMessages);

        return view('admin.schedules.index', $data);
    }

    /**
     * Return an API listing of schedules.
     * 
     * @param  Request $request
     * @param  Schedule $schedule
     * @return Response
     */
    public function list(Request $request, Schedule $schedule)
    {
        $schedules = $schedule->search($request);

        return response()->json($schedules);
    }

    /**
     * Store a newly created Schedule in storage.
     *
     * @param CreateScheduleRequest $request
     * @return Response
     */
    public function store(CreateScheduleRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Schedule could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($schedule = Schedule::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'Schedule Created';
            $json['message'] = 'Your Schedule was created successfully, super sweet!';
            $json['item']    = $schedule->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified Schedule in storage.
     *
     * @param  int $id
     * @param  UpdateScheduleRequest $request
     * @return Response
     */
    public function update($id, UpdateScheduleRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Schedule could not be updated at this time. Please try again.'
        ];

        $schedule = $this->exist($id);
        
        $schedule->fill($request->all());

        if ($schedule->save()) {
            $json['type']    = 'success';
            $json['title']   = 'Schedule Saved';
            $json['message'] = 'Your Schedule was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified Schedule from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Schedule could not be deleted at this time. Please try again.'
        ];

        $schedule = $this->exist($id);

        if ($schedule->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'Schedule Deleted';
            $json['message'] = 'Your Schedule was deleted successfully, WOOT!';
        }

        return response()->json($json);
    }

    /**
     * Check if a record exists.
     *
     * @param  int $id
     * @return Eloquent
     */
    private function exist($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            
            flash('Schedule not found', 'danger');

            return redirect(route('admin.schedules.index'));
        }

        return $schedule;
    }
}
