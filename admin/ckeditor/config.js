/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    config.toolbar_Full = [
        { name: 'document', items : [ 'Undo','Redo'] },
        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Subscript','Superscript','Format' ] },
        { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
        { name: 'links', items : [ 'Link','Unlink' ] },
        { name: 'insert', items : [ 'Image','Table','SpecialChar' ] },
        { name: 'tools', items : [ 'Maximize','Source'] }
    ];
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.extraPlugins = 'fontawesome';
    config.contentsCss = 'plugin/fontawesome/font-awesome/css/font-awesome.min.css';
    config.allowedContent = true;
    config.extraPlugins = 'spoiler';

};

