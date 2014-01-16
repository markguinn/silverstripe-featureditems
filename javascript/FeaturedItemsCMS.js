/**
 * Javascript for editing featured items pricing.
 * Shows/hides fields based on the link type
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 10.16.2013
 * @package featureditems
 * @subpackage javascript
 */
(function ($, window, document, undefined) {
	'use strict';

	function updateFeaturedItemFields(){
		if (jQuery('#LinkType input').length > 0) {
			
			if($('#Form_ItemEditForm_LinkType_internal').length > 0) {
				jQuery('#InternalLinkID').toggle($('#Form_ItemEditForm_LinkType_internal')[0].checked);
			}
			
			if($('#Form_ItemEditForm_LinkType_external').length > 0) {
				jQuery('#ExternalLink').toggle($('#Form_ItemEditForm_LinkType_external')[0].checked);
			}

			// this is a super-dodgy way to get to the video fields, but it's the only way I can think of since it doesn't have an id

			if($('#Form_ItemEditForm_LinkType_video').length > 0) {
				jQuery('#ExternalLink').next().toggle($('#Form_ItemEditForm_LinkType_video')[0].checked);
			}
		}
	}

	$(function(){
		updateFeaturedItemFields();
		$(document.body)
			.on('click', '#LinkType input', updateFeaturedItemFields)
			.ajaxSuccess(updateFeaturedItemFields)
		;
	});
}(jQuery, this, this.document));
