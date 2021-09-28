<?php
include 'Users.php';
include 'Advertisements.php';

class Model
{
    /**
     * Returns a list of users from the database
     */
    public function getUsers()
    {
        $conn = mysqli_connect("localhost","rabit","1111","rabit");

        $users = array();

	    $qr = mysqli_query($conn,"select * from users");

	    while ($row = mysqli_fetch_assoc($qr)) {
		    array_push($users,$row);
	    }

        return $users;
    }

    /**
     * Returns a list of advertisements from the database
     */
    public function getAdvertisements()
    {
        $conn = mysqli_connect("localhost","rabit","1111","rabit");

        $advertisements = array();

	    $qr = mysqli_query($conn,"select name, title from advertisements join users on advertisements.userid=users.id");

	    while ($row = mysqli_fetch_assoc($qr)) {
		    array_push($advertisements,$row);
	    }

        return $advertisements;
    }
}
