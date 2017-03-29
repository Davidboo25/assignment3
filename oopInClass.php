<?php
  $varOne = array(
    "teacher" => "Me",
    "class" => "1520",
    "students" => "yinz guys",
    "languages" => array("php", "html", "js")
  );
  class Example {
    private $n;
    private $j;
    private $m;
    public function __construct($n, $j, $m) {
      $this->name    = $n;
      $this->job     = $j;
      $this->marital = $m;
    }
    public function getName() {
      return $this->name;
    }
    public function getJob() {
      return $this->job;
    }
    public function getMaritalStatus() {
      return $this->marital;
    }
    public function __toString() {
      $who = "Hi, my name is " . $this->getName() . " it is nice to meet you!";
      $what = "I work as a " . $this->getJob() . " and sometimes they pay me money.";
      $marr = "I am also a " . $this->getMaritalStatus() . " person.";
      return $who . "<br>" . $what . "<br>" . $marr . "<br>";
    }
  }
  class Fun extends Example {
    public $name;
    public $job;
    public $status;
    public function __construct($name, $job, $status) {
      $this->name   = $name;
      $this->job    = $job;
      $this->marital = $status;
    }
    public function getOldName() {
      return parent::getName();
    }
    public function setName($newName) {
      echo "<!-- Setting new Job to " . $newName . "-->";
      $this->name = $newName;
    }
    public function getOldJob() {
      return parent::getJob();
    }
    public function setJob($newJob) {
      echo "<!-- Setting new Job to " . $newJob . "-->";
      $this->job = $newJob;
    }
    public function getOldStatus() {
      return parent::getMaritalStatus();
    }
    public function setMaritalStatus($newStatus) {
      echo "<!-- Setting new Job to " . $newStatus . "-->";
      $this->marital = $newStatus;
    }
  }
  $exOne = new Example("Matt", "Software Engineer", "Married");
  $newEx = new Fun("Jim", "Supreme Overlord of Pizza", "Married");
  $matt = new Fun("Matt4", "Software Engineer", "Married");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="test2.css">
    <title>PHP Test 1</title>
  </head>
  <body>
    <h1>Hi Errbody</h1>
    <header style="height:250x; background-color:#343434"> My Website</header>

    <section>
      <p>I'm Matt, I have some issues.</p>
      <?= $exOne; ?>

      <p>After some careful introspection, I  have decided t get a new job!</p>
      <?= $matt->setJob("Dishwasher"); ?>

      <p>So...</p>
      <?= $matt; ?>

      <p>Next, I decided there were too many Ts in my name, so I wanna change that too.</p>
      <?= $matt->setName("Optimus Prime"); ?>

      <p>Thus...</p>
      <?= $matt; ?>

      <p>THEN...I wanted to stop being married, because I'm a giant freedom fighting robot.</p>
      <?= $matt->setMaritalStatus("Complicated"); ?>

      <p>You see...</p>
      <?= $matt; ?>
    </section>


  </body>
</html>