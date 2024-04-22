@props(['id', 'value'])

<div class="form-group">
    <textarea id="{{ $id }}" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:block font-medium text-sm text-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="{{ $id }}">{{ $value }}</textarea>
</div>