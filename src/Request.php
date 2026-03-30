<?php




class Request
{


    protected array $post;
    protected array $get;




    public function __construct()
    {
        [$this->post, $this->get] = [$_POST, $_GET];

    }

    public function get()
    {
        return $this->get;
    }


    public function post()
    {

        return $this->post;
    }






}