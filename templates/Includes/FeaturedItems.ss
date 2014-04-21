<% if $FeaturedItems %>
	<div class="featured-items">
		<div class="preloader"></div>
		<ul data-orbit>
			<% loop $FeaturedItems %>
				<li>
					<a href="$Link" class="featured-item-$LinkType" <% if $LinkType == 'video' %>data-reveal-id="featured-item-video-$ID"<% end_if %> title="{$Title}">
						$Image
					</a>
				</li>
			<% end_loop %>
		</ul>
	</div>
	<% loop $FeaturedItems %>
		<% if $LinkType == 'video' %>
			<div class="reveal-modal large" id="featured-item-video-$ID">
				$VideoEmbedCode
				<a class="close-reveal-modal">&#215;</a>
			</div>
		<% end_if %>
	<% end_loop %>
<% end_if %>
