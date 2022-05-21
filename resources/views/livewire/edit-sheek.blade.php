<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('cms.edit_sheek') }}</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="beneficiary_name">{{ __('cms.beneficiary_name') }}</label>
                        <input type="text" class="form-control" id="beneficiary_name"
                            placeholder="Enter Beneficiary Name" wire:model="beneficiary_name"
                            value="{{ $beneficiary_name }}">
                    </div>
                    <div class="form-group">
                        <label for="amount">{{ __('cms.amount') }}</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter amount number"
                            wire:model="amount" value="{{ $amount }}">
                    </div>
                    @php
                        $old_currancy = $currancy;
                    @endphp
                    <div class="form-group">
                        <label>Currancy</label>
                        <select class="form-control" id="currancy" wire:model="currancy">
                            <option>{{ __('cms.dinar') }}
                            </option>
                            <option>{{ __('cms.dollar') }}
                            </option>
                            <option>{{ __('cms.shakel') }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{ __('cms.bank') }}</label>
                        <select class="form-control" id="bank_name" wire:model="bank_name">
                            <option value="palestine">{{ __('cms.palestine') }}
                            </option>
                            <option value="al_qudes">{{ __('cms.al_qudes') }}
                            </option>
                            <option value="al_islamy_al_araby">
                                {{ __('cms.al_islamy_al_araby') }}</option>
                            <option>
                                {{ __('cms.al_islamy_al_phalasteiny') }}</option>
                            <option value="al_aurdon">{{ __('cms.al_aurdon') }}
                            </option>
                            <option value="al_intaj">{{ __('cms.al_intaj') }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc">{{ __('cms.desc') }}</label>
                        <input type="text" class="form-control" id="desc" placeholder="Enter description"
                            value="{{ $desc }}">
                    </div>
                    <label>{{ __('cms.type') }}</label>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="type"
                                @if ($type == 'paid') checked @endif>
                            <label class="form-check-label">{{ __('cms.paid') }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="type" name="status"
                                @if ($type == 'recived') checked @endif>
                            <label class="form-check-label">{{ __('cms.recived') }}</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="update({{ $sheek_id }})" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (left) -->
    <div class="col-md-6">
        <!-- Form Element sizes -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">{{ __('cms.your_sheek') }}</h3>
            </div>
            <div class="card-body">
                <h3>Sheek</h3>
                Name: {{ $beneficiary_name }}<br>
                Amount: {{ $amount }} <br>
                Currancy: {{ $currancy }} <br>
                Bank: {{ $bank_name }} <br>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


{{-- @if ($currancy == 'Dinar') selected @endif
@if ($currancy == 'Dollar') selected @endif
@if ($currancy == 'Shakel') selected @endif --}}

{{-- @if ($bank_name == 'Palestine') selected @endif
@if ($bank_name == 'Al Qudes') selected @endif
@if ($bank_name == 'Al Eslamy Al Araby') selected @endif
@if ($bank_name == 'Al Eslamy Al Phalasteiny') selected @endif
@if ($bank_name == 'Al Aurdon') selected @endif
@if ($bank_name == 'Al Intaj') selected @endif --}}
