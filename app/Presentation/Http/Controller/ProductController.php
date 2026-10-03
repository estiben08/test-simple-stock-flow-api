<?php
namespace App\Presentation\Http\Controller;

use App\Application\UseCase\CatalogService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController {
    public function __construct(private CatalogService \) {}

    public function index(): JsonResponse {
        \ = \->catalogService->getCatalog();
        // Simplified mapping for demo
        \ = array_map(fn(\) => [
            'id' => \->id(), 
            'name' => \->name(), 
            'price' => (string) \->price()->amount(),
            'stock' => \->stock()
        ], \);
        return response()->json(\);
    }
    
    public function store(Request \): JsonResponse {
        try {
            \ = \->catalogService->createProduct(
                \->input('name'),
                \->input('price'),
                \->input('stock'),
                \->input('category_id')
            );
            return response()->json(['id' => \], 201);
        } catch (\Exception \) {
            return response()->json(['error' => \->getMessage()], 422);
        }
    }
}
