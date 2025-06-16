<?php
class Comment {
    public $id;
    public $user;
    public $comment;
    public $created_at;

    public function __construct($data) {
        $this->id = $data['id'] ?? null;
        $this->user = $data['user'] ?? '';
        $this->comment = $data['comment'] ?? '';
        $this->created_at = $data['created_at'] ?? '';
    }
}
?>
