(function (window, document, $) {
    'use strict';

    /**
     * Grid Builder Application
     */
    window.Grid = {

        init: function() {
            var grid;

            this.options = {
                // container options
                container:     '#browse',
                modal:         '#form-modal',
                adder:         '#add-form',
                // string options
                deleteConfirm: 'Do you really want to delete this?',
                loadRoute:     '',
                updateRoute:   '',
                insertRoute:   '',
                deleteRoute:   '',
                // array options
                fields:        null,
                rules:         null,
                messages:      null
            }
        },
        setOptions: function(options) {
            // container options
            this.options.container = options.container ? options.container : this.options.container;
            this.options.modal     = options.modal ? options.modal : this.options.modal;
            this.options.adder     = options.adder ? options.adder : this.options.adder;

            // string options
            this.options.deleteConfirm = options.deleteConfirm ? options.deleteConfirm : this.options.deleteConfirm;
            this.options.loadRoute     = options.loadRoute ? options.loadRoute : this.options.loadRoute;
            this.options.updateRoute   = options.updateRoute ? options.updateRoute : this.options.updateRoute;
            this.options.insertRoute   = options.insertRoute ? options.insertRoute : this.options.insertRoute;
            this.options.deleteRoute   = options.deleteRoute ? options.deleteRoute : this.options.deleteRoute;

            // array options
            if (options.fields) {
            	options.fields.push(this.addControl());
            }

            this.options.fields   = options.fields ? options.fields : this.options.fields;
            this.options.rules    = options.rules ? options.rules : this.options.rules;
            this.options.messages = options.messages ? options.messages : this.options.messages;

            return this;
        },
        setFields: function(fields) {
            fields.push(this.addControl());

            this.options.fields = fields;

            return this;
        },
        setRules: function(rules) {
            this.options.rules = rules;

            return this;
        },
        setMessages: function(messages) {
            this.options.messages = messages;

            return this;
        },
        renderGrid: function() {
            Grid.grid = $(Grid.options.container).jsGrid({
                height: '500px',
                width: '100%',
                filtering: true,
                editing: true,
                sorting: true,
                paging: true,
                autoload: true,
                pageSize: 10,
                pageButtonCount: 5,
                deleteConfirm: Grid.options.deleteConfirm,
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
                            url: Grid.options.loadRoute,
                            data: filter
                        });
                    },
                    updateItem: function(item) {
                        var url = Grid.options.updateRoute;
                        var url = url.replace(':id', item.id);

                        var $item = item;
                        
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
                        var url = Grid.options.deleteRoute;
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
                fields: Grid.options.fields,
            });

            jsGrid.validators.select = {
                message: 'Please select an item from the list.',
                validator: function(value) { 
                	return value > 0; 
                }
            };

            this.listenForEvents();
        },
        addControl: function() {
        	return {
                type: 'control',
                modeSwitchButton: false,
                editButton: false,
                headerTemplate: function() {
                    return $('<button>').attr({
                            type: 'button',
                            class: 'btn btn-info btn-sm'
                        }).text('Add')
                          .on('click', function () {
                            $(Grid.options.modal).modal('show');
                        });
                }
            }
        },
        listenForEvents: function() {
            // Reset the form when modal is closed
            $(Grid.options.modal).on('hidden.bs.modal', function() {
                $(Grid.options.modal + ' form').get(0).reset();
                validator.resetForm();
            });

            var validator = $(Grid.options.adder).validate({
                errorClass: 'text-danger',
                rules: Grid.options.rules,
                messages: Grid.options.messages,
                submitHandler: function(form) {
                    $.ajax({
                        headers: {'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')},
                        type: 'POST',
                        url: Grid.options.insertRoute,
                        data: $(form).serializeArray(),
                        success: function(json) {
                            if (json['type'] == 'success') {
                                $(Grid.options.modal).modal('hide');
                                toastr.success(json['message'], json['title']);
                                $(Grid.options.container).jsGrid('insertItem', $.parseJSON(json['item']));
                            } else {
                                $(Grid.options.modal).modal('hide');
                                toastr.error(json['message'], json['title']);
                            }
                        }
                    });
                }
            });
        },
        render: function() {
            this.renderGrid();
        }
    }

    Grid.init();

})(window, document, jQuery);
