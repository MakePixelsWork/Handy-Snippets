<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/document-begin.php';?>
  <title>PHP Template System</title>
</head>

<body>

  <header>
    <?php include 'includes/template-header.php';?>
  </header>

  <main>
    <!-- ADD MAIN CONTENT HERE -->
    <p>
      Subpage 1
    </p>
  </main>

  <footer>
    <?php include 'includes/template-footer.php';?>
  </footer>

<?php include 'includes/document-end.php';?>

<script>
  document.getElementById("menu-item1").className += " active";
</script>

</body>
</html>