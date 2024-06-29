@extends('admin.layouts.master')

@section('content')

<div class="main">
    <h1>Add Cheque</h1>
    <div class="main-container">
      <form action="{{route('admin.cheque.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="clientname">Client Name:</label>
            <input type="text" id="clientname" name="clientname" required>
        </div>
        <div class="form-group">
            <label for="clientcode">Client Code:</label>
            <input type="text" id="clientcode" name="clientcode" required>
        </div>
        <div class="form-group">
            <label for="chequeno">Cheque Number:</label>
            <input type="text" id="chequeno" name="chequeno" required>
        </div>
        <div class="form-group">
            <label for="chequeamount">Cheque Amount:</label>
            <input type="number" id="chequeamount" name="chequeamount" step="1" required>
        </div>
        <div class="form-group">
            <label for="chequedate">Cheque Date:</label>
            <input type="date" id="chequedate" name="chequedate" required>
        </div>
        <div class="form-group">
            <label for="remarks">Remarks:</label>
            <textarea id="remarks" name="remarks" rows="4"></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
    </div>
</div>


    
@endsection