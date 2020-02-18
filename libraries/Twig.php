<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Twig for codeigniter
 *
 * @author      Nipon Kiatprapapkul	<https://github.com/niponk>
 * @copyright	Copyright (c) 2019, Nipon Kiatprapapkul
 * @license     MIT License
 * @link        https://github.com/niponk/twig-for-codeigniter3
 */

class Twig
{
    /**
	 * Configuration for the environments
	 *
	 * @var array
	 */
    protected $_configs = [];

    /**
	 * @var Twig_Environment
	 */
	private $_twig;
    
    /**
	 * Initialize Twig class
	 *
	 * @param	array $configs
	 * @return	void
	 */
    
    public function __construct($configs = [])
    {
        // Configurations can be stored in a config file.
        $this->_configs = $configs;

        $loader = new \Twig\Loader\FilesystemLoader($this->_configs['template_path']);
        $twig = new \Twig\Environment($loader, $this->_configs['environments']);

        if ($this->_configs['environments']['debug'])
        {
            $twig->addExtension(new \Twig\Extension\DebugExtension());
        }

        $this->_twig = $twig;
        
        log_message('info', 'Twig Class Initialized');
    }
    
    /**
	 * Renders Twig Template
	 *
	 * @param string $view	View name
	 * @param array	 $vars	An associative array of data to be extracted for use in the view
	 */
    public function render($view, $vars = [])
    {
		$file = $this->_templateFile($view);
        
        return $this->_twig->render($file, $vars);
	}

    /**
     * Add Global
     * 
	 * Registers a Global variable
	 *
	 * @param string $name
	 * @param mixed  $value
	 */
	public function addGlobal($name, $value)
	{
		$this->_twig->addGlobal($name, $value);
    }
    
    /**
	 * Add Filter
     * 
     * Creating a filter consists of associating a name with a PHP callable
	 *
	 * @param string $name
	 * @param mixed  $callback
	 */
	public function addFilter($name, $callback)
	{
        $filter = new \Twig\TwigFilter($name, $callback);
		$this->_twig->addFilter($filter);
    }
    
    /**
	 * Add Function
     * 
     * Functions are defined in the exact same way as filters
	 *
	 * @param string $name
	 * @param mixed  $callback
	 * @param boolean  $is_safe
	 */
	public function addFunction($name, $callback, $is_safe = FALSE)
	{
		$option = $is_safe ? ['is_safe' => ['html']] : [];
        $function = new \Twig\TwigFunction($name, $callback, $option);
		$this->_twig->addFunction($function);
	}

	private function _templateFile($view) {
		$ext = pathinfo($view, PATHINFO_EXTENSION);
        return ($ext === '') ? $view.'.twig' : $view;
	}
}
