<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use \Sushi\Sushi;

    public function getRows()
    {
        return json_decode(\File::get('fixtures/continents.json'),true);
    }
    //Allow result to be cached
    protected function sushiShouldCache()
    {
        return true;
    }
    //rebuild cache whenever this file is updated
    protected function sushiCacheReferencePath()
    {
        return public_path().'/fixtures/continents.json';
    }
}
