<?php
namespace App\Presentation\Http\Controller;

use App\Application\UseCase\PlaceSaleService;
use App\Domain\Exception\BusinessRuleViolation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SaleController {
    public function __construct(
        private PlaceSaleService \
    ) {}

    public function store(Request \): JsonResponse {
        try {
            // \ = auth()->id(); // Simplified for now
            \ = "fixed-uuid-for-test";
            \ = \->input('items', []);
            
            \ = \->placeSaleService->execute(\, \);
            
            return response()->json(['id' => \], 201);
        } catch (BusinessRuleViolation \) {
            return response()->json(['error' => \->getMessage()], 422);
        } catch (\Exception \) {
            return response()->json(['error' => 'Internal Error'], 500);
        }
    }
}
