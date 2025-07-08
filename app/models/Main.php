<?php

namespace App\Models;

use RedBeanPHP\R;
use Wfm\Model;

class Main extends AppModel
{
    public function get_hits($lang, $limit): array // тут я короче в бд подкдючился и вытаскиваю товары, которые отмечены как хиты
    {
        $hits = R::getAll("SELECT p.*, pd.* FROM product p JOIN product_discription pd ON p.id = pd.product_id WHERE p.status = 1 AND p.hit = 1 AND pd.language_id = ? LIMIT $limit", [$lang]);
        return $hits;
    }
}