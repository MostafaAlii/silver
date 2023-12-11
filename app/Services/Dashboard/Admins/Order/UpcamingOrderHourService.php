<?php
namespace App\Services\Dashboard\Admins\Order;
use App\Models\SaveRentHour;

class UpcamingOrderHourService {

    public function updateDate($orderId, $data) {
        $order = SaveRentHour::findOrFail($orderId);
        $order->data = $data;
        $order->save();
        return $order;
    }

    public function updateTime($orderId, $hours_from) {
        $order = SaveRentHour::findOrFail($orderId);
        $order->hours_from = $hours_from;
        $order->save();
        return $order;
    }
}