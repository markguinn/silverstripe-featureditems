Silverstripe Featured Items Module
==============

Very simple way to add a slideshow or other set of featured images/links to a page. Includes easy markup for Foundation's Orbit component.


Requirements
------------
- Silverstripe 3.1+ (may work with 3.0, but hasn't been tested)
- Compatible with but does not require Zurb Foundation


Features
--------
- Add HasFeaturedItems extension to any page type
- A featured item contains an image and links to:
	- an external url
	- an internal page
	- a video (youtube or vimeo)
- LinksToVideo extension can be used on any dataobject to make linking to and embedding videos really easy - just
  enter the url and it parses out the video ID and gives you the correct embed code.
- Include FeaturedItems template to get instant markup for use with Zurb Foundation's Orbit and Reveal components
- Could easily be adapted to work with any slideshow component.


Developer(s)
------------
- Mark Guinn <mark@adaircreative.com>

Contributions welcome by pull request and/or bug report.
Please follow Silverstripe code standards.


License (MIT)
-------------
Copyright (c) 2013 Mark Guinn

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the
Software, and to permit persons to whom the Software is furnished to do so, subject
to the following conditions:

The above copyright notice and this permission notice shall be included in all copies
or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.