@props(['employees'])

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
            @foreach ($employees as $employee)
            {{-- employee table row --}}
            <x-employee-table-row :employee="$employee" />
            @endforeach
        </tbody>
    </table>
</div>