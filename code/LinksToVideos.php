<?php
/**
 * Adds a many-to-many relationship for videos.
 *
 * Using a m2m instead of has many so that the target class
 * can be automatically inferred.
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 03.20.2014
 * @package featureditems
 */
class LinksToVideos extends DataExtension
{
	private static $many_many = array(
		'Videos' => 'LinkedVideo',
	);

	private static $many_many_extraFields = array(
		'Videos' => array('Sort'  => 'Int')
	);


	/**
	 * @param FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields) {
		$cfg  = new GridFieldConfig_RelationEditor(100);
		if (class_exists('GridFieldOrderableRows')) $cfg->addComponent(new GridFieldOrderableRows('Sort'));
		$grid = new GridField('Videos', 'Videos', $this->owner->Videos(), $cfg);
		$fields->addFieldToTab('Root.Videos', $grid);
	}


	/**
	 * @return DataList
	 */
	public function SortedVideos() {
		return $this->owner->Videos()->sort('Sort');
	}
}