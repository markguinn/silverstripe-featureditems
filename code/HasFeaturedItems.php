<?php
/**
 * Can be added to any page type to give it a "featured items" tab
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 10.16.2013
 * @package featureditems
 */
class HasFeaturedItems extends DataExtension
{
	private static $has_many = array(
		'FeaturedItems' => 'FeaturedItem',
	);

	/**
	 * @param FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields) {
		$gridCfg = new GridFieldConfig_RecordEditor(1000); // we use RecordEditor instead of RelationEditor so it deletes instead of unlinks
		if (class_exists('GridFieldOrderableRows')) $gridCfg->addComponent(new GridFieldOrderableRows('Sort'));
		$grid    = new GridField('FeaturedItems', 'Featured Items', $this->owner->FeaturedItems(), $gridCfg);
		$fields->addFieldToTab('Root.FeaturedItems', $grid);
	}
}
