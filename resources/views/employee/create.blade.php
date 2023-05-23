@extends('layout')

@section('content')
<div class="p-8">
    <div class="bg-white p-8  rounded-xl shadow">
        <form>
            {{-- Personal Information --}}
            <x-form-section-wrapper title="Personal Information">
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            First Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Jane" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-middle-name">
                            Middle Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-middle-name" type="text" placeholder="Tyler" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Last Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="Doe" required>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-address">
                            Address
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-address" type="text" placeholder="Davao City" required>
                        <p class="text-gray-600 text-xs italic">House #, Street, City, Province, etc.</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-contact-no">
                            Contact No.
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-contact-no" type="text" placeholder="+639104101210" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-email">
                            Email
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-middle-email" type="email" placeholder="jane@gmail.com" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-age">
                            Age
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-age" type="number" placeholder="24" required>
                    </div>
                    <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-gender">
                            Gender
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-gender">
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-gender">
                            Marital Status
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-gender">
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widow</option>
                                <option>Widower</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-birth-date">
                            Birth Date
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-birth-date" type="date" placeholder="+639104101210" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-nationality">
                            Nationality
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-nationality" type="text" placeholder="Filipino" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 ">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-birth-place">
                            Birth Place
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="birth-place" type="text" placeholder="Samal City" required>
                        {{-- <p class="text-gray-600 text-xs italic">House #, Street, City, Province, etc.</p> --}}
                    </div>
                </div>
            </x-form-section-wrapper>
            <hr>


            {{-- Job Information --}}
            <x-form-section-wrapper title="Job Information" class="mt-8">
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-hire-date">
                            Hire Date
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-hire-date" type="date" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0 md:w-3/4 ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-position">
                            Position
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-position">
                                <option>Lead Software Engineer</option>
                                <option>IT Project Manager</option>
                                <option>Junior Django Developer</option>
                                <option>Senior Laravel Developer</option>
                                <option>Full Stack Developer</option>
                                <option>Junior Backend Developer</option>
                                <option>Web Developer Trainee</option>
                                <option>Senior React Frontend Developer</option>
                                <option>IT Helpdesk</option>
                                <option>Mid Network Engineer</option>
                                <option>Junior Software Engineer</option>
                                <option>Junior Flutter Developer</option>
                                <option>Lead Technical Engineer</option>
                                <option>Junior Python Developer</option>
                                <option>React Native Developer</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 ">
                    <div class="w-full md:w-1/2 px-3 md:mb-0 text-md">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-nationality">
                            Status
                        </label>
                        <div class="py-2">
                            <input type="radio" id="html" name="employee-status" value="0" required>
                            <label for="html">Probation</label>
                            <input type="radio" id="css" name="employee-status" value="1" class="ml-8" required>
                            <label for="css">Regular</label>
                        </div>
                        {{-- <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-nationality" type="text" placeholder="Filipino"> --}}
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                </div>
            </x-form-section-wrapper>
            <hr>


            {{-- Emergency Contact Information --}}
            <x-form-section-wrapper title="Emergency Contact Information" class="mt-8">
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Full Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Juan Dela Cruz" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-relationship">
                            Relationship
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-relationship" type="text" placeholder="Mother" required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-contact-no">
                            Contact No.
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-contact-no" type="text" placeholder="+639104101210" required>
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                </div>
            </x-form-section-wrapper>
            <div class="justify-end flex mt-5">
                <button type="submit"
                    class="bg-green-700 text-white text-md font-semibold rounded-xl px-10 py-1">Save</button>
            </div>
        </form>
    </div>
    <!--Form Wrapper-->
</div>
<!--Outside Padding-->
@endsection