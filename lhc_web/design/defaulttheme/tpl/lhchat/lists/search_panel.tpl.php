<form action="<?php echo $input->form_action?>" method="get" name="SearchFormRight">

	<input type="hidden" name="doSearch" value="1">

	<div class="row">
		<div class="columns large-5">
			<label>Nick</label>
		</div>
		<div class="columns large-5">
			<label>E-mail</label>
		</div>
		<div class="columns large-2">
		</div>
	</div>

	<div class="row">
		<div class="columns large-5">
			<input type="text" name="nick" value="<?php echo htmlspecialchars($input->nick)?>" />
		</div>
		<div class="columns large-5">
			<input type="text" name="email" value="<?php echo htmlspecialchars($input->email)?>" />
		</div>
		<div class="columns large-2">
			<input type="submit" name="doSearch" class="button radius small expand" value="Search" />
		</div>
	</div>

</form>