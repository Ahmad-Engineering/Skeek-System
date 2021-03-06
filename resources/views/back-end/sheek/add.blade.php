@extends('back-end.index')

@section('title', __('cms.add_skeed'))
@section('location', __('cms.add_skeed'))
@section('index', __('cms.add'))

@section('styles')
    <style>
        .sheek-background {
            position: relative;
        }

        .name {
            position: absolute;
            top: 35%;
            left: 40%;
            transform: translate(-50%, -50%);
            font-size: 22px;
            font-weight: bold;
        }

        .amount-in-numbers {
            position: absolute;
            top: 42%;
            right: 4%;
            transform: translate(-50%, -50%);
            font-size: 24px;
        }

        .amount-in-letter {
            position: absolute;
            top: 43%;
            left: 40%;
            transform: translate(-50%, -50%);
            font-size: 16px;
            /*font-weight: bold;*/
        }

        .date {
            position: absolute;
            top: 55%;
            right: 25%;
            transform: translate(-50%, -50%);
            font-size: 24px;
        }

        .sheek-background img {
            width: 100%;
            height: auto;
            border: 1px solid #000;
            /* opacity: 0.3; */
        }

    </style>
    @livewireStyles
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            @livewire('sheek')
            <!-- /.row -->
        </div><!-- /.containers-fluid -->
    </section>
@endsection



@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function store() {
            // check-system/sheeks
            let formData = new FormData();
            formData.append('beneficiary_name', document.getElementById('beneficiary_name').value);
            formData.append('amount', document.getElementById('amount').value);
            formData.append('currancy', document.getElementById('currancy').value);
            formData.append('bank_id', document.getElementById('bank_id').value);
            formData.append('desc', document.getElementById('desc').value);
            formData.append('date', document.getElementById('date').value);
            formData.append('type', document.getElementById('recived').checked ? 'recived' : 'paid');
            formData.append('underline_type', document.getElementById('underline_type').value);
            axios.post('/check-system/sheeks', formData)
                .then(function(response) {
                    // handle success
                    console.log(response);
                    toastr.success(response.data.message);
                    document.getElementById('create-form').reset();
                    window.location.href = '/check-system/sheeks';
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
