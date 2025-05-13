@extends('admin.layouts.app')
@section('content')
    <section class="bg-light dark:bg-dark p-3 sm:p-5 sm:ml-64 pt-24 lg:pt-24">
        <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-8">
                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg shadow-md bg-gray-100 dark:bg-gray-700 border-l-4 border-purple-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/dotty/100/ffffff/sorting-answers.png"
                                    alt="sorting-answers" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $category }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Kategori</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-blue-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/100/ffffff/external-customer-advertisement-tanah-basah-glyph-tanah-basah.png"
                                    alt="external-customer-advertisement-tanah-basah-glyph-tanah-basah" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $user }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Pelanggan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-yellow-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/pastel-glyph/100/ffffff/accent-chair--v1.png"
                                    alt="accent-chair--v1" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $product }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Produk</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-red-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/ios-filled/100/ffffff/online-maintenance-portal.png"
                                    alt="icon pesanan custom" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $accept }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Pesanan Katalog</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-8">
                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-blue-500">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-blue-500 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/ios-filled/100/ffffff/windows10-personalization.png"
                                    alt="icon pesanan full custom" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $fcustom }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Full Kustom</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-zinc-500">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-zinc-500 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/external-glyph-silhouettes-icons-papa-vector/100/ffffff/external-Down-Payment-property-sale-glyph-silhouettes-icons-papa-vector.png"
                                    alt="external-Down-Payment-property-sale-glyph-silhouettes-icons-papa-vector" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $dppay }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">DP 50%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-green-500">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-green-500 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/ios-filled/100/ffffff/online-payment-.png"
                                    alt="online-payment-" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $clearpay }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Lunas</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-yellow-600">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-yellow-600 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/ios-filled/100/ffffff/process.png" alt="process" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $proces }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Diproses</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-8">
                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-lime-700">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-lime-700 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/100/ffffff/external-check-multimedia-kiranshastry-solid-kiranshastry.png"
                                    alt="external-check-multimedia-kiranshastry-solid-kiranshastry" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $ready }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Pesanan Siap</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-sky-700">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-sky-700 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/ios-filled/100/ffffff/delivery--v1.png"
                                    alt="delivery--v1" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $send }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Dikirim</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-orange-700">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-orange-700 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/ios-filled/100/ffffff/free-shipping.png"
                                    alt="free-shipping" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $free }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Gratis Pengiriman</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-gray-100 shadow-md dark:bg-gray-700 border-l-4 border-stone-800">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-stone-800 text-white rounded-full mr-3">
                                <img src="https://img.icons8.com/pastel-glyph/100/ffffff/shipping-service--v1.png"
                                    alt="shipping-service--v1" />
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg text-black dark:text-white">{{ $ekspedisi }}</div>
                                <div class="text-sm text-gray-900 dark:text-gray-200">Ekspedisi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 bg-white rounded-lg shadow-md dark:bg-gray-700 mb-2 lg:mb-8">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">5 Produk Terlaris</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">Berdasarkan jumlah penjualan</p>
                    </div>
                    <div class="flex items-center">
                        <select id="periodeFilter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="7">7 Hari Terakhir</option>
                            <option value="30" selected>30 Hari Terakhir</option>
                            <option value="90">3 Bulan Terakhir</option>
                        </select>
                        <button class="ml-2 text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <div class="chart-container relative h-64 w-full">
                            <div class="donut-chart relative w-64 h-64 mx-auto">
                                @if($topSelling->sum('total_sold') > 0)
                                    <div class="absolute inset-0 flex items-center justify-center flex-col">
                                        <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ $topSelling->sum('total_sold') }}</span>
                                        <span class="text-sm text-gray-500 dark:text-gray-300">Total Terjual</span>
                                    </div>
                                @else
                                    <div class="absolute inset-0 flex items-center justify-center flex-col">
                                        <span class="text-3xl font-bold text-gray-900 dark:text-white">0</span>
                                        <span class="text-sm text-gray-500 dark:text-gray-300">Belum Ada Penjualan</span>
                                    </div>
                                @endif  
                            </div>
                        </div>
                    </div>
                    <div class="ami w-1/2">
                        @php 
                            $colorCodes = [
                                'rgb(99, 102, 241)',   // indigo-500
                                'rgb(16, 185, 129)',   // emerald-500
                                'rgb(6, 182, 212)',    // cyan-500
                                'rgb(249, 115, 22)',   // orange-500
                                'rgb(168, 85, 247)'    // purple-500
                            ];
                            $colors = ['bg-indigo-500', 'bg-emerald-500', 'bg-cyan-500', 'bg-orange-500', 'bg-purple-500'];
                            $totalSold = $topSelling->sum('total_sold');
                        @endphp
                        
                        <div class="space-y-4">
                            @if($totalSold > 0)
                                @foreach($topSelling as $index => $product)
                                    <div class="flex items-center">
                                        <div class="mr-3">
                                            <div class="w-3 h-3 rounded-lg" style="background-color: {{ $colorCodes[$index % count($colorCodes)] }};"></div>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="text-sm font-medium text-gray-900 dark:text-white">{{ $product->name }}</h4>
                                            <div class="flex justify-between text-xs text-gray-500 dark:text-gray-300">
                                                <span>{{ $product->total_sold }} unit ({{ round(($product->total_sold / $totalSold) * 100, 2) }}%)</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="flex items-center justify-center h-64">
                                    <div class="text-center">
                                        <p class="text-gray-500 dark:text-gray-400">Belum ada produk yang terjual</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    initDonutChart();
    
    const periodeFilter = document.getElementById('periodeFilter');
    if (periodeFilter) {
        periodeFilter.addEventListener('change', function() {
            const periode = this.value;
            
            const chartContainer = document.querySelector('.donut-chart');
            chartContainer.innerHTML = '<div class="flex items-center justify-center h-full"><div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500"></div></div>';
            
            fetch(`/admin/top-products/${periode}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                updateChart(data.topSelling, data.totalSold);
                updateProductList(data.topSelling);
            })
            .catch(error => {
                console.error('Error:', error);
                chartContainer.innerHTML = '<div class="flex items-center justify-center h-full text-red-500">Gagal memuat data</div>';
            });
        });
    }
});

function initDonutChart() {
    const colorCodes = [
        'rgb(99, 102, 241)',    // indigo-500
        'rgb(16, 185, 129)',    // emerald-500
        'rgb(6, 182, 212)',     // cyan-500
        'rgb(249, 115, 22)',    // orange-500
        'rgb(168, 85, 247)'     // purple-500
    ];
    
    const chartContainer = document.querySelector('.donut-chart');
    if (!chartContainer) return;
    
    const textElement = chartContainer.querySelector('div.absolute');
    chartContainer.innerHTML = '';
    
    if (textElement) {
        chartContainer.appendChild(textElement);
    }
    
    const topSelling = @json($topSelling);
    const totalSold = topSelling.reduce((sum, product) => sum + parseInt(product.total_sold), 0);
    
    if (totalSold === 0) {
        const svgNS = "http://www.w3.org/2000/svg";
        const svg = document.createElementNS(svgNS, "svg");
        svg.setAttribute('width', '100%');
        svg.setAttribute('height', '100%');
        svg.setAttribute('viewBox', '0 0 100 100');
        
        let circle = document.createElementNS(svgNS, "circle");
        circle.setAttribute('cx', '50');
        circle.setAttribute('cy', '50');
        circle.setAttribute('r', '40');
        circle.setAttribute('fill', '#f3f4f6');
        circle.setAttribute('stroke', '#e5e7eb');
        circle.setAttribute('stroke-width', '1');
        svg.appendChild(circle);
        
        chartContainer.insertBefore(svg, chartContainer.firstChild);
        return;
    }
    
    const svgNS = "http://www.w3.org/2000/svg";
    const svg = document.createElementNS(svgNS, "svg");
    svg.setAttribute('width', '100%');
    svg.setAttribute('height', '100%');
    svg.setAttribute('viewBox', '0 0 100 100');
    
    const outerRadius = 40;
    const innerRadius = 32;
    
    // Jika hanya ada 1 produk, gambar lingkaran penuh
    if (topSelling.length === 1) {
        let circle = document.createElementNS(svgNS, "circle");
        circle.setAttribute('cx', '50');
        circle.setAttribute('cy', '50');
        circle.setAttribute('r', outerRadius);
        circle.setAttribute('fill', colorCodes[0]);
        circle.setAttribute('stroke', '#fff');
        circle.setAttribute('stroke-width', '1');
        svg.appendChild(circle);
    } else {
        let cumulativePercent = 0;
        
        topSelling.forEach((product, index) => {
            const percentage = (product.total_sold / totalSold) * 100;
            
            let startX = Math.cos(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            let startY = Math.sin(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            
            cumulativePercent += percentage;
            
            let endX = Math.cos(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            let endY = Math.sin(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            
            let largeArcFlag = percentage > 50 ? 1 : 0;
            
            let pathData = [
                `M ${startX} ${startY}`,
                `A ${outerRadius} ${outerRadius} 0 ${largeArcFlag} 1 ${endX} ${endY}`,
                `L 50 50`,
                `Z`
            ].join(' ');
            
            let path = document.createElementNS(svgNS, "path");
            path.setAttribute('d', pathData);
            path.setAttribute('fill', colorCodes[index % colorCodes.length]);
            path.setAttribute('stroke', '#fff');
            path.setAttribute('stroke-width', '1');
            
            svg.appendChild(path);
        });
    }
    
    let circle = document.createElementNS(svgNS, "circle");
    circle.setAttribute('cx', '50');
    circle.setAttribute('cy', '50');
    circle.setAttribute('r', innerRadius);
    circle.setAttribute('fill', '#fff');
    svg.appendChild(circle);
    
    chartContainer.insertBefore(svg, chartContainer.firstChild);
}

function updateChart(topSelling, totalSold) {
    const chartContainer = document.querySelector('.donut-chart');
    chartContainer.innerHTML = '';
    
    const colorCodes = [
        'rgb(99, 102, 241)',    // indigo-500
        'rgb(16, 185, 129)',    // emerald-500
        'rgb(6, 182, 212)',     // cyan-500
        'rgb(249, 115, 22)',    // orange-500
        'rgb(168, 85, 247)'     // purple-500
    ];
    
    const svgNS = "http://www.w3.org/2000/svg";
    const svg = document.createElementNS(svgNS, "svg");
    svg.setAttribute('width', '100%');
    svg.setAttribute('height', '100%');
    svg.setAttribute('viewBox', '0 0 100 100');
    
    const outerRadius = 40;
    const innerRadius = 32;
    
    // Jika hanya ada 1 produk, gambar lingkaran penuh
    if (topSelling.length === 1) {
        let circle = document.createElementNS(svgNS, "circle");
        circle.setAttribute('cx', '50');
        circle.setAttribute('cy', '50');
        circle.setAttribute('r', outerRadius);
        circle.setAttribute('fill', colorCodes[0]);
        circle.setAttribute('stroke', '#fff');
        circle.setAttribute('stroke-width', '1');
        svg.appendChild(circle);
    } else {
        let cumulativePercent = 0;
        
        topSelling.forEach((product, index) => {
            const percentage = (product.total_sold / totalSold) * 100;
            
            let startX = Math.cos(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            let startY = Math.sin(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            
            cumulativePercent += percentage;
            
            let endX = Math.cos(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            let endY = Math.sin(2 * Math.PI * (cumulativePercent / 100) - Math.PI / 2) * outerRadius + 50;
            
            let largeArcFlag = percentage > 50 ? 1 : 0;
            
            let pathData = [
                `M ${startX} ${startY}`,
                `A ${outerRadius} ${outerRadius} 0 ${largeArcFlag} 1 ${endX} ${endY}`,
                `L 50 50`,
                `Z`
            ].join(' ');
            
            let path = document.createElementNS(svgNS, "path");
            path.setAttribute('d', pathData);
            path.setAttribute('fill', colorCodes[index % colorCodes.length]);
            path.setAttribute('stroke', '#fff');
            path.setAttribute('stroke-width', '1');
            
            svg.appendChild(path);
        });
    }
    
    let circle = document.createElementNS(svgNS, "circle");
    circle.setAttribute('cx', '50');
    circle.setAttribute('cy', '50');
    circle.setAttribute('r', innerRadius);
    circle.setAttribute('fill', '#fff');
    svg.appendChild(circle);
    
    chartContainer.appendChild(svg);
    
    const textContainer = document.createElement('div');
    textContainer.className = 'absolute inset-0 flex items-center justify-center flex-col';
    textContainer.innerHTML = `
        <span class="text-3xl font-bold text-gray-900 dark:text-white">${totalSold}</span>
        <span class="text-sm text-gray-500 dark:text-gray-300">Total Terjual</span>
    `;
    chartContainer.appendChild(textContainer);
}

function updateProductList(topSelling) {
    const productList = document.querySelector('.ami .space-y-4');
    productList.innerHTML = '';
    
    const colorCodes = [
        'rgb(99, 102, 241)',    // indigo-500
        'rgb(16, 185, 129)',    // emerald-500
        'rgb(6, 182, 212)',     // cyan-500
        'rgb(249, 115, 22)',    // orange-500
        'rgb(168, 85, 247)'     // purple-500
    ];
    
    const totalSold = topSelling.reduce((sum, product) => sum + parseInt(product.total_sold), 0);
    
    if (totalSold > 0) {
        topSelling.forEach((product, index) => {
            const percentage = ((product.total_sold / totalSold) * 100).toFixed(2);
            const productItem = document.createElement('div');
            productItem.className = 'flex items-center';
            productItem.innerHTML = `
                <div class="mr-3">
                    <div class="w-3 h-3 rounded-lg" style="background-color: ${colorCodes[index % colorCodes.length]};"></div>
                </div>
                <div class="flex-1">
                    <h4 class="text-sm font-medium text-gray-900 dark:text-white">${product.name}</h4>
                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-300">
                        <span>${product.total_sold} unit (${percentage}%)</span>
                    </div>
                </div>
            `;
            productList.appendChild(productItem);
        });
    } else {
        const emptyItem = document.createElement('div');
        emptyItem.className = 'flex items-center justify-center h-64';
        emptyItem.innerHTML = `
            <div class="text-center">
                <p class="text-gray-500 dark:text-gray-400">Belum ada produk yang terjual</p>
            </div>
        `;
        productList.appendChild(emptyItem);
    }
}
</script>
@endpush
