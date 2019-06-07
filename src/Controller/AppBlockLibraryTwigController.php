<?php 
//Calling from the Controller
/**
* @file
 * Contains \Drupal\js_app_block\Controller\AppBlockLibraryTwigController.
*/
namespace Drupal\js_app_block\Controller;

use Drupal\Core\Controller\ControllerBase;

class AppBlockLibraryTwigController extends ControllerBase {
  public function content() {

    return array(
      '#theme' => 'field__block_content__field_app_library__javascript_app_block',
    );

  }
}