<?php
class Place
{
    private $ciudad;

    function __construct($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    function setCiudad($new_ciudad)
    {
        $this->ciudad = (string) $new_ciudad;
    }

    function getCiudad()
    {
        return $this->ciudad;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }
}
 ?>
