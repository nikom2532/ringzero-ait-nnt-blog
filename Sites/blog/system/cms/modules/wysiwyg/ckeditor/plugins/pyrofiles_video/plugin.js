CKEDITOR.plugins.add('pyrofiles_video',
{
	init : function(editor)
	{
		// Add the link and unlink buttons.
		CKEDITOR.dialog.addIframe('pyrofiles_video_dialog', 'Files Video', SITE_URL + 'admin/wysiwyg/files_wysiwyg',700,400);
		editor.addCommand('pyrofiles_video', {exec:pyrofiles_video_onclick} );
		editor.ui.addButton('pyrofiles_video',{ label:'xUpload or insert Video from library.', command:'pyrofiles_video', icon:this.path+'images/icon.gif' });

		// Register selection change handler for the unlink button.
		editor.on( 'selectionChange', function( evt )
		{
			/*
			 * Despite our initial hope, files.queryCommandEnabled() does not work
			 * for this in Firefox. So we must detect the state by element paths.
			 */
			var command = editor.getCommand( 'pyrofiles_video' ),
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

function pyrofiles_video_onclick(e)
{
	update_instance();
    // run when pyro button is clicked]
    CKEDITOR.currentInstance.openDialog('pyrofiles_video_dialog')
}