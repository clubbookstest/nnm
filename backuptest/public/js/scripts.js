$(document).ready(function() {
	/*$('.AddRecord').click(function(){
		$('.MainContent').hide();
		$('#InsAndUpd').show();
		
	});
	*/
	
	$(".check").change(function(){
		$(this).val(this.checked ? 1 : 0);
	});
	$("#checkmain").change(function(){
		$(this).val(this.checked ? 1 : 0);
	});
	$("#checkpage").change(function(){
		$(this).val(this.checked ? 1 : 0);
	});
		
});
//$(document).foundation();
function saveIt(){
	var fr = document.forms.stf;
	if(confirm('Save?'))
	{
		fr.add.value = 1;
		fr.submit();
	}
}
function remov(val){
	var fr = document.forms.mainForm;
	if(confirm('Удалить?'))
	{
		fr.rem.value = val;
		fr.submit();
	}
}
function edit(val){
	//alert(val);
	var fr = document.forms.mainForm;
	fr.edit.value = val;
	//fr.submit();
	
}
 


