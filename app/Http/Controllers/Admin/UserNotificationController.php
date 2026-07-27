<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use App\Mail\UpdateNotificationMail;
use Illuminate\Support\Facades\Mail;

class UserNotificationController extends Controller
{
    // public function addNotification(Request $request, $id)
    // {
    //     $request->validate([
    //         'update_notification' => 'required|string'
    //     ]);

    //     $user = User::findOrFail($id);

    //     Notification::create([
    //         'user_id' => $user->id,
    //         'message' => $request->update_notification,
    //     ]);

    //     return back()->with('success', 'Notification added successfully!');
    // }





public function addNotification(Request $request, $id)
{
    // Validate
    $request->validate([
        'update_notification' => 'required|string'
    ]);

    // Find user
    $user = User::findOrFail($id);

    // Save notification in DB
    Notification::create([
        'user_id' => $user->id,
        'message' => $request->update_notification,
    ]);

    // SEND EMAIL
    try {
        Mail::to($user->email)->send(
            new UpdateNotificationMail($request->update_notification)
        );
    } catch (\Exception $e) {
        return back()->with('error', 'Notification saved but email not sent: ' . $e->getMessage());
    }

    return back()->with('success', 'Notification added and email sent successfully!');
}





      // Delete a notification
    public function deleteNotification($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return back()->with('success', 'Notification deleted successfully!');
    }
}
