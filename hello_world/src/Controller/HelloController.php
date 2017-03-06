<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
	  $test = '<div id="app"><p>${message}</p>
        <button v-on:click="reverseMessage">Reverse Message</button>        
        </div>';
    return [
    '#type' => 'inline_template',
    '#template' => $test,
     ];
  }

}

