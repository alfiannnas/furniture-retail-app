@extends('layouts.app')
@section('content')
    <section class="bg-light dark:bg-dark pt-24">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-xl">
            <h4 class="font-bold text-center text-4xl text-gray-900 dark:text-white mb-10">Form Pemesanan</h4>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <div class="form_content bg-gray-50 border border-gray-600 dark:bg-gray-900 mt-10">
                        @foreach ($orderdetails as $orderdetail)
                            <div class="row mb-5 text-right">
                                <form action="/orderform/{{ $orderdetail->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="px-2 py-2 bg-red-600 hover:bg-red-800 rounded-md text-white text-sm font-bold">Batal</button>
                                </form>
                            </div>
                            <div class="row mb-5 w-60 whitespace-nowrap mx-auto">
                                <img src="{{ asset('storage/' . $orderdetail->product->product_image) }}" class="w-fit" />
                            </div>
                            <div class="row mb-5">
                                <p class="text-gray-600 dark:text-white text-center">{{ $orderdetail->product->name }}</p>
                            </div>
                            <div class="row mb-5">
                                <div class="col-30">
                                    <label for="length"
                                        class="font-semibold text-gray-900 dark:text-white">Panjang</label>
                                </div>
                                <div class="col-70">
                                    <input type="number" id="length" name="length" value="{{ $orderdetail->length }}"
                                        readonly
                                        class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-30">
                                    <label for="height" class="font-semibold text-gray-900 dark:text-white">Tinggi
                                </div>
                                <div class="col-70">
                                    <input type="number" id="height" name="height" value="{{ $orderdetail->height }}"
                                        readonly
                                        class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-30">
                                    <label for="dp_price" class="font-semibold text-gray-900 dark:text-white">DP 50%</label>
                                </div>
                                <div class="col-70">
                                    <p class="flex text-gray-600 dark:text-white mt-3">
                                        Rp. <input name="dp_price" id="dp_price"
                                            value="{{ number_format($orderdetail->order->dp_price) }}"
                                            class="bg-transparent" readonly>
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-30">
                                    <label for="price" class="font-semibold text-gray-900 dark:text-white">Total
                                        Belanja</label>
                                </div>
                                <div class="col-70">
                                    <p class="flex text-gray-600 dark:text-white mt-3">
                                        Rp. <input name="price" id="price"
                                            value="{{ number_format($orderdetail->order->total_price) }}"
                                            class="bg-transparent" readonly>
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-30">
                                    <label class="font-semibold text-gray-900 dark:text-white">Total Bayar</label>
                                </div>
                                <div class="col-70">
                                    @if ($order->payment_option == 'Lunas')
                                        <p class="flex text-gray-600 dark:text-white mt-3">
                                            Rp. <input name="total_bayar" id="total_bayar"
                                                value="{{ number_format($order->total_price) }}" class="bg-transparent"
                                                readonly>
                                        </p>
                                    @else
                                        <p class="flex text-gray-600 dark:text-white mt-3">
                                            Rp. <input name="total_bayar" id="total_bayar"
                                                value="{{ number_format($order->dp_price) }}" class="bg-transparent"
                                                readonly>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full">
                    <div class="form_content bg-gray-50 border border-gray-600 dark:bg-gray-900 mt-10">
                        <form action="/orderform/paymentoption" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-30">
                                    <label for="payment_option" class="font-semibold text-gray-900 dark:text-white">Opsi
                                        Pembayaran</label>
                                </div>
                                <div class="col-70">
                                    <select id="payment_option" name="payment_option" onchange="opsiBayar()"
                                        class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                        @if ($order->payment_option == 'DP 50%')
                                            <option value="DP 50%" selected>DP 50%</option>
                                            <option value="Lunas">Lunas</option>
                                        @elseif($order->payment_option == 'Lunas')
                                            <option value="DP 50%">DP 50%</option>
                                            <option value="Lunas" selected>Lunas</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="flex flex-col p-3 mx-auto text-center w-full">
                                    <button type="submit"
                                        class="px-2 py-2 bg-third rounded-md text-white text-sm font-bold">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-5">
                <div class="flex flex-col p-3 mx-auto text-center max-w-md">
                    <a href="/orderform/checkout"
                        class="px-2 py-2 bg-third rounded-md text-white text-sm font-bold">Checkout</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Fungsi untuk mengisi value total bayar sesuai opsi yang dipilih
        function opsiBayar() {
            // variabel untuk memilih elemen berdasarkan atribut id
            const opsiBayar = document.getElementById("payment_option").value;
            const opsiDP = document.getElementById("dp_price").value;
            const opsiLunas = document.getElementById("price").value;
            const totalBayar = document.getElementById("total_bayar");

            // Cek opsi bayar pada dropdown nama opsi bayar yang dipilih
            if (opsiBayar == "DP 50%") {
                totalBayar.value = opsiDP;
            } else if (opsiBayar == "Lunas") {
                totalBayar.value = opsiLunas;
            }
        }
    </script>
@endsection
