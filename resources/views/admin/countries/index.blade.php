<x-admin-layout>
<div class="flex justify-between">
    <h1 class="text-2xl font-semibold p-4">Countries Index</h1>
    <div class="p-4">
        <Link href="{{route('admin.countries.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded text-white">New Countries</Link>
    </div>
</div>

 <x-splade-table :for="$countries">
    @cell('action', $countries)
    <div class="space-x-2">
        <Link href="{{route('admin.countries.edit', $countries)}}" class="px-3 py-2 text-white bg-green-400 hover:bg-green-700 font-semibold rounded-lg">Edit</Link>
        <Link href="{{route('admin.countries.destroy', $countries)}}"
        method="DELETE" confirm="Enter the delete Countries"
        confirm-text="Are you sure?"
        confirm-button="Yes"
        cancel-button="No, keep me save!"
        class="px-3 py-2 text-white bg-red-400 hover:bg-red-700 font-semibold rounded-lg">Delete</Link>
    </div>
    @endcell
 </x-splade-table>
</x-admin-layout>
