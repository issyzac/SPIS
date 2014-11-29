<?php

class ParentStudent extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spis_parent_student';

    protected  $guarded = array('$id');


    public function student(){
        return $this->hasMany('Student', 'student_id', 'id');
    }

    public function parent(){
        return $this->hasMany('Guardian', 'parent_id', 'id');
    }




}