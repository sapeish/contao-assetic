<?php

/**
 * Assetic for Contao Open Source CMS
 *
 * Copyright (C) 2013 bit3 UG
 *
 * @package Assetic
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://bit3.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace ContaoAssetic\Filter;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;

class NoOpFilter implements FilterInterface
{
	/**
	 * Filters an asset after it has been loaded.
	 *
	 * @param AssetInterface $asset An asset
	 */
	public function filterLoad(AssetInterface $asset)
	{
		// noop
	}

	/**
	 * Filters an asset just before it's dumped.
	 *
	 * @param AssetInterface $asset An asset
	 */
	public function filterDump(AssetInterface $asset)
	{
		// noop
	}
}