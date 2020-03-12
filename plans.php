<?php
$data = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/js/plans.json"), true);

$plans_smart = [];
$plans_1kom = [];
$plans_2kom = [];
$plans_3kom = [];
$plans_type1 = [];
$plans_type2 = [];
$plans_type3 = [];
$plans_type4 = [];
$plans_type5 = [];
$plans_type6 = [];
$plans_type7 = [];
$plans_type8 = [];
$plans_type9 = [];
$plans_type10 = [];
$liters_in_sale = [7, 8, 9, 10, 11, 12, 13, 14, 15, 16];

$liters = $data["liters"];


foreach ($data["living"] as $flat) {

    $type = $flat["type"];
    $liter = getLiters($type);
    $entrance = $flat["entrance"];
    $image = $flat["planImg"];
    $rooms = $flat["rooms"];
    $roomsStr = $rooms == 's' ? 'Студия' : $rooms . '-ком. квартира';
    $fullSq = $flat["areaFull"];
    $liveSq = $flat["areaRooms"];
    $kitchSq = $flat["areaKitchen"];
    $dates = $flat["dates"];
    $price = 0;
    if  (isset($flat["price"]) && ($flat["price"])) {
        $price = $flat["price"];
    } else {
        $liter_num = preg_replace('/[^0-9]/', '', $liter);
        $price_m2 = $liters[$liter_num]["price"]["normal"][$rooms] . "Выполняюсь";
        $price = $price_m2 * $fullSq;
    }

    $svg = $flat["svg"];

    $file_object = [
        'type' => $type,
        'liter' => $liter,
        'image' => $image,
        'entrance' => $entrance,
        'rooms' => $rooms,
        'roomsStr' => $roomsStr,
        'fullSq' => $fullSq,
        'liveSq' => $liveSq,
        'kitchSq' => $kitchSq,
        'price' => $price,
        'svg' => $svg,
        'dates' =>$dates
    ];

    if ($liter) {
        if ($rooms == 's') {
            array_push($plans_smart, $file_object);
        } elseif ($rooms == "1") {
            array_push($plans_1kom, $file_object);
        } elseif ($rooms == "2") {
            array_push($plans_2kom, $file_object);
        } elseif ($rooms == "3") {
            array_push($plans_3kom, $file_object);
        }
    }


    if ($type == 1) {
        array_push($plans_type1, $file_object);
    } elseif ($type == 2) {
        array_push($plans_type2, $file_object);
    } elseif ($type == 3) {
        array_push($plans_type3, $file_object);
    } elseif ($type == 4) {
        array_push($plans_type4, $file_object);
    } elseif ($type == 5) {
        array_push($plans_type5, $file_object);
    } elseif ($type == 6) {
        array_push($plans_type6, $file_object);
    } elseif ($type == 7) {
        array_push($plans_type7, $file_object);
    } elseif ($type == 8) {
        array_push($plans_type8, $file_object);
    } elseif ($type == 9) {
        array_push($plans_type9, $file_object);
    } elseif ($type == 10) {
        array_push($plans_type10, $file_object);
    }
}

usort($plans_1kom, "arplans_cmp");
usort($plans_2kom, "arplans_cmp");
usort($plans_3kom, "arplans_cmp");
usort($plans_smart, "arplans_cmp");

$plans_all = array_merge($plans_smart, $plans_1kom, $plans_2kom, $plans_3kom);

function arplans_cmp($a, $b) {
    return floatval($a["fullSq"]) <= floatval($b["fullSq"]) ? -1 : 1;
}