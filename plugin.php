<?php
/**
 * Creates a file element set for refNum, a standard for digitalized documents,
 * especially books and manuscripts (see http://bibnum.bnf.fr/refNum).
 *
 * @note Are added only metadata that can't be replaced by a Dublin Core element
 * and that are useful for École des Ponts.
 *
 * @copyright Daniel Berthereau for École des Ponts ParisTech, 2012
 * @license http://www.cecill.info/licences/Licence_CeCILL_V2-en.txt
 * @package RefnumElementSet
 **/

class RefnumElementSetPlugin extends Omeka_Plugin_Abstract
{
    const ELEMENT_SET_NAME = 'refNum';

    protected $_hooks = array(
        'install',
        'uninstall',
        'admin_append_to_plugin_uninstall_message',
    );

    public function hookInstall()
    {
        // Load elements to add.
        require_once('elements.php');

        // Don't install if an element set already exists.
        if ($this->_getElementSet(self::ELEMENT_SET_NAME)) {
            throw new Exception('An element set by the name "' . self::ELEMENT_SET_NAME . '" already exists. You must delete that element set to install this plugin.');
        }

        insert_element_set($elementSetMetadata, $elements);
    }

    public function hookUninstall()
    {
        $this->_deleteElementSet(self::ELEMENT_SET_NAME);
    }

    /**
     * Warns before the uninstallation of the plugin.
     */
    public function hookAdminAppendToPluginUninstallMessage()
    {
        echo '<p><strong>' . __('Warning') . '</strong>:'
            . __('This will remove all the "' . self::ELEMENT_SET_NAME . '" elements added by this plugin and permanently delete all element texts entered in those fields.')
            . '</p>';
    }

    private function _getElementSet($elementSetName)
    {
        return $this->_db
            ->getTable('ElementSet')
            ->findByName($elementSetName);
    }

    private function _deleteElementSet($elementSetName)
    {
        $elementSet = $this->_getElementSet($elementSetName);

        if ($elementSet) {
            $elements = $elementSet->getElements();
            foreach ($elements as $element) {
                $element->delete();
            }
            $elementSet->delete();
        }
    }
}

/** Installation of the plugin. */
$refnumElementSet = new RefnumElementSetPlugin();
$refnumElementSet->setUp();
