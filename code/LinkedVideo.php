<?php
/**
 * This is only used with LinksToVideos. It's not needed otherwise.
 * If you're only linking to one video you might as well just include
 * the fields on the object via LinksToVideo. There's nothing saying
 * you couldn't has_one to this though.
 *
 * @method getCMSFieldsForVideo
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 03.20.2014
 * @package featureditems
 */
class LinkedVideo extends DataObject
{
    private static $db = array(
        'Title'     => 'Varchar(255)',
    );

    private static $extensions = array('LinksToVideo');

    public function getCMSFields()
    {
        $fields = new FieldList($this->getCMSFieldsForVideo());
        $fields->unshift(new TextField('Title', 'Title/Label (optional)'));
        return $fields;
    }
}
