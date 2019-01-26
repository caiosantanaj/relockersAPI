<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\User\UserCollection;
use App\User;
use App\Http\Resources\User\UserResource;
use App\Http\Requests\UserRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Encomenda\EncomendaResource;
use App\Model\Encomenda;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserCollection::collection(User::all());
    }

    /**
     * Devolve as encomendas de um utilizador
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userEncomendas(User $user)
    {
        return EncomendaResource::collection($user->encomendas);
    }

    /**
     * Cria uma ligação de um utilizador com uma encomenda
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeUserEncomendas(User $user, Encomenda $encomenda)
    {

        try {
            $user->encomendas()->attach($encomenda);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {

            $request = $request->only(['nome', 'email', 'password', 'data_nascimento', 'tipo_id', 'supervisor_id']);

            $user = new User;
            $user->nome = $request['nome'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
            $user->data_nascimento = $request['data_nascimento'];
            $user->tipo_id = $request['tipo_id'];
            $user->supervisor_id = $request['supervisor_id'];

            $user->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new UserResource($user),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //return $user->usertype;
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            $request = $request->only(['nome', 'email', 'password', 'data_nascimento', 'tipo_id', 'supervisor_id']);

            $request['password'] = bcrypt($request['password']);

            $user->update($request);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new UserResource($user),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response([
                'msg' => "$e->getMessage()",
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
