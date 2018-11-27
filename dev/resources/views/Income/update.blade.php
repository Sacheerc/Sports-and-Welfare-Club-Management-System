@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')

    <br><br>

    <div class=" form container-fluid col-md-8 col-md-offset-1 text-light border">
        <h4 class="text-light "  style="padding: 10px;border-top-right-radius: 10px;border-top-left-radius: 10px">Update Income</h4>
        <br>
        <form action="{{route('Income.save', $Incomes->id)}}" method="POST" >
            @csrf
            {{--@method('patch')--}}
            {{--/{{$income->donate_id}}--}}
            <div class="row">
                <div class="col-md-3">
                    Type of Income:
                </div>
                <div class="col-md-6">
                    <select id="reason" required class="form-control" name="category" value={{$Incomes->category}} placeholder="Select the_Category" >
                        <option value="">Please select ......</option>
                        <option selected="{{ $Incomes->category == 'Donation' }}" value="Donation">Donation</option>
                        <option selected="{{ $Incomes->category == 'Selling' }}" value="Selling">Selling</option>
                        <option selected="{{ $Incomes->category == 'Other' }}" value="Other">Other</option>
                    </select>
                    @if ($errors->has('category'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                    @endif
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Amount:
                </div>
                <div class="col-md-6">
                    <input id="amount" required class="form-control" type="number"  name="amount" value={{$Incomes->amount}}  placeholder="Income Amount" >
                    @if ($errors->has('amount'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Cheque No:
                </div>
                <div class="col-md-6">
                    <input required class="form-control" type="text" name="chequenum" value={{$Incomes->chequenum}} placeholder="Cheque No" >
                    @if ($errors->has('chequenum'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('chequenum') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Discription:
                </div>
                <div class="col-md-6">
                    <input id="reason" class="form-control" type="text"  name="discription" value={{$Incomes->discription}}  placeholder="Discription" >
                    @if ($errors->has('discription'))
                        <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('discription') }}</strong>
                                    </span>
                    @endif

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3 text-center">
                    <button type="submit" class="btn btn-success" name="update" style="width: 100px">Save</button>
                </div>
            </div>
            @isset($message)
                <script>
                    window.alert("Saving Success..!");
                </script>
            @endisset

        </form>
    </div>

@endsection