<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DataTables Editor</title>
    @bukStyles(true)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="/css/editor.dataTables.css">
    <link rel="stylesheet" href="/css/editor.bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    @php
        $buttons = "[
                    { extend: 'create', editor: editor },
                    { extend: 'edit', editor: editor },
                    {
                        extend: 'selected',
                        text: 'Duplicate',
                        action: function (e, dt, node, config) {
                            editor.edit(table.rows({ selected: true }).indexes(), {
                                    title: 'Duplicate record',
                                    buttons: 'Create from existing'
                                }).mode('create');
                        }
                    },
                    { extend: 'remove', editor: editor }
                ]";
    @endphp
    <x-SmartsTable tableId="users" select="true" dom="Bfrtip" :options="['buttons' => $buttons]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.4/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.4.0/js/dataTables.searchBuilder.min.js"></script>
<script src="{{asset('js/dataTables.editor.js')}}"></script>
<script src="{{asset('js/editor.bootstrap.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });
    var editor = new $.fn.dataTable.Editor({
        ajax: {
            url: "/post",
            type: "POST",
        },
        table: "#users",
        fields: [
            {label: "Name:", name: "name"},
            {label: "Password:", name: "password",type: "password"},
            {label: "Email:", name: "email"},
        ]
    });

    $('#users').on('click', 'tbody td:not(:first-child)', function (e) {
        editor.inline(this);
    });
</script>
</body>
</html>
