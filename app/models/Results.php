<?php

class Result extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spis_result';

    protected  $guarded = array('$id');

    public function level()
    {
        return $this->belongsTo('Level', 'level_id', 'id');

    }

    public function subject(){
        return $this->belongsTo('Subject', 'subject_id', 'id');
    }




}