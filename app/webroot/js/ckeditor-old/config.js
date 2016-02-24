/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
$currentUrl = location.href;
CKEDITOR.editorConfig = function( config )
{

	config.filebrowserBrowseUrl = 'http://localhost/anjungan-sains/js/ckeditor/filemanager/index.html';
	config.filebrowserImageBrowseUrl = 'http://localhost/anjungan-sains/js/ckeditor/filemanager/index.html?type=Images';
	config.filebrowserFlashBrowseUrl = 'http://localhost/anjungan-sains/js/ckeditor/filemanager/index.html?type=Flash';
	config.filebrowserUploadUrl = 'http://localhost/anjungan-sains/js/ckeditor/filemanager/connectors/php/filemanager.php';
	config.filebrowserImageUploadUrl = 'http://localhost/anjungan-sains/js/ckeditor/filemanager/connectors/php/filemanager.php?command=QuickUpload&type;=Images';
	config.filebrowserFlashUploadUrl = 'http://localhost/anjungan-sains/js/ckeditor/filemanager/connectors/php/filemanager.php?command=QuickUpload&type;=Flash';
};
