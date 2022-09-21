<?php

namespace Websovn\Facades;

use Illuminate\Support\Facades\Request as FacadesRequest;

class Request extends FacadesRequest
{
	protected static function resolveFacadeInstance($name)
	{
		$class = \Illuminate\Http\Request::capture();
		static::swap($class);

		return parent::resolveFacadeInstance($name);
	}
}
