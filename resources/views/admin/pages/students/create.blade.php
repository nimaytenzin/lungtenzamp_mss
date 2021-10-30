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
                            <div class="flex flex-col sm:flex-row items-center">
                                <h2 class="font-semibold text-lg mr-auto">Edit Student</h2>
                                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                            </div>


                            <div class="mt-5">
                                <form action="/admin/students/{{ $student->id }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Full Name <abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Full Name"
                                                value="{{ $student->name }}"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="text" name="name">
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">CID<abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Citezen ID"
                                            value="{{ $student->cid }}"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="text" name="cid">
                                            
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
                                            <input type="text" name="address"
                                            value="{{ $student->address }}"

                                                class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-l-0 h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow"
                                                placeholder="Present Address">
                                        </div>
                                    </div>
                                    <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Guardian Name</label>
                                            <input placeholder="Gaurdian Name"
                                            value="{{ $student->gaurdian_name }}"

                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                type="text" name="gaurdian_name">
                                        </div>
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Guardian Contact<abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Gaurdian Contact"
                                            value="{{ $student->gaurdian_contact }}"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                type="text" name="gaurdian_contact">

                                        </div>
                                    </div>

                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">

                                        <button type="submit"
                                            class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                            Update {{ $student->name }}'s Details
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
