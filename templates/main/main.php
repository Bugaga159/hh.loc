<?php include __DIR__ . '/../header.php'; ?>

  <h1>Welcome to the casino <a href="/user"><?= $userId->getNikename() ?></a></h1>
  <h3>You have $<?= $userId->getMoney()?> and point <?= $userId->getPoints()?>.</h3>
  <?php if($number != null): ?>
    <h2>You win <?= $number ?> <a class="btn btn-outline-danger" href="/">Refuse</a><a class="btn btn-outline-success" href="/user">Get</a></h2>
    <?php unset($number);?>
    
    
  <?php endif; ?>
    <form action="" method="POST">
        <div class="form-group">
            <button type="submite" class="btn btn-success btn-block" name= 'prize' value='Play'>Play</button>
        </div>
    </form>
<div>
    <a  href="/prize" class="btn btn-primary " role="button" aria-pressed="true">List of prizes</a >
    <a  href="/admin" class="btn btn-primary " role="button" aria-pressed="true">Open Admin panel</a >
</div>
<?php include __DIR__ . '/../footer.php'; ?>
