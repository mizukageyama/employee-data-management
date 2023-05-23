@extends('layout')

@section('content')
<div class="p-4 md:p-8">
    <div class="bg-white rounded-lg">
        <div class="flex items-center justify-between px-3 pt-3 ">
            <p class="font-bold text-lg">Employees</p>
            <x-status-color-legend />
        </div>

        {{-- employee table --}}
        <x-employee-table :employees="$employees" />

        {{-- no result --}}
        @if(count($employees)==0)
        <p class="px-3 py-5 text-center text-xs text-gray-500">No employees found</p>
        @endif
    </div>

    {{-- no pagination --}}
    @if(count($employees)!=0)
    <div class="w-full mt-3">
        {{$employees->links()}}
    </div>
    @endif

</div>
@endsection