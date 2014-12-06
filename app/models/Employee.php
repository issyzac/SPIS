<?php

class Employee extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spis_employee';

    protected  $guarded = array('$id');

    public function role()
    {
        return $this->belongsTo('Role', 'role_id', 'id');

    }




}