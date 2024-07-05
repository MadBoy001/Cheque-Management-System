@extends('superuser.layouts.master')

@section('content')

<div class="main">
    <h1>Edit Cheque</h1>
    <div class="main-container">
      <form action="{{route('superuser.cheque.update', $cheque->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="clientname">Client Name:</label>
            <input type="text" id="clientname" name="clientname" value="{{ $cheque->clientname }}" required>
        </div>
        <div class="form-group">
            <label for="clientcode">Client Code:</label>
            <input type="text" id="clientcode" name="clientcode" value="{{ $cheque->clientcode }}" required>
        </div>
        <div class="form-group">
            <label for="chequeno">Cheque Number:</label>
            <input type="text" id="chequeno" name="chequeno" value="{{ $cheque->chequeno }}" required>
        </div>
        <div class="form-group">
            <label for="chequeamount">Cheque Amount:</label>
            <input type="number" id="chequeamount" name="chequeamount" value="{{ $cheque->chequeamount }}" step="1" required>
        </div>
        <div class="form-group">
            <label for="chequedate">Cheque Date:</label>
            <input type="date" id="chequedate" name="chequedate" value="{{ $cheque->chequedate }}" required>
        </div>
        <div class="form-group">
            <label for="remarks">Remarks:</label>
            <textarea id="remarks" name="remarks" rows="4">{!! $cheque->remarks !!}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option {{$cheque->status == "active" ? 'selected' : ""}} value="active">Active</option>
                <option {{$cheque->status == "inactive" ? 'selected' : ""}} value="inactive">Inactive</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
    </div>
</div>


    
@endsection