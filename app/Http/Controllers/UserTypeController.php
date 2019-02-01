<?php

namespace App\Http\Controllers;

use App\Model\UserType;
use Illuminate\Http\Request;
use App\Http\Resources\UserType\UserTypeCollection;
use App\Http\Resources\UserType\UserTypeResource;
use App\Http\Requests\UserTypeRequest;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group UserTypes management
 *
 * Endpoint para controlar a APIs o tipo de um utilizador.
 * 
 */
class UserTypeController extends Controller
{
    /**
     * Get UserType.
     * 
     * Mostra todos os tipos de utilizadores.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserTypeCollection::collection(UserType::all())->additional([
            'msg' => 'success',
            'code' => Response::HTTP_OK
        ]);;
    }

    /**
     * Post UserType
     *
     * Adiciona um novo tipo de utilizador.
     * 
     * @bodyParam tipo string required Tipo de um utilizador.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {"properties": "userTypeObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserTypeRequest $request)
    {
        try {
            $usertype = new UserType($request->all());
            $usertype->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new UserTypeResource($usertype),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get um userType.
     * 
     * Mostra um tipo de utilizador detalhado.
     *
     * @param  \App\Model\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show(UserType $userType)
    {
        return new UserTypeResource($userType);
    }

    /**
     * Update UserType.
     * 
     * Atualiza uma localizacao.
     * 
     * @bodyParam tipo string required Tipo de utilizador.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {"properties": "userTypeObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserType $userType)
    {
        try {

            $request = $request->only(['tipo']);

            $userType->update($request);
            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new UserTypeResource($userType),
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete UserType
     * 
     * Apaga um tipo de utilizador.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
     *
     * @param  \App\Model\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserType $userType)
    {
        try {
            $userType->delete();

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
