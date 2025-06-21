<?php
class Vehicle {
    public int $id;
    public string $title;
    public ?string $owner;
    public int $year;
    public float $price_per_day;
    public string $image;

    public function __construct(array $data) {
        $this->id = (int) $data['id'];
        $this->title = $data['title'];
        $this->owner = $data['owner'] ?? null;
        $this->year = (int) $data['year'];
        $this->price_per_day = (float) $data['price_per_day'];
        $this->image = $data['image'];
    }

    /**
     * Načíta všetky vozidlá z DB.
     * @param mysqli $conn Pripojenie k DB
     * @return Vehicle[] Pole objektov Vehicle
     */
    public static function getAll(mysqli $conn): array {
        $sql = "SELECT id, title, owner, year, price_per_day, image FROM auta";
        $result = $conn->query($sql);
        $vehicles = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $vehicles[] = new Vehicle($row);
            }
        }
        return $vehicles;
    }
}
?>
