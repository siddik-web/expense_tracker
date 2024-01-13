@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <h1>{{ __('Expense List') }}</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Payment Method</th>
                            <th>Expense Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                        <tr>
                            <td>{{ $expense->id}}</td>
                            <td>{{ $expense->description}}</td>
                            <td>{{ $expense->amount}}</td>
                            <td>{{ $expense->expense_date}}</td>
                            <td>{{ $expense->payment_method}}</td>
                            <td>{{ $expense->category}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $expenses->links()}}
        </div>
    </div>
</div>
@endsection




