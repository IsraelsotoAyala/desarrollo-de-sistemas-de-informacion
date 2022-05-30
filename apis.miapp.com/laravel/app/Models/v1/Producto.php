<?php
 
namespace App\Models\v1;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
 
class Producto extends Model
{
    use HasUUID;

    protected $uuidFieldName = 'id';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productos';
}