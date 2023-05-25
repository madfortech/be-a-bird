@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(
    ['class' => 'border-orange-300 dark:border-orange-700 dark:bg-gray-50 dark:text-gray-900 focus:border-indigo-500 dark:focus:border-orange-600 focus:ring-orange-500 dark:focus:ring-orange-600 rounded-md shadow-sm']) !!}>
