<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Auth;

class NotificationController extends Controller
{
    public function getNotifications(){
        $notifications = Notification::where(['user_id' => Auth::user()->id, 'notificable' => 1])->get();
        return $notifications;
      }
}
