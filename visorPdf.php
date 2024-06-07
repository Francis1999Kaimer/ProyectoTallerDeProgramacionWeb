<!DOCTYPE html>
<html lang="en">

<head>
  <title>HelpME</title>

  <?php require_once './fragments/links.php';
  renderLinks('visorPdf'); ?>
</head>

<body>
  <?php require_once './fragments/header.php';
  renderHeader('visorPdf'); ?>






  <section style="height: 100vh; padding-top: 50px;  background-color:  #1C2331;">

    <div class="containerPdf">
      <div class="pdf-container">
        <embed class="pdf-object" src="prueba.pdf" type="application/pdf" />
      </div>
    </div>
  </section>



  <?php require_once './fragments/footer.php'; ?>


</body>


</html>