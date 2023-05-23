@props(['employee'])

<tr class="border-b hover:bg-gray-50">
    <td class="px-3 py-1.5">
        <div class="flex items-center">
            <div
                class="p-0.5 bg-white border-2 {{($employee->is_regular)? 'border-green-200': 'border-yellow-300'}} rounded-full">
                <img class="w-8 h-8 rounded-full" src={{asset($employee->image)}} alt="employee image" />
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