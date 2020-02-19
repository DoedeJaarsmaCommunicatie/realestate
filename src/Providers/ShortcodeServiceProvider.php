<?php

namespace App\Providers;

class ShortcodeServiceProvider
{
    protected $shortcodes;
    
    public function __construct()
    {
        $this->shortcodes = include get_stylesheet_directory() . '/src/config/shortcodes.php';
        
        $this->main();
    }
    
    public function main(): void
    {
        foreach ($this->shortcodes as $shortcode => $callback) {
            \add_shortcode($shortcode, [$callback, 'register']);
        }
    }
}
