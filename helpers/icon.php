<?php

if (! function_exists('tabler_icon')) {
    /**
     * Helper function to render TablerIcon
     *
     * @param string $name
     * @param array $attributes
     * @return \Illuminate\View\View
     */
    function tabler_icon(string $name, array $attributes = [])
    {
        return app('tabler-icon')::render($name, $attributes);
    }
}

if (! function_exists('TablerIcon')) {
    /**
     * Global helper to access TablerIcon
     *
     * @return \VigStudio\TablerIcons\TablerIcon
     */
    function TablerIcon()
    {
        return app('tabler-icon');
    }
}
