<?php echo validation_errors(); ?>
<?php echo form_open('Hgv_controller/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
			<label for="user_type" class="col-md-4 control-label">User Type</label>
			<div class="col-md-8">
				<select name="user_type" class="form-control">
					<option value="">select</option>
					<?php 
					$user_type_values = array(
						'admin'=>'Administrator',
						'manager'=>'Manager',
						'clerk'=>'Clerk',
					);

					foreach($user_type_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('user_type')) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="f_name" class="col-md-4 control-label">F Name</label>
		<div class="col-md-8">
			<input type="text" name="f_name" value="<?php echo $this->input->post('f_name'); ?>" class="form-control" id="f_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="l_name" class="col-md-4 control-label">L Name</label>
		<div class="col-md-8">
			<input type="text" name="l_name" value="<?php echo $this->input->post('l_name'); ?>" class="form-control" id="l_name" />
		</div>
	</div>
	<div class="form-group">
			<label for="branch" class="col-md-4 control-label">Branch</label>
			<div class="col-md-8">
				<select name="branch" class="form-control">
					<option value="">select</option>
					<?php 
					$branch_values = array(
						'HGV'=>'HGV',
					);

					foreach($branch_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('branch')) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label for="user_status" class="col-md-4 control-label">User Status</label>
		<div class="col-md-8">
			<input type="text" name="user_status" value="<?php echo $this->input->post('user_status'); ?>" class="form-control" id="user_status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>