<?php declare(strict_types = 1);

namespace Darkling\ZomatoClient;

use Exception;
use Throwable;

class ZomatoExtensionException extends Exception
{

	public function __construct(?Throwable $previous = null)
	{
		parent::__construct('Zomato user api key is not provided. Please use configuration option "userKey: yourKey".', 0, $previous);
	}

}