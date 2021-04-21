<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    private $productId;
    private $products = [0 => ['name' => 'Яблоко', 'price' => 25], 1 => ['name' => 'Груша', 'price' => 15], 2 => ['name' => 'Черника', 'price' => 65]];

    public function __construct($productId)
    {
        parent::__construct([]);
        if (!is_numeric($productId))
        {
            return;
        }
        if ($productId > 2 || $productId < 0)
        {
            $productId = 0;
        }

        $this->productId = $productId;
    }

    public function get()
    {
        return $this->products[$this->productId];
    }
}
