<?
    $smarty = new Smarty;
    $smarty->setCompileDir("./templates/compiled");

    function get_flat($image, $flats_array) {
        foreach ($flats_array as $result) {
            if ($result["image"] == $image) {
                return $result;
            }
        }
    }

    function beautifySquare($value) {
        return preg_replace("/\./", ",", $value);
    }

    /*function calculate_price($square, $price) {
        return ceil($square * $price);
    }

    function calculate_price_by_liter($rooms, $liter) {

    }*/

    function beautifyPrice($value) {
        if (strlen($value) == 6) {
            $value = substr($value, 0, 3) . ' ' . substr($value, 3, 3);
        } elseif (strlen($value) == 7) {
            $value = substr($value, 0, 1) . ' ' . substr($value, 1, 3) . ' ' . substr($value, 4, 3);
        }
        return $value;
    }
 // Функция принимает на вход type и выдаёт фактический литер, поэтому каждый раз при добавлении литера нужно дописывать сюда пример
    function getLiterType($number) {
        if ($number == 8 || $number == 7) {
            return $number + 2;
        } else {
            return $number - 8;
        }
       // return $number % 10 == 0 ? 10 : $number % 10;
    };

    function getLiters($type) {
        global $liters_in_sale;
        $result = [];
        foreach ($liters_in_sale as $liter) {
            if (getLiterType($liter) == $type) {
                 array_push($result, $liter);
            }
        }
        if (empty($result)) {
            return false;
        } else {
            return count($result) > 1 ? "Литеры " . implode(", ", $result): "Литер " . $result[0];
        }
    }

?>
