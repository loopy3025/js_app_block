<?php

namespace Drupal\react_sub\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class HelloController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
      '#attached' => array(
        'library' =>  array(
          'react_sub/react',
          'react_sub/react-dom',
        ),
      ),
    ];
  }

}