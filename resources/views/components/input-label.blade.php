@props(['value'])

<label for="{{ $value  }}" {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ ucwords($value) }}
</label>
