<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    //width: 300,
    //height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>
<form action="" method="post" name="stf" enctype="multipart/form-data">
				<table cellPadding=1 cellSpacing=5 border=1 width="100%" bgcolor="#FFFFFF">
					
						<input type="hidden" value=<?php echo HTML::chars($onerow[0]['id']);?> name="id">
						
							<tr>
								<td colspan="2">
								<strong>режим редактирования записи с id=<?php echo $onerow[0]['id'];?></strong>
								</td>
							</tr>
							
							<tr>
								<td width="10%">
								Длинное описание
								</td>
								<td>
								<textarea rows="10" cols="45" name="ItemSrc"><?php echo HTML::chars($onerow[0]['src']);?></textarea>
								
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
								<input type="submit" value="Сохранить" name="save" >&nbsp;&nbsp;&nbsp;
								
								<a style="float:right;" href="<?php echo URL::site('admin/about'); ?>"><input type="button" value="Закрыть" name="close"></a>
								</td>
							</tr>
						
				</table>
</form>			
