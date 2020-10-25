<?php

/**
 *
 * Forms for Kirby 3
 *
 * @version   0.0.1
 * @author    James Steel <https://hashandsalt.com>
 * @copyright Hash&Salt <https://hashandsalt.com>
 * @link      https://github.com/HashandSalt/kirby3-forms
 * @license   MIT <http://opensource.org/licenses/MIT>
 */

namespace HashAndSalt\Slate;

use Kirby\Cms\App;

App::plugin('hashandsalt/forms', [

  'functions' => require __DIR__ . '/lib/functions.php',

  'snippets' => [
    'forms/input'  => __DIR__ . '/snippets/forms/input.php',
    'forms/select'  => __DIR__ . '/snippets/forms/select.php',
    'forms/textarea'  => __DIR__ . '/snippets/forms/textarea.php',
    'forms/formMsg'  => __DIR__ . '/snippets/forms/formMsg.php',
  ],

]);
