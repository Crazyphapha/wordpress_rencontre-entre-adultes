var pagination={
    title:"Pagination Shortcode",
    id :'oscitas-form-pagination',
    pluginName: 'pagination',
    showprobtn: false
};
(function() {
    _create_tinyMCE_options(pagination);
})();

function ebs_return_html_pagination(pluginObj){
    var form = jQuery('<div id="'+pluginObj.id+'" class="oscitas-container" title="'+pluginObj.title+'"><table id="oscitas-table" class="form-table">\
			 <tr>\
        <th class="aligncenter"><img src="'+ebs_url+'shortcode/pagination/screenshot.jpg" /></th>\
        </tr>\
		</table>\
		</div>');
    return form;
}


function create_oscitas_pagination(pluginObj){
}