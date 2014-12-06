<?php

class Student extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spis_student';

    protected  $guarded = array('$id');

    public function classTaught()
    {
        return $this->belongsTo('ClassTaught', 'class_id', 'id');

    }
    public function level()
    {
        return $this->belongsTo('Level', 'level_id', 'id');

    }

    public function subject(){
        return $this->hasMany('Guardian', 'parent_id', 'id');
    }

    public function class_subject(){
        return $this->hasMany('ClassSubject', 'class_subject_id', 'id');
    }




}