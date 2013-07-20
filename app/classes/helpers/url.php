<?php
namespace helpers;

/**
 * URL Helper Class
 *
 * @package helpers
 * @author Vijay Mahrra <vijay.mahrra@gmail.com>
 * @copyright (c) Copyright 2013 Vijay Mahrra
 * @license GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
 */

class URL extends base {

	/**
	 * Get the base url of the website
	 *
     *
	 * @return string $path the base website url
	 * @author Vijay Mahrra
     */
    public static function base()
    {
    	$f3 = \F3::instance();
        if (preg_match("/(^http[s]?:\/\/[^\/]+)/i", $f3->get('REALM'), $matches)) {
            return $matches[1];
        }
        return false;
    }
}