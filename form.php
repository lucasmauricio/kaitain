<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Editing <?php echo $current_key_word; ?></div>
      <form>
        <div class="form-group"><br>
          <label for="exampleInputEmail1"><?php echo $current_key_word; ?> Id</label>
          <input type="text" class="form-control" id="item_id" placeholder="<?php echo $current_key_word; ?> Id">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><?php echo $current_key_word; ?> Name</label>
          <input type="text" class="form-control" id="item_name" placeholder="<?php echo $current_key_word; ?> Name">
        </div>
        <div class="form-group">
          <label for="exampleInputFile"><?php echo $current_key_word; ?> Type</label>
          <input type="text" class="form-control" id="item_type" placeholder="<?php echo $current_key_word; ?> Type">
          <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
          <p class="help-block">Example block-level help text here.</p>
        </div>
        <button type="submit" class="btn btn-primary">Ok</button>
        <button type="button" class="btn btn-default">Cancel</button>
      </form>
    </div>
  </div>
</div>
