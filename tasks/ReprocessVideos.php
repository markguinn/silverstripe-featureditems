<?php
/**
 * Loops through all videos and tries to figure out the ID and thumbnails.
 * Useful if the url format changes or an import went wrong.
 *
 * @usage
 * framework/sake dev/tasks/ReprocessVideosTask [class=Linkedvideo]
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 08.13.2014
 * @package featureditems
 * @subpackage tasks
 */
class ReprocessVideosTask extends BuildTask
{
	protected $title = 'Reprocess Linked Videos';
	protected $description = 'Loops through all videos and tries to figure out the ID and thumbnails.';

	public function run($request) {
		$class = isset($_GET['class']) ? $_GET['class'] : 'LinkedVideo';
		$list = DataObject::get($class);
		foreach ($list as $obj) {
			echo "Processing video {$obj->ID}" . (php_sapi_name()=='cli' ? "\n" : "<br>");
			$obj->processVideoURL();
			$obj->write();
		}

		echo "Done\n\n";
	}
}