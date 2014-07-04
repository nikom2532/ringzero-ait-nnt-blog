<!--
<fieldset id="blog-template">
	<legend>Blog Template</legend>
		<ul>
									
			<li id="layout" class="">
								<label for="layout">
									Layout									<small>Which type of layout shall we use?</small>
								</label>
								<div class="form_input type-select">
									<select name="layout" class="width-20 chzn hidden chzn-done" id="selJWS" style="display: none;">
<option value="sidebar-right" selected="selected">Two Column - Sidebar at right</option>
<option value="full-width">Full Width</option>
<option value="sidebar-left">Two Columns - Sidebar left</option>
</select><div id="selJWS_chzn" class="chzn-container undefined chzn-container-single" style="width: 236px;"><a href="javascript:void(0)" class="chzn-single"><span>Two Column - Sidebar at right</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; top: 28px; width: 234px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 200px;"></div><ul class="chzn-results"><li id="selJWS_chzn_o_0" class="active-result result-selected">Two Column - Sidebar at right</li><li id="selJWS_chzn_o_1" class="active-result">Full Width</li><li id="selJWS_chzn_o_2" class="active-result">Two Columns - Sidebar left</li></ul></div></div>
								</div>
								<br class="clear-both">
							</li>
													<li id="color" style="display:in-line;">
								<label for="color">
									Color of the theme									<small>Please choose one of the predefined colors. to use your own color consult to documentation</small>
								</label>
								<div class="form_input type-select">
									<select name="color" class="width-20 chzn hidden chzn-done" id="selKHP" style="display: none;">
<option value="default">Red</option>
<option value="blue">Blue</option>
<option value="cyan">Cyan</option>
<option value="green">Green</option>
<option value="pink">Pink</option>
<option value="brown" selected="selected">Brown</option>
</select><div id="selKHP_chzn" class="chzn-container undefined chzn-container-single" style="width: 236px;"><a href="javascript:void(0)" class="chzn-single"><span>Brown</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; top: 28px; width: 234px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 200px;"></div><ul class="chzn-results"><li id="selKHP_chzn_o_0" class="active-result">Red</li><li id="selKHP_chzn_o_1" class="active-result">Blue</li><li id="selKHP_chzn_o_2" class="active-result">Cyan</li><li id="selKHP_chzn_o_3" class="active-result">Green</li><li id="selKHP_chzn_o_4" class="active-result">Pink</li><li id="selKHP_chzn_o_5" class="active-result result-selected">Brown</li></ul></div></div>
								</div>
								<br class="clear-both">
							</li>
												</ul>
</fieldset>
-->
<fieldset id="filters">
	
	<legend><?php echo lang('global:filters') ?></legend>

	<?php echo form_open('', '', array('f_module' => $module_details['slug'])) ?>
		<ul>
			<li class="">
        		<label for="f_status"><?php echo lang('blog:status_label') ?></label>
        		<?php echo form_dropdown('f_status', array(0 => lang('global:select-all'), 'draft'=>lang('blog_draft_label'), 'live'=>lang('blog_live_label'))) ?>
    		</li>

			<li class="">
        		<label for="f_category"><?php echo lang('blog:category_label') ?></label>
       			<?php echo form_dropdown('f_category', array(0 => lang('global:select-all')) + $categories) ?>
    		</li>

			<li class="">
				<label for="f_category"><?php echo lang('global:keywords') ?></label>
				<?php echo form_input('f_keywords', '', 'style="width: 55%;"') ?>
			</li>

			<li class="">
				<?php echo anchor(current_url() . '#', lang('buttons:cancel'), 'class="button red"') ?>
			</li>
		</ul>
	<?php echo form_close() ?>
</fieldset>