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

//        $search = $this->get('shopware_search.product_search');

//        $context = $this->get('shopware_storefront.context_service')->getProductContext();

//        $mapper = $this->get('query_alias_mapper');
//        $mapper->replaceShortRequestQueries($this->Request());

//        $criteria = $this->createListingCriteria($context);
//	$criteria->addCondition(new CloseoutCondition());
		
//        $searchResult = $search->search($criteria, $context);
//        $products = $this->convertToTemplateFormat($searchResult->getProducts());


//        $data = array(
//            'sArticles' => $products,
//            'criteria' => $criteria,
//            'facets' => $searchResult->getFacets(),
//            'sPage' => $this->Request()->getParam('sPage', 1),
//            'pageIndex' => $this->Request()->getParam('sPage', 1),
//            'pageSizes' => explode('|', $this->get('config')->get('numberArticlesToShow')),
//            'sPerPage' => $criteria->getLimit(),
//            'sNumberArticles' => $searchResult->getTotalCount(),
//            'sSort' => $this->Request()->getParam('sSort', $this->get('config')->get('defaultListingSorting')),
//            'shortParameters' => $mapper->getQueryAliases(),
//            'showListing' => true
//        );

        $this->View()->assign('title', 'Demo Video');
    }
  }

