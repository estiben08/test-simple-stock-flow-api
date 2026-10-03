<?php
namespace App\Presentation\Http\Controller;

use App\Application\UseCase\AuthenticateUserService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AuthController {
    public function __construct(private AuthenticateUserService \) {}

    public function login(Request \): JsonResponse {
        try {
            \ = \->authService->execute(\->input('username'), \->input('password'));
            return response()->json(['token' => \]);
        } catch (\Exception \) {
            return response()->json(['error' => \->getMessage()], 401);
        }
    }
}
