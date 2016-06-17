<?php
/**
 * Represents a large image that links to
 * - page on the site
 * - external link
 * - video (opened in a lightbox)
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 10.16.2013
 * @package featureditems
 */
class FeaturedItem extends DataObject
{
    private static $db = array(
        'Title'          => 'Varchar(255)',
        'LinkType'      => "Enum('internal,external,video','internal')",
        'ExternalLink'  => 'Varchar(255)',
        'Sort'          => 'Int',
        'OpensInNewTab' => 'Boolean',
    );

    private static $has_one = array(
        'Owner'         => 'Page',
        'InternalLink'  => 'SiteTree',
        'Image'         => 'Image',
    );

    private static $extensions = array('LinksToVideo');

    private static $default_sort = 'Sort';

    private static $summary_fields = array(
        'Image.CMSThumbnail' => 'Image',
        'LinkType'      => 'Type',
        'Link'          => 'Link',
    );

    private static $link_type_options = array(
        'internal'  => 'Internal Page/Product',
        'external'  => 'External Website',
        'video'     => 'Video',
    );


    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        return new FieldList(array(
            UploadField::create('Image', 'Image'),
            OptionsetField::create('LinkType', 'Link Type', self::$link_type_options),
            TreeDropdownField::create('InternalLinkID', 'Link to Page/Product', 'SiteTree', 'ID', 'MenuTitle'),
            TextField::create('ExternalLink', 'Link to URL'),
            CompositeField::create($this->getCMSFieldsForVideo()),
            CheckboxField::create('OpensInNewTab','Open link in new tab?'),
        ));
    }


    /**
     * @return string
     */
    public function getLink()
    {
        switch ($this->LinkType) {
            case 'external':    return $this->ExternalLink;
            case 'video':       return $this->VideoURL;
            default:
                $p = $this->InternalLink();
                return ($p && $p->exists()) ? $p->Link() : '';
        }
    }

    public function Link()
    {
        return $this->getLink();
    }

    public function getTarget(){
        return $this->OpensInNewTab ? 'target="_blank"' : '';
    }
}
