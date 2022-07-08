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
            'gray-900-opacity-3': 'rgba(15, 23, 42, 0.3)',
            'gray-900-opacity-7': 'rgba(15, 23, 42, 0.7)',
            'blue-500': '#3b82f6',
            'blue-600': '#2563eb',
            'blue-700': '#1d4ed8',
            'gray-50': '#f9fafb',
            'gray-100': '#f3f4f6',
            'gray-200': '#e5e7eb',
            'gray-300': '#d1d5db',
            'gray-400': '#9ca3af',
            'gray-500': '#6b7280',
            'gray-600': '#4b5563',
            'gray-700': '#374151',
            'gray-800': '#1f2937',
            'gray-900': '#111827',
            'red-400': '#f87171',
            'red-500': '#ef4444',
            'white': '#ffffff',
        },
    },
    plugins: [],
}
