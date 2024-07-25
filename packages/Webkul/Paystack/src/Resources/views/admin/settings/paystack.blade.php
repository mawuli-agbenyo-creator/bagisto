@extends('admin::layouts.master')

@section('content')
    <div class="content">
        <form method="POST" action="{{ route('admin.settings.save', ['slug' => 'paystack']) }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="active">{{ __('Active') }}</label>
                <input type="checkbox" name="paystack[active]" id="active" value="1" {{ old('paystack.active', core()->getConfigData('sales.paymentmethods.paystack.active')) ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <label for="title">{{ __('Title') }}</label>
                <input type="text" name="paystack[title]" id="title" value="{{ old('paystack.title', core()->getConfigData('sales.paymentmethods.paystack.title')) }}">
            </div>

            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <textarea name="paystack[description]" id="description">{{ old('paystack.description', core()->getConfigData('sales.paymentmethods.paystack.description')) }}</textarea>
            </div>

            <div class="form-group">
                <label for="paystack_key">{{ __('Paystack Key') }}</label>
                <input type="text" name="paystack[paystack_key]" id="paystack_key" value="{{ old('paystack.paystack_key', core()->getConfigData('sales.paymentmethods.paystack.paystack_key')) }}">
            </div>

            <div class="form-group">
                <label for="icon">{{ __('Icon') }}</label>
                <input type="file" name="paystack[icon]" id="icon">
                @if ($icon = core()->getConfigData('sales.paymentmethods.paystack.icon'))
                    <img src="{{ Storage::url($icon) }}" alt="Paystack Icon" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>
    </div>
@endsection
