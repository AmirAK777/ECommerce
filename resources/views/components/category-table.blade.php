@props(['categories'])

<div class="relative mt-2 overflow-x-auto sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-16 py-3">
                <span class="sr-only">  {{ __('messages.image') }}</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.category') }}
                </th>

                <th scope="col" class="px-6 py-3">
                    {{ __('messages.action') }}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr class="bg-white border-b hover:bg-gray-50">
                <td style="width: 80px; height: 80px; ">
                    <img src="images/{{ $category->image }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900">
                    {{ $category['name'] }}
                </td>
                <td class="px-6 py-4">
                    <div class="flex flex-col space-y-2">
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 hover:underline">{{ __('messages.remove') }}</button>
                        </form>
                        <form action="{{ route('categories.edit', $category) }}" method="GET" class="inline">
                            @csrf
                            @method('GET')
                            <button type="submit" class="font-medium text-green-600 hover:underline">{{ __('messages.edit') }}</button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>