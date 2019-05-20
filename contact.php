<html>
<head>
    </head>
<body>
    
    <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Details</h4>
      </div>
      <div class="modal-body">
        <h1>Name: <?php echo "MR.XYZ" ?></h1>
          <h2>Contact: <?php echo $contact ?></h2>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
      </div>
    </div>
  </div>
</div>
    </body>
</html>