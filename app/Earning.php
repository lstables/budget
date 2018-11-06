<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Earning extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['space_id', 'happened_on', 'description', 'amount'];
    protected $visible = ['id', 'happened_on', 'description', 'amount', 'created_at'];

    // Accessors
    public function getFormattedAmountAttribute() {
        return number_format($this->amount / 100, 2);
    }

    public function getFormattedHappenedOnAttribute() {
        $secondsDifference = strtotime(date('Y-m-d')) - strtotime($this->happened_on);

        return ($secondsDifference / 60 / 60 / 24) . ' days ago';
    }

    // Relations
    //
}
