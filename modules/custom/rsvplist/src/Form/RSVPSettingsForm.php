<?php
/**
 * @file
 * Contains \Drupal\rsvplist\Form\RSVPSettingsForm
 */

namespace Drupal\rsvplist\Form;

use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RSVPSettingsForm
 * @package Drupal\rsvplist\Form
 */
class RSVPSettingsForm extends ConfiFormBase
{
  /**
   * {@inheritDoc}
   */
  public function getFormID()
  {
    return 'rsvplist_admin_settings';
  }

  /**
   * {@inheritDoc}
   */
  protected function getEditableConfigNames()
  {
    return [
      'rsvplist.settings'
    ];
  }
}
