<?php

/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

$data = $displayData;
$wa   = Factory::getDocument()->getWebAssetManager();
$wa->getRegistry()->addExtensionRegistryFile('plg_editors_tinymce');
$wa->useScript('tinymce')->useScript('plg_editors_tinymce');
?>
<textarea
    name="<?php echo $data->name; ?>"
    id="<?php echo $data->id; ?>"
    cols="<?php echo $data->cols; ?>"
    rows="<?php echo $data->rows; ?>"
    style="width: <?php echo $data->width; ?>; height: <?php echo $data->height; ?>;"
    class="<?php echo empty($data->class) ? 'mce_editable' : $data->class; ?>"
    <?php echo $data->readonly ? ' readonly disabled' : ''; ?>
>
    <?php echo $data->content; ?>
</textarea>
