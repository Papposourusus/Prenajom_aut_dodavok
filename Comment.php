<?php
class Comment {
    public ?int $id;
    public string $user;
    public string $comment;
    public string $created_at;

    public function __construct(array $data) {
        $this->id = $data['id'] ?? null;
        $this->user = $data['user'];
        $this->comment = $data['comment'];
        $this->created_at = $data['created_at'] ?? date('Y-m-d H:i:s');
    }
}
?>
