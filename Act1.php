<?php
echo "<h2>Activity 1: GadgetGrove Catalog</h2>";


$devicee_names = ["Desktop PC", "Projector", "Smart TV", "External Hard Drive", "Wireless Mouse", "Mechanical Keyboard"];
$devicee_prices = [40000.00, 15000.00, 28000.00, 7,300.00, 1200.00, 4500.00];

echo "<p>Gadget Names: " . implode(", ", $devicee_names) . "</p>";
echo "<p>First gadget price: ₱" . $devicee_prices[0] . "</p>";
echo "<p>Last gadget price: ₱" . $devicee_prices[count($devicee_prices)-1] . "</p><br>";

$devicee_detail = [
    "name" => "Desktop PC",
    "price" => 40000.00,
    "brand" => "PowerCore",
    "inStock" => true,
    "description" => "A high-performance desktop computer built for seamless multitasking, gaming, and demanding applications."
];

$devicee_detail["warranty"] = "3-year warranty included";

echo "<p>Gadget: {$devicee_detail['name']}</p>";
echo "<p>Brand: {$devicee_detail['brand']}</p>";
echo "<p>Price: ₱{$devicee_detail['price']}</p>";
echo "<p>In Stock: " . ($devicee_detail['inStock'] ? "Yes" : "No") . "</p>";
echo "<p>Warranty: {$devicee_detail['warranty']}</p><br>";

$devicee_catalog = [
    ["id" => 1, "name" => "Desktop PC", "price" => 40000.00, "inStock" => true],
    ["id" => 2, "name" => "Projector", "price" => 15000.00, "inStock" => true],
    ["id" => 3, "name" => "Smart TV", "price" => 28000.00, "inStock" => false],
    ["id" => 4, "name" => "External Hard Drive", "price" => 7,300.00, "inStock" => true],
    ["id" => 5, "name" => "Wireless Mouse", "price" => 1200.00, "inStock" => true],
    ["id" => 6, "name" => "Mechanical Keyboard", "price" => 4500.00, "inStock" => true]
];

foreach ($devicee_catalog as $devicee_item) {
    echo "<p>Gadget: {$devicee_item['name']} - Price: ₱" . number_format($devicee_item['price'], 2) . "</p>";
}
?>