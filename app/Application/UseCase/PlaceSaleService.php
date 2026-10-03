<?php
namespace App\Application\UseCase;

use App\Application\Ports\Outbound\ProductRepository;
use App\Application\Ports\Outbound\SaleRepository;
use App\Application\Ports\Outbound\UnitOfWork;
use App\Application\Exception\ProductNotFoundException;
use App\Domain\Model\Sale;
use App\Domain\Model\SaleItem;
use App\Domain\ValueObject\Quantity;
use Ramsey\Uuid\Uuid;

class PlaceSaleService {
    public function __construct(
        private ProductRepository \,
        private SaleRepository \,
        private UnitOfWork \
    ) {}

    public function execute(string \, array \): string {
        return \->uow->run(function () use (\, \) {
            \ = [];
            foreach (\ as \) {
                \ = \->productRepository->findById(\['product_id']);
                if (!\) {
                    throw new ProductNotFoundException();
                }
                
                \ = new Quantity(\['quantity']);
                \->decreaseStock(\->value());
                \->productRepository->save(\);
                
                \[] = new SaleItem(
                    \->id(),
                    \->name(),
                    \->categoryId(), // Ideally would be category name as per rule, assuming simplified for now
                    \,
                    \->price()
                );
            }
            
            \ = Uuid::uuid4()->toString();
            \ = new Sale(\, \, \);
            \->saleRepository->save(\);
            
            return \->id();
        });
    }
}
