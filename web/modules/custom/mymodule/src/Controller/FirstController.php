<?php

/**
 * @file
 * Contains \Drupal\mymodule\Controller\FirstController
 *
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {

  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Dit is mijn custom pagina voor een module, voor mijn custom module heb ik de tekst op de filter knop veranderd naar Zoek ipv Apply')
    );
  }

}
