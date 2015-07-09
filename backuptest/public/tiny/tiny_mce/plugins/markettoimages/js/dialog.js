tinyMCEPopup.requireLangPack();

var MarkettoImagesDialog = {
	/*init : function() {
		var f = document.forms[1];

		// Get the selected contents as text and place it in the input
		f.someval.value = tinyMCEPopup.editor.selection.getContent({format : 'text'});
		f.somearg.value = tinyMCEPopup.getWindowArg('some_custom_arg');
	},

	insert : function() {
		// Insert the contents from the input into the document
		tinyMCEPopup.editor.execCommand('mceInsertContent', false, document.forms[1].someval.value);
		tinyMCEPopup.close();
	},*/
	
	inProgress : function() {
		document.getElementById("upload_form_container").style.display = 'none';
		document.getElementById("upload_in_progress").style.display = 'block';
		document.getElementById("upload_infobar").style.display = 'none';
	},
	
	uploadFinish : function(result) {
		//alert(result.filename);
		if (result.resultCode == 'failed')
		{
			document.getElementById("upload_in_progress").style.display = 'none';
			document.getElementById("upload_infobar").style.display = 'block';
			document.getElementById("upload_infobar").innerHTML = result.result;
			document.getElementById("upload_form_container").style.display = 'block';
		}
		else
		{
			document.getElementById("upload_in_progress").style.display = 'none';
			document.getElementById("upload_infobar").style.display = 'block';
			document.getElementById("upload_infobar").innerHTML = result.result;
			tinyMCEPopup.editor.execCommand('mceInsertContent', false, '<img src="' + result.filename +'" />');
			tinyMCEPopup.close();
		}
	}

};

tinyMCEPopup.onInit.add(MarkettoImagesDialog.init, MarkettoImagesDialog);
