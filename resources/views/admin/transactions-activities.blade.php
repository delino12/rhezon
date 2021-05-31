@extends('layouts.app-main-admin')

@section('title')
    {{ env("APP_NAME") }} - Transactions Activites
@endsection

@section('contents')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Transactions</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless small" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Commission</th>
                                    <th>Net</th>
                                    <th>Narration</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>
                                            @if($transaction->transaction_type_id == 1)  
                                                <i class="fa fa-arrow-up text-danger"></i> Debit
                                            @else 
                                                <i class="fa fa-arrow-down text-success"></i> Credit
                                            @endif
                                        </td>
                                        <td>${{ number_format($transaction->amount, 2) }}</td>
                                        <td>${{ number_format($transaction->commission, 2) }}</td>
                                        <td>${{ number_format($transaction->amount -$transaction->commission, 2) }}</td>
                                        <td>{{ $transaction->narration }}</td>
                                        <td>{{ $transaction->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th>
                                        Total:
                                    </th>
                                    <th>${{ number_format($transactions->sum('amount'), 2) }}</th>
                                    <th>${{ number_format($transactions->sum('commission'), 2) }}</th>
                                    <th>${{ number_format($transactions->sum('amount') - $transactions->sum('commission'), 2) }}</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection

@section('scripts')
    
@endsection