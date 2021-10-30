@extends('admin.layout')
@section('content')
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">
                Student Management
            </h3>
        </div>
    </div>

    <div class="flex m-4 p-8 justify-center">
        <div class="flex m-4 p-4 space-x-4 ">
            <div class="py-2 align-middle inline-block  sm:px-6 lg:px-8">

                <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
                    <div class="grid  gap-8 grid-cols-1">
                        <div class="flex flex-col ">
                            <div class="flex w-full justify-center items-center">
                                <div class="w-full font-semibold text-lg mr-auto text-center">Edit Staff</div>

                            </div>


                            <div class="mt-5">
                                <form action="/admin/staffs/{{ $staff->id }}" method="POST" enctype="multipart/form-data" >
                                    @method('PUT')
                                    @csrf

                                    <div class="flex justify-center">

                                        <div class="flex-shrink-0 h-20 w-20 rounded-full"
                                            style="background-image: url('/{{ isset($staff->profile_uri) ? $staff->profile_uri : '' }}'); background-position:center;background-repeat:no-repeat;background-size:cover">
                                        </div>
                                    </div>

                                    <div class="flex justify-center">

                                        <div class="flex items-center py-6">
                                            <label class="cursor-pointer ">
                                                <span
                                                    class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Change
                                                    Profile Picture</span>
                                                <input type="file" class="hidden" name="file" :accept="accept"
                                                    required="required">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Full Name <abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Full Name" value="{{ $staff->name }}"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="text" name="name">
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Contact<abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Contact Number" value="{{ $staff->contact }}"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="tel" name="contact">

                                        </div>
                                    </div>

                                    <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Role<abbr
                                                    title="required">*</abbr></label>
                                            <select value="{{ $staff->role }}"
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="role">
                                                <option value="principal">Principal</option>
                                                <option value="vice principal">Vice Principal</option>
                                                <option value="academic head">Academic Head</option>
                                                <option value="non academic head">Non Acedamic Head</option>
                                                <option value="finance head">Finance Head</option>
                                                <option value="finance head">Suject HOD</option>
                                                <option value="teaching staff">Teaching Staff</option>
                                                <option value="non teaching staff">Non Teaching Staff</option>
                                            </select>
                                            <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this
                                                field.</p>
                                        </div>
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Faculty<abbr
                                                    title="required">*</abbr></label>
                                            <select value="{{ $staff->role }}"
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="faculty">
                                                <option value="dzongkha">Dzongkha</option>
                                                <option value="english">English</option>
                                                <option value="mathematics">Mathematics</option>
                                                <option value="humanities">Humanities</option>
                                                <option value="science">Science</option>
                                                <option value="non teaching">Non Teaching</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class=" font-semibold text-gray-600 py-2">Subjects Taught/Role</label>
                                        <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                            <div class="flex">
                                                <span
                                                    class="flex items-center leading-normal bg-grey-lighter border-1 rounded-r-none border border-r-0 border-blue-300 px-3 whitespace-no-wrap text-grey-dark text-sm w-12 h-10 bg-blue-300 justify-center items-center  text-xl rounded-lg text-white">
                                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                                                        fill-rule="evenodd" class="fill-current" clip-rule="evenodd">
                                                        <path
                                                            d="M14 0v10l2-1.518 2 1.518v-10h4v24h-17c-1.657 0-3-1.343-3-3v-18c0-1.657 1.343-3 3-3h9zm6 20h-14.505c-1.375 0-1.375 2 0 2h14.505v-2z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <input value="{{ $staff->subjects_taught }}" type="text"
                                                name="subjects_taught" required="required"
                                                class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-l-0 h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow"
                                                placeholder="Subjects Taught/ Role">
                                        </div>
                                    </div>
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class=" font-semibold text-gray-600 py-2">Address</label>
                                        <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                            <div class="flex">
                                                <span
                                                    class="flex items-center leading-normal bg-grey-lighter border-1 rounded-r-none border border-r-0 border-blue-300 px-3 whitespace-no-wrap text-grey-dark text-sm w-12 h-10 bg-blue-300 justify-center items-center  text-xl rounded-lg text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 1l-12 12h3v10h18v-10h3l-12-12zm0 18c-1.607-1.626-3-2.84-3-4.027 0-1.721 2.427-2.166 3-.473.574-1.695 3-1.246 3 .473 0 1.187-1.393 2.402-3 4.027zm8-11.907l-3-3v-2.093h3v5.093z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="text" name="address" required="required"
                                                value="{{ $staff->address }}"
                                                class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-l-0 h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow"
                                                placeholder="Present Address">
                                        </div>
                                    </div>

                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">

                                        <button type="submit"
                                            class="mb-2 mt-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                            Update {{ $staff->name }}'s Details
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>


@endsection
