@extends('_layouts.app')

@section('content')
<div class="flex h-screen antialiased text-gray-800">
    <div class="flex flex-row h-full w-full overflow-x-hidden">
      <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
        <div class="flex flex-row items-center justify-center h-12 w-full">
          
          <img src="{{ asset('images/logo.png') }}"/>
        </div>

        <div class="flex flex-col mt-8">
            <button
            class="bg-primary rounded-xl p-2 hover:bg-darker text-sm font-semibold text-white"
          >
            Tambah Konsultasi
          </button>
          <div class="flex flex-col space-y-1 mt-4 -mx-2 h-100 overflow-y-auto">
           
            {{-- <button
              class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
            >
              <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
            </button> --}}
          </div>
        </div>
      </div>
      <div class="flex flex-col flex-auto h-full p-6">
        <div
          class="flex flex-col justify-center items-center rounded-2xl bg-gray-100 h-full p-4 gap-4"
        >
          <img src="{{ asset('images/empty-chat.png') }}" class="w-[335px] h-[325px]"/>
          <p>Tingkatkan kesehatan Anda dengan berkonsultasi melalui Damang AI!</p>
          <button
          class="bg-primary rounded-xl py-2 px-4 hover:bg-darker text-sm font-semibold text-white"
        >
          Konsultasi Sekarang
        </button>
        </div>
      </div>
    </div>
  </div>
@endsection