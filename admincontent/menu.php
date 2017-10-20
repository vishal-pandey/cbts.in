<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Computer Based Test Series</a>
    </div>
    <ul class="nav navbar-nav">
      <?php if($_GET['link'] == ""){echo '<li class="active"><a href="./">Home</a></li>';}else{echo '<li><a href="./">Home</a></li>';} ?>
      <li class="create"><a href="?link=create">Create Test</a></li>
      <li class="package"><a href="?link=package">Package</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('.<?php echo $_GET["link"]; ?>').addClass('active');
    });

</script>