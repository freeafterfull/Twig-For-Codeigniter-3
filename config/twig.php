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

/*
|--------------------------------------------------------------------------
| Codeigniter helpers
|--------------------------------------------------------------------------
*/
$config['ci_helpers'] = [
    // Array Helpers
    ['element', FALSE],
    ['elements', FALSE],
    ['random_element', FALSE],

    // Captcha Heplers
    ['create_captcha', TRUE],

    // Cookie Helpers
    ['set_cookie', FALSE],
    ['get_cookie', FALSE],
    ['delete_cookie', FALSE],

    // Date Helpers
    ['now', FALSE],
    ['mdate', FALSE],
    ['local_to_gmt', FALSE],
    ['gmt_to_local', FALSE],
    ['mysql_to_unix', FALSE],
    ['unix_to_human', FALSE],
    ['human_to_unix', FALSE],
    ['nice_date', FALSE],
    ['timespan', FALSE],
    ['days_in_month', FALSE],
    ['date_range', FALSE],
    ['timezones', FALSE],
    ['timezone_menu', TRUE],

    // Directory Helpers
    ['directory_map', FALSE],

    // Download Helpers
    ['force_download', FALSE],

    // File Helpers
    ['write_file', FALSE],
    ['delete_files', FALSE],
    ['get_filenames', FALSE],
    ['get_dir_file_info', FALSE],
    ['get_file_info', FALSE],
    ['get_mime_by_extension', FALSE],
    ['symbolic_permissions', FALSE],
    ['octal_permissions', FALSE],

    // Form Helpers
    ['form_open', TRUE],
    ['form_open_multipart', TRUE],
    ['form_hidden', TRUE],
    ['form_input', TRUE],
    ['form_password', TRUE],
    ['form_upload', TRUE],
    ['form_textarea', TRUE],
    ['form_dropdown', TRUE],
    ['form_multiselect', TRUE],
    ['form_fieldset', TRUE],
    ['form_fieldset_close', TRUE],
    ['form_checkbox', TRUE],
    ['form_radio', TRUE],
    ['form_label', TRUE],
    ['form_submit', TRUE],
    ['form_reset', TRUE],
    ['form_button', TRUE],
    ['form_close', TRUE],
    ['set_value', TRUE],
    ['set_select', TRUE],
    ['set_checkbox', TRUE],
    ['set_radio', TRUE],
    ['form_error', TRUE],
    ['validation_error', TRUE],

    // HTML Helpers
    ['heading', TRUE],
    ['img', TRUE],
    ['link_tag', TRUE],
    ['ul', TRUE],
    ['ol', TRUE],
    ['meta', TRUE],
    ['doctype', TRUE],

    // Inflector Helpers
    ['singular', FALSE],
    ['plural', FALSE],
    ['camelize', FALSE],
    ['underscroe', FALSE],
    ['humanize', FALSE],
    ['word_is_countable', FALSE],
    
    // Language Helpers
    ['lang', FALSE],

    // Number Helpers
    ['byte_format', FALSE],

    // Path Helpers
    ['set_realpath', FALSE],

    // Security Helpers
    ['xss_clean', FALSE],
    ['sanitize_filename', FALSE],
    ['strip_image_tag', FALSE],
    ['encode_php_tags', FALSE],
    
    // String Helpers
    ['increment_string', FALSE],
    ['alternator', FALSE],
    ['reducdouble_slashes', FALSE],
    ['strip_slashes', FALSE],
    ['reduce_multiple', FALSE],
    ['quotes_to_entities', FALSE],
    ['strip_quotes', FALSE],

    // Text Helpers
    ['word_limiter', FALSE],
    ['character_limiter', FALSE],
    ['ascii_to_entities', FALSE],
    ['convert_accented_charecters', FALSE],
    ['word_censor', FALSE],
    ['highlight_code', FALSE],
    ['highlight_phrase', TRUE],
    ['word_wrap', FALSE],
    ['ellipsize', FALSE],

    // Typography Helpers
    ['auto_typography', FALSE],
    ['nl2br_expept_pre', TRUE],
    ['entity_decode', FALSE],

    // URL Helpers
    ['site_url', FALSE],
    ['base_url', FALSE],
    ['current_url', FALSE],
    ['uri_string', FALSE],
    ['index_page', FALSE],
    ['anchor', TRUE],
    ['anchor_popup', TRUE],
    ['mailto', TRUE],
    ['auto_link', FALSE],
    ['url_title', FALSE],
    ['prep_url', FALSE],
    ['redirect', FALSE],

    // XML Helpers
    ['xml_convert', TRUE],
];
