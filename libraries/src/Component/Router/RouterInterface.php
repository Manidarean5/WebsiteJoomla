<?php

/**
 * Joomla! Content Management System
 *
 * @copyright  (C) 2014 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Component\Router;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Component routing interface
 *
 * @since  3.3
 */
interface RouterInterface
{
    /**
     * Prepare-method for URLs
     * This method is meant to validate and complete the URL parameters.
     * For example it can add the Itemid or set a language parameter.
     * This method is executed on each URL, regardless of SEF mode switched
     * on or not.
     *
     * @param   array  $query  An associative array of URL arguments
     *
     * @return  array  The URL arguments to use to assemble the subsequent URL.
     *
     * @since   3.3
     */
    public function preprocess($query);

    /**
     * Build method for URLs
     * This method is meant to transform the query parameters into a more human
     * readable form. It is only executed when SEF mode is switched on.
     *
     * @param   array  &$query  An array of URL arguments
     *
     * @return  array  The URL arguments to use to assemble the subsequent URL.
     *
     * @since   3.3
     */
    public function build(&$query);

    /**
     * Parse method for URLs
     * This method is meant to transform the human readable URL back into
     * query parameters. It is only executed when SEF mode is switched on.
     *
     * @param   array  &$segments  The segments of the URL to parse.
     *
     * @return  array  The URL attributes to be used by the application.
     *
     * @since   3.3
     */
    public function parse(&$segments);
}
