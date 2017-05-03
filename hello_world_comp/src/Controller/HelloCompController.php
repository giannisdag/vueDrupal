<?php

namespace Drupal\hello_world_comp\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloCompController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    $test = ' <div id="app"></div>';
    return [
    '#type' => 'inline_template',
    '#template' => $test,
     ];
  }

}
