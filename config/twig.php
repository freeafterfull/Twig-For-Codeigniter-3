<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Paths to Twig templates
|--------------------------------------------------------------------------
*/
$config['template_path'] = [VIEWPATH];

/*
|--------------------------------------------------------------------------
| Environment Options
|--------------------------------------------------------------------------
|
| 'debug'
|
|   When set to TRUE, the generated templates have a __toString() method 
|   that you can use to display the generated nodes (default to FALSE).
|
| 'cache'
|
|   An absolute path where to store the compiled templates, 
|   or FALSE to disable caching (which is the default).
|
| 'autoescape'
|
|   Sets the default auto-escaping strategy (name, html, js, css, url, html_attr, 
|   or a PHP callback that takes the template "filename" 
|   and returns the escaping strategy to use -- the callback cannot be a function name 
|   to avoid collision with built-in escaping strategies); 
|   set it to FALSE to disable auto-escaping.
|   The name escaping strategy determines the escaping strategy to use for a template based on 
|   the template filename extension 
|   (this strategy does not incur any overhead at runtime as auto-escaping is done at compilation time.)
|
*/
$config['environments']['debug'] = FALSE;
$config['environments']['cache'] = FALSE;
$config['environments']['autoescape'] = 'html';
