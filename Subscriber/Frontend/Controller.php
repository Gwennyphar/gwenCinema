<?php

	/**
	 * Shopware 5 Plugin
	 * Controller
	 * Copyright @ 
	 * Juliane Anders
	 * http://store.shopware.com
	 */

namespace gwenCinema\Subscriber\Frontend;

use Enlight\Event\SubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Controller implements SubscriberInterface {

  /**
   * @var type ContainerInterface
   */
  private $container;
  
  /**
   * @var type \Enlight_Plugin_Bootstrap_Config
   */
  private $pluginConfig;

  /**
   * @param ContainerInterface $container
   */
  public function __construct(ContainerInterface $container){
    $this->container = $container;
    $this->pluginConfig = $this->container->get('shopware.plugin.cached_config_reader')->getByPluginName('gwenCinema', $this->container->get('Shop'));
  }

  /**
   * subscriber events
   * @return type
   */
  public static function getSubscribedEvents() {
    return [
      'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onPostDispatchFrontend',
    ];
  }

  /**
   * @param \Enlight_Event_EventArgs $args
   * @return type
   */
  public function onPostDispatchFrontend(\Enlight_Event_EventArgs $args) {
    $view = $args->getSubject()->View();
    $request = $args->getSubject()->Request();
    $response = $args->getSubject()->Response();

    //Check if there is a template and if an exception has occured
    if(!$request->isDispatched()||$response->isException()||!$view->hasTemplate()) {
      return;
    }

    /**
     * Check the availability of the plugin for the current store
     */
    if(!$this->pluginConfig['gwen_plugin_io']) {
      return;
    }
    
    /**
     * Check if page has title
     */
    if($this->pluginConfig['gwen_controller_page']) {
      $view->assign('gwen_controller_page', $this->pluginConfig['gwen_controller_page'] );
    }
    
    /**
     * Check if header has title
     */
    if($this->pluginConfig['gwen_title']) {
      $view->assign('gwen_title', $this->pluginConfig['gwen_title'] );
    }
    
    /**
     * Check if youtube player has id
     */
    if($this->pluginConfig['gwen_ytp_id']) {
      $ytpId = 'https://www.youtube-nocookie.com/embed/'.$this->pluginConfig['gwen_ytp_id'];
      $view->assign('gwen_ytp_url', $ytpId);
    }

    /**
     * Add template to the directory plugin
     */
    $view->addTemplateDir($this->container->getParameter('gwen_cinema.plugin_dir') . '/Resources/Views');
  }
}