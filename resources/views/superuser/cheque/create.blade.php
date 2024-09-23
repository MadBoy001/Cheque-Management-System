@extends('superuser.layouts.master')

@section('content')

<div class="w-full px-20 bg-white rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Add Cheque
        </h1>
        <form class="space-y-4 md:space-y-6" action="{{route('admin.cheque.store')}}" method="POST">
            @csrf

            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label for="clientname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Name</label>
                    <input type="text" name="clientname" id="clientname" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div>
                    <label for="clientcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Code</label>
                    <input type="text" name="clientcode" id="clientcode" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6">
                <div>
                    <label for="chequeno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cheque Number</label>
                    <input type="text" name="chequeno" id="chequeno" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div>
                    <label for="chequeamount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cheque Amount</label>
                    <input type="number" name="chequeamount" id="chequeamount" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" step="1" required>
                </div>

                <div>
                    <label for="chequedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cheque Date</label>
                    <input type="date" name="chequedate" id="chequedate" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label for="remarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                    <input id="remarks" name="remarks" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></input>
                </div>

                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit</button>
        </form>
    </div>
</div>

@endsection