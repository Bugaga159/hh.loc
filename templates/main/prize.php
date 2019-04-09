<?php include __DIR__ . '/../header.php'; ?>
      	<h1>List of prizes:</h1>
        <ul>
        	<?php foreach($subjects as $subject): ?>
        		<li class="list-group-item d-flex justify-content-between align-items-center">
        			<?= $subject->getTitle()?>
        				<span class="badge badge-primary badge-pill"><?= $subject->getAmount()?></span>
    			</li>
			<?php endforeach; ?>
        </ul>
        <a class="btn btn-outline-success" href="/">Back</a>
      
<?php include __DIR__ . '/../footer.php'; ?>
