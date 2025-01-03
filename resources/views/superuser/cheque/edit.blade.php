@extends('superuser.layouts.master')


@section('content')

<div class="w-full px-20 bg-white rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <div class="relative flex justify-center">
            <a href="{{ route('superuser.cheque.index') }}" class="absolute left-0 top-0 bg-red-600 text-white inline-flex items-center justify-center font-bold py-2 px-4 rounded-lg hover:bg-red-700">
              Back         
            </a>
        <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
          Edit Cheque
        </h1>
      </div>
        <form class="space-y-4 md:space-y-6" action="{{route('superuser.cheque.update', $cheque->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label for="clientname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Name</label>
                    <input type="text" name="clientname" id="clientname" value="{{ $cheque->clientname }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div>
                    <label for="clientcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Code</label>
                    <input type="text" name="clientcode" id="clientcode" value="{{ $cheque->clientcode }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6">
                <div>
                    <label for="bankname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank Name</label>
                    <select name="bankname" id="bankname" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="">Select</option>
                        @foreach (config('data.bank_list') as $bank_item)
                            <option {{$cheque->bankname === $bank_item ? 'selected'  : ""}} value="{{$bank_item}}">{{$bank_item}}</option>
                        @endforeach
                    </select>                
                </div>

                <div>
                    <label for="branchname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch Name</label>
                    <input type="text" name="branchname" id="branchname" value="{{ $cheque->branchname }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" step="1" required>
                </div>

                <div>
                    <label for="accountnumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                    <input type="text" name="accountnumber" id="accountnumber" value="{{ $cheque->accountnumber }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6">
                <div>
                    <label for="chequeno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cheque Number</label>
                    <input type="text" name="chequeno" id="chequeno" value="{{ $cheque->chequeno }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div>
                    <label for="chequeamount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cheque Amount</label>
                    <input type="number" name="chequeamount" id="chequeamount" value="{{ $cheque->chequeamount }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" step="1" required>
                </div>

                <div>
                    <label for="chequedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cheque Date</label>
                    <input type="date" name="chequedate" id="chequedate" value="{{ $cheque->chequedate }}" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label for="remarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                    <textarea id="remarks" name="remarks" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $cheque->remarks }}</textarea>
                </div>

                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option {{$cheque->status == "active" ? 'selected' : ""}} value="active">Active</option>
                        <option {{$cheque->status == "inactive" ? 'selected' : ""}} value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit</button>
        </form>
    </div>
</div>

@endsection
