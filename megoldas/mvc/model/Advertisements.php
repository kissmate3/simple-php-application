<?php

/**
 * Model of Advertisements 
 */
class Advertisements
{
    public $id;

    public $userdid;

    public $title;

    public function __construct( $id, $userdid, $title )
    {
        $this->id = $id;

        $this->$userdid = $userdid;

        $this->title = $title;
    }
}
