<?php

class Guardian extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'spis_parent';

    protected  $guarded = array('$id');






}