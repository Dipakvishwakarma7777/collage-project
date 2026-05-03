<?php include "../layouts/main.php"; ?>

<h2>Events</h2>

<?php while($e=$events->fetch_assoc()): ?>
<div>
<?= htmlspecialchars($e['title']) ?>
<button onclick="registerEvent(<?= $e['id'] ?>)">Join</button>
</div>
<?php endwhile; ?>