<a {{ $attributes }}
class="{{ request()->is($attributes) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current=" {{ request()->is($attributes) ? 'page': false }}">{{ $slot }}</a>