<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;
    //只允许订单的创建者可以看到对应的订单信息
    public function own(User $user, Order $order)
    {
        return $order->user_id == $user->id;
    }
}
