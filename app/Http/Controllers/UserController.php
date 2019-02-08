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

/**
 * @group Users management
 *
 * Endpoint para controlar os users
 * 
 */
class UserController extends Controller
{
    /**
     * Get Users
     * 
     * Lista todos os utilizadores.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserCollection::collection(User::all());
    }

    /**
     * Get Encomendas of a User
     * 
     * Devolve as encomendas de um utilizador.
     *
     * @return \Illuminate\Http\Response
     */
    public function userEncomendas(User $user)
    {
        return EncomendaResource::collection($user->encomendas)->additional([
            'msg' => 'success',
            'code' => Response::HTTP_OK
        ]);;
    }

    /**
     * Create encomenda of user
     * 
     * Cria uma ligação de um utilizador com uma encomenda.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
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
     * Post User
     *
     * Adiciona um novo utilizador.
     * 
     * @bodyParam nome string required Nome do utilizador.
     * @bodyParam email string required E-mail do ttilizador.
     * @bodyParam password string required Password do utilizador.
     * @bodyParam password_confirmation string required Confirmação da password.
     * @bodyParam telefone string required Telefone do utilizador.
     * @bodyParam data_nascimento required Data de nascimento do utilizador.
     * @bodyParam local_de_trabalho required Local de trabalho do utilizador
     * @bodyParam tipo_id string required Tipo do utilizador.
     * @bodyParam supervisor_id string required Supervisor do utilizador.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {"properties": "userObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //bodyParam img_url string Link para a foto do utilizador.
    public function store(UserRequest $request)
    {
        try {

            $request = $request->only([
                'nome', 'email', 'password', 'telefone', 'data_nascimento',
                'local_de_trabalho', 'tipo_id', 'supervisor_id'
            ]);

            $user = new User;
            $user->nome = $request['nome'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
            $user->telefone = $request['telefone'];
            $user->data_nascimento = $request['data_nascimento'];
            $user->local_de_trabalho = $request['local_de_trabalho'];
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
     * Get a User.
     * 
     * Mostra um utilizador detalhado.
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
     * Update User
     *
     * Atualiza um novo utilizador.
     * 
     * @bodyParam nome string Nome do utilizador.
     * @bodyParam email string E-mail do ttilizador.
     * @bodyParam password string required Password do utilizador.
     * @bodyParam telefone string Telefone do utilizador.
     * @bodyParam data_nascimento Data de nascimento do utilizador.
     * @bodyParam tipo_id string Tipo do utilizador.
     * @bodyParam supervisor_id string Supervisor do utilizador.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {"properties": "userObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //bodyParam img_url string Link para a foto do utilizador.
    public function update(Request $request, User $user)
    {
        try {
            $request = $request->only([
                'nome', 'email', 'telefone', 'data_nascimento',
                'tipo_id', 'supervisor_id'
            ]);

            //$request['password'] = bcrypt($request['password']);

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
     * Delete User
     * 
     * Apaga um utilizador.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
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
