<?php
class Treatments extends view
{

  public function output()
  {
    $title2 = $this->model->title2;
    $data2 = $this->model->data2;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title2</h1>
      <h2 class="display-4"> $data2</h>
    </div>
  </div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';

 
?>   


<html>
<div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 500px; '>

  <img src='<?php echo URLROOT; ?>img/person/img3.jpg' class='card-img-top' alt='...'>

  <div class='card-body'>
  <h5  class='card-title'>  Teeth whitening </h5>
  <p class='card-text'>
  Teeth whitening involves bleaching your teeth to make them lighter. 
  It can't make your teeth brilliant white, but it can lighten the existing colour by several shades.
 </p>
  </div>
  </div>
  </div>
  </div>




<div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 500px; '>

  <img src='<?php echo URLROOT; ?>img/person/img2.jpg' class='card-img-top' alt='...'>

  <div class='card-body'>
  <h5  class='card-title'>  Dental Implants </h5>
  <p class='card-text'>
   Dental implants are becoming more popular in today’s dental society. 
                Implants are utilized to offer patients a foundation for new restorative teeth where
                 natural teeth are missing or have been extracted. </p>
  </div>
  </div>
  </div>
  </div>



<div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 500px; '>

  <img src='<?php echo URLROOT; ?>img/person/img1.jpg' class='card-img-top' alt='...'>

  <div class='card-body'>
  <h5  class='card-title'> Braces </h5>
  <p class='card-text'>
  Braces are dental tools that help correct problems with your teeth, like crowding, 
  crooked teeth, or teeth that are out of alignment. Many people get braces when they're teenagers, 
  but adults get them too. As you wear them, braces slowly straighten and align your teeth so you have a normal bite.
 </p>
  </div>
  </div>
  </div>
  </div>

<div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 500px; '>

  <img src='<?php echo URLROOT; ?>img/person/img7.jpeg' class='card-img-top' alt='...'>

  <div class='card-body'>
  <h5  class='card-title'> pedodontics </h5>
  <p class='card-text'>
  Paedodontics is the branch of dentistry that specialises in the care and management of children’s teeth.
     Also known as paediatric dentistry, it treats patients from birth until adolescence.</p>
  </div>
  </div>
  </div>
  </div>

<div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 500px; '>

  <img src='<?php echo URLROOT; ?>img/person/img11.jpeg' class='card-img-top' alt='...'>

  <div class='card-body'>
  <h5  class='card-title'>  Root Canal Therapy </h5>
  <p class='card-text'>
  It is the process of removing the nerves from the roots of a tooth.  A root canal is often necessary to save an infected tooth.
    If an infected tooth is left alone for a long period of time, an abscess can form and can spread to the rest of the body. </p>
  </div>
  </div>
  </div>
  </div>

<div style='margin-top: 3%' class='col-lg'>
<div class='card' style='width: 30rem; left: 500px; '>

  <img src='<?php echo URLROOT; ?>img/person/img8.jpeg' class='card-img-top' alt='...'>

  <div class='card-body'>
  <h5  class='card-title'> Gum Treatment
 </h5>
  <p class='card-text'> In addition to the meticulous cleaning, polishing, and examination of your teeth,
     we also take the time to help our patients develop proper oral hygiene habits at home. 
     We will evaluate your hygiene techniques and make adjustments to your routine where needed. 

    </p>
  </div>
  </div>
  </div>
  </div>


</html>
<?php

  }
}
?>  
