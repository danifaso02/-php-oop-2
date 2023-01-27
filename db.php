<?php 

require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . '/classes/category.php';
require_once __DIR__ . '/classes/toys.php';
require_once __DIR__ . "/trait/nameItem.php";

$dog = new category("Cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");

$product = new product("Collare", "https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiF-cqPseb8AhVDBIsKHcw4DaAYABAMGgJlZg&ei=AQzTY5C0GOXq7_UPoIK3kAo&ohost=www.google.com&cid=CAESbeD26SBXfU_q-Ksoy0AjxKhParaWrpQackxt5JpNAF7hmuF2Wua_8I89zsXshqEi62LU88wjxVplbYL-m0Q1WqvB7F09EHi676hJvypW-sLpG50d9DD6IcjNUUOvk0k3EzDYsFr9-JpFsfKP0QA&sig=AOD64_0FCxD2L557WfuWVyxgvKbLCGhDOw&ctype=5&q=&sqi=2&ved=2ahUKEwjQuMGPseb8AhVl9bsIHSDBDaIQ9aACKAB6BAgGEBM&adurl=", 3, $dog);
$food = new food("Crocchette", "https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjJ47qvseb8AhUSzncKHRlGCzoYABAMGgJlZg&ohost=www.google.com&cid=CAESbeD2A-8lDu_0aJAEdMtaVEnn2_Smi1q996SyXIgGRURmyWCCeQDSs-SWnZF4vIDJPl6_WAhZP-BBI8dRi6gn9BVQR-zS9Je9YrP22CCczKKCzIlaIC4hEuI6zbfsruJYh--Frc8Zg0AJgc7I7pE&sig=AOD64_2WDXbP3Yunq5fJtnjp4yl5nuv-mg&ctype=5&q=&ved=2ahUKEwiA1rKvseb8AhXrg_0HHcCEDDUQwg8oAXoECAcQCw&adurl=", 29, $dog, "27-07-2023");
$toys = new toys("Giocattoli", "https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjV3N6Asub8AhUE13cKHRfsDQcYABAIGgJlZg&ohost=www.google.com&cid=CAESbeD20QwOpJHpoZbT3GeatDaIC8BLloS4Qv4bMvz4DJRaaOcq5-F3tyDAqMhLe6nI55hTSAUqRz0G12LFaEQM7QOfX48i2Urvf4q0mWt0BZ-NnjKh_h5EQhWukGBRP4U6Ul3T3Z22os9H2RGsUkg&sig=AOD64_2vjAsOuI4Dy4ruhiYTSKfoQUNJfA&ctype=5&q=&ved=2ahUKEwjLv9iAsub8AhV9gP0HHRylC5oQ9aACKAB6BAgIEBE&adurl=", 289, $cat, "Freestyle per gatti", "2.15 m / 2.60 m");

$products = [
    $product,
    $food,
    $toys,
];