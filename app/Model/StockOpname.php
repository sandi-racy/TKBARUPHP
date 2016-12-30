<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;

/**
 * App\Model\StockOpname
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $stockMovement
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $stock_id
 * @property float $previous_quantity
 * @property float $adjusted_quantity
 * @property string $reason
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \App\Model\StockIn $stockIn
 * @property-read \App\Model\StockOut $stockOut
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereStockId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname wherePreviousQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereAdjustedQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereReason($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereCreatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereDeletedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\StockOpname whereDeletedAt($value)
 */
class StockOpname extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'stock_opnames';

    protected $fillable = [
        'stock_id',
        'opname_date',
        'is_match',
        'previous_quantity',
        'adjusted_quantity',
        'reason'
    ];

    public function hId()
    {
        return HashIds::encode($this->attributes['id']);
    }

    public function stockIn()
    {
        return $this->hasOne('App\Model\StockIn');
    }

    public function stockOut()
    {
        return $this->hasOne('App\Model\StockOut');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->created_by = $user->id;
                $model->updated_by = $user->id;
            }
        });

        static::updating(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->updated_by = $user->id;
            }
        });

        static::deleting(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->deleted_by = $user->id;
                $model->save();
            }
        });
    }
}