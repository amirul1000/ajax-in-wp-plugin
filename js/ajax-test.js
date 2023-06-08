// JavaScript Document
var jq = jQuery.noConflict();

function read_ajax_data(){	
	 var data = {   
	                cmd    : 'read',
					param1   : jq('#param1').val(),
					param2   : jq('#param2').val(),
				};
				
	jq.post(the_ajax_script.ajaxurl,
		   data, 
		   function(response) {
					  obj = JSON.parse(response);
					  jq('#result').val(obj[0])
				 });
}