<?php
	namespace Digitouch\AdForm\Service\Campaign;

	use Digitouch\AdForm\AbstractService;
	
	class DirectLineItems {

	    /**
	     * @param string $endPoint
	     */
	    protected $endPoint = 'http://api.adform.com/v1/buyer/direct/lineitems/';

	    /**
	     * @param string $method
	     */
	    protected $method = 'GET';

	    /**
	     * @param string $responseVar
	     */
	    protected $responseVar = 'campaigns';
    
	}