/*
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 WARNING: clear browser's cache after you modify this file.
 If you don't do this, you may notice that browser is ignoring all your changes.
 */
CKEDITOR.editorConfig = function(config) {
  config.indentClasses = [ 'rteindent1', 'rteindent2', 'rteindent3', 'rteindent4' ];

  // [ Left, Center, Right, Justified ]
  config.justifyClasses = [ 'text-left', 'text-center', 'text-right', 'text-justify' ];

  // The minimum editor width, in pixels, when resizing it with the resize handle.
  config.resize_minWidth = 450;

  // Protect PHP code tags (<?...?>) so CKEditor will not break them when
  // switching from Source to WYSIWYG.
  // Uncommenting this line doesn't mean the user will not be able to type PHP
  // code in the source. This kind of prevention must be done in the server
  // side
  // (as does Drupal), so just leave this line as is.
  config.protectedSource.push(/<\?[\s\S]*?\?>/g); // PHP Code

    config.protectedSource.push( /<i[^>]*><\/i>/g );

    // [#1762328] Uncomment the line below to protect <code> tags in CKEditor (hide them in wysiwyg mode).
  // config.protectedSource.push(/<code>[\s\S]*?<\/code>/gi);
  config.extraPlugins = '';

  /*
    * Append here extra CSS rules that should be applied into the editing area.
    * Example:
    * config.extraCss = 'body {color:#FF0000;}';
    */
  config.extraCss = 'body{padding:15px}';

    config.disallowedContent = 'img{width,height}';
  /**
    * Sample extraCss code for the "marinelli" theme.
    */
  if (Drupal.settings.ckeditor.theme == "marinelli") {
    config.extraCss += "body{background:#FFF;text-align:left;font-size:0.8em;}";
    config.extraCss += "#primary ol, #primary ul{margin:10px 0 10px 25px;}";
  }
  if (Drupal.settings.ckeditor.theme == "newsflash") {
    config.extraCss = "body{min-width:400px}";
  }

  /**
    * CKEditor's editing area body ID & class.
    * See http://drupal.ckeditor.com/tricks
    * This setting can be used if CKEditor does not work well with your theme by default.
    */
  config.bodyClass = '';
  config.bodyId = '';
  /**
    * Sample bodyClass and BodyId for the "marinelli" theme.
    */
  if (Drupal.settings.ckeditor.theme == "marinelli") {
    config.bodyClass = 'singlepage';
    config.bodyId = 'primary';
  }

  // Make CKEditor's edit area as high as the textarea would be.
  if (this.element.$.rows > 0) {
    config.height = this.element.$.rows * 20 + 'px';
  }

    // Extra Allowed Content for Bootstrap
    // would be overwrite by config on drupal;
    config.extraAllowedContent = {
        'mark del s ins u small em abbr blockquote footer cite' : true,
        'code kbd pre var samp form': true,
        'label select fieldset': true,
        div: {
            classes: [
                'container', 'container-fluid', 'row',
                'table-responsive',
                'col-xs-*', 'col-sm-*','col-md-*', 'col-lg-*',
                'form-group', 'form-group-lg', 'form-group-sm', 'checkbox', 'radio', 'input-group', 'input-group-addon', 'disabled',
                'has-warning', 'has-error', 'has-success', 'has-feedback',
                'pull-left', 'pull-right', 'center-block',
                'clearfix', 'show', 'hide', 'invisible',
                'visible-xs-*', 'visible-sm-*', 'visible-md-*', 'visible-lg-*', 'hidden-xs', 'hidden-sm', 'hidden-md', 'hidden-lg'
            ]
        },
        table: {
            classes: [
                'table', 'table-striped', 'table-bordered', 'table-hover', 'table-condensed'
            ]
        },
        'td tr th': {
            classes: ['active', 'success', 'info', 'warning', 'danger' ]
        },
        p: {
            classes: [
                'lead',
                'text-left', 'text-center', 'text-right', 'text-justify', 'text-nowrap',
                'text-lowercase', 'text-uppercase', 'text-capitalize',
                'form-control-static', 'help-block',
                'text-muted', 'text-primary', 'text-success', 'text-info', 'text-warning', 'text-danger',
                'bg-primary', 'bg-success', 'bg-info', 'bg-warning', 'bg-danger'
            ]
        },
        span: {
            attributes: 'aria-hidden',
            classes: [
                'small', 'caret', 'em',
            ]
        },
        abbr: {
            classes: ['initialism'],
            attributes: 'title'
        },
        cite: {
            attributes: 'title'
        },
        blockquote: {
            classes: ['blockquote-reverse']
        },
        ul: {
            classes: ['list-unstyled', 'list-inline']
        },
        dl: {
            classes: ['dl-horizontal']
        },
        pre: {
            classes: "pre-scrollable"
        },
        label: {
            attributes: 'for',
            classes: ['sr-only', 'control-label', 'checkbox-inline', 'radio-inline']
        },
        input: {
            attributes: ['type', 'placeholder', 'id', 'name', 'value', 'aria-label', 'readonly', 'aria-describedby']
        },
        form: {
            classes: ['form-inline', 'form-horizontal']
        },
        textarea: {
            attributes: 'rows'
        },
        select: {
            attributes: 'multiple'
        },
        fieldset: {
            attributes: 'disabled'
        },
        'input select': {
            classes: ['form-control', 'input-lg', 'input-sm' ]
        },
        'span div button input': {
            classes: ['btn', 'btn-*', 'active']
        },
        a: {
            classes: 'disabled'
        },
        img: {
            classes: ['img-responsive', 'img-rounded', 'img-circle', 'img-thumbnail'],
        },
        button: {
            classes: ['close'],
            attributes: ['type', 'disabled']
        },
        'section ol li dl': {
            classes: ['clearfix', 'show', 'hide', 'invisible']
        },
        'span i': {
            classes: ['icon', 'icon-*', 'glyphicon', 'glyphicon-*']
        },
        'h1 h2 h3 h4 h5': {
            classes: 'title'
        }

    };
}

/*
 * Sample toolbars
 */

//Toolbar definition for basic buttons
Drupal.settings.cke_toolbar_DrupalBasic = [ [ 'Format', 'Bold', 'Italic', '-', 'NumberedList','BulletedList', '-', 'Link', 'Unlink', 'Image' ] ];

//Toolbar definition for Advanced buttons
Drupal.settings.cke_toolbar_DrupalAdvanced = [
  ['Source'],
  ['Cut','Copy','Paste','PasteText','PasteFromWord','-','SpellChecker', 'Scayt'],
  ['Undo','Redo','Find','Replace','-','SelectAll'],
  ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar'],
  ['Maximize', 'ShowBlocks'],
  '/',
  ['Format'],
  ['Bold','Italic','Underline','Strike','-','Subscript','Superscript','-','RemoveFormat'],
  ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
  ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl'],
  ['Link','Unlink','Anchor','Linkit','LinkToNode','LinkToMenu']
];

// Toolbar definition for all buttons
Drupal.settings.cke_toolbar_DrupalFull = [
  ['Source'],
  ['Cut','Copy','Paste','PasteText','PasteFromWord','-','SpellChecker', 'Scayt'],
  ['Undo','Redo','Find','Replace','-','SelectAll'],
  ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','Iframe'],
  '/',
  ['Bold','Italic','Underline','Strike','-','Subscript','Superscript','-','RemoveFormat'],
  ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
  ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl','-','Language'],
  ['Link','Unlink','Anchor','Linkit','LinkToNode', 'LinkToMenu'],
  '/',
  ['Format','Font','FontSize'],
  ['TextColor','BGColor'],
  ['Maximize', 'ShowBlocks'],
  ['DrupalBreak', 'DrupalPageBreak']
];