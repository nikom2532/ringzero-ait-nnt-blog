<!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">-->
<!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(".droptabs").droptabs({
		development:true
	});
</script>-->
<div id="upload-box">
	<h2><?php echo lang('files:upload') ?><span class="close ui-icon ui-icon-closethick"><?php echo lang('buttons:close') ?></span></h2>
	<?php echo form_open_multipart('admin/wysiwyg/upload') ?>
	<?php echo form_hidden('redirect_to', 'image') ?>
	<ul>
		<li>
			<label for="name"><?php echo lang('files:name') ?></label>
			<?php echo form_input('name', set_value('name'), 'id="name"') ?>
		</li>
		<li>
			<label for="file">&nbsp;</label>
			<?php echo form_upload('userfile', 'id="file"') ?>
		</li>
		<li>
			<label for="folder_id">&nbsp;</label>
			<?php echo form_dropdown('folder_id', array(0 => lang('files:select_folder')) + $folders_tree, 'id="folder" ') ?>
		</li>
		<li>
			<label for="description"><?php echo lang('files:description') ?></label>
			<?php echo form_textarea('description', set_value('description'), 'id="description"') ?>
		</li>
		<li>
			<?php echo form_submit('button_action', lang('buttons:save'), 'class="button"') ?>
			<a href="<?php echo current_url() ?>#" class="btn cancel"><?php echo lang('buttons:cancel') ?></a>
		</li>
	</ul>
	<?php echo form_close() ?>
</div>
<div id="files_browser">
	<div id="files_left_pane">
		<h3><?php echo lang('files:folders') ?></h3>
		<ul id="files-nav">
			<?php foreach ($folders as $folder): ?>
				<?php if ( ! $folder->parent_id): ?>
					<li id="folder-id-<?php echo $folder->id ?>" class="<?php echo $current_folder && $current_folder->id == $folder->id ? 'current' : '' ?>">
						<?php echo anchor("admin/wysiwyg/image/index/{$folder->id}", $folder->name, 'title="'.$folder->slug.'"') ?>
					</li>
				<?php endif ?>
			<?php endforeach ?>
		<!-- <li id="folder-id-999" class="<?php echo $current_folder && $current_folder->id == 999 ? 'current' : '' ?>">			
				<?php echo anchor("admin/wysiwyg/image/index/999", 'PRD News Data Center', 'title="PRD News Data Center"') ?>
			</li>  -->
			<?php if ($folders): ?>
				<li class="upload">
					<?php echo anchor("admin/wysiwyg/image/#upload", lang('files:upload'), 'title="upload"') ?>
				</li>
			<?php endif ?>
		</ul>
	</div>
	<div id="files_right_pane">
		<div id="files-wrapper">
			<?php if ($current_folder): ?>
				<h3><?php echo $current_folder->name ?></h3>
				<!-- subfolders -->
				<div id="files_toolbar">
					<ul>
						<li>
							<label for="folder"><?php echo lang('files:subfolders') ?>:</label>
							<?php echo form_dropdown('parent_id', $subfolders, $current_folder->id, 'id="parent_id" title="image"') ?>
						</li>
					</ul>
				</div>
				<!-- image align -->
				<div id="radio-group">
					<label for="insert_float"><?php echo lang('wysiwyg.label.float') ?></label>
					<div class="set">
						<input id="radio_left" type="radio" name="insert_float" value="left" />
						<label for="radio_left"><?php echo lang('wysiwyg.label.left') ?></label>
						<input id="radio_right" type="radio" name="insert_float" value="right" />
						<label for="radio_right"><?php echo lang('wysiwyg.label.right') ?></label>
						<input id="radio_none" type="radio" name="insert_float" value="none" checked="checked" />
						<label for="radio_none"><?php echo lang('wysiwyg.label.none') ?></label>
					</div>
				</div>
				<!-- image size -->
				<div id="options-bar">
					<label for="insert_width"><?php echo lang('wysiwyg.label.insert_width') ?></label>
					<input id="insert_width" data-name="<?php echo lang('wysiwyg.label.no_limit') ?>" type="text" name="insert_width" value="0" />
				</div>
				<div id="slider"></div>
				<!-- folder contents -->
				<?php //echo '>>'.$this->current_user->id; ?>

				<div class="tabs" style="padding:0px; margin:0">
					<ul class="nav droptabs">
						<li  class="active always-visible">
							<a href="#blog-images-tab"><span>Blog</span></a>
						</li>
						<!-- insert form prd -->
						<li>
							<a href="#blog-images-prd-tab"><span>PRD News Data Center</span></a>
						</li>	
						<!-- insert form prd -->
					</ul>
					<div class="form_inputs tab-pane active" id="blog-images-tab" style="width:90%">
						<?php  if ($current_folder->items): ?>

							<table class="dataTable" border="0" cellspacing="0">
								<thead>
									<tr>
										<th><?php echo lang('files:type_i') ?></th>
										<th><?php echo lang('files:name') . '/' . lang('files:description') ?></th>
											<!--<th><?php echo lang('files:filename') . '/' . lang('files:added') ?></th>
											<th><?php echo lang('files:alt_attribute') ?></th>//-->
											<th><?php echo lang('wysiwyg.meta.width') ?></th>
											<th><?php echo lang('wysiwyg.meta.height') ?></th>
											<th><?php echo lang('wysiwyg.meta.size') ?></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($current_folder->items as $image): ?>
											<tr class="<?php echo alternator('', 'alt') ?>">
												<td class="image"><img class="pyro-image" src="<?php echo base_url($image->location === 'local' ? 'files/thumb/'.$image->id.'/50/50' : 'files/cloud_thumb/'.$image->id) ?>" alt="<?php echo $image->alt_attribute ?>" width="50" onclick="javascript:insertImage('<?php echo $image->id."', '".htmlentities(addslashes($image->alt_attribute))."', '".$image->location."', '".$image->path ?>');" /></td>
												<td class="name-description">
													<p><?php echo $image->name ?><p>
														<p><?php echo $image->description ?></p>
													</td>
									<!--<td class="filename">
										<p><?php echo $image->filename ?></p>
										<p><?php echo format_date($image->date_added) ?></p>
									</td>
									<td class="alt_attribute"><?php echo $image->alt_attribute ?></td>-->
									<td class="meta width"><?php echo $image->width ?></td>
									<td class="meta height"><?php echo $image->height ?></td>
									<td class="meta size"><?php echo $image->filesize ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>

				<?php else: ?>
					<p><?php echo lang('files:no_files') ?></p>
				<?php endif ?>
			<?php else: ?>
				<div class="blank-slate file-folders">
					<h2><?php echo lang('files:no_folders_wysiwyg');?></h2>
				</div>
			<?php endif ?>
		</div>

		<div class="form_inputs tab-pane" id="blog-images-prd-tab" style="width:90%">
			<?php
			echo '<h4 style="color:red;">'.$title_prd.'</h4>';
			?>
			<table class="dataTable table-list-prd" border="0" cellspacing="0">
				<thead>
					<tr>
						<th><?php echo lang('files:type_i') ?></th>
						<th><?php echo lang('files:name') . '/' . lang('files:description') ?></th>
					</tr>
				</thead>
				<tbody>
					<!-- insert form prd -->
					<?php foreach ($get_news as $news_item): 
					$view = $news_item->NT01_ViewCount;
					if ($view == '') $view = 0;
					?>
					<tr>
						<td class="image">
							<img class="pyro-image" src="http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=<?php echo $news_item->NT11_PicPath;?>" width="50" onclick="javascript:insertImage('<?php echo $news_item->NT01_NewsID."', '".htmlentities(addslashes($news_item->alt_attribute))."', 'prd', 'http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=".$news_item->NT11_PicPath ?>');"/>
						</td>
						<td class="name-description"> 
							<p><?php echo $news_item->NT01_NewsTitle ?><p>
								<p><?php echo 'เวลา '.$news_item->NT01_CreDate.' View ['.$view.']';?></p>
							</td>
						</tr>
					<?php endforeach ?>
					<!-- -->
				</tbody>
			</table>
		</div>
	</div>

</div>
</div>
</div>
<script type="text/javascript">
	// $(function() {
		$( ".tabs" ).tabs();
		$('.dataTable').dataTable({
        	"sPaginationType": "full_numbers"
    	});
	// });
</script>