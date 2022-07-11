/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.ts",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            //BACKGROUND
            'transparent': 'transparent',
            'dark-gray': '#171717',
            'light-gray-1': '#94a3b8',
            'notify': '#d9f99d',
            'white': '#ffffff',

            //BACKGROUND WITH OPACITY
            'dark-gray-medium': 'rgba(23, 23, 23, 0.5)',

            //TEXT
            'text-white': '#ffffff',
            'text-gray-1': '#262626',
            'text-gray-2': '#737373',

            //HIGHLIGHT
            'light-highlighted': '#9DC209',
            'dark-highlighted': '#65a30d',

            //RINGS
            'ring-border-light': '#d1d5db',

            //BORDERS
            'br-gray-1': '#d1d5db',

            //
            //
            // 'bg-notify': '#f87171',
            // 'gray-900-opacity-3': 'rgba(15, 23, 42, 0.3)',
            // 'gray-900-opacity-7': 'rgba(15, 23, 42, 0.7)',
            //
            // //OTHER
            // 'blue-500': '#3b82f6',
            // 'blue-600': '#2563eb',
            // 'blue-700': '#1d4ed8',
            // 'gray-50': '#f9fafb',
            // 'gray-100': '#f3f4f6',
            // 'gray-200': '#e5e7eb',
            // 'gray-300': '#d1d5db',
            // 'gray-400': '#9ca3af',
            // 'gray-500': '#6b7280',
            // 'gray-600': '#4b5563',
            // 'gray-700': '#374151',
            // 'gray-800': '#1f2937',
            // 'gray-900': '#111827',
            // 'lime-500': '#84cc16',
            // 'red-400': '#f87171',
            // 'red-500': '#ef4444',
        },
    },
    plugins: [],
}
