@extends('back-end.index')

@section('title', __('cms.edit_sheek'))
@section('location', __('cms.edit_sheek'))
@section('index', __('cms.edit'))

@section('styles')

    @livewireStyles
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            @livewire('edit-sheek', [
            'sheek' => $sheek,
            ])
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection



@section('scripts')
    <script>
        function update(id) {
            // check-system/sheeks
            // let sheekData = new FormData();
            // sheekData.append('beneficiary_name', document.getElementById('beneficiary_name').value);
            // formData.append('amount', document.getElementById('amount').value);
            // formData.append('currancy', document.getElementById('currancy').value);
            // formData.append('bank', document.getElementById('bank_name').value);
            // formData.append('desc', document.getElementById('desc').value);
            // formData.append('status', document.getElementById('recived').checked ? 'recived' : 'paid');
            axios.put('/check-system/sheeks/' + id, {
                beneficiary_name: document.getElementById('beneficiary_name').value,
                amount: document.getElementById('amount').value,
                currancy: document.getElementById('currancy').value,
                bank_name: document.getElementById('bank_name').value,
                desc: document.getElementById('desc').value,
                type: document.getElementById('type').value ? 'recived' : 'paid',
            })
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    // document.getElementById('set-form').reset();
                    // document.getElementById('reset-form').reset();
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                    toastr.error(error.response.data.message)
                })
                .then(function() {
                    // always executed
                });
        }
    </script>

    @livewireScripts
@endsection
