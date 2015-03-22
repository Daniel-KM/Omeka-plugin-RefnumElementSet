<?php
/**
 * refNum Element Set
 *
 * Creates a file element set for refNum, a standard for digitalized documents,
 * especially books and manuscripts.
 *
 * @note Are added only metadata that can't be replaced by a Dublin Core
 * element and that are useful for Omeka.
 *
 * @copyright Daniel Berthereau, 2012-2014
 * @license http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
 * @see http://bibnum.bnf.fr/refNum
 */

/**
 * The Refnum Element Set plugin.
 * @package Omeka\Plugins\RefnumElementSet
 */
class RefnumElementSetPlugin extends Omeka_Plugin_AbstractPlugin
{
    const DEFAULT_ELEMENT_SET = 'Item Type Metadata';

    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
        'install',
        'upgrade',
        'uninstall',
    );

    /**
     * Installs the plugin.
     */
    public function hookInstall()
    {
        // Load elements to add.
        require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'elements.php';

        // Checks.
        if (isset($elementSetMetadata) && !empty($elementSetMetadata)) {
            $elementSetName = $elementSetMetadata['name'];

            // Don't install if the element set already exists.
            if ($this->_getElementSet($elementSetName)) {
                throw new Exception('An element set by the name "' . $elementSetName . '" already exists. You must delete that element set before to install this plugin.');
            }
        }

        // Process.
        if (isset($elementSetMetadata) && !empty($elementSetMetadata)) {
            insert_element_set($elementSetMetadata, $elements);
        }
    }

    /**
     * Upgrade the plugin.
     */
    public function hookUpgrade($args)
    {
        $oldVersion = $args['old_version'];
        $newVersion = $args['new_version'];

        if (version_compare($oldVersion, '2.1', '<')) {
            throw new Exception('No upgrade can be done automatically with release prior to 2.1. See ReadMe.');
        }

        if (version_compare($oldVersion, '2.2', '<')) {
            // Load elements to update.
            require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'elements.php';

            // Manage new names exceptions.
            foreach (array(
                    "Numéro d'ordre" => 'Numéro d’ordre',
                    "Support d'origine" => 'Support d’origine',
                ) as $elementName => $newElementName) {
                $element = $this->_db->getTable('Element')->findByElementSetNameAndElementName($elementSetMetadata['name'], $elementName);
                if ($element) {
                    $element->name = $newElementName;
                    $element->save();
                }
            }

            $this->_updateElements();
        }

        if (version_compare($oldVersion, '2.2.1', '<')) {
            // Load elements to update.
            require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'elements.php';

            // Manage new names exceptions.
            foreach (array(
                    'Identifiant du document' => 'Identifiant refNum',
                    'Vue multiple' => 'Nombre vues',
                    'Position de la vue' => 'Position de la page',
                ) as $elementName => $newElementName) {
                $element = $this->_db->getTable('Element')->findByElementSetNameAndElementName($elementSetMetadata['name'], $elementName);
                if ($element) {
                    $element->name = $newElementName;
                    $element->save();
                }
            }

            $this->_updateElements();
        }
    }

    /**
     * Update any changes in elements (except order).
     */
    protected function _updateElements()
    {
        // Load elements.
        require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'elements.php';

        $elementSet = get_record('ElementSet', array('name' => $elementSetMetadata['name']));

        // Update or remove current elements.
        $currentElements = $elementSet->getElements();
        foreach ($currentElements as $currentElement) {
            $flagElement = false;
            foreach ($elements as $order => $element) {
                // Update existing.
                if ($currentElement->name == $element['name']) {
                    foreach ($element as $elementProperty) {
                        $currentElement->$elementProperty = $elementProperty;
                    }
                    // Order starts from one.
                    // $currentElement->order = ++$order;
                    $currentElement->save();
                    $flagElement = true;
                    break;
                }
            }
            // Remove removed elements.
            if (!$flagElement) {
                $currentElement->delete();
            }
        }

        // Add new elements.
        $currentElements = $elementSet->getElements();
        foreach ($elements as $order => $element) {
            $flagElement = false;
            foreach ($currentElements as $currentElement) {
                if ($currentElement->name == $element['name']) {
                    $flagElement = true;
                    break;
                }
            }
            if (!$flagElement) {
                // Order starts from one.
                // $element['order'] = ++$order;
                $elementSet->addElements(array($element));
                $elementSet->save();
            }
        }
    }

    /**
     * Uninstalls the plugin.
     */
    public function hookUninstall()
    {
        // Load elements to remove.
        require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'elements.php';

        if (isset($elementSetMetadata) && !empty($elementSetMetadata)) {
            $elementSetName = $elementSetMetadata['name'];
            $this->_deleteElementSet($elementSetName);
        }
    }

    /**
     * Helper to get an element set.
     */
    private function _getElementSet($elementSetName)
    {
        return $this->_db
            ->getTable('ElementSet')
            ->findByName($elementSetName);
    }

    /**
     * Helper to remove an element.
     */
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
