<?php
	namespace Digitouch\AdForm\Service\Order;

	use Digitouch\AdForm\AbstractService;
	
	class Orders extends AbstractService {

	    /**
	     * @param string $endPoint
	     */
	    protected $endPoint = 'http://api.adform.com/v1/buyer/orders';

	    /**
	     * @param string $method
	     */
	    protected $method = 'GET';

	    /**
	     * @param string $responseVar
	     */
	    protected $responseVar = 'orders';
	    protected $mandatoryParams = ['campaignId'];
    
	}