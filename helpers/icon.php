<?php

use Illuminate\Support\HtmlString;

if (! function_exists('tabler_icon')) {
    function tabler_icon(string $name): HtmlString
    {
        $component =  view()->exists('tabler-icons::components.' . $name);
        if(! $component) {
            return new HtmlString('');
        }
        $html =  view('tabler-icons::components.' . $name)->render();

        return new HtmlString($html);
    }
}
