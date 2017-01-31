<div class="container">
    <h1><?php echo $current_name; ?></h1>
    <h5><?php echo $current_description; ?></h5>
  <div class="panel panel-default">
    <div class="panel-heading"><?php echo $current_key_word; ?>s available</div>
      <table class="table">
        <thead>
          <tr>
            <th class="text-center">Status</th>
            <th><?php echo $current_key_word; ?> Id</th>
            <th><?php echo $current_key_word; ?> Name</th>
            <th><?php echo $current_key_word; ?> Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center alert alert-info"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></th>
            <td><?php echo $current_items['id']; ?></td>
            <td><?php echo $current_items['name']; ?></td>
            <td><?php echo $current_items['type']; ?></td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true" data-toggle="modal" data-target="#myModal">
                <a href="index.php?page=form&service=<?php echo $current_service; ?>&item=203" target="_self">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true">
                </a>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></th>
            <td>104</td>
            <td>SW Ships</td>
            <td>Vehicle</td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true" data-toggle="modal" data-target="#myModal">
              <a href="index.php?page=form&service=<?php echo $current_service; ?>&item=104" target="_self">
                <span class="glyphicon glyphicon-edit" aria-hidden="true">
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></th>
            <td>156</td>
            <td>SW Systems</td>
            <td>Planets</td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true" data-toggle="modal" data-target="#myModal">
              <a href="index.php?page=form&service=<?php echo $current_service; ?>&item=156" target="_self">
                <span class="glyphicon glyphicon-edit" aria-hidden="true">
              </a>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $current_key_word; ?> exclusion</h4>
      </div>
      <div class="modal-body alert alert-danger">
        <p>This <?php echo $current_key_word; ?> will be excluded. This action  cannot be undone.</p>
        <p>Are you certain of this?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
