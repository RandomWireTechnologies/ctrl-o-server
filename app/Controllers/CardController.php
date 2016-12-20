<?php 

/**
 * app/Controllers/CardController.php
 *
 * Resourceful controller for cards.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers;

use Flash;
use CtrlServer\Models\Card;
use CtrlServer\Models\User;
use Illuminate\Http\Request;
use CtrlServer\Requests\CreateCardRequest;
use CtrlServer\Requests\UpdateCardRequest;
use CtrlServer\Base\Controller as BaseController;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CardController extends BaseController
{
    /**
     * Display a listing of the Cards.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Cards');

        $users = User::pluck('name', 'id')->all();

        return view('cards.index', compact('users'));
    }

    /**
     * Return an API listing of Cards.
     * 
     * @param  Request $request
     * @return Response
     */
    public function list(Request $request)
    {
        $query = Card::with('user');

        foreach($request->all() as $key => $value) {
            if ($value) {
                $query->where($key, 'LIKE', '%' . $value . '%');
            }
        }

        $cards = $query->get();

        return response()->json($cards);
    }

    /**
     * Store a newly created Card in storage.
     *
     * @param CreateCardRequest $request
     * @return Response
     */
    public function store(CreateCardRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Card could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($card = Card::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'Card Created';
            $json['message'] = 'Your Card was created successfully, super sweet!';
            $json['item']    = $card->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified Card in storage.
     *
     * @param  int $id
     * @param  UpdateCardRequest $request
     * @return Response
     */
    public function update($id, UpdateCardRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Card could not be updated at this time. Please try again.'
        ];

        $card = $this->exist($id);
        
        $card->fill([
            'name'    => $request->name,
            'serial'  => $request->serial,
            'hash'    => $request->hash,
            'enabled' => $request->enabled
        ]);

        if ($card->save()) {
            $json['type']    = 'success';
            $json['title']   = 'Card Saved';
            $json['message'] = 'Your Card was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified Card from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Card could not be deleted at this time. Please try again.'
        ];

        $card = $this->exist($id);

        if ($card->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'Card Deleted';
            $json['message'] = 'Your Card was deleted successfully, WOOT!';
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
            $card = Card::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Flash::error('Card not found');

            return redirect(route('cards.index'));
        }

        return $card;
    }
}
