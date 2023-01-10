<?php
class Movie
{
    public $name;
    public $year;
    public $genres;
    public $length;
    public $director;
    private $description;
    
    
    function __construct(string $_name, int $_year, array $_genres, string $_length, string $_director, string $_description)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->genres = $_genres;
        $this->length = $_length;
        $this->director = $_director;
        $this->description = $_description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getInfo()
    {
        return $this->name . '<br>' . $this->year . '<br>' . implode(' ', $this->genres) . '<br>' . $this->length . '<br>' . $this->director;
    }

}


?>