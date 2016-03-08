<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    /**
     * Generated
     */

    protected $table = 'contacts';
    protected $fillable = ['id', 'company_id', 'contact_type_id', 'name', 'country', 'state', 'city', 'address', 'phone', 'license_no'];


    public function company() {
        return $this->belongsTo(\App\Entities\Company::class, 'company_id', 'id');
    }

    public function type() {
        return $this->belongsTo(\App\Entities\Type::class, 'contact_type_id', 'id');
    }

    public function companies() {
        return $this->hasMany(\App\Entities\Company::class, 'contact_id', 'id');
    }

    public function entries() {
        return $this->hasMany(\App\Entities\Entry::class, 'vendor_id', 'id');
    }

    public function models() {
        return $this->hasMany(\App\Entities\Model::class, 'vendor_id', 'id');
    }

    public function trips() {
        return $this->hasMany(\App\Entities\Trip::class, 'driver_id', 'id');
    }

    public function trips() {
        return $this->hasMany(\App\Entities\Trip::class, 'vendor_id', 'id');
    }

    public function users() {
        return $this->hasMany(\App\Entities\User::class, 'contact_id', 'id');
    }


}
