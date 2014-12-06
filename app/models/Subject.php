<?php

class Subject extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spis_subject';

    protected  $guarded = array('$id');

    public function classTaught()
    {
        return $this->belongsTo('ClassTaught', 'class_id', 'id');

    }






}