<?php declare(strict_types = 1);

namespace Darkling\ZomatoClient;

use Nette\DI\CompilerExtension;

class ZomatoExtension extends CompilerExtension
{

	/** @var mixed[] */
	private $defaultConfig = [
		'userKey' => null,
	];

	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$config = $this->validateConfig($this->defaultConfig);

		if ($config['userKey'] === null || $config['userKey'] === '') {
			throw new ZomatoExtensionException();
		}

		$builder->addDefinition($this->prefix('zomatoClient'))
			->setFactory(ZomatoClient::class)
			->setArguments($config);
	}

}
