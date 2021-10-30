@extends('admin.layout')
@section('content')
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">
                Staff Management
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
                                <h2 class="font-semibold text-lg mr-auto">Add New Staff</h2>
                                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                            </div>
                            <div class="mt-5">
                                <form action="{{ route('admin.staffs.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="md:space-y-2 mb-3">
                                        <label class="text-xs font-semibold text-gray-600 py-2">Profile Picture<abbr
                                                class="hidden" title="required">*</abbr></label>
                                        <div class="flex items-center py-6">

                                            
                                            {{-- <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                                                <img class="w-12 h-12 mr-4 object-cover"
                                                    src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80"
                                                    alt="Avatar Upload">
                                            </div> --}}
                                            <label class="cursor-pointer ">
                                                <span
                                                    class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
                                                <input type="file" class="hidden" name="file"
                                                    :accept="accept" required="required">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Full Name <abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Full Name"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="text" name="name">
                                        </div>
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Contact<abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Contact Number"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="tel" name="contact">

                                        </div>
                                    </div>

                                    <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Role<abbr
                                                    title="required">*</abbr></label>
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="role" >
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
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="faculty" >
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
                                                        fill-rule="evenodd"
                                                        class="fill-current"
                                                        clip-rule="evenodd">
                                                        <path
                                                            d="M14 0v10l2-1.518 2 1.518v-10h4v24h-17c-1.657 0-3-1.343-3-3v-18c0-1.657 1.343-3 3-3h9zm6 20h-14.505c-1.375 0-1.375 2 0 2h14.505v-2z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="text" name="subjects_taught"
                                            required="required"
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
                                            <input type="text" name="address"
                                            required="required"
                                                class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-l-0 h-10 border-grey-light rounded-lg rounded-l-none px-3 relative focus:border-blue focus:shadow"
                                                placeholder="Present Address">
                                        </div>
                                    </div>
                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                        <button type="submit"
                                            class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                            Add Staff
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

    <div class="flex flex-col p-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Contact Details
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Faculty
                                </th>
                                <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Subjects Taught
                            </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Edit
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @foreach ($staffs as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <div class="flex-shrink-0 h-12 w-12 rounded-full"
                                          style="background-image: url('/{{ isset($item->profile_uri) ?$item->profile_uri :"" }}'); background-position:center;background-repeat:no-repeat;background-size:cover"
                                          
                                          >
                                           
                                          </div>
                                          <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                             {{$item->name}}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                              {{ $item->role }}
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->address }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                #{{ $item->contact }}
                                            </div>
                                        </div>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap capitalize">
                                        <div class="text-sm text-gray-900">{{ $item->role }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap capitalize">
                                        <div class="text-sm text-gray-900">{{ $item->faculty }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap capitalize">
                                        <div class="text-sm text-gray-900">{{ $item->subjects_taught }}</div>
                                    </td>
                                    
                                    <td class="flex gap-2 px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="/admin/staffs/{{ $item->id }}/edit">
                                            <button class="flex gap-1 items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-5 17l1.006-4.036 3.106 3.105-4.112.931zm5.16-1.879l-3.202-3.202 5.841-5.919 3.201 3.2-5.84 5.921z" />
                                                </svg>
                                                Edit
                                            </button>
                                        </a>

                                        <form action="/admin/staffs/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="flex gap-1 items-center">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z" />
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
