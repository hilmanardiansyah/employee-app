<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semibold p-4">Users Index</h1>
        <div class="p-4">
            <Link href="{{ route('admin.users.create')}}"
             class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded text-white">New Users</Link>
        </div>
    </div>

    <x-splade-table :for="$users">
        @cell('action', $user)
      <div class="space-x-2">
        <Link href="{{route('admin.users.edit', $user)}}" class="px-3 py-2 text-white bg-green-400 hover:bg-green-700 font-semibold rounded-lg">Edit</Link>
        <Link href="{{route('admin.users.destroy', $user)}}"
        method="DELETE"  confirm="Enter the delete User"
        confirm-text="Are you sure?"
        confirm-button="Yes"
        cancel-button="No, keep me save!"
        class="px-3 py-2 text-white bg-red-400 hover:bg-red-700 font-semibold rounded-lg">Delete</Link>
      </div>
        @endcell
    </x-splade-table>
</x-admin-layout>
