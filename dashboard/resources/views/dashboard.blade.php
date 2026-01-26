<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Dashboard
        </h2>
        <p class="text-sm text-gray-500">
            Welcome back, {{ Auth::user()->name }} 👋
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white p-6 mb-6 shadow rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800">
                    You’re logged in successfully 🎉
                </h3>
                <p class="text-gray-600 mt-2">
                    Use the features below to navigate through the system.
                </p>
            </div>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Feature 1 -->
                <div class="bg-white p-6 shadow rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800">
                        📄 Reports
                    </h4>
                    <p class="text-gray-600 mt-2">
                        View and generate system reports.
                    </p>
                    <button
                        class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        View Reports
                    </button>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 shadow rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800">
                        👥 Users
                    </h4>
                    <p class="text-gray-600 mt-2">
                        Manage registered users.
                    </p>
                    <button
                        class="mt-4 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                        Manage Users
                    </button>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 shadow rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800">
                        📊 Analytics
                    </h4>
                    <p class="text-gray-600 mt-2">
                        View system statistics and activity.
                    </p>
                    <button
                        class="mt-4 px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 transition">
                        View Analytics
                    </button>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
