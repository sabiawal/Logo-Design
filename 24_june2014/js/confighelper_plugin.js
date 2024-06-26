/*
 * @file Configuration helper plugin for CKEditor
 * Copyright (C) 2012 Alfonso Martínez de Lizarrondo
 *
 */

CKEDITOR.plugins.add( 'confighelper',
{
	init : function( editor )
	{

		// correct focus status after switch mode
		editor.on( 'mode', function( ev ) {
			// Let's update to match reality
			ev.editor.focusManager.hasFocus = false;
			// Now focus it:
		});

		// Placeholder - Start
		// Get the placeholder from the replaced element or from the configuration
		var placeholder = editor.element.getAttribute( 'placeholder' ) || editor.config.placeholder;

		if (placeholder)
		{
			// Check if the browser supports the placeholder attribute on textareas natively.
			var supportsPlaceholder = ('placeholder' in document.createElement( 'textarea' ) );

			// CSS for WYSIWYG mode
			editor.addCss('.placeholder{ color: #999; }');

			// CSS for textarea mode
			var node = CKEDITOR.document.getHead().append( 'style' );
			node.setAttribute( 'type', 'text/css' );
			var content = 'textarea.placeholder { color: #999; }';

			if ( CKEDITOR.env.ie )
				node.$.styleSheet.cssText = content;
			else
				node.$.innerHTML = content;

			// Watch for the calls to getData to remove the placeholder
			editor.on( 'getData', function( ev ) {
				var element = (editor.mode == 'wysiwyg' ) ?  editor.document.getBody() : editor.textarea;

				if ( element && element.hasClass( 'placeholder' ) )
					ev.data.dataValue = '';
			});

			// If the data is "empty" (BR, P) or the placeholder then return an empty string.
			// Otherwise return the original data
			function dataIsEmpty( data )
			{
				if ( data.length > 20 )
					return false;

				var value = data.replace( /[\n|\t]*/g, '' ).toLowerCase();
				if ( !value || value == '<br>' || value == '<p>&nbsp;<br></p>' || value == '<p><br></p>' || value == '<p>&nbsp;</p>' )
					return true;

				return false;
			}

			function addPlaceholder(ev) {
				var editor = ev.editor;
				if (editor.mode =='wysiwyg' )
				{
					// If the blur is due to a dialog, don't apply the placeholder
					if ( CKEDITOR.dialog._.currentTop )
						return;

					var body = editor.document && editor.document.getBody();
					if ( !body )
						return;

					if ( dataIsEmpty( body.getHtml() ) )
					{
						body.addClass( 'placeholder' );
						body.setHtml( placeholder );
					}
				}
				else
				{
					var textarea = editor.textarea;
					if ( supportsPlaceholder )
					{
						if (ev.name=='mode')
						{
							textarea.setAttribute( 'placeholder', placeholder );
						}
						return;
					}

					if ( dataIsEmpty( textarea.getValue() ) )
					{
						textarea.addClass( 'placeholder' );
						textarea.setValue( placeholder );
					}
				}
			}

			function removePlaceholder(ev) {
				var editor = ev.editor;

				if (editor.mode =='wysiwyg' )
				{
					var body = editor.document.getBody();
					if (!body.hasClass( 'placeholder' ))
						return;

					body.removeClass( 'placeholder' );
					body.setHtml( '<p>&nbsp;</p>' );
				}
				else
				{
					var textarea = editor.textarea;
					if (!textarea.hasClass( 'placeholder' ))
						return;

					textarea.removeClass( 'placeholder' );
					textarea.setValue( '' );
				}
			}

			editor.on('blur', addPlaceholder);
			editor.on('mode', addPlaceholder);

			editor.on('focus', removePlaceholder);
			editor.on('beforeModeUnload', removePlaceholder);
		} // Placeholder - End


		// Parse the config to turn it into a js object
		// format= dialogName:tabName:fieldName
		var parseDefinitionToObject = function ( value )
		{
			var contents = value.split( ';' ),
				tabsToProcess = {};

			for ( i = 0; i < contents.length; i++ )
			{
				var parts = contents[ i ].split( ':' );
				if ( parts.length == 3 )
				{
					var dialogName = parts[ 0 ],
						tabName = parts[ 1 ],
						fieldName = parts[ 2 ];

					if ( !tabsToProcess[ dialogName ] )
						tabsToProcess[ dialogName ] = {};
					if ( !tabsToProcess[ dialogName ][ tabName ] )
						tabsToProcess[ dialogName ][ tabName ] = [];

					tabsToProcess[ dialogName ][ tabName ].push( fieldName );
				}
			}

			return tabsToProcess;
		}

		// Customize dialogs:
		CKEDITOR.on( 'dialogDefinition', function( ev )
		{
			if ( editor != ev.editor )
				return;

			var dialogName = ev.data.name,
				dialogDefinition = ev.data.definition,
				tabsToProcess,
				i;

			// Parse the config to turn it into a js object
			if ( !( 'removeDialogFields' in editor._ ) && editor.config.removeDialogFields )
				editor._.removeDialogFields = parseDefinitionToObject( editor.config.removeDialogFields );

			// Remove fields of this dialog.
			if ( editor._.removeDialogFields && ( tabsToProcess = editor._.removeDialogFields[ dialogName ] ) )
			{
				for ( var name in tabsToProcess )
				{
					var fields = tabsToProcess[ name ],
						tab = dialogDefinition.getContents( name );

					for ( i=0; i<fields.length ; i++ )
						tab.remove( fields[ i ] );
				}
			}


			if ( !( 'hideDialogFields' in editor._ ) && editor.config.hideDialogFields )
				editor._.hideDialogFields = parseDefinitionToObject( editor.config.hideDialogFields );

			// Remove fields of this dialog.
			if ( editor._.hideDialogFields && ( tabsToProcess = editor._.hideDialogFields[ dialogName ] ) )
			{
				for ( var name in tabsToProcess )
				{
					var fields = tabsToProcess[ name ],
						tab = dialogDefinition.getContents( name );

					for ( i=0; i<fields.length ; i++ )
						tab.get( fields[ i ] ).hidden = true;
				}
			}

			// Set default values.
			if ( editor.config.dialogFieldsDefaultValues && ( tabsToProcess = editor.config.dialogFieldsDefaultValues[ dialogName ] ) )
			{
				for ( var name in tabsToProcess )
				{
					var fields = tabsToProcess[ name ],
						tab = dialogDefinition.getContents( name );

					for ( var fieldName in fields )
					{
						var dialogField = tab.get( fieldName );
						if ( dialogField )
							dialogField[ 'default' ] = fields[ fieldName ];
					}
				}
			}


		});

	}
} );


 /**
  * Allows to define which dialog fiels must be removed
  * @name CKEDITOR.config.removeDialogFields
  * @type {String}
  * @example
  *	editor.config.removeDialogFields = "image:info:txtBorder;image:info:txtHSpace";
  */

 /**
  * Allows to define which dialog fiels must be hidden
  * @name CKEDITOR.config.hideDialogFields
  * @type {String}
  * @example
  *	editor.config.hideDialogFields = "image:info:htmlPreview";
  */

 /**
  * Allows to define default values for dialog fields
  * @name CKEDITOR.config.dialogFieldsDefaultValues
  * @type {Object}
  * @example
	config.dialogFieldsDefaultValues =
	{
		image:
			{
				advanced:
					{
						txtGenClass : 'myClass',
						txtGenTitle : 'Image title'
					}
			}
	};
  */


 /**
  * Placeholder text for empty editor
  * @name CKEDITOR.config.placeholder
  * @type {String}
  * @example
  *	editor.config.placeholder = "Please, type here...";
  */