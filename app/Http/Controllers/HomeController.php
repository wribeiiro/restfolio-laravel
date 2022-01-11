<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\ProfileService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        private ProfileService $profileService
    )
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile(Request $request)
    {
        $param = $request->get('param');


        try {
            return response()->json([
                'data' => $this->profileService->$param(),
                'status' => [
                    'text' => Response::$statusTexts[Response::HTTP_OK],
                    'code' => Response::HTTP_OK,
                    'label' => 'badge-success'
                ]
            ], Response::HTTP_OK);
        } catch (\Exception $ex) {
            return response()->json([
                'data' => 'Deu ruim, chama o amir!',
                'status' => [
                    'text' => Response::$statusTexts[Response::HTTP_INTERNAL_SERVER_ERROR],
                    'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                    'label' => 'badge-danger'
                ]
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }


    }
}
