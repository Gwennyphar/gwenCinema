<?php

  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  class Shopware_Controllers_Frontend_Video extends Enlight_Controller_Action {

    public function init() {
      $this->View()->addTemplateDir(dirname(__FILE__) . "/../../Views/");
    }

    public function indexAction() {
//      $this->View()->assign('title', 'Demo Video');
    }
  }

