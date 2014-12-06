<?php

class ClassSubject extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spis_class_subject';

    protected  $guarded = array('$id');

    public function classTaught()
    {
        return $this->belongsTo('ClassTaught', 'class_id', 'id');

    }

    public function subject(){
        return $this->belongsTo('Subject', 'subject_id', 'id');
    }




}
