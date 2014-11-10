<!DOCTYPE html>
<html lang ="en">
<?php include_once "templates/html_doctype_and_head.php"; ?>
  <body>
    <div class ="container ">
      <h1> Insert a new message in the public board </h1>
      <div class ="row">
        <div class ="span6 ">
          <h5> Simple form( post - validated ) with batched errors( no standard
          HTML ) </h5>
          <p>
            <?php echo $errorMessageSimpleForm ; ?>
            <?php include_once "templates/basic_message_form.php"; ?>
          </p>
        </div>
        <div class ="span6 ">
          <h5> Field - by - field interactive form( post - validated ) with batched
          errors( standard HTML 5) </h5>
          <p>
            <?php echo $errorMessageInteractiveForm; ?>
            <?php include_once "templates/interactive_message_form.php"; ?>
          </p>
        </div>
      </div>
      <hr>
      <h1> Public board </h1>
      <?php echo $messageList; ?>
    </div>
  </body>
</html>
