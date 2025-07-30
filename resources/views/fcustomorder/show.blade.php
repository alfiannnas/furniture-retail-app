@extends('layouts.app')
@section('content')
    <section class="bg-light dark:bg-dark p-3 sm:p-5">
        <div class="flex-1 p:2 sm:p-6 pt-20 justify-between flex flex-col h-screen lg:pt-20">
            <!-- Floating Chatbox Window di pojok kanan bawah -->
<div 
    x-data="{ open: true }"
    class="fixed bottom-0 right-0 z-30 w-full max-w-sm sm:max-w-md md:max-w-lg shadow-lg rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 flex flex-col"
    style="height: auto;"
>
    <!-- Header -->
    <div class="flex items-center justify-between px-4 py-3 border-b bg-blue-600 rounded-t-lg cursor-pointer"
         @click="open = !open">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                <svg class="w-7 h-7 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <span class="text-gray-900 font-semibold">Teras Kayu Purwokerto</span>
                
                <div class="text-xs flex items-center space-x-2">
                    @if($isChatEnd)
                        <span class="text-white text-sm">Chat sudah berakhir</span>
                    @else
                        <span class="text-white text-sm">Chat masih berlangsung</span>
                    @endif
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="text-white focus:outline-none" @click.stop="open = !open">
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </button>
        </div>
    </div>
    <!-- Chat Content -->
    <div x-show="open" style="height: 600px;" class="flex flex-col transition-all duration-300 ease-in-out overflow-hidden">
        <!-- Messages -->
        <div id="messages"
            class="flex-1 flex flex-col space-y-4 p-3 overflow-y-auto bg-gray-50 dark:bg-gray-700"
            style="min-height: 0;">
            @foreach ($messages as $mess)
                @if ($mess->user->roles == 'admin')
                    <div class="flex items-end">
                        <div class="flex flex-col space-y-1 text-sm max-w-xs mx-2 order-2 items-start">
                            <span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-blue-500 text-white">
                                {{ $mess->body }}
                            </span>
                            <span class="text-xs text-gray-400 mt-1">
                                {{ $mess->created_at->timezone('Asia/Jakarta')->format('d M Y H:i') }}
                            </span>
                        </div>
                    </div>
                @elseif ($mess->user->roles == 'user')
                    <div class="flex items-end justify-end">
                        <div class="flex flex-col space-y-1 text-sm max-w-xs mx-2 order-1 items-end">
                            <span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-yellow-500 text-white">
                                {{ $mess->body }}
                            </span>
                            <span class="text-xs text-gray-400 mt-1 text-right">
                                {{ $mess->created_at->timezone('Asia/Jakarta')->format('d M Y H:i') }}
                            </span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- Input -->
        <form action="/fullcustom/send" method="post" class="p-3 border-t bg-white dark:bg-gray-800">
            @csrf
            <div class="flex items-center space-x-2">
                <input type="hidden" name="full_custom_id" value="{{ $fullCustom->id }}">
                <textarea id="body" name="body" rows="1" autofocus
                    class="@error('body') is-invalid @enderror flex-1 resize-none p-2 text-sm rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    placeholder="Ketik pesan"></textarea>
                <button type="submit"
                    class="p-2 bg-blue-600 text-gray-900 rounded-full hover:bg-blue-700 transition">
                    <svg aria-hidden="true" class="w-5 h-5 rotate-90" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                        </path>
                    </svg>
                </button>
            </div>
            @error('body')
                <div class="mt-2 text-xs text-red-600">{{ $message }}</div>
            @enderror
        </form>
    </div>
</div>
        </div>
    </section>
@endsection
