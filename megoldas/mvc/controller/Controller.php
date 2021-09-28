<?php

include 'model/Model.php';

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * Calling the getUsers function from Model
     */
    public function invokeUsers()
    {
        if (!isset($_GET['users'])) {
            $users = $this->model->getUsers();
            include 'view/userslist.php';
        }
    }

    /**
     * Calling the getAdvertisements function from Model
     */
    public function invokeAdvertisements()
    {
        if (!isset($_GET['adverisements'])) {

            $advertisements = $this->model->getAdvertisements();
            include 'view/advertisements.php';
        }
    }
}
