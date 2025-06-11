<?php
class Vehicle {
    public $id;
    public $title;
    public $owner;
    public $year;
    public $price_per_day;
    public $image;

    public function __construct($data) {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->owner = $data['owner'];
        $this->year = $data['year'];
        $this->price_per_day = $data['price_per_day'];
        $this->image = $data['image'];
    }
}
?>
