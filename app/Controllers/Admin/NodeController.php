<?php 

/**
 * app/Controllers/Admin/NodeController.php
 *
 * Resourceful controller for nodes.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Admin;

use CtrlServer\Models\Node;
use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use CtrlServer\Requests\CreateNodeRequest;
use CtrlServer\Requests\UpdateNodeRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class NodeController extends Controller
{
    /**
     * Display a listing of the Node.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Nodes');

        $data['fields']   = Node::grid();
        $data['rules']    = encode(Node::$validationRules);
        $data['messages'] = encode(Node::$validationMessages);

        return view('admin.nodes.index', $data);
    }

    /**
     * Return an API listing of nodes.
     * 
     * @param  Request $request
     * @param  Node $node
     * @return Response
     */
    public function list(Request $request, Node $node)
    {
        $nodes = $node->search($request);

        return response()->json($nodes);
    }

    /**
     * Store a newly created Node in storage.
     *
     * @param CreateNodeRequest $request
     * @return Response
     */
    public function store(CreateNodeRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Node could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($node = Node::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'Node Created';
            $json['message'] = 'Your Node was created successfully, super sweet!';
            $json['item']    = $node->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified Node in storage.
     *
     * @param  int $id
     * @param  UpdateNodeRequest $request
     * @return Response
     */
    public function update($id, UpdateNodeRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Node could not be updated at this time. Please try again.'
        ];

        $node = $this->exist($id);
        
        $node->fill($request->all());

        if ($node->save()) {
            $json['type']    = 'success';
            $json['title']   = 'Node Saved';
            $json['message'] = 'Your Node was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified Node from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Node could not be deleted at this time. Please try again.'
        ];

        $node = $this->exist($id);

        if ($node->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'Node Deleted';
            $json['message'] = 'Your Node was deleted successfully, WOOT!';
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
            $node = Node::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            
            flash('Node not found', 'danger');

            return redirect(route('admin.nodes.index'));
        }

        return $node;
    }
}
