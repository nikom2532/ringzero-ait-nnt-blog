CKEDITOR.plugins.add('pyrofiles_voice',
{
	init : function(editor)
	{
		// Add the link and unlink buttons.
		CKEDITOR.dialog.addIframe('pyrofiles_voice_dialog', 'Files', SITE_URL + 'admin/wysiwyg/files_wysiwyg',700,400);
		editor.addCommand('pyrofiles_voice', {exec:pyrofiles_voice_onclick} );
		editor.ui.addButton('pyrofiles_voice',{ label:'Upload or insert voice from library.', command:'pyrofiles_voice', icon:this.path+'images/icon_sound.png' });

		// Register selection change handler for the unlink button.
		editor.on( 'selectionChange', function( evt )
		{
			
			 * Despite our initial hope, files.queryCommandEnabled() does not work
			 * for this in Firefox. So we must detect the state by element paths.
			 
			var command = editor.getCommand( 'pyrofiles_voice' ),
				element = evt.data.path.lastElement.getAscendant( 'a', true );

			// If nothing or a valid files
			if ( ! element || (element.getName() == 'a' && ! element.hasClass('pyro-files')))
			{
				command.setState(CKEDITOR.TRISTATE_OFF);
			}

			else
			{
				command.setState(CKEDITOR.TRISTATE_DISABLED);
			}
		});

	}
} );

function pyrofiles_voice_onclick(e)
{
	update_instance();
    // run when pyro button is clicked]
    CKEDITOR.currentInstance.openDialog('pyrofiles_voice_dialog')
}