<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title</h1>
      <h2 class="display-4"> $data</h>
    </div>
  </div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';

?>
<div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 800px; '>
<img src='<?php echo URLROOT; ?>img/person/img10.png' class='card-img-top' alt='...'>
<p> 
  </div>
  </div>

  <div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 200px; bottom: 500px; '>


  <div class='card-body'>
  <h5  class='card-title'> Why Choose Us? </h5>
  <p class='card-text'>
  We are one of the most advanced dental centers in Egypt providing Advanced, Affordable, and Pain-free Dental Treatment.
Our team is highly qualified, updated with the latest technologies and different treatment options available.
Part of our commitment serving our patients includes providing information that helps them to make more informed decisions about their oral health needs.
Our Goal is to provide you with outstanding Quality of Care in a Warm, Friendly, Trusting & Comfortable Environment because your smile is our Concern.
Let us Take Care of you & your SMILE
 </p>
  </div>
  </div>
  </div>
  </div>
<?php

  }
}
?>
