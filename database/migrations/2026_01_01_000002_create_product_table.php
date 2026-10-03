<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        DB::statement('
            CREATE TABLE product (
                id CHAR(36) PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                price DECIMAL(10, 2) NOT NULL,
                stock INT NOT NULL,
                category_id CHAR(36) NOT NULL,
                image_url VARCHAR(255) NULL,
                deleted_at TIMESTAMP NULL,
                version INT NOT NULL DEFAULT 1,
                FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE RESTRICT,
                CONSTRAINT chk_product_name_not_empty CHECK (name <> ""),
                CONSTRAINT chk_product_price_positive CHECK (price > 0),
                CONSTRAINT chk_product_stock_non_negative CHECK (stock >= 0)
            )
        ');
    }
    public function down(): void {
        DB::statement('DROP TABLE IF EXISTS product');
    }
};
