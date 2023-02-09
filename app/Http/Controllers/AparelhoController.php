<?php

namespace App\Http\Controllers;

use App\Http\Requests\AparelhoCreateRequest;
use App\Models\Aparelho;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AparelhoController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/aparelhos",
     *      tags={"Aparelhos"},
     *      @OA\Response(
     *          response=200,
     *          description="Aparelhos listagem"
     *       ),
     *      @OA\Parameter(
     *          name="page",
     *          description="Paginação",
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     * )
     */
    public function index()
    {
        return Aparelho::paginate(10);
    }

    /**
     * @OA\Post(
     *      path="/api/aparelhos",
     *      tags={"Aparelhos"},
     *      @OA\Response(
     *          response=200,
     *          description="Aparelho cadastro"
     *       ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="nome",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="IMEI",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="marca",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="modelo",
     *                     type="string"
     *                 ),
     *                 example={"nome": "nome teste", "IMEI": "IMEI teste ÚNICO", "marca": "marca teste", "modelo": "modelo teste"}
     *             )
     *         )
     *     ),
     * )
     */
    public function store(AparelhoCreateRequest $request)
    {
        $aparelho = Aparelho::create(
            $request->only('nome', 'IMEI', 'marca', 'modelo')
        );

        return response($aparelho, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *      path="/api/aparelhos/{id}",
     *      tags={"Aparelhos"},
     *      @OA\Response(
     *          response=201,
     *          description="Aparelho"
     *       ),
     *      @OA\Parameter(
     *          name="id",
     *          description="Aparelho ID",
     *          in="path",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     * )
     */
    public function show($id)
    {
        return Aparelho::find($id);
    }

    /**
     * @OA\Put(
     *      path="/api/aparelhos/{id}",
     *      tags={"Aparelhos"},
     *      @OA\Response(
     *          response=202,
     *          description="Aparelho atualizar"
     *       ),
    *  @OA\Parameter(
     *          name="id",
     *          description="Aparelho ID",
     *          in="path",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="nome",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="IMEI",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="marca",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="modelo",
     *                     type="string"
     *                 ),
     *                 example={"nome": "nome teste", "IMEI": "IMEI teste ÚNICO", "marca": "marca teste", "modelo": "modelo teste"}
     *             )
     *         )
     *     ),
     * )
     */
    public function update(Request $request, $id)
    {
        $aparelho = Aparelho::find($id);

        $aparelho->update($request->only('nome', 'IMEI', 'marca', 'modelo'));

        return \response($aparelho, Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *      path="/api/aparelhos/{id}",
     *      tags={"Aparelhos"},
     *      @OA\Response(
     *          response=204,
     *          description="Aparelho deletar"
     *       ),
     *      @OA\Parameter(
     *          name="id",
     *          description="Aparelho ID",
     *          in="path",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     * )
     */
    public function destroy($id)
    {
        Aparelho::destroy($id);

        return \response(null, Response::HTTP_NO_CONTENT);
    }
}
