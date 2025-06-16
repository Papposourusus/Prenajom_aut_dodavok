<?php
class Comment {
    public ?int $id;
    public string $username;
    public string $email;
    public string $text;
    public string $created_at;

    public function __construct(array $data) {
        $this->id = $data['id'] ?? null;
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->text = $data['text'];
        $this->created_at = $data['created_at'] ?? date('Y-m-d H:i:s');
    }
}
?>
