<?php
/**
 * @file
 * contains Drupal\rsvplist\Plugin\Block\RSVPBlock
 */
namespace Drupal\rsvplist\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\node\Entity\Node;

/**
 * Class RSVPBlock
 * @Block(
 *   id = "rsvp_block",
 *   admin_label = @Translation("RSVP Block"),
 *   )
 */
class RSVPBlock extends BlockBase
{
  /**
   * {@inheritDoc}
   */
  public function build()
  {
    return \Drupal::formBuilder()->getForm(\Drupal\rsvpform\Form\RSVPForm::class);
  }

  /**
   * {@inheritDoc}
   */
  public function blockAccess(AccountInterface $account)
  {
    /** @var Node $node */
    $node = \Drupal::routeMatch()->getParameter('node');
    $nid = null;
    if ($node) {
      $nid = $node->nid->value;
    }
    if (is_numeric($nid)) {
      return AccessResult::allowedIfHasPermission($account, 'view rsvplist');
    }
    return AccessResult::forbidden();
  }
}
