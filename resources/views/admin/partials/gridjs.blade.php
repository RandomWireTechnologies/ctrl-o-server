<script>
    $("#browse").jsGrid({
        height: '500px',
        width: '100%',
        filtering: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 10,
        pageButtonCount: 5,
        deleteConfirm: '{{ $deleteConfirm }}',
        pagerFormat: '{first} {prev} {pages} {next} {last}',
        pagePrevText: '<span aria-hidden="true" class="fa fa-angle-left arrow_carrot-left"></span> Prev',
        pageNextText: 'Next <span aria-hidden="true" class="fa fa-angle-right arrow_carrot-right"></span>',
        pageFirstText: '<span aria-hidden="true" class="fa fa-angle-double-left arrow_carrot-left"></span> First',
        pageLastText: 'Last <span aria-hidden="true" class="fa fa-angle-double-right arrow_carrot-right"></span>',
        pagerContainerClass: 'pull-right',
        pagerClass: 'cd-pagination no-space move-buttons custom-icons',
        pagerNavButtonClass: 'button',
        pagerNavButtonInactiveClass: '',
        pageClass: '',
        currentPageClass: 'current',
        controller: {
            loadData: function(filter) {
                return $.ajax({
                    type: 'GET',
                    url: '{!! $loadRoute !!}',
                    data: filter
                });
            },
            updateItem: function(item) {
                var url = '{!! $updateRoute !!}';
                var url = url.replace(':id', item.id);

                $item = item;
                
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')},
                    type: 'POST',
                    url: url,
                    data: item,
                    success: function(json) {
                        if (json['type'] == 'success') {
                            toastr.success(json['message'], json['title']);

                            return $item;

                        } else {
                            toastr.error(json['message'], json['title']);
                        }
                    }
                });
            },
            insertItem: function(item) {
                return item;
            },
            deleteItem: function(item) {
                var url = '{!! $deleteRoute !!}';
                var url = url.replace(':id', item.id);

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')},
                    type: 'POST',
                    url: url,
                    data: item,
                    success: function(json) {
                        if (json['type'] == 'success') {
                            toastr.success(json['message'], json['title']);
                        } else {
                            toastr.error(json['message'], json['title']);
                        }
                    }
                });
            }
        },
        fields: [
        @foreach($fields as $field)
        {
        @foreach($field as $key => $value)
            {{$key}}: '{{ $value }}',
        @endforeach
        },
        @endforeach
         {
            type: 'control',
            modeSwitchButton: false,
            editButton: false,
            headerTemplate: function() {
                return $('<button>').attr({
                        type: 'button',
                        class: 'btn btn-info btn-sm'
                    }).text('Add')
                      .on('click', function () {
                        $('#form-modal').modal('show');
                    });
            }
        }]
    });

    $('#form-modal').on('hidden.bs.modal', function() {
        $('#form-modal form').get(0).reset();
    });

    $('#add-form').validate({
        errorClass: 'text-danger',
        rules: {
            @foreach($rules as $key => $value)
            {{ $key }}: '{{ $value }}',
            @endforeach
        },
        messages: {
            @foreach($messages as $key => $value)
            {{ $key }}: '{{ $value }}',
            @endforeach
        },
        submitHandler: function(form) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')},
                type: 'POST',
                url: '{!! $insertRoute !!}',
                data: $(form).serializeArray(),
                success: function(json) {
                    if (json['type'] == 'success') {
                        $('#form-modal').modal('hide');
                        toastr.success(json['message'], json['title']);
                        $('#browse').jsGrid('insertItem', $.parseJSON(json['item']));
                    } else {
                        $('#form-modal').modal('hide');
                        toastr.error(json['message'], json['title']);
                    }
                }
            });
        }
    });
 
</script>