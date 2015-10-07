<?php
class Place
{
    private $ciudad;
    private $duration;

    function __construct($ciudad, $duration)
    {
        $this->ciudad = $ciudad;
        $this->duration = $duration;
    }

    function setCiudad($new_ciudad)
    {
        $this->ciudad = (string) $new_ciudad;
    }

    function getCiudad()
    {
        return $this->ciudad;
    }

    function setDuration($new_duration)
    {
        $this->duration = $new_duration;
    }

    function getDuration()
    {
        return $this->duration;
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
