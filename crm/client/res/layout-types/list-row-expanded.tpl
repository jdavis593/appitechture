<li data-id="{{model.id}}" class="list-group-item">	
<% if (layout.right) { %>
<div class="pull-right right">
	{{{<%= layout.right.name %>}}}
</div>	
<% } %>
<% _.each(layout.rows, function (row, key) { %>
	<div class="expanded-row">
	<% _.each(row, function (defs, key) { %>
		<span class="cell cell-<%= defs.name %>"><%
				var tag = 'tag' in defs ? defs.tag : false;
				if (tag) {
					print( '<' + tag);		
					if ('id' in defs) {
						print(' id="'+defs.id+'"');
					}
					if ('class' in defs) {
						print(' class="'+defs.class+'"');
					};
					print('>');
				}			
			%>{{{<%= defs.name %>}}}<%
				if (tag) {
					print( '</' + tag + '>');
				}
		%></span>
	<% }); %>
	</div>
<% }); %>
</li>
