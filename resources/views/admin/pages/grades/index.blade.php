@extends('admin.layout')
@section('content')
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">
                Grades & Subjects
            </h3>
        </div>
    </div>

    <div class="flex m-4 p-8 justify-center">
        <div class="flex m-4 p-4 space-x-4 ">
            <div class="py-2 align-middle inline-block  sm:px-6 lg:px-8">

                <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
                    <div class="grid  gap-8 grid-cols-2">
                        <div class="flex flex-col ">
                            <div class="flex flex-col sm:flex-row items-center">
                                <h2 class="font-semibold text-lg mr-auto">Create New Grade</h2>
                                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                            </div>
                            <div class="mt-5">
                                <form action="{{ route('admin.grades.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Name <abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Full Name"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="text" name="name">
                                        </div>
                                    </div>

                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                        <button type="submit"
                                            class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                            Add New Grade
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="flex flex-col ">
                            <div class="flex flex-col sm:flex-row items-center">
                                <h2 class="font-semibold text-lg mr-auto">Create New Subject</h2>
                                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                            </div>
                            <div class="mt-5">
                                <form action="{{ route('admin.subjects.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                        <div class="mb-3 space-y-2 w-full text-xs">
                                            <label class="font-semibold text-gray-600 py-2">Name <abbr
                                                    title="required">*</abbr></label>
                                            <input placeholder="Full Name"
                                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                required="required" type="text" name="name">
                                        </div>
                                    </div>

                                    <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Grade<abbr
                                                    title="required">*</abbr></label>
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="grade_id" >
                                                @foreach ($grades as $item)
                                                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    
                                                @endforeach
                                            </select>
                                            <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this
                                                field.</p>
                                        </div>
                                    

                                    </div>
                                    <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Subject Teacher<abbr
                                                    title="required">*</abbr></label>
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="grade_id" >
                                                @foreach ($teachers as $item)
                                                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    
                                                @endforeach
                                            </select>
                                            <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this
                                                field.</p>
                                        </div>
                                    

                                    </div>

                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                        <button type="submit"
                                            class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                            Add New Grade
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
                                    Subjects
                                </th>
                            
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Edit
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($grades as $item)
                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap capitalize">
                                        <div class="text-sm text-gray-900">{{ $item->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap capitalize">
                                       
                                            @foreach ($item->subjects as $subject)
                                            <div class="flex gap-3 text-sm text-gray-900">
                                            {{ $subject->name }}

                                            <a href="/admin/subjects/{{ $subject->id }}/edit">
                                                <button class="flex gap-1 items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2 fill-current"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-5 17l1.006-4.036 3.106 3.105-4.112.931zm5.16-1.879l-3.202-3.202 5.841-5.919 3.201 3.2-5.84 5.921z" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </a>

                                            <form action="/admin/subjects/{{ $subject->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')"
                                                    class="flex gap-1 items-center">
    
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2 fill-current"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </form>
                                        
                                        </div>

                                            @endforeach

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
