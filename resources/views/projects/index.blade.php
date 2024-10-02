<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
                        <a href="{{ route('projects.create') }}">Create a Project</a>
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
                    <table class="min-w-full divide-y divide-gray-200 border mt-4">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span
                                    class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Assigned To</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Client</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Deadline</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Edit/Delete</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        @foreach($projects as $project)
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                {{ $project->title }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                {{ $project->user->first_name }} {{ $project->user->last_name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                {{ $project->client->company_name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                {{ $project->deadline_at }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                {{ $project->status }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                <a href="{{ route('projects.edit', $project) }}" class="underline">Edit</a>
                                @can(\App\Enums\PermissionEnum::DELETE_PROJECTS)
                                |
                                <form method="POST"
                                      action="{{ route('projects.destroy', $project) }}"
                                      onsubmit="return confirm('Are you sure?')"
                                      class="inline-block">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="text-red-500 underline">Delete</button>
                                </form>
                                @endcan
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
{{--                        {{ $projects->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
