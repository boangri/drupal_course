<?php
/**
 * @file
 * contains Drupal\rsvplist\Plugin\Block\RSVPBlock
 */
namespace Drupal\rsvplist\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Class RSVPBlock
 * @Block(
 *   id = "rsvp_block",
 *   admin_layer = @Translation("RSVP Block"),
 *   )
 */
class RSVPBlock extends BlockBase
{
  /**
   * {@inheritDoc}
   */
  public function build()
  {
    return ['#markup' => $this->t('My RSVP List Block')];
  }
}
