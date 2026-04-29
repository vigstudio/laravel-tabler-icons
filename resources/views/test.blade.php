<!DOCTYPE html>
<html>

<head>
    <title>TablerIcon Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 p-8">
    <div class="mx-auto max-w-6xl">
        <h1 class="mb-8 text-4xl font-bold text-gray-800">🎨 TablerIcon Test with Tailwind CSS</h1>

        <!-- Numeric Icons Examples -->
        <div class="mb-8 rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-2xl font-semibold text-green-600">✅ Numeric Icons Examples</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex items-center space-x-3 rounded bg-gray-50 p-3">
                    {!! TablerIcon::twelveHours(['class' => 'w-6 h-6 text-blue-500']) !!}
                    <span class="text-sm">12 Hours (blue, w-6 h-6)</span>
                </div>
                <div class="flex items-center space-x-3 rounded bg-gray-50 p-3">
                    {!! TablerIcon::twentyFourHours(['class' => 'w-8 h-8 text-green-500']) !!}
                    <span class="text-sm">24 Hours (green, w-8 h-8)</span>
                </div>
                <div class="flex items-center space-x-3 rounded bg-gray-50 p-3">
                    {!! TablerIcon::twoFa(['class' => 'w-10 h-10 text-purple-500']) !!}
                    <span class="text-sm">2FA (purple, w-10 h-10)</span>
                </div>
                <div class="flex items-center space-x-3 rounded bg-gray-50 p-3">
                    {!! TablerIcon::threeDCubeSphere(['class' => 'w-12 h-12 text-red-500']) !!}
                    <span class="text-sm">3D Cube (red, w-12 h-12)</span>
                </div>
                <div class="flex items-center space-x-3 rounded bg-gray-50 p-3">
                    {!! TablerIcon::abacusOff(['class' => 'w-16 h-16 text-yellow-500']) !!}
                    <span class="text-sm">Abacus Off (yellow, w-16 h-16)</span>
                </div>
            </div>
        </div>

        <!-- Size Variations -->
        <div class="mb-8 rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-2xl font-semibold text-blue-600">📏 Size Variations</h2>
            <div class="flex items-end space-x-4 rounded bg-gray-50 p-4">
                {!! TablerIcon::home(['class' => 'w-4 h-4 text-gray-600']) !!}
                <span class="text-xs">w-4 h-4</span>
                {!! TablerIcon::home(['class' => 'w-6 h-6 text-gray-600']) !!}
                <span class="text-xs">w-6 h-6</span>
                {!! TablerIcon::home(['class' => 'w-8 h-8 text-gray-600']) !!}
                <span class="text-xs">w-8 h-8</span>
                {!! TablerIcon::home(['class' => 'w-12 h-12 text-gray-600']) !!}
                <span class="text-xs">w-12 h-12</span>
                {!! TablerIcon::home(['class' => 'w-16 h-16 text-gray-600']) !!}
                <span class="text-xs">w-16 h-16</span>
                {!! TablerIcon::home(['class' => 'w-20 h-20 text-gray-600']) !!}
                <span class="text-xs">w-20 h-20</span>
            </div>
        </div>

        <!-- Color Variations -->
        <div class="mb-8 rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-2xl font-semibold text-purple-600">🎨 Color Variations</h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-6">
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-red-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Red</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-blue-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Blue</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-green-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Green</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-yellow-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Yellow</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-purple-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Purple</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-pink-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Pink</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-indigo-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Indigo</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-gray-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Gray</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-orange-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Orange</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center">
                    {!! TablerIcon::heart(['class' => 'w-8 h-8 text-teal-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Teal</p>
                </div>
            </div>
        </div>

        <!-- Advanced Styling -->
        <div class="mb-8 rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-2xl font-semibold text-green-600">✨ Advanced Styling</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-lg bg-gradient-to-r from-blue-50 to-blue-100 p-4 text-center">
                    {!! TablerIcon::star(['class' => 'w-12 h-12 text-yellow-400 mx-auto drop-shadow-lg']) !!}
                    <p class="mt-2 text-sm font-medium">Drop Shadow</p>
                    <code class="text-xs text-gray-600">drop-shadow-lg</code>
                </div>
                <div class="rounded-lg bg-gradient-to-r from-purple-50 to-purple-100 p-4 text-center">
                    {!! TablerIcon::shield(['class' => 'w-12 h-12 text-green-500 mx-auto transform rotate-12']) !!}
                    <p class="mt-2 text-sm font-medium">Rotated</p>
                    <code class="text-xs text-gray-600">rotate-12</code>
                </div>
                <div class="rounded-lg bg-gradient-to-r from-green-50 to-green-100 p-4 text-center">
                    {!! TablerIcon::zoomIn(['class' => 'w-12 h-12 text-blue-500 mx-auto transform scale-110']) !!}
                    <p class="mt-2 text-sm font-medium">Scaled</p>
                    <code class="text-xs text-gray-600">scale-110</code>
                </div>
                <div class="rounded-lg bg-gradient-to-r from-red-50 to-red-100 p-4 text-center">
                    {!! TablerIcon::bell(['class' => 'w-12 h-12 text-red-500 mx-auto animate-bounce']) !!}
                    <p class="mt-2 text-sm font-medium">Animated</p>
                    <code class="text-xs text-gray-600">animate-bounce</code>
                </div>
                <div class="rounded-lg bg-gradient-to-r from-yellow-50 to-yellow-100 p-4 text-center">
                    {!! TablerIcon::loader(['class' => 'w-12 h-12 text-purple-500 mx-auto animate-spin']) !!}
                    <p class="mt-2 text-sm font-medium">Spinning</p>
                    <code class="text-xs text-gray-600">animate-spin</code>
                </div>
                <div class="rounded-lg bg-gradient-to-r from-pink-50 to-pink-100 p-4 text-center">
                    {!! TablerIcon::heartFilled(['class' => 'w-12 h-12 text-pink-500 mx-auto animate-pulse']) !!}
                    <p class="mt-2 text-sm font-medium">Pulsing</p>
                    <code class="text-xs text-gray-600">animate-pulse</code>
                </div>
            </div>
        </div>

        <!-- Brand Icons -->
        <div class="mb-8 rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-2xl font-semibold text-indigo-600">🏢 Brand Icons</h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-6">
                <div class="rounded bg-gray-50 p-3 text-center transition-colors hover:bg-gray-100">
                    {!! TablerIcon::brandGithub(['class' => 'w-10 h-10 text-gray-800 mx-auto']) !!}
                    <p class="mt-2 text-xs">GitHub</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center transition-colors hover:bg-gray-100">
                    {!! TablerIcon::brandFacebook(['class' => 'w-10 h-10 text-blue-600 mx-auto']) !!}
                    <p class="mt-2 text-xs">Facebook</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center transition-colors hover:bg-gray-100">
                    {!! TablerIcon::brandTwitter(['class' => 'w-10 h-10 text-sky-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Twitter</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center transition-colors hover:bg-gray-100">
                    {!! TablerIcon::brandGoogle(['class' => 'w-10 h-10 text-red-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Google</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center transition-colors hover:bg-gray-100">
                    {!! TablerIcon::brandDropbox(['class' => 'w-10 h-10 text-blue-500 mx-auto']) !!}
                    <p class="mt-2 text-xs">Dropbox</p>
                </div>
                <div class="rounded bg-gray-50 p-3 text-center transition-colors hover:bg-gray-100">
                    {!! TablerIcon::brandApple(['class' => 'w-10 h-10 text-gray-800 mx-auto']) !!}
                    <p class="mt-2 text-xs">Apple</p>
                </div>
            </div>
        </div>

        <!-- Invalid Syntax Warning -->
        <div class="mb-8 rounded-lg border border-red-200 bg-red-50 p-6">
            <h2 class="mb-4 text-2xl font-semibold text-red-600">❌ Invalid Syntax (would cause error)</h2>
            <div class="rounded-lg bg-red-100 p-4">
                <p class="mb-2 font-mono text-sm text-red-800">❌ Don't use: TablerIcon::12Hours() - numbers can't start method names</p>
                <p class="font-mono text-sm text-green-800">✅ Use instead: TablerIcon::twelveHours()</p>
            </div>
        </div>

        <!-- Method Name Conversions -->
        <div class="rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-2xl font-semibold text-gray-700">🔄 Method Name Conversions</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-lg bg-gray-50 p-4">
                    <h3 class="mb-3 font-semibold text-gray-700">Icon Name → Method Name</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex justify-between">
                            <span class="font-mono text-blue-600">12-hours</span>
                            <span class="text-gray-500">→</span>
                            <span class="font-mono text-green-600">TablerIcon::twelveHours()</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="font-mono text-blue-600">24-hours</span>
                            <span class="text-gray-500">→</span>
                            <span class="font-mono text-green-600">TablerIcon::twentyFourHours()</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="font-mono text-blue-600">2fa</span>
                            <span class="text-gray-500">→</span>
                            <span class="font-mono text-green-600">TablerIcon::twoFa()</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="font-mono text-blue-600">3d-cube-sphere</span>
                            <span class="text-gray-500">→</span>
                            <span class="font-mono text-green-600">TablerIcon::threeDCubeSphere()</span>
                        </li>
                    </ul>
                </div>
                <div class="rounded-lg bg-blue-50 p-4">
                    <h3 class="mb-3 font-semibold text-blue-700">💡 Tips</h3>
                    <ul class="space-y-2 text-sm text-blue-800">
                        <li>• Numbers are converted to words (12 → twelve)</li>
                        <li>• Use camelCase for method names</li>
                        <li>• All Tailwind classes work with attributes</li>
                        <li>• Combine size, color, and animation classes</li>
                        <li>• Icons are SVG elements, fully customizable</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
