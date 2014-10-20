<?php
/**
* @author MrWormy
*/

class Controller {
  private $model;
  public function __construct($model, $action=null)
  {
    $this->model = $model;

    if($action != null){
      switch ($action) {
        case 'PersonalIntroClick':
          $this->redirectToPersonalIntroPage();
          break;
        case 'PublicationsClick':
          $this->redirectToPublicationsPage();
          break;
        default:

          break;
      }
    }
  }

  public function redirectToPersonalIntroPage()
  {
    // for analytics
    header("location: index.php?page=personal_intro");
    die();
  }

  public function redirectToPublicationsPage()
  {
    header("location: index.php?page=publications");
    die();
  }
}
?>
