<?php

namespace App\Student\Http\Controllers;

use App\Models\Message_Draft;
use App\Models\Message_Sent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $StudentId = $request->session()->get('UserId');

        $messages = DB::Table('Message_Sent')
            ->join('Message_Draft', 'Message_Draft.Message_Draft_Id', '=', 'Message_Sent.Message_Draft_Id')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', 'Message_Draft.Staff_Id')
            ->where('Message_Sent.Send_To', '=', 'Student')
            ->where('Message_Sent.Person_Id', '=', $StudentId)
            ->orderByDesc('Message_Sent.Message_Sent_Id')
            ->get();

        return view("student.message.index", ["messages" => $messages]);
    }

    public function viewMessage($MessageSentId)
    {
        $message = DB::Table('Message_Sent')
            ->join('Message_Draft', 'Message_Draft.Message_Draft_Id', '=', 'Message_Sent.Message_Draft_Id')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Message_Draft.Staff_Id')
            ->where('Message_Sent.Message_Sent_Id', '=', $MessageSentId)
            ->first();

        if ($message->Message_Sent_Status != 'Read') {
            $rowsAffected = DB::table('Message_Sent')
                ->where('Message_Sent.Message_Sent_Id', $MessageSentId)
                ->update(['Message_Sent.Message_Sent_Status' => 'Read']);
        }

        return view("student.message.view", ["message" => $message]);
    }
}
