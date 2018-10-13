<?php
	/**
	 * Shopware 5 Plugin
	 * Move menu bar in the header
	 * Copyright @ 
	 * Juliane Anders
	 * http://store.shopware.com
	 */

namespace gwenCinema;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class gwenCinema extends \Shopware\Components\Plugin {

  /**
   * @param ContainerBuilder $container
   */
  public function build(ContainerBuilder $container) {
    $container->setParameter('gwen_cinema.plugin_dir', $this->getPath());
    parent::build($container);
  }
}