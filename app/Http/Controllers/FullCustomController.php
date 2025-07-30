<?php

namespace App\Http\Controllers;

use App\Models\FullCustom;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreateMessage;
use Illuminate\Support\Facades\DB;

class FullCustomController extends Controller
{
    public function index(Request $request, FullCustom $fullCustom)
    {
        $fullCustoms = FullCustom::where('user_id', Auth::user()->id)->latest()->filter(request(['search']))->paginate(10);
        $fullCustoms->appends($request->all()); //agar searching ikut di paginasi
        return view('fcustomorder.index', compact('fullCustoms'));
    }

    public function custom_form(FullCustom $fullCustom)
    {
        return view('fcustomorder.custom', compact('fullCustom'));
    }

    public function fullcustom_order(Request $request)
    {
        $fullcustom_date = Carbon::now();

        $validateData = $request->validate([
            'phone_number'    => 'required|min:11|max:13|unique:full_customs',
            'description'     => 'required|max:250',
            'image_custom'    => 'required|image|file|max:1024'
        ]);

        if ($request->hasFile('image_custom')) {
            $image_custom = $request->file('image_custom')->store('', 'public');
        }

        $cek_order = FullCustom::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($cek_order)) {
            $fcustom = new FullCustom;
            $fcustom->user_id = Auth::user()->id;
            $fcustom->status = 1;
            $fcustom->fullcustom_date = $fullcustom_date;
            $fcustom->phone_number = $request->phone_number;
            $fcustom->description = $request->description;
            $fcustom->image_custom =  $image_custom;
            $fcustom->save($validateData);
        }

        Alert::success('Sukses', 'Data Kustom Berhasil Disimpan');
        return redirect('fullcustom-orders');
    }

    public function fullcustomDetail(FullCustom $fullCustom, Message $message)
    {
        $messages = Message::where('full_custom_id', $fullCustom->id)->get();
        $isChatEnd = Message::where('full_custom_id', $fullCustom->id)
            ->where('is_chat_end', 1)
            ->exists();

        return view('fcustomorder.show', compact('messages', 'fullCustom', 'isChatEnd'));
    }

    // public function oneRead($id, FullCustom $fullCustom)
    // {
    //     $fullCustoms = FullCustom::where('user_id', Auth::user()->id)->latest()->filter(request(['search']))->paginate(10);
    //     $message = Message::findOrFail($id);
    //     $getID = DB::table('notifications')->where('data->message_id', $id)->pluck('id');
    //     DB::table('notifications')->where('id', $getID)->update(['read_at' => now()]);
    //     return view('fcustomorder.index', compact('message', 'fullCustoms'));
    // }

    // public function allRead()
    // {
    //     $user = User::find(auth()->user()->id);

    //     foreach ($user->unreadNotifications as $notification) {
    //         $notification->markAsRead();
    //     }

    //     return redirect()->back();
    // }

    public function sendMessage(Request $request)
    {
        
        $validateData = $request->validate([
            'body'           => 'required|max:250',
            'full_custom_id' => 'required|exists:full_customs,id',
        ]);

        $cek_fullcustom = FullCustom::where('id', $request->full_custom_id)
            ->where('user_id', Auth::user()->id)
            ->where('status', 1)
            ->first();

        if (!$cek_fullcustom) {
            return back()->withErrors(['msg' => 'Order tidak ditemukan atau tidak aktif.']);
        }

        $isChatEnd = Message::where('full_custom_id', $cek_fullcustom->id)
            ->where('is_chat_end', 1)
            ->exists();

        if ($isChatEnd) {
            Alert::error('Gagal', 'Pesan sudah berakhir, tidak dapat mengirim pesan lagi.');
            return back();
        }

        $chatDetail = new Message;
        $chatDetail->user_id = Auth::user()->id;
        $chatDetail->full_custom_id = $cek_fullcustom->id;
        $chatDetail->body = $request->body;
        $chatDetail->save();

        $users = User::where('id', '!=', auth()->user()->id)->get();
        $user_create = auth()->user()->name;
        $userr = auth()->user()->id;
        Notification::send($users, new CreateMessage($chatDetail->id, $chatDetail->full_custom_id, $user_create, $chatDetail->body, $userr));

        return back();
    }

    public function endChat($id)
    {
        $fullCustom = FullCustom::where('id', $id)->where('status', 1)->firstOrFail();
        Message::where('full_custom_id', $fullCustom->id)
            ->update(['is_chat_end' => 1]);

        return back();
    }
}
