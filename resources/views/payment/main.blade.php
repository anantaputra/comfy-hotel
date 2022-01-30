@extends('layouts.dashboard-main')

@section('container')

{{-- progress bar of the order --}}
<div class="w-full h-32 bg-white rounded-md mb-4 grid grid-cols-3 px-32 items-center">
    <div class="w-full h-16 bg-gray-100 grid grid-cols-1 items-center place-items-center -space-y-4 text-gray-400 cursor-pointer rounded-l-sm">
        <div class="font-medium flex place-items-center">
            <span>Step 1</span> 
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </div>
        <span class="text-lg font-semibold">Order Detail</span>
    </div>
    <div class="w-full h-16 bg-gray-100 grid grid-cols-1 items-center place-items-center -space-y-4 text-gray-400 cursor-pointer">
        <div class="font-medium flex place-items-center">
            <span>Step 2</span> 
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </div>
        <span class="text-lg font-semibold">Contact Data</span>
    </div>
    <div class="w-full h-16 bg-blue-600 grid grid-cols-1 items-center place-items-center -space-y-4 text-white cursor-pointer rounded-r-sm">
        <div class="font-medium flex place-items-center">
            <span>Step 3</span>
        </div>
        <span class="text-lg font-semibold">Payment</span>
    </div>
</div>

<div class="flex space-x-2">
    <div class="w-full bg-white rounded-md mb-2">
        <div class="px-10 py-4 block">
            <p class="text-2xl font-bold">Payment</p>
            <span class="text-md text-gray-400 font-semibold">Choose your payment method</span>
        </div>
        <div class="w-full bg-gray-300" style="height: 1px"></div>
        <div class="grid grid-cols-5 gap-4 place-items-center p-8">
            <div onclick="creditCard()" class="w-full h-32 border border-gray-300 rounded-md grid grid-cols-1 place-items-center cursor-pointer pt-4" id="credit-card">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                    <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                </svg>
                <span class="-mt-8 font-semibold">Credit Card</span>
            </div>
            <div onclick="transfer()" class="w-full h-32 border border-gray-300 rounded-md grid grid-cols-1 place-items-center cursor-pointer pt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
                </svg>
                <span class="-mt-6 font-semibold">Bank Transfer</span>
            </div>
            <div onclick="storePay()" class="w-full h-32 border border-gray-300 rounded-md grid grid-cols-1 place-items-center cursor-pointer pt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
                <span class="-mt-6 font-semibold">Store</span>
            </div>
            <div class="w-full h-32 border border-gray-300 rounded-md grid grid-cols-1 place-items-center cursor-pointer pt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                </svg>
                <span class="-mt-6 font-semibold">e-Wallet</span>
            </div>
            <div class="w-full h-32 border border-gray-300 rounded-md grid grid-cols-1 place-items-center cursor-pointer pt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <span class="-mt-6 font-semibold">Mobile Payment</span>
            </div>
        </div>
    </div>
    <div class="w-1/2 h-auto bg-white rounded-md py-4">
        <p class="flex justify-center text-xl font-semibold mb-4">Nama Hotel</p>
        <div class="w-full bg-gray-50">
            <p>Check-in</p>
            <p>Check-out</p>
        </div>
        <p class="text-lg font-semibold">(1x) Deluxe Room (Room Only)</p>
        <p>Harga

            
        </p>
    </div>
</div>

{{-- credit card form --}}
<div class="space-x-2 mb-4 hidden" id="credit-card-form">
    <div class="w-full rounded-md bg-white shadow-md">
        <div class="px-10 py-8 block">
            <span class="text-lg text-gray-400 font-semibold">You Choose Credit Card for your payment</span>
        </div>
        <div class="w-full bg-gray-300 mb-2" style="height: 1px"></div>
        <div class="flex px-16">
            {{-- visa logo --}}
            <svg class="w-14 h-14" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="92.638pt" width="282pt" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" viewBox="0 0 282 92.637756">
                <g style="">
                 <path d="m184.19 0.98314c-22.429 0-38.184 11.924-38.323 28.974-0.14202 12.631 11.267 19.674 19.848 23.872 8.853 4.2916 11.81 7.0495 11.781 10.889-0.088 5.885-7.0841 8.5662-13.585 8.5662-9.0632 0-13.895-1.3235-21.322-4.5898l-2.9448-1.3997-3.172 19.651c5.3027 2.4455 15.095 4.5643 25.275 4.675 23.801 0 39.287-11.787 39.471-29.987 0.0937-10.018-5.9622-17.6-19.056-23.86-7.9044-4.0701-12.792-6.7689-12.719-10.893 0.006-3.644 4.1013-7.5494 12.991-7.5494 7.4244-0.12497 12.764 1.5792 16.968 3.3742l2.0222 1.0089 3.0845-19.036c-4.48-1.7697-11.55-3.6949-20.32-3.6949zm-70.41 1.5315-14.186 87.808h22.665l14.194-87.809h-22.67zm-33.205 0.0852-22.194 59.844-2.366-12.16c-5.527-14.911-17.492-30.552-31.426-36.891l20.302 76.846 24-0.01134 35.69-87.627h-24.006zm164.57 0.00568c-5.4305 0-9.5 1.5479-11.897 7.2881l-33.657 80.458h23.813s3.8934-10.83 4.7739-13.201c2.5988 0 25.727 0.04995 29.027 0.04995 0.70154 3.0618 2.7607 13.15 2.7607 13.15h21.055l-18.359-87.745h-17.516zm1.6019 23.673 1.511 7.5698s4.3569 20.951 5.2658 25.339h-18.822c1.8831-5.0386 9.032-24.544 9.032-24.544-0.13917 0.23858 1.8598-5.0789 3.0129-8.3651z" fill="#0023a0"/>
                 <path d="m37.798 2.5538h-36.568l-0.21302 1.511c28.431 7.2712 47.188 25.127 54.998 46.242l-7.947-40.357c-1.366-5.5501-5.345-7.2002-10.27-7.3962" fill="#ffab00"/>
                </g>
            </svg>
            {{-- mastercard logo --}}
            <svg class="w-14 h-14" xmlns="http://www.w3.org/2000/svg" width="2.11676in" height="1.5in" viewBox="0 0 152.407 108">
                <g>
                  <rect width="152.407" height="108" style="fill: none"/>
                  <g>
                    <rect x="60.4117" y="25.6968" width="31.5" height="56.6064" style="fill: #ff5f00"/>
                    <path d="M382.20839,306a35.9375,35.9375,0,0,1,13.7499-28.3032,36,36,0,1,0,0,56.6064A35.938,35.938,0,0,1,382.20839,306Z" transform="translate(-319.79649 -252)" style="fill: #eb001b"/>
                    <path d="M454.20349,306a35.99867,35.99867,0,0,1-58.2452,28.3032,36.00518,36.00518,0,0,0,0-56.6064A35.99867,35.99867,0,0,1,454.20349,306Z" transform="translate(-319.79649 -252)" style="fill: #f79e1b"/>
                    <path d="M450.76889,328.3077v-1.1589h.4673v-.2361h-1.1901v.2361h.4675v1.1589Zm2.3105,0v-1.3973h-.3648l-.41959.9611-.41971-.9611h-.365v1.3973h.2576v-1.054l.3935.9087h.2671l.39351-.911v1.0563Z" transform="translate(-319.79649 -252)" style="fill: #f79e1b"/>
                  </g>
                </g>
              </svg>
            {{-- jcb logo --}}
            <svg class="w-14 h-14" width="256px" height="198px" viewBox="0 0 256 198" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                <defs>
                    <linearGradient x1="-57.5270968%" y1="50.1241953%" x2="232.39121%" y2="50.1241953%" id="linearGradient-1">
                        <stop stop-color="#007940" offset="0%"></stop>
                        <stop stop-color="#00873F" offset="22.85%"></stop>
                        <stop stop-color="#40A737" offset="74.33%"></stop>
                        <stop stop-color="#5CB531" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="0.182516704%" y1="49.95997%" x2="100.273441%" y2="49.95997%" id="linearGradient-2">
                        <stop stop-color="#007940" offset="0%"></stop>
                        <stop stop-color="#00873F" offset="22.85%"></stop>
                        <stop stop-color="#40A737" offset="74.33%"></stop>
                        <stop stop-color="#5CB531" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="-62.8015845%" y1="49.8578253%" x2="253.671294%" y2="49.8578253%" id="linearGradient-3">
                        <stop stop-color="#007940" offset="0%"></stop>
                        <stop stop-color="#00873F" offset="22.85%"></stop>
                        <stop stop-color="#40A737" offset="74.33%"></stop>
                        <stop stop-color="#5CB531" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="0.175556793%" y1="50.0058048%" x2="101.808162%" y2="50.0058048%" id="linearGradient-4">
                        <stop stop-color="#1F286F" offset="0%"></stop>
                        <stop stop-color="#004E94" offset="47.51%"></stop>
                        <stop stop-color="#0066B1" offset="82.61%"></stop>
                        <stop stop-color="#006FBC" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="-0.575855512%" y1="49.9142191%" x2="98.13299%" y2="49.9142191%" id="linearGradient-5">
                        <stop stop-color="#6C2C2F" offset="0%"></stop>
                        <stop stop-color="#882730" offset="17.35%"></stop>
                        <stop stop-color="#BE1833" offset="57.31%"></stop>
                        <stop stop-color="#DC0436" offset="85.85%"></stop>
                        <stop stop-color="#E60039" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <g>
                    <path d="M256.000001,157.418094 C256.000001,179.325184 238.16137,197.163815 216.254279,197.163815 L-3.43623867e-08,197.163815 L-3.43623867e-08,39.7457218 C-3.43623867e-08,17.8386312 17.8386309,3.69395977e-07 39.7457214,3.69395977e-07 L256.000001,3.69395977e-07 L256.000001,157.418094 Z" fill="#FFFFFF"></path>
                    <path d="M185.584353,117.046455 L202.01467,117.046455 C202.484108,117.046455 203.579463,116.889977 204.048901,116.889977 C207.178485,116.26406 209.838631,113.447434 209.838631,109.535453 C209.838631,105.779952 207.178485,102.963326 204.048901,102.18093 C203.579463,102.024451 202.640588,102.024451 202.01467,102.024451 L185.584353,102.024451 L185.584353,117.046455 Z" fill="url(#linearGradient-1)"></path>
                    <path d="M200.13692,13.3007339 C184.488999,13.3007339 171.657702,25.9755506 171.657702,41.7799516 L171.657702,71.354524 L211.872861,71.354524 C212.811737,71.354524 213.907092,71.354524 214.689488,71.511003 C223.765282,71.980441 230.493888,76.6748175 230.493888,84.8117365 C230.493888,91.2273845 225.955991,96.7041575 217.506113,97.799512 L217.506113,98.11247 C226.738387,98.738387 233.779952,103.902201 233.779952,111.882641 C233.779952,120.488998 225.955991,126.122251 215.628363,126.122251 L171.501223,126.122251 L171.501223,184.019561 L213.281174,184.019561 C228.929097,184.019561 241.760392,171.344744 241.760392,155.540344 L241.760392,13.3007339 L200.13692,13.3007339 L200.13692,13.3007339 Z" fill="url(#linearGradient-2)"></path>
                    <path d="M207.804402,86.6894875 C207.804402,82.933986 205.144255,80.4303185 202.01467,79.960881 C201.701713,79.960881 200.919316,79.8044015 200.449879,79.8044015 L185.584353,79.8044015 L185.584353,93.574573 L200.449879,93.574573 C200.919316,93.574573 201.858192,93.574573 202.01467,93.4180935 C205.144255,92.948656 207.804402,90.4449885 207.804402,86.6894875 L207.804402,86.6894875 Z" fill="url(#linearGradient-3)"></path>
                    <path d="M42.7188266,13.3007339 C27.0709047,13.3007339 14.2396088,25.9755506 14.2396088,41.7799516 L14.2396088,112.03912 C22.2200489,115.951101 30.5134475,118.454768 38.8068461,118.454768 C48.6650368,118.454768 53.9853305,112.508558 53.9853305,104.371639 L53.9853305,71.1980445 L78.3960885,71.1980445 L78.3960885,104.215159 C78.3960885,117.046455 70.415648,127.530563 43.3447434,127.530563 C26.9144255,127.530563 14.0831296,123.931541 14.0831296,123.931541 L14.0831296,183.863082 L55.863081,183.863082 C71.5110025,183.863082 84.3422985,171.188265 84.3422985,155.383864 L84.3422985,13.3007339 L42.7188266,13.3007339 L42.7188266,13.3007339 Z" fill="url(#linearGradient-4)"></path>
                    <path d="M121.427874,13.3007339 C105.779951,13.3007339 92.9486555,25.9755506 92.9486555,41.7799517 L92.9486555,79.0220055 C100.146699,72.919316 112.665037,69.0073355 132.850856,69.946211 C143.647922,70.4156485 155.227384,73.3887535 155.227384,73.3887535 L155.227384,85.4376535 C149.437654,82.4645485 142.552568,79.8044015 133.633252,79.178485 C118.298289,78.0831305 109.066015,85.594133 109.066015,98.738387 C109.066015,112.03912 118.298289,119.550123 133.633252,118.298289 C142.552568,117.672372 149.437654,114.855746 155.227384,112.03912 L155.227384,124.08802 C155.227384,124.08802 143.804402,127.061126 132.850856,127.530563 C112.665037,128.469438 100.146699,124.557458 92.9486555,118.454768 L92.9486555,184.17604 L134.728607,184.17604 C150.376529,184.17604 163.207824,171.501223 163.207824,155.696822 L163.207824,13.3007339 L121.427874,13.3007339 L121.427874,13.3007339 Z" fill="url(#linearGradient-5)"></path>
                </g>
            </svg>
            {{-- amex logo --}}
            <svg class="w-14 h-14" xmlns="http://www.w3.org/2000/svg" height="800" width="1200" viewBox="-150 -249.37925 1300 1496.2755"><path d="M0 0h997.517v538.49l-49.375 77.147 49.375 68.661v313.219H0v-507.63l30.859-35.488L0 420.454z" fill="#016fd0"/><path d="M193.64 695.099v-156.61h165.82l17.791 23.193 18.38-23.193h601.886V684.3s-15.74 10.643-33.945 10.8H630.295l-20.058-24.688V695.1h-65.73v-42.142s-8.979 5.882-28.39 5.882h-22.373v36.26h-99.52l-17.766-23.69-18.038 23.69zM0 420.454l37.393-87.177h64.668l21.22 48.833v-48.833h80.388l12.633 35.295 12.247-35.295h360.858v17.744s18.97-17.744 50.146-17.744l117.085.41 20.854 48.193v-48.603h67.273l18.515 27.683v-27.683h67.89v156.61h-67.89l-17.744-27.774v27.773h-98.838l-9.94-24.687h-26.57l-9.779 24.687h-67.028c-26.826 0-43.974-17.381-43.974-17.381v17.381H488.343L468.285 465.2v24.687H92.481L82.548 465.2H56.06l-9.86 24.686H0z" fill="#fff"/><path d="M50.628 352.584L.193 469.848h32.836l9.306-23.482h54.1l9.257 23.482h33.56L88.863 352.584zm18.66 27.29l16.49 41.034H52.75zm73.435 89.954V352.564l46.661.173 27.14 75.605 26.49-75.778h46.289v117.264h-29.316v-86.405l-31.076 86.405h-25.71l-31.162-86.405v86.405zm166.638 0V352.564h95.663v26.23h-66.038v20.058h64.495v24.688h-64.495v20.83h66.038v25.458zm112.636-117.244v117.264h29.316v-41.66h12.343l35.15 41.66h35.826l-38.574-43.203c15.831-1.336 32.161-14.923 32.161-36.018 0-24.676-19.368-38.043-40.984-38.043zm29.316 26.23h33.51c8.04 0 13.887 6.288 13.887 12.343 0 7.79-7.577 12.344-13.452 12.344h-33.945zm118.807 91.014h-29.933V352.564h29.933zm70.975 0h-6.46c-31.262 0-50.243-24.63-50.243-58.15 0-34.349 18.768-59.114 58.246-59.114h32.402v27.773h-33.586c-16.026 0-27.36 12.507-27.36 31.63 0 22.71 12.96 32.248 31.63 32.248h7.715zm63.792-117.244l-50.435 117.264h32.836l9.305-23.482h54.1l9.258 23.482h33.559l-50.387-117.264zm18.66 27.29l16.49 41.034h-33.029zm73.386 89.954V352.564h37.272l47.59 73.676v-73.676h29.317v117.264h-36.067l-48.796-75.604v75.604zM213.699 675.04V557.776h95.662v26.23h-66.038v20.059h64.495v24.687h-64.495v20.83h66.038v25.458zm468.748 0V557.776h95.662v26.23h-66.038v20.059h64.187v24.687H712.07v20.83h66.038v25.458zm-369.373 0l46.578-57.908-47.687-59.356H348.9l28.4 36.693 28.497-36.693h35.488l-47.06 58.632 46.663 58.632H403.96l-27.576-36.114-26.905 36.114zM444.37 557.796V675.06h30.087v-37.03h30.859c26.111 0 45.903-13.853 45.903-40.792 0-22.317-15.523-39.442-42.094-39.442zm30.087 26.52h32.498c8.436 0 14.465 5.17 14.465 13.5 0 7.826-5.999 13.501-14.561 13.501h-32.402zm89.491-26.54V675.04h29.316v-41.66h12.344l35.15 41.66h35.825l-38.573-43.202c15.83-1.336 32.16-14.924 32.16-36.019 0-24.676-19.368-38.043-40.984-38.043zm29.316 26.23h33.511c8.039 0 13.887 6.288 13.887 12.344 0 7.79-7.577 12.343-13.453 12.343h-33.945zm198.423 91.034v-25.458h58.671c8.681 0 12.44-4.692 12.44-9.837 0-4.93-3.747-9.913-12.44-9.913h-26.513c-23.045 0-35.88-14.04-35.88-35.121 0-18.803 11.753-36.935 46-36.935h57.088l-12.343 26.385h-49.375c-9.438 0-12.343 4.952-12.343 9.682 0 4.86 3.59 10.222 10.8 10.222h27.773c25.69 0 36.838 14.572 36.838 33.655 0 20.517-12.422 37.32-38.236 37.32zm107.597 0v-25.458h58.67c8.682 0 12.44-4.692 12.44-9.837 0-4.93-3.746-9.913-12.44-9.913h-26.512c-23.046 0-35.88-14.04-35.88-35.121 0-18.803 11.753-36.935 45.999-36.935h57.089l-12.344 26.385h-49.374c-9.438 0-12.344 4.952-12.344 9.682 0 4.86 3.59 10.222 10.801 10.222h27.773c25.69 0 36.838 14.572 36.838 33.655 0 20.517-12.422 37.32-38.236 37.32z" fill="#016fd0"/></svg>
        </div>
        <div>
            <form action="credit-pay" method="post" id="cc" class="px-10">
                @csrf
                <input type="text" class="w-full p-2.5 bg-white border border-gray-300 rounded-md my-4 focus:border-blue-400 focus:ring focus:ring-blue-400 focus:outline-none" placeholder="Name on Card">
                <input type="text" id="card_number" class="w-2/3 p-2.5 bg-white border border-gray-300 rounded-md my-4 focus:border-blue-400 focus:ring focus:ring-blue-400 focus:outline-none" placeholder="Card Number" autocomplete="off">
                <div class="w-2/3 flex space-x-2">
                    <input type="text" id="month_exp" class="w-1/2 p-2.5 bg-white border border-gray-300 rounded-md my-4 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-400" placeholder="MM">
                    <input type="text" id="year_exp" class="w-1/2 p-2.5 bg-white border border-gray-300 rounded-md my-4 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-400" placeholder="YY">
                    <input type="text" id="cvv" class="w-full p-2.5 bg-white border border-gray-300 rounded-md my-4 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-400" placeholder="CVV">
                </div>
                <input type="hidden" id="token" name="token_id" class="w-2/3 p-2.5 bg-white border border-gray-300 rounded-md my-4 focus:border-blue-400 focus:ring focus:ring-blue-400 focus:outline-none">
                <button type="button" onclick="checkCard()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-8 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirm Payment</button>
            </form>
        </div>
    </div>
    <div class="w-1/2"></div>
</div>

{{-- bank transfer list --}}
<div class="mb-4 space-x-2 hidden" id="bank-list">
    <div class="w-full rounded-md bg-white shadow-md">
        <div class="px-10 py-8 block">
            <span class="text-lg text-gray-400 font-semibold">Choose Your Bank Account</span>
        </div>
        <div class="w-full bg-gray-300 mb-2" style="height: 1px"></div>
        <div class="grid grid-cols-3 gap-4 place-items-center p-8">
            <form action="/payment" method="post" id="bank_form">
                @csrf
                <input type="hidden" name="bank_name" id="bank_name" value="bca">
                <button type="submit">
                    <div class="w-40 h-32 border border-gray-300 rounded-md cursor-pointer pt-4">
                        <img src="img/bca.png" alt="bca" class="-mt-8 -ml-2">
                    </div>
                </button>
            </form>
            <form action="/payment" method="post" id="bank_form">
                @csrf
                <input type="hidden" name="bank_name" id="bank_name" value="bni">
                <button type="submit">
                    <div class="w-40 h-32 border border-gray-300 rounded-md cursor-pointer pt-4">
                        <img src="img/bni.png" alt="bni" class="px-8 mt-8">
                    </div>
                </button>
            </form>
            <form action="/payment" method="post" id="bank_form">
                @csrf
                <input type="hidden" name="bank_name" id="bank_name" value="bri">
                <button type="submit">
                    <div class="w-40 h-32 border border-gray-300 rounded-md cursor-pointer pt-4">
                        <img src="img/bri.png" alt="bri" class="h-20 px-8 mt-2">
                    </div>
                </button>
            </form>
            <form action="/payment" method="post" id="bank_form">
                @csrf
                <input type="hidden" name="bank_name" id="bank_name" value="mandiri">
                <button type="submit">
                    <div class="w-40 h-32 border border-gray-300 rounded-md cursor-pointer pt-4">
                        <img src="img/mandiri.png" alt="mandiri" class="px-8 mt-8">
                    </div>
                </button>
            </form>
            <form action="/payment" method="post" id="bank_form">
                @csrf
                <input type="hidden" name="bank_name" id="bank_name" value="permata">
                <button type="submit">
                    <div class="w-40 h-32 border border-gray-300 rounded-md cursor-pointer pt-4">
                        <img src="img/permata.png" alt="permata" class="px-8 mt-8">
                    </div>
                </button>
            </form>
        </div>
    </div>
    <div class="w-1/2"></div>
</div>

{{-- store payment --}}
<div class="mb-4 space-x-2 hidden" id="store-list">
    <div class="w-full rounded-md bg-white shadow-md">
        <div class="px-10 py-8 block">
            <span class="text-lg text-gray-400 font-semibold">Choose Your Merchant Store</span>
        </div>
        <div class="w-full bg-gray-300 mb-2" style="height: 1px"></div>
        <div class="grid grid-cols-5 gap-4 place-items-center p-8">
            <div class="w-full h-32 border border-gray-300 rounded-md grid grid-cols-1 place-items-center cursor-pointer pt-4">
                <img src="img/alfa.png" alt="bca" class="-mt-4">
            </div>
            <div class="w-full h-32 border border-gray-300 rounded-md grid grid-cols-1 place-items-center cursor-pointer pt-4">
                <img src="img/indomaret.png" alt="bca" class="px-8 -mt-6">
            </div>
        </div>
    </div>
    <div class="w-1/2"></div>
</div>


@if (isset($va_number))
{{-- payment code --}}
    <div class="-mt-40 popup-login mb-32">
        <div class="absolute bg-white h-auto w-1/3 -mt-96 mx-auto border rounded-md shadow-lg" style="margin-left: 30%">
            <div class="flex justify-end mr-4 mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" id="close-login-btn" class="h-5 w-5 cursor-pointer hover:text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="mx-auto grid place-items-center py-2">
                <p class="text-lg font-semibold">Account Number</p>
                <p class="text-xl font-medium">{{ $va_number }}</p>
                <p class="text-md font-semibold">Amount</p>
                <p class="text-lg font-semibold">{{ $amount }}</p>
            </div>
        </div>
    </div>
@endif

<script src="js/payment.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/picomodal/3.0.0/picoModal.js"></script>

<script>
    function checkCard(){
        var cardNumber = document.getElementById("card_number").value
        var monthExp = document.getElementById("month_exp").value
        var yearExp = document.getElementById("year_exp").value
        var CVV = document.getElementById("cvv").value

        var cardData = {
            "card_number": cardNumber,
            "card_exp_month": monthExp,
            "card_exp_year": 20+yearExp,
            "card_cvv": CVV,
        };
        
        // callback functions
        var options = {
            onSuccess: function(response){
            // Success to get card token_id, implement as you wish here
            console.log('Success to get card token_id, response:', response);
            var token_id = response.token_id;
        
            console.log('This is the card token_id:', token_id);
            // Implement sending the token_id to backend to proceed to next step
            document.getElementById("token").value = token_id
            document.getElementById("cc").submit()
            },
            onFailure: function(response){
            // Fail to get card token_id, implement as you wish here
            console.log('Fail to get card token_id, response:', response);
        
            // you may want to implement displaying failure message to customer.
            // Also record the error message to your log, so you can review
            // what causing failure on this transaction.
            }
        };

        MidtransNew3ds.getCardToken(cardData, options);

    }
</script>

@if (isset($result))
<input type="hidden" id="url" value="{{ $result }}">

<script src="js/midtrans-new-3ds.min.js"></script>
    
    <script>
        var redirect_url = document.getElementById("url").value
        console.log(redirect_url)
        // var modal = picoModal({
        //         content:'<iframe frameborder="0" style="height:90vh; width:100%;" src="'+redirect_url+'"></iframe>',
        //         width: "75%",
        //         closeButton: false,
        //         overlayClose: false,
        //         escCloses: false
        //     })
    
        // // callback functions
        // var options = {
        //     performAuthentication: function(redirect_url){
        //         // Implement how you will open iframe to display 3ds authentication redirect_url to customer
        //         openPopup();
        //     },
        //     onSuccess: function(response){
        //         // 3ds authentication success, implement payment success scenario
        //         console.log('response:',response);
        //         closePopup();
        //     },
        //     onFailure: function(response){
        //         // 3ds authentication failure, implement payment failure scenario
        //         console.log('response:',response);
        //         closePopup();
        //     },
        //     onPending: function(response){
        //         // transaction is pending, transaction result will be notified later via 
        //         // HTTP POST notification, implement as you wish here
        //         console.log('response:',response);
        //         closePopup();
        //     }
        // };

        // MidtransNew3ds.authenticate(redirect_url, options);
        

        // function openPopup(){
        //     modal.show()
        // }

        // function closePopup(){
        //     modal.close()
        // }

        MidtransNew3ds.redirect( redirect_url, { callbackUrl : 'http://booking-hotel.test/sum' });

    </script>

@endif
    
@endsection