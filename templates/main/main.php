<?php include __DIR__ . '/../header.php'; ?>

  <h1>Welcome to the casino <a href="/user"><?= $userId->getNikename() ?></a></h1>
  <p>You have $<?= $userId->getMoney()?> and point <?= $userId->getPoints()?>.</p>
  <?php if($number != null): ?>
    <h1>You win <?= $number ?> <a class="btn btn-outline-danger" href="/">Refuse</a><a class="btn btn-outline-success" href="/user">Receive</a></h1>
    
    
  <?php endif; ?>
  <form action="" method="POST">
    <button type="submite" class="btn btn-success btn-lg" name='prize' value="Play">Play</button>
  </form>
  <a href="/prize" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">List of prizes</a>
  
<?php include __DIR__ . '/../footer.php'; ?>
