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
            <td>203</td>
            <td>SW Characters</td>
            <td>Person</td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true">
                <span class="glyphicon glyphicon-edit" aria-hidden="true">
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></th>
            <td>104</td>
            <td>SW Ships</td>
            <td>Vehicle</td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true">
                <span class="glyphicon glyphicon-edit" aria-hidden="true">
            </td>
          </tr>
          <tr>
            <th scope="row" class="text-center alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></th>
            <td>156</td>
            <td>SW Systems</td>
            <td>Planets</td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true">
                <span class="glyphicon glyphicon-edit" aria-hidden="true">
            </td>
          </tr>
        </tbody>
      </table>
  </div>
</div>
