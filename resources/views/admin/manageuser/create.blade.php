@extends('admin.layouts.master')

@section('content')

<div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Add User
        </h1>
        <form action="{{ route('admin.manage-users.store') }}" method="POST" class="space-y-4 md:space-y-6">
            @csrf

            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="form-group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div class="form-group">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                </div>  
                <div class="form-group">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                </div>
            </div>  

            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="form-group">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role:</label>
                    <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                        <option value="user">User</option>
                        <option value="superuser">Superuser</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status:</label>
                    <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

            

            <div class="form-group">
                <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
