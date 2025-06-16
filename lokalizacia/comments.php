<?php
class Comments {
    private $conn;

    public function __construct($host, $user, $pass, $dbname) {
        $this->conn = new mysqli($host, $user, $pass, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        $this->conn->set_charset("utf8mb4");
    }

    public function getAllComments() {
        $sql = "SELECT user, comment, created_at FROM comments ORDER BY created_at DESC";
        $result = $this->conn->query($sql);

        $comments = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $comments[] = $row;
            }
        }
        return $comments;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

// --- použitie ---
$commentsObj = new Comments("localhost", "root", "", "auta");
$comments = $commentsObj->getAllComments();
$commentsObj->closeConnection();
?>

<section id="comments-section" style="max-width:700px; margin: 30px auto;">
  <h2>Komentáre používateľov</h2>

  <?php if (count($comments) > 0): ?>
      <?php foreach ($comments as $comment): ?>
          <div style="border:1px solid #ccc; margin-bottom:10px; padding:10px; border-radius:5px;">
              <strong><?= htmlspecialchars($comment['user']) ?></strong>
              <em>(<?= htmlspecialchars($comment['created_at']) ?>)</em><br>
              <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
          </div>
      <?php endforeach; ?>
  <?php else: ?>
      <p>Zatiaľ nie sú žiadne komentáre.</p>
  <?php endif; ?>
</section>
