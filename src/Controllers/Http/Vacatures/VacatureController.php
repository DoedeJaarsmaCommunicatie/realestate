<?php
namespace App\Controllers\Http\Vacatures;

class VacatureController
{
    private $args;
    
    public function index()
    {
    }
    
    public function newThree()
    {
        $this->args = [
            'post_type'      => 'vacature',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ];
        
        return $this->fetchData();
    }
    
    
    public function fetchData()
    {
        return \Timber\Timber::get_posts($this->getArgs());
    }
    
    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->args;
    }
    
    /**
     * @param mixed $args
     *
     * @return VacatureController
     */
    public function setArgs($args) : self
    {
        $this->args = $args;
        return $this;
    }
}
