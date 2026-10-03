<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        DB::statement('
            CREATE TABLE sale_item (
                id CHAR(36) PRIMARY KEY,
                sale_id CHAR(36) NOT NULL,
                product_id CHAR(36) NOT NULL,
                product_name VARCHAR(255) NOT NULL,
                category_name VARCHAR(255) NOT NULL,
                quantity INT NOT NULL,
                unit_price DECIMAL(10, 2) NOT NULL,
                FOREIGN KEY (sale_id) REFERENCES sale(id) ON DELETE CASCADE,
                FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE RESTRICT,
                CONSTRAINT chk_sale_item_quantity_positive CHECK (quantity > 0),
                CONSTRAINT chk_sale_item_price_positive CHECK (unit_price > 0)
            )
        ');
    }
    public function down(): void {
        DB::statement('DROP TABLE IF EXISTS sale_item');
    }
};
