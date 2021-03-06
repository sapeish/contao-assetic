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


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_assetic_filter']       = 'ContaoAssetic\Model\FilterModel';
$GLOBALS['TL_MODELS']['tl_assetic_filter_chain'] = 'ContaoAssetic\Model\FilterChainModel';

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['system']['assetic_config'] = array(
    'tables'     => array('', 'tl_assetic_filter', 'tl_assetic_filter_chain'),
    'callback'   => 'ContaoAssetic\AsseticConfigModule',
    'icon'       => 'system/modules/assetic/assets/images/assetic.png',
    'stylesheet' => 'system/modules/assetic/assets/css/backend.css',
);

/**
 * Assetic compiler filter
 */
$GLOBALS['ASSETIC']['compiler']['coffee']          = 'Assetic\Filter\CoffeeScriptFilter';
$GLOBALS['ASSETIC']['compiler']['compass']         = 'Assetic\Filter\CompassFilter';
$GLOBALS['ASSETIC']['compiler']['cssCrush']        = 'Assetic\Filter\CssCrushFilter';
$GLOBALS['ASSETIC']['compiler']['cssEmbed']        = 'Assetic\Filter\CssEmbedFilter';
$GLOBALS['ASSETIC']['compiler']['cssImport']       = 'Assetic\Filter\CssImportFilter';
$GLOBALS['ASSETIC']['compiler']['jsImport']        = 'ContaoAssetic\Filter\JsImportFilter';
$GLOBALS['ASSETIC']['compiler']['cssRewrite']      = 'Assetic\Filter\CssRewriteFilter';
$GLOBALS['ASSETIC']['compiler']['dart']            = 'Assetic\Filter\DartFilter';
$GLOBALS['ASSETIC']['compiler']['gss']             = 'Assetic\Filter\GssFilter';
// $GLOBALS['ASSETIC']['compiler']['handlebars']      = 'Assetic\Filter\HandlebarsFilter';
$GLOBALS['ASSETIC']['compiler']['less']            = 'Assetic\Filter\LessFilter';
$GLOBALS['ASSETIC']['compiler']['lessphp']         = 'Assetic\Filter\LessphpFilter';
// $GLOBALS['ASSETIC']['compiler']['phpCssEmbed']     = 'Assetic\Filter\PhpCssEmbedFilter';
$GLOBALS['ASSETIC']['compiler']['scssphp']         = 'Assetic\Filter\ScssphpFilter';
$GLOBALS['ASSETIC']['compiler']['stylus']          = 'Assetic\Filter\StylusFilter';
$GLOBALS['ASSETIC']['compiler']['sass']            = 'Assetic\Filter\Sass\SassFilter';
$GLOBALS['ASSETIC']['compiler']['scss']            = 'Assetic\Filter\Sass\ScssFilter';

/**
 * Assetic minimizer filter
 */
$GLOBALS['ASSETIC']['minimizer']['cssMin']     = 'Assetic\Filter\CssMinFilter';
$GLOBALS['ASSETIC']['minimizer']['jsMin']      = 'Assetic\Filter\JSMinFilter';
$GLOBALS['ASSETIC']['minimizer']['jsMinPlus']  = 'Assetic\Filter\JSMinPlusFilter';
$GLOBALS['ASSETIC']['minimizer']['packager']   = 'Assetic\Filter\PackagerFilter';
// $GLOBALS['ASSETIC']['minimizer']['packer']     = 'Assetic\Filter\PackerFilter';
$GLOBALS['ASSETIC']['minimizer']['uglifyCss']  = 'Assetic\Filter\UglifyCssFilter';
$GLOBALS['ASSETIC']['minimizer']['uglifyJs']   = 'Assetic\Filter\UglifyJsFilter';
$GLOBALS['ASSETIC']['minimizer']['closureApi'] = 'Assetic\Filter\GoogleClosure\CompilerApiFilter';
$GLOBALS['ASSETIC']['minimizer']['closureJar'] = 'Assetic\Filter\GoogleClosure\CompilerJarFilter';
$GLOBALS['ASSETIC']['minimizer']['yuiCss']     = 'Assetic\Filter\Yui\CssCompressorFilter';
$GLOBALS['ASSETIC']['minimizer']['yuiJs']      = 'Assetic\Filter\Yui\JsCompressorFilter';

/**
 * Assetic css compatible filters
 */
$GLOBALS['ASSETIC']['css'][] = 'compass';
$GLOBALS['ASSETIC']['css'][] = 'cssCrush';
$GLOBALS['ASSETIC']['css'][] = 'cssEmbed';
$GLOBALS['ASSETIC']['css'][] = 'cssImport';
$GLOBALS['ASSETIC']['css'][] = 'cssMin';
$GLOBALS['ASSETIC']['css'][] = 'cssRewrite';
$GLOBALS['ASSETIC']['css'][] = 'gss';
$GLOBALS['ASSETIC']['css'][] = 'less';
$GLOBALS['ASSETIC']['css'][] = 'lessphp';
// $GLOBALS['ASSETIC']['css'][] = 'phpCssEmbed';
$GLOBALS['ASSETIC']['css'][] = 'scssphp';
$GLOBALS['ASSETIC']['css'][] = 'stylus';
$GLOBALS['ASSETIC']['css'][] = 'uglifyCss';
$GLOBALS['ASSETIC']['css'][] = 'sass';
$GLOBALS['ASSETIC']['css'][] = 'scss';
$GLOBALS['ASSETIC']['css'][] = 'yuiCss';

/**
 * Assetic js compatible filters
 */
$GLOBALS['ASSETIC']['js'][] = 'jsImport';
$GLOBALS['ASSETIC']['js'][] = 'coffee';
$GLOBALS['ASSETIC']['js'][] = 'dart';
// $GLOBALS['ASSETIC']['js'][] = 'handlebars';
$GLOBALS['ASSETIC']['js'][] = 'jsMin';
$GLOBALS['ASSETIC']['js'][] = 'jsMinPlus';
$GLOBALS['ASSETIC']['js'][] = 'packager';
// $GLOBALS['ASSETIC']['js'][] = 'packer';
$GLOBALS['ASSETIC']['js'][] = 'uglifyJs';
$GLOBALS['ASSETIC']['js'][] = 'closureApi';
$GLOBALS['ASSETIC']['js'][] = 'closureJar';
$GLOBALS['ASSETIC']['js'][] = 'yuiJs';


/**
 * Assetic Images filter (currently not used)
 */
/*
$GLOBALS['ASSETIC']['IMG']['jpegoptim'] = 'Assetic\Filter\JpegoptimFilter';
$GLOBALS['ASSETIC']['IMG']['jpegtran']  = 'Assetic\Filter\JpegtranFilter';
$GLOBALS['ASSETIC']['IMG']['optiPng']   = 'Assetic\Filter\OptiPngFilter';
$GLOBALS['ASSETIC']['IMG']['pngout']    = 'Assetic\Filter\PngoutFilter';
*/
