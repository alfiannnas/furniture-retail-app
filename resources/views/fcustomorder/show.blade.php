@extends('layouts.app')
@section('content')
    <section class="bg-light dark:bg-dark p-3 sm:p-5">
        <div class="flex-1 p:2 sm:p-6 pt-20 justify-between flex flex-col h-screen lg:pt-20">
            <div class="flex sm:items-center justify-between py-3 border-b-2 border-gray-200">
                <div class="relative flex items-center space-x-4">
                    <div class="relative">
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col leading-tight">
                        <div class="text-2xl mt-1 flex items-center">
                            <span class="text-gray-700 dark:text-gray-100 mr-3">Teras Kayu Purwokerto</span>
                            {{-- Cek status chat --}}
                            @if($isChatEnd)
                                <span class="inline-block px-3 py-1 mt-2 bg-red-500 text-white rounded text-sm font-semibold">
                                    Chat sudah berakhir
                                </span>
                            @else
                                <form action="{{ route('endChat', $fullCustom->id) }}" method="POST" onsubmit="return confirm('Akhiri chat ini?')">
                                    @csrf
                                    <button type="submit"
                                        class="ml-2 px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm font-semibold">
                                        End Chat
                                    </button>
                                </form>
                            @endif
                        </div>
                        <span class="text-lg text-gray-600 dark:text-gray-200">Admin</span>
                    </div>
                </div>
                <div class="relative flex items-center space-x-4">
                    <a href="/fullcustom-orders" type="button"
                        class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-third rounded-full">
                        <img class="w-6 h-6" aria-hidden="true" src="https://img.icons8.com/ios-filled/100/ffffff/left.png"
                            alt="left" />
                        <span class="sr-only">Notifications</span>
                    </a>
                </div>
            </div>
            <div id="messages"
                class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
                @foreach ($messages as $mess)
                    <div class="chat-message">
                        <div class="flex items-end">
                            <div class="flex flex-col space-y-2 text-sm max-w-sm mx-2 order-2 items-start">
                                @if ($mess->user->roles == 'admin')
                                    <div>
                                        <span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-blue-500 text-gray-200">
                                            {{ $mess->body }}
                                        </span>
                                        <div class="text-xs text-gray-400 mt-1">
                                            {{ $mess->created_at->timezone('Asia/Jakarta')->format('d M Y H:i') }}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="chat-message">
                        <div class="flex items-end justify-end">
                            <div class="flex flex-col space-y-2 text-sm max-w-sm mx-2 order-1 items-end">
                                @if ($mess->user->roles == 'user')
                                    <div>
                                        <span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-yellow-500 text-gray-200">
                                            {{ $mess->body }}
                                        </span>
                                        <div class="text-xs text-gray-400 mt-1 text-right">
                                            {{ $mess->created_at->timezone('Asia/Jakarta')->format('d M Y H:i') }}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <form action="/fullcustom/send" method="post">
                @csrf
                <label for="body" class="sr-only">Ketik pesan</label>
                <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
                    <textarea id="body" name="body" rows="1" autofocus
                        class="@error('body') is-invalid @enderror block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="ketik pesan"></textarea>
                    @error('body')
                        <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                            role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <span class="font-medium">{{ $message }}
                            </div>
                        </div>
                    @enderror
                    <button type="submit"
                        class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                            </path>
                        </svg>
                        <span class="sr-only">Kirim Pesan</span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
