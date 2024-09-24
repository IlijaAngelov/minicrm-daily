<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
                <a href="{{ 'users/create' }}">Create a User</a>
                @if ($errors->any())
                    <alert class="alert-danger">
                        <ul>
                            @foreach($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </alert>
                @endif
            </button>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                 First Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Last Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href= {{ "/users/$user->id" }}>{{ $user->first_name }}</a>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user->last_name }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route("users.edit", $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    /
                                    <div class="form-group">

                                    <form action="{{ route("users.destroy", $user) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline" >Delete</button>
                                    </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
