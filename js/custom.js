/* Put your custom Javascript here */
$(document).ready(function()
{
	$('#ffdate').datepicker(
	{
		altField: '#date_selected',
		altFormat: 'yy-mm-dd',
		appendText: ' (mm/dd/yyyy)'
	});
	$('#testdatetime').datetimepicker({
		format: 'yyyy-mm-dd hh:ii:ss',
		todayBtn: 'linked',
		clearBtn: true,
		autoclose: true
	});
	$('#testcolor').prop('value', '#0080ff');
	$('#colorspan').text(' ' + $('#testcolor').prop('value'));
	$('#rangevalue').val($('#testrange').prop('value'));
});

function colorChange()
{
	$('#colorspan').text(' ' + $('#testcolor').prop('value'));
	$('#color_div').css('background-color', $('#testcolor').prop('value'));	
	$('#testtextarea').css('color', $('#testcolor').prop('value'));
};

function showRange()
{
	$('#rangevalue').prop('value', $('#testrange').prop('value'));
};