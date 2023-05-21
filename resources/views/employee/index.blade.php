@extends('layout')

@section('content')
<div class="p-4 md:p-8">
    <div class="bg-white rounded-lg">
        <div class="flex items-center justify-between px-3 pt-3 ">
            <p class="font-bold text-lg">Employees</p>
            <div class="flex items-center justify-end">
                <div class="ml-4 w-3 h-3 bg-yellow-300 rounded-sm"></div>
                <p class="text-xs italic ml-1.5 text-gray-400">Probationary</p>
                <div class="ml-4 w-3 h-3 bg-white border rounded-sm"></div>
                <p class="text-xs italic ml-1.5 text-gray-400">Regular</p>
            </div>
        </div>
        <div class="flex mt-3">
            <table class="table-auto grow ">
                <thead class="text-left border-y shadow text-gray-800 text-xs font-semibold">
                    <tr>
                        <th class="px-3 py-1.5">NAME</th>
                        <th class="px-3 py-1.5">HIRE DATE</th>
                        <th class="px-3 py-1.5">POSITION</th>
                        <th class="px-3 py-1.5 hidden px-3 py-1.5 hidden sm:table-cell">EMAIL</th>
                        <th class="px-3 py-1.5 hidden lg:table-cell">GENDER</th>
                        <th class="px-3 py-1.5 hidden lg:table-cell">AGE</th>
                        <th class="px-3 py-1.5 hidden md:table-cell">STATUS</th>
                        <th class="px-3 py-1.5 hidden px-3 py-1.5 hidden md:table-cell">ACTION</th>
                    </tr>
                </thead>
                <tbody class="text-xs text-gray-700 font-semibold">
                    @if(count($employees)!=0)

                    @foreach ($employees as $employee)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-3 py-1.5">
                            <div class="flex items-center">
                                <div
                                    class="p-0.5 bg-white border-2 {{($employee->is_regular)? 'border-green-200': 'border-yellow-300'}} rounded-full">
                                    <img class="w-8 h-8 rounded-full" src={{asset($employee->image)}}
                                        alt="employee image" />
                                </div>
                                <div class="ml-1.5">
                                    <p class="text-green-600 font-bold">
                                        {{$employee->first_name . ' ' . $employee->last_name}}</p>
                                    <p>{{$employee->contact_number}}</p>
                                </div>
                            </div>

                        </td>
                        <td class="px-3 py-1.5">{{$employee->hire_date}}</td>
                        <td class="px-3 py-1.5">{{$employee->position}}</td>
                        <td class="px-3 py-1.5 hidden px-3 py-1.5 hidden sm:table-cell">{{$employee->email}}</td>
                        <td class="px-3 py-1.5 hidden lg:table-cell">{{$employee->gender}}</td>
                        <td class="px-3 py-1.5 hidden lg:table-cell">{{$employee->age}}</td>
                        <td class="px-3 py-1.5 hidden md:table-cell">
                            <div class="w-7 h-1.5 {{($employee->is_regular)? 'bg-white': 'bg-yellow-300'}}  rounded-sm">
                            </div>
                        </td>
                        <td class="px-3 py-1.5 hidden px-3 py-1.5 hidden md:table-cell">
                            <a href="/employee/{{$employee->id}}"
                                class=" cursor-pointer px-3 py-1 border-b-4 border-white hover:border-green-600 text-green-600 transition hover:ease-in duration-300">View</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        @if(count($employees)==0)
        <p class="px-3 py-5 text-center text-xs text-gray-500">No employees found</p>
        @endif
    </div>

    @if(count($employees)!=0)
    <div class="w-full mt-3">
        {{$employees->links()}}
    </div>
    @endif

</div>
@endsection