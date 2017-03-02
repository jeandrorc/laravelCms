<?php namespace App\Helper;

class AutoEmbed {

    public function __construct()
    {

    }

    public function get($url){
       return $this->parse($this->getId($url));
    }

    protected function parse($id)
    {
        return $html = "<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/{$id}\" frameborder=\"0\" allowfullscreen autoplay='false'></iframe>";
    }

    protected function getId($url)
    {
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['v'];
    }

}