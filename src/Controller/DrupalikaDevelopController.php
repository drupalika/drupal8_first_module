<?php

namespace Drupal\drupalika_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class DrupalikaDevelopController extends ControllerBase {
	
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('First Drupal 8 module developed by Drupalika!'),
    );
  }
  
}

?>