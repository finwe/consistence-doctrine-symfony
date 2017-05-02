<?php

declare(strict_types = 1);

namespace Consistence\Doctrine\SymfonyBundle\DependencyInjection;

class DoctrineBundleRequiredException extends \Consistence\PhpException implements \Consistence\Doctrine\SymfonyBundle\DependencyInjection\Exception
{

	public function __construct(\Throwable $previous = null)
	{
		parent::__construct('DoctrineBundle must be registered for this bundle to work', $previous);
	}

}
