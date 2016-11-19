<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPackage extends Model
{
    protected $table='data_package';

    public function applicationDataPackage(){
        return $this->hasOne('application_data_package','data_package_id');
    }

    public function application_data_package(){
        return  $this->hasOne('App\application_data_package','data_package_id','id');
    }
}
