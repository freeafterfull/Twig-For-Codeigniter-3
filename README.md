# Twig For Codeigniter 3

Twig integration for CodeIgniter 3.1.x

## Folder Structure

```
codeigniter/
└── application/
    ├── config/
    │   └── twig.php
    └── core/
    │   └── MY_Loader.php
    └── libraries/
        └── Twig.php   
```

## Requirements
* Twig 3.0 or later

## Installation

Download the file from github and place them into their corresponding folders in the application directory.

Install Twig via Composer:
```
$ composer require "twig/twig:^3.0"
```

Next, override the default configuration `application/config/twig.php`:

```
$config['template_path'] = [VIEWPATH];

$config['environments']['debug'] = FALSE;
$config['environments']['cache'] = FALSE;
$config['environments']['autoescape'] = 'html';
```

## Usage

### Loading Twig Library

```
$this->load->library('twig');
```

### Rendering Templates

```
$this->load->view('template', $data);
```

### Adding a Global Variable

```
$this->twig->addGlobal('name', 'value');
```

### Adding a Filter

```
// an anonymous function
$this->twig->addFilter('name', function($str) {
    ...
});

// a simple PHP function
$this->twig->addFilter('name', 'FunctionName');

// a class static method
$this->twig->addFilter('name', 'ClassName::MethodName');

// a class method
$this->twig->addFilter('name',['ClassName', 'MethodName']);
```

### Adding a Function

```
// an anonymous function
$this->twig->addFunction('name', function() {
    ...
});

// a simple PHP function or Codeigniter Helper
$this->twig->addFunction('name', 'FunctionName');
```