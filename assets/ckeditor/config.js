/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ){
config.filebrowserBrowseUrl = 'http://SananProfile/assets/kcfinder/browse.php?type=files';
config.filebrowserImageBrowseUrl = 'http://SananProfile/assets/kcfinder/browse.php?type=images';
config.filebrowserFlashBrowseUrl = 'http://SananProfile/assets/kcfinder/browse.php?type=flash';
config.filebrowserUploadUrl = 'http://SananProfile/assets/kcfinder/upload.php?type=files';
config.filebrowserImageUploadUrl = 'http://SananProfile/assets/kcfinder/upload.php?type=images';
config.filebrowserFlashUploadUrl = 'http://SananProfile/assets/kcfinder/upload.php?type=flash';
};


CKEDITOR.replace('editor1' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>'
    });